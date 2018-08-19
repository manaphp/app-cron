#!/usr/bin/env php
<?php
chdir(__DIR__);

require 'vendor/autoload.php';
require 'vendor/manaphp/framework/Loader.php';

$loader = new \ManaPHP\Loader();
require 'app/Application.php';
$cli = new \App\Application($loader);
$cli->main();