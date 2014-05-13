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
      Helper::routRedirect('index',array('route'=>'modules','method'=>'index'));
    } else {
      $data['modules'] = Module::find('all');
    }
    return $data;
  }
  public function update() {
    if(isset($_POST['module_id'])) {
      $module = Module::find($_POST['module_id']);
      $params = $_POST;
      unset($params['module_id']);
      $module->update_attributes($params);
      $data['module'] = Module::find($_POST['module_id']);
      Helper::routRedirect('index',array('route'=>'modules','method'=>'index'));
    } else {
      $data['module'] = Module::find($_GET['module_id']);
    }
    return $data;
  }
  public function delete() {
    if(isset($_GET['module_id'])) {
      $user = Module::find($_GET['module_id']);
      $user->delete();
      Helper::routRedirect('index',array('route'=>'modules','method'=>'index'));
    }
    return $data;
  }

  /*
   * Kursverwaltung
   */
  public function list_courses() {
    $data = $this->index();
    return $data;
  }

  public function start_course(){
    $data['module'] = Module::find($_GET['module_id']);
    return $data;
  }
}
 ?>
