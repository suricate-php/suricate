#!/usr/bin/env php
<?php

use Suricate\Console;

require getcwd() . '/app/bootstrap/start.php';

$console = new Console($app, $argv);
$console->execute();
