<?php
/**
 * @license GPL-2.0-or-later
 *
 * Modified by impress-org on 19-June-2024 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

declare(strict_types=1);

namespace Give\Vendors\StellarWP\Validation\Rules;

use Closure;
use Give\Vendors\StellarWP\Validation\Config;
use Give\Vendors\StellarWP\Validation\Contracts\ValidatesOnFrontEnd;
use Give\Vendors\StellarWP\Validation\Contracts\ValidationRule;
use Give\Vendors\StellarWP\Validation\Exceptions\ValidationException;

/**
 * @since 1.0.0
 */
class Min implements ValidationRule, ValidatesOnFrontEnd
{
    /**
     * @var int
     */
    private $size;

    /**
     * @since 1.0.0
     */
    public function __construct(int $size)
    {
        if ($size <= 0) {
            Config::throwInvalidArgumentException('Min validation rule requires a non-negative value');
        }

        $this->size = $size;
    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public static function id(): string
    {
        return 'min';
    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public static function fromString(string $options = null): ValidationRule
    {
        if (!is_numeric($options)) {
            Config::throwInvalidArgumentException('Min validation rule requires a numeric value');
        }

        return new self((int)$options);
    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @throws ValidationException
     */
    public function __invoke($value, Closure $fail, string $key, array $values)
    {
        if (is_int($value) || is_float($value)) {
            if ($value < $this->size) {
                $fail(sprintf(__('%s must be greater than or equal to %d', 'give'), '{field}', $this->size));
            }
        } elseif (is_string($value)) {
            if (mb_strlen($value) < $this->size) {
                $fail(sprintf(__('%s must be more than or equal to %d characters', 'give'), '{field}', $this->size));
            }
        } else {
            Config::throwValidationException("Field value must be a number or string");
        }
    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public function serializeOption(): int
    {
        return $this->size;
    }

    /**
     * @since 1.0.0
     */
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function size(int $size)
    {
        if ($size <= 0) {
            Config::throwInvalidArgumentException('Min validation rule requires a non-negative value');
        }

        $this->size = $size;
    }
}
