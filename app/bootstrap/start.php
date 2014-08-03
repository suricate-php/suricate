<?php
/**
 * Suricate - App starter
 * Setup everything and return an $app Suricate instance
 *
 * @package  Suricate
 * @author   Mathieu LESNIAK <mathieu@lesniak.fr>
 */

// Use composer autoloader
require '../vendor/autoload.php';
//ini_set('display_errors', 'On');
// or use Suricate autoloader

$app = new Suricate\Suricate(
	require 'paths.php',
	'../app/config/app.ini'
);

if (is_readable('../helpers.php')) {
	require '../helpers.php';
}