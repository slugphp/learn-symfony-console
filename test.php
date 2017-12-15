<?php

use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Console\Output\ConsoleOutput;
use Symfony\Component\Console\Input\ArgvInput;

require dirname(__FILE__) . '/vendor/autoload.php';

$input = new ArgvInput();
$output = new ConsoleOutput();
$console = new SymfonyStyle($input, $output);

$console->text('test');
$console->warning('test');
$console->error('test');
$console->comment('test');
$console->success('test');

