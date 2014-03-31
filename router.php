<?php
$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : null;

switch($action) {
  case 'irgendwas':
    $view = 'irgendwas';
    break;
  case 'irgendwas anderes':
    $view = 'irgendwas anderes';
    break;
  default:
    $view = 'home';
    break;
}

require_once 'views/'. $view .'.php';
?>