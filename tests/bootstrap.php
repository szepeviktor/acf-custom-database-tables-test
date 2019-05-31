<?php

$loader = new \ACFCustomDatabaseTables\Psr4Autoloader();
$loader->register();
$loader->addNamespace( 'ACFCustomDatabaseTables', dirname( __DIR__ ) . '/src/app' );
