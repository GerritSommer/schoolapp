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
  public function create() {
    if(!empty($_POST)){
      $_POST['date_created'] = time();
      $question = new Module($_POST);
      $question->save();
      $data['route_redirect'] = 'home_index';
    } else {
      $data['modules'] = Module::find('all');
    }
    return $data;
  }
  public function update() {}
  public function delete() {}
}
 ?>
