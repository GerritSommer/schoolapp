<?php
class Modules_controller extends app_controller {
  protected $models = array('module', 'question');

  public function index(){
    $data['modules'] = Module::find('all');
    return $data;
  }
}
 ?>
