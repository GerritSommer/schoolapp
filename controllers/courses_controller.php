<?php
  class Courses_controller extends app_controller{
    protected $models = array('answer','module','question','user', 'history');

    public function index(){
        $data['modules'] = Module::find('all');
        $data['user'] = User::find($_SESSION['user_id']);
        return $data;
    }

    public function show() {
      $data['module'] = Module::find($_GET['module_id']);
      return $data;
    }

    public function ask_question() {
      if(isset($_GET['module_id']) and isset($_GET['question_id'])) {
        $data['module'] = Module::find($_GET['module_id']);
        $data['question'] = Question::find($_GET['question_id']);
        return $data;
      }
    }

    public function check_question() {

    }
  }

?>