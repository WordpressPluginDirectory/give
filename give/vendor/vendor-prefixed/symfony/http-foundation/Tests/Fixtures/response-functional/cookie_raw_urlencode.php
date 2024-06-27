<?php
/**
 * @license MIT
 *
 * Modified by impress-org on 26-June-2024 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

use Give\Vendors\Symfony\Component\HttpFoundation\Cookie;

$r = require __DIR__.'/common.inc';

$str = '?*():@&+$/%#[]';

$r->headers->setCookie(new Cookie($str, $str, 0, '/', null, false, false, true));
$r->sendHeaders();

setrawcookie($str, $str, 0, '/', null, false, false);
