<?php
  class Helper {
    public $view;
    public $controller;

    public function loadController($controller) {
      if(file_exists('controllers/'. $controller .'_controller.php') and $this->controller == false) {
        require_once 'controllers/'. $controller .'_controller.php';
        $this->controller = true;
        return $data;
      }
    }
    public function loadView($view, $data = false) {
      if(file_exists('views/'. $view .'_view.php') and $this->view == false) {
        require_once 'views/'. $view .'_view.php';
        $this->view = true;
      }
    }
  }
  $helper = new Helper();
 ?>