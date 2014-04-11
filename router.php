<?php
//Rechner Home test
// require_once 'models/user.php'; Moved to controllers

require_once 'includes/autoloader.php';

$route = isset($_REQUEST['route']) ? $_REQUEST['route'] : 'home';
$method = isset($_REQUEST['method']) ? $_REQUEST['method'] : 'index';

$controller_name = $route."_controller";
$view_name = $route."_".$method;
// new Helper();
$controller = new $controller_name();
$helper = new Helper();

// if (isset($_SESSION['user_id']) and is_numeric($_SESSION['user_id'])) {}
$data = $controller->$method();


if(isset($data['route_redirect'])) { $view_name = $data['route_redirect']; }
require_once 'views/navigation_view.php';
$helper->loadView(lcfirst($view_name), $data);
?>
<div class="container well">
  <?php
  // var_dump($_REQUEST);
  // var_dump($_SESSION);
   ?>
</div>