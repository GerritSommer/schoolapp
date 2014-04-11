<?php
class Quizes_controller {

  public function index() {

  }
  public function create() {
    if(isset($_POST['name']) {
       $user = new User(array('name' => $_POST['name'], 'password' => $_POST['password'], 'role' => $_POST['role']));
       $user->save();
       $data['route_redirect'] = 'home_index';
    }
    return $data;
  }
}
?>