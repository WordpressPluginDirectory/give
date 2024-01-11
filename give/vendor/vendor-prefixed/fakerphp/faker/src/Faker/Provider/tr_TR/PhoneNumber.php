<?php
/**
 * @license MIT
 *
 * Modified by impress-org on 10-January-2024 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace Give\Vendors\Faker\Provider\tr_TR;

class PhoneNumber extends \Give\Vendors\Faker\Provider\PhoneNumber
{
    /**
     * Mixed landline and mobile phone numbers valid for Turkey
     *
     * @see https://en.wikipedia.org/wiki/Telephone_numbers_in_Turkey
     *
     * @var string[]
     */
    protected static $formats = [
        '0212#######',
        '0216#######',
        '0222#######',
        '0224#######',
        '050########',
        '053########',
        '054########',
        '055########',
        '0 212 ### ## ##',
        '0 216 ### ## ##',
        '0 222 ### ## ##',
        '0 224 ### ## ##',
        '0 50# ### ## ##',
        '0 53# ### ## ##',
        '0 54# ### ## ##',
        '0 55# ### ## ##',
        '0 (212) ### ## ##',
        '0 (216) ### ## ##',
        '0 (222) ### ## ##',
        '0 (224) ### ## ##',
        '0 (50#) ### ## ##',
        '0 (53#) ### ## ##',
        '0 (54#) ### ## ##',
        '0 (55#) ### ## ##',
        '+90212#######',
        '+90216#######',
        '+90222#######',
        '+90224#######',
        '+9050########',
        '+9053########',
        '+9054########',
        '+9055########',
        '+90 212 ### ## ##',
        '+90 216 ### ## ##',
        '+90 222 ### ## ##',
        '+90 224 ### ## ##',
        '+90 50# ### ## ##',
        '+90 53# ### ## ##',
        '+90 54# ### ## ##',
        '+90 55# ### ## ##',
        '+90 (212) ### ## ##',
        '+90 (216) ### ## ##',
        '+90 (222) ### ## ##',
        '+90 (224) ### ## ##',
        '+90 (50#) ### ## ##',
        '+90 (53#) ### ## ##',
        '+90 (54#) ### ## ##',
        '+90 (55#) ### ## ##',
    ];

    /**
     * Mixed landline and mobile phone numbers in E164 format valid for Turkey
     *
     * @see https://en.wikipedia.org/wiki/Telephone_numbers_in_Turkey
     *
     * @var string[]
     */
    protected static $e164Formats = [
        '+90212#######',
        '+90216#######',
        '+90222#######',
        '+90224#######',
        '+90226#######',
        '+90228#######',
        '+90232#######',
        '+90236#######',
        '+90242#######',
        '+90246#######',
        '+90248#######',
        '+90252#######',
        '+90256#######',
        '+90258#######',
        '+90262#######',
        '+90264#######',
        '+90266#######',
        '+90272#######',
        '+90274#######',
        '+90276#######',
        '+90282#######',
        '+90284#######',
        '+90286#######',
        '+90288#######',
        '+90312#######',
        '+90318#######',
        '+90322#######',
        '+90324#######',
        '+90326#######',
        '+90328#######',
        '+90332#######',
        '+90338#######',
        '+90342#######',
        '+90344#######',
        '+90346#######',
        '+90348#######',
        '+90352#######',
        '+90354#######',
        '+90356#######',
        '+90358#######',
        '+90362#######',
        '+90364#######',
        '+90366#######',
        '+90368#######',
        '+90370#######',
        '+90372#######',
        '+90374#######',
        '+90376#######',
        '+90378#######',
        '+90380#######',
        '+90382#######',
        '+90384#######',
        '+90386#######',
        '+90388#######',
        '+90412#######',
        '+90414#######',
        '+90416#######',
        '+90422#######',
        '+90424#######',
        '+90426#######',
        '+90428#######',
        '+90432#######',
        '+90434#######',
        '+90436#######',
        '+90438#######',
        '+90442#######',
        '+90446#######',
        '+90452#######',
        '+90454#######',
        '+90456#######',
        '+90458#######',
        '+90462#######',
        '+90464#######',
        '+90466#######',
        '+90472#######',
        '+90474#######',
        '+90476#######',
        '+90478#######',
        '+90482#######',
        '+90484#######',
        '+90486#######',
        '+90488#######',
        '+90501#######',
        '+90502#######',
        '+90503#######',
        '+90504#######',
        '+90505#######',
        '+90506#######',
        '+90507#######',
        '+90530#######',
        '+90531#######',
        '+90532#######',
        '+90533#######',
        '+90534#######',
        '+90535#######',
        '+90536#######',
        '+90537#######',
        '+90538#######',
        '+90539#######',
        '+90541#######',
        '+90542#######',
        '+90543#######',
        '+90544#######',
        '+90545#######',
        '+90546#######',
        '+90549#######',
        '+90551#######',
        '+90552#######',
        '+90553#######',
        '+90554#######',
        '+90555#######',
        '+90556#######',
    ];
}
