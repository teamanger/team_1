<?php
//OpenCorePHP 2.0 Alpha / trunk
// Main core initialization


$bootstrap_dinamic = dirname(__FILE__) . '/../application/config/' . $_SERVER['SERVER_NAME'] . '/bootstrap.php';
if (file_exists($bootstrap_dinamic)) { require_once($bootstrap_dinamic);
} else require_once(dirname(__FILE__) . '/../application/config/bootstrap.php');

// Init config
Config::getInstance()->init();

// Custom setup
import('log.Logger', 'gui.*', 'db.BaseSQL', 'util.*');
ob_start();
session_start();
Lang::setupGettext();

// Initialize router
$router = Router::getInstance();
$router->dispatch();

?>
