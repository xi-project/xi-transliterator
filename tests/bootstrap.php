<?php

if (!@include __DIR__ . '/../vendor/autoload.php') {
    die("You must set up the project dependencies, run the following commands:
wget http://getcomposer.org/composer.phar
php composer.phar install --dev
");
}

gc_enable();

spl_autoload_register(function($class) {

    $filename = str_replace("\\", DIRECTORY_SEPARATOR, $class) . '.php';

    echo $filename;

    if (file_exists(__DIR__ . DIRECTORY_SEPARATOR . $filename)) {

        include_once $filename;
    }

    return class_exists($class, false);
});
