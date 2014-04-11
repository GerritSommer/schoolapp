<?php
class app_controller {
  private $models = array();
  
  public function __construct($models = false) {
      foreach($this->models as $model){
        require_once 'models/'.$model.'.php';
      }
  }
  
  public function index() {}
}
?>