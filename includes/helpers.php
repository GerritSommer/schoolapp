<?php
  class Helper {
    private function __construct(){};
    private function __clone(){};
    public static function loadController($controller) {
      if(file_exists('controllers/'. $controller .'_controller.php')) {
        require_once 'controllers/'. $controller .'_controller.php';
        return true;
      }
    }
    public static function loadView($view) {
      if(file_exists('views/'. $view .'_view.php')) {
        require_once 'views/'. $view .'_view.php';
        return true;
      }
    }

  }
 ?>