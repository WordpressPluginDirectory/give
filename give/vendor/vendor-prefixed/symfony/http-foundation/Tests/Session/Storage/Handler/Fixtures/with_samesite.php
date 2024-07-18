<?php
/**
 * @license MIT
 *
 * Modified by impress-org on 17-July-2024 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

require __DIR__.'/common.inc';

use Give\Vendors\Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage;

$storage = new NativeSessionStorage(['cookie_samesite' => 'lax']);
$storage->setSaveHandler(new TestSessionHandler());
$storage->start();

$_SESSION = ['foo' => 'bar'];

ob_start(function ($buffer) { return str_replace(session_id(), 'random_session_id', $buffer); });
