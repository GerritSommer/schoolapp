<?php
  class Helper {
    public $view;
    public $controller;

    /*
     * Läd den gewünschten controller wenn er existiert
     */
    public function loadController($controller) {
      if(file_exists('controllers/'. $controller .'_controller.php') && $this->controller == false) {
        require_once 'controllers/'. $controller .'_controller.php';
        $this->controller = true;
        return $data;
      }
    }

    /*
     * Läd den gewünschten View wenn er existiert
     */
    public function loadView($view, $data = false) {
      if(file_exists('views/'. $view .'_view.php') && $this->view == false) {
        /*
         * Cast array to vars
         */
        if(isset($data)) {
          foreach($data as $key => $val){${$key} = $val;}
        }
        require_once 'views/'. $view .'_view.php';
        $this->view = true;
      }
    }

    /*
     * Gibt session relevanten content zurück
     */
    public function checkSession($str,$logedIn = true){
      if(isset($_SESSION['user_id']) && is_numeric($_SESSION['user_id']) && $logedIn){
        return $str;
      }elseif($logedIn == false && !isset($_SESSION['user_id'])){
        return $str;
      }
      return false;
    }

    /*
     * Aktuallisiert die Datenbank bei neuen Änderungen
     */
    public static function updateDatabase(){
      $sqlFile = 'sql/schoolapp.sql';
      $sql = file_get_contents($sqlFile);
      $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWD, DB_NAME);
      try{
        $query = $mysqli->query($sql);
        //var_dump();
        //echo $mysqli->error;
      }catch(Exeption $e){
        echo $e;
      }
    }

    /*
     * Manuelle Redirects incl. params
     */
    public static function routRedirect($name,$params){
      $url = '';
      if(!empty($params)){
        foreach($params as $key => $val){
          $url .= ($url==''?'?':'&').$key.'='.$val;
        }
      }
      if(file_exists($name.'.php')){
        header("Location: ".$name.'.php'.$url);
        die('Security break');
      }
    }

    /*
     * Load APP Config file
     */
    public static function loadConfig(){
      require_once 'config/app_config.php';
    }
  }
?>