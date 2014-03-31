<?php
require_once 'includes/connection.php';

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : null;

switch($action) {
  case 'quiz':
    $view = 'quiz';
    break;
  default:
    $view = 'home';
    break;
}

require_once 'views/'. $view .'_view.php';
?>