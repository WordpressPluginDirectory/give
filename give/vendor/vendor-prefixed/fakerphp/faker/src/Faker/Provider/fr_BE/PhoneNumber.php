<?php
/**
 * @license MIT
 *
 * Modified by impress-org on 10-January-2024 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace Give\Vendors\Faker\Provider\fr_BE;

class PhoneNumber extends \Give\Vendors\Faker\Provider\PhoneNumber
{
    protected static $formats = [
        '+32(0)########',
        '+32(0)### ######',
        '+32(0)# #######',
        '0#########',
        '0### ######',
        '0### ### ###',
        '0### ## ## ##',
        '0## ######',
        '0## ## ## ##',
        '0# #######',
        '0# ### ## ##',
    ];
}
