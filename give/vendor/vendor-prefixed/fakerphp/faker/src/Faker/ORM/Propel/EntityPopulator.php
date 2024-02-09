<?php
/**
 * @license MIT
 *
 * Modified by impress-org on 08-February-2024 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace Give\Vendors\Faker\ORM\Propel;

use Give\Vendors\Faker\Provider\Base;

/**
 * Service class for populating a table through a Propel ActiveRecord class.
 */
class EntityPopulator
{
    protected $class;
    protected $columnFormatters = [];
    protected $modifiers = [];

    /**
     * @param string $class A Propel ActiveRecord classname
     */
    public function __construct($class)
    {
        $this->class = $class;
    }

    /**
     * @return string
     */
    public function getClass()
    {
        return $this->class;
    }

    public function setColumnFormatters($columnFormatters)
    {
        $this->columnFormatters = $columnFormatters;
    }

    /**
     * @return array
     */
    public function getColumnFormatters()
    {
        return $this->columnFormatters;
    }

    public function mergeColumnFormattersWith($columnFormatters)
    {
        $this->columnFormatters = array_merge($this->columnFormatters, $columnFormatters);
    }

    /**
     * @return array
     */
    public function guessColumnFormatters(\Give\Vendors\Faker\Generator $generator)
    {
        $formatters = [];
        $class = $this->class;
        $peerClass = $class::PEER;
        $tableMap = $peerClass::getTableMap();
        $nameGuesser = new \Give\Vendors\Faker\Guesser\Name($generator);
        $columnTypeGuesser = new \Give\Vendors\Faker\ORM\Propel\ColumnTypeGuesser($generator);

        foreach ($tableMap->getColumns() as $columnMap) {
            // skip behavior columns, handled by modifiers
            if ($this->isColumnBehavior($columnMap)) {
                continue;
            }

            if ($columnMap->isForeignKey()) {
                $relatedClass = $columnMap->getRelation()->getForeignTable()->getClassname();
                $formatters[$columnMap->getPhpName()] = static function ($inserted) use ($relatedClass, $generator) {
                    return isset($inserted[$relatedClass]) ? $generator->randomElement($inserted[$relatedClass]) : null;
                };

                continue;
            }

            if ($columnMap->isPrimaryKey()) {
                continue;
            }

            if ($formatter = $nameGuesser->guessFormat($columnMap->getPhpName(), $columnMap->getSize())) {
                $formatters[$columnMap->getPhpName()] = $formatter;

                continue;
            }

            if ($formatter = $columnTypeGuesser->guessFormat($columnMap)) {
                $formatters[$columnMap->getPhpName()] = $formatter;

                continue;
            }
        }

        return $formatters;
    }

    /**
     * @return bool
     */
    protected function isColumnBehavior(\ColumnMap $columnMap)
    {
        foreach ($columnMap->getTable()->getBehaviors() as $name => $params) {
            $columnName = Base::toLower($columnMap->getName());

            switch ($name) {
                case 'nested_set':
                    $columnNames = [$params['left_column'], $params['right_column'], $params['level_column']];

                    if (in_array($columnName, $columnNames, false)) {
                        return true;
                    }

                    break;

                case 'timestampable':
                    $columnNames = [$params['create_column'], $params['update_column']];

                    if (in_array($columnName, $columnNames, false)) {
                        return true;
                    }

                    break;
            }
        }

        return false;
    }

    public function setModifiers($modifiers)
    {
        $this->modifiers = $modifiers;
    }

    /**
     * @return array
     */
    public function getModifiers()
    {
        return $this->modifiers;
    }

    public function mergeModifiersWith($modifiers)
    {
        $this->modifiers = array_merge($this->modifiers, $modifiers);
    }

    /**
     * @return array
     */
    public function guessModifiers(\Give\Vendors\Faker\Generator $generator)
    {
        $modifiers = [];
        $class = $this->class;
        $peerClass = $class::PEER;
        $tableMap = $peerClass::getTableMap();

        foreach ($tableMap->getBehaviors() as $name => $params) {
            switch ($name) {
                case 'nested_set':
                    $modifiers['nested_set'] = static function ($obj, $inserted) use ($class, $generator) {
                        if (isset($inserted[$class])) {
                            $queryClass = $class . 'Query';
                            $parent = $queryClass::create()->findPk($generator->randomElement($inserted[$class]));
                            $obj->insertAsLastChildOf($parent);
                        } else {
                            $obj->makeRoot();
                        }
                    };

                    break;

                case 'sortable':
                    $modifiers['sortable'] = static function ($obj, $inserted) use ($class, $generator) {
                        $obj->insertAtRank($generator->numberBetween(1, count($inserted[$class] ?? []) + 1));
                    };

                    break;
            }
        }

        return $modifiers;
    }

    /**
     * Insert one new record using the Entity class.
     */
    public function execute($con, $insertedEntities)
    {
        $obj = new $this->class();

        foreach ($this->getColumnFormatters() as $column => $format) {
            if (null !== $format) {
                $obj->setByName($column, is_callable($format) ? $format($insertedEntities, $obj) : $format);
            }
        }

        foreach ($this->getModifiers() as $modifier) {
            $modifier($obj, $insertedEntities);
        }
        $obj->save($con);

        return $obj->getPrimaryKey();
    }
}
