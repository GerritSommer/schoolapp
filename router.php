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
    $view = 'users';
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