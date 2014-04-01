<?php
require_once 'includes/connection.php';
require_once 'models/user_model.php';

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : null;

switch($action) {
  case 'quiz':
    $view = 'quiz';
    break;
  case 'login':
    $view = 'login';
    break;
  case 'post_login':
    require_once 'controllers/login_controller.php';
    if(isset($_SESSION['user_id'])) {
      $view = 'home';
    } else {
      $view = 'login';
    }
    break;
  case 'logout':
    require_once 'controllers/logout_controller.php';
    $view = 'login';
    break;
  case 'users':
    $users = User::all();
    $view = 'users';
    break;
  case 'user':
    if(is_numeric($_REQUEST['user_id'])) {
      $user = User::find($_REQUEST['user_id']);
    }
    $view = 'user';
    break;
  case 'new_user';
    $view = 'new_user';
    break;
  default:
    $view = 'home';
    break;
}

require_once 'views/'. $view .'_view.php';
?>