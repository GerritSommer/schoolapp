<?php
// require_once 'models/user.php'; Moved to controllers

$route = isset($_REQUEST['route']) ? $_REQUEST['route'] : 'home';
$method = isset($_REQUEST['method']) ? $_REQUEST['method'] : 'index';

$controller_name = $route."_controller";
$view_name = $route."_".$method;
// new Helper();
$controller = new $controller_name();
$helper = new Helper();

// if (isset($_SESSION['user_id']) and is_numeric($_SESSION['user_id'])) {}
$data = $controller->$method();
