<?php
  class Courses_controller extends app_controller{
    protected $models = array('answer','module','question','user','course');

    public function index(){
        $data['modules'] = Module::find('all');
        $data['user'] = User::find($_SESSION['user_id']);

        return $data;
    }

    public function show() {
      $data['module'] = Module::find($_GET['module_id']);
      return $data;
    }

  }

?>