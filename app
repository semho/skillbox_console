<?php

require __DIR__.'/vendor/autoload.php';

use Symfony\Component\Console\Application;

$application = new Application('start application');

$application->add(new \App\Guest());

$application->run();
