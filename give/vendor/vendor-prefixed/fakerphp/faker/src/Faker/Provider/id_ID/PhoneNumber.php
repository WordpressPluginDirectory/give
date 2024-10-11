<?php
/**
 * @license MIT
 *
 * Modified by impress-org on 10-October-2024 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace Give\Vendors\Faker\Provider\id_ID;

class PhoneNumber extends \Give\Vendors\Faker\Provider\PhoneNumber
{
    protected static $formats = [
        // regional numbers
        '02# #### ###',
        '02## #### ###',
        '03## #### ###',
        '04## #### ###',
        '05## #### ###',
        '06## #### ###',
        '07## #### ###',
        '09## #### ###',

        '02# #### ####',
        '02## #### ####',
        '03## #### ####',
        '04## #### ####',
        '05## #### ####',
        '06## #### ####',
        '07## #### ####',
        '09## #### ####',

        // mobile numbers
        '08## ### ###',   // 0811 XXX XXX, 10 digits, very old
        '08## #### ###',  // 0811 XXXX XXX, 11 digits
        '08## #### ####', // 0811 XXXX XXXX, 12 digits

        // international numbers
        '(+62) 8## ### ###',

        '(+62) 2# #### ###',
        '(+62) 2## #### ###',
        '(+62) 3## #### ###',
        '(+62) 4## #### ###',
        '(+62) 5## #### ###',
        '(+62) 6## #### ###',
        '(+62) 7## #### ###',
        '(+62) 8## #### ###',
        '(+62) 9## #### ###',

        '(+62) 2# #### ####',
        '(+62) 2## #### ####',
        '(+62) 3## #### ####',
        '(+62) 4## #### ####',
        '(+62) 5## #### ####',
        '(+62) 6## #### ####',
        '(+62) 7## #### ####',
        '(+62) 8## #### ####',
        '(+62) 9## #### ####',
    ];
}
