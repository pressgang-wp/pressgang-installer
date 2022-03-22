<?php

if ( file_exists( __DIR__ . '/../../../autoload.php' ) ) {
	require __DIR__ . '/../../../autoload.php';
} else {
	require __DIR__ . '/../vendor/autoload.php';
}

$app = new Symfony\Component\Console\Application( 'PressGang Installer', '1.0' );
$app->add( new PressGang\Installer\Console\NewCommand );

$app->run();