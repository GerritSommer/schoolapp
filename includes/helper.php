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

    public static function updateDatabase(){
      $sqlFile = 'sql/schoolapp.sql';
      $sql = file_get_contents($sqlFile);
      $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWD, DB_NAME);
      $mysqli->query($sql);
    }

    /*
     * Load APP Config file
     */
    public static function loadConfig(){
      require_once 'config/app_config.php';
    }
  }
  $helper = new Helper();
 ?>