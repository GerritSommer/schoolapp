<?php
require_once 'includes/connection.php';
require_once 'models/user.php';
require_once 'includes/helpers.php';

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : 'home';

if (isset($_SESSION['user_id']) and is_numeric($_SESSION['user_id'])) {
  switch($action) {
    case 'users':
      $users = User::find('all');
      break;
    case 'user':
      if(is_numeric($_REQUEST['user_id'])) { $user = User::find($_REQUEST['user_id']); }
      break;
    default:
      break;
  }
} else {
  # if the user is not logged in, he needs to sign in
  switch($action) {
    case 'post_login':
      require_once 'controllers/login_controller.php';
      isset($_SESSION['user_id']) ? $action = 'home' : $action = 'login';
      break;
    default:
      $action = "login";
      break;
  }
}
Helper::loadController($action);
Helper::loadView($action);
?>