<?php
/**
 * @license MIT
 *
 * Modified by impress-org on 20-December-2023 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace Give\Vendors\Faker\Container;

use Give\Vendors\Psr\Container\ContainerInterface as BaseContainerInterface;

interface ContainerInterface extends BaseContainerInterface
{
    /**
     * Get the bindings between Extension interfaces and implementations.
     */
    public function getDefinitions(): array;
}
