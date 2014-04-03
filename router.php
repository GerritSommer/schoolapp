<?php
require_once 'includes/connection.php';
require_once 'models/user.php';

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : null;

if (isset($_SESSION['user_id']) and is_numeric($_SESSION['user_id'])) {
  switch($action) {
    case 'quiz':
      $view = 'quiz';
      break;
    case 'login':
      $view = 'login';
      break;
    case 'logout':
      require_once 'controllers/logout_controller.php';
      $view = 'login';
      break;
    case 'users':
      $users = User::find('all');
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
} else {
  switch($action) {
    case 'post_login':
      require_once 'controllers/login_controller.php';
      isset($_SESSION['user_id']) ? $view = 'home' : $view = 'login';
      break;
    default:
      $view = 'login';
      break;
  }
}
require_once 'views/'. $view .'_view.php';
?>