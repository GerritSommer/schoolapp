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
  case 'logout':
    // log out of session
    $view = 'home';
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
    require_once 'controllers/login_controller.php';
    $view = 'login';
    break;
}

require_once 'views/'. $view .'_view.php';
?>