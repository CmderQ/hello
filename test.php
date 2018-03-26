<?php
/**
 * Created by PhpStorm.
 * Filename:  test.php
 * User:      cmder
 * Date:      2018/3/25
 * Time:      23:06
 */
require_once __DIR__ . '/vendor/autoload.php';
use Hello\EchoHello;

echo EchoHello::say();
echo '<br/>';
echo 'hello again';