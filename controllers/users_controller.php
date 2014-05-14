<?php

class Users_controller extends app_controller {

  protected $models = array('user', 'history', 'answer', 'module', 'question');

  public function profile() {
    $data['user'] = User::find($_SESSION['user_id']);
    $data['answers'] = Answer::all();
    $data['questions'] = Question::all();
    $data['modules'] = Module::all();
    return $data;
  }

  public function index() {
    $data['users'] = User::find('all');
    return $data;
  }
  public function show() {
    if(isset($_GET['id'])) { $data['user'] = User::find($_GET['id']); }
    return $data;
  }
  public function create() {
    if(isset($_POST['name']) and isset($_POST['password']) and isset($_POST['role'])) {
      $user = new User(array('name' => $_POST['name'], 'password' => $_POST['password'], 'role' => $_POST['role']));
      $user->save();
      Helper::routRedirect('index',array('route'=>'users','method'=>'index'));
    }
    return $data;
  }
  public function update() {
    if(isset($_POST['id'])) {
      $user = User::find($_POST['id']);
      $params = $_POST;
      unset($params['id']);
      $user->update_attributes($params);
      $data['user'] = User::find($_POST['id']);
      Helper::routRedirect('index',array('route'=>'users','method'=>'index'));
    } else {
      $data['user'] = User::find($_GET['id']);
    }
    return $data;
  }
  public function delete() {
    if(isset($_GET['id'])) {
      $user = User::find($_GET['id']);
      $user->delete();
      Helper::routRedirect('index',array('route'=>'users','method'=>'index'));
    }
    return $data;
  }
  public function validate() {
    return null;
  }
  public function create_form() {}
}

?>