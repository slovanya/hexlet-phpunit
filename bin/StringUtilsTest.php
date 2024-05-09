<?php

require_once __DIR__ . '/../vendor/autoload.php';
use Webmozart\Assert\Assert;

Assert::eq(\StringUtils\capitalize('hello'), 'Hello');
Assert::eq(\StringUtils\capitalize(''), '');

//(\StringUtils\capitalize('hello') !== 'Hello');
//(\StringUtils\capitalize('') !== '');

echo 'Все тесты пройдены!';