<?php
abstract class app_controller {
  /*
   * Required Models
   */
  protected $models = array();
  
  public function __construct() {
      /*
       * Load required Models
       */
      foreach($this->models as $model){
        require_once 'models/'.$model.'.php';
      }
  }
  
  public function index() {}
}
?>