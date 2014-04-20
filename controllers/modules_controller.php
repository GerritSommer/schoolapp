<?php
class Modules_controller extends app_controller {
  protected $models = array('module', 'question', 'answer');

  public function index(){
    $data['modules'] = Module::find('all');
    return $data;
  }
  public function show() {
    $data['module'] = Module::find($_GET['module_id']);
    return $data;
  }
  public function update() {}
  public function delete() {}
}
 ?>
