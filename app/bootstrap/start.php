<?php
/**
 * Suricate - App entry point
 *
 * @package  Suricate
 * @author   Mathieu LESNIAK <mathieu@lesniak.fr>
 */

// Use composer autoloader
require '../../vendor/autoload.php';
//ini_set('display_errors', 'On');
// or use Suricate autoloader

$app = new Suricate\Suricate('../app/config/app.ini');
