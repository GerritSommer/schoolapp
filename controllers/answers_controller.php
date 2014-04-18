<?php
  class Answers_controller extends app_controller{
    protected $models = array('answer','category','quiz');


    public function create(){
      if(!empty($_POST)) {
        $_POST['date_created'] = time();
        $answer = new Answer($_POST);
        $answer->save();
        $data['route_redirect'] = 'home_index';
      }
      $data['quiz']     = Quiz::find($_GET['quiz_id']);
      // $data['category'] = Category::find($data['quiz']->id_category);
      // $data['answers']  = Answer::find('all', array('conditions' => "quiz_id = ".$data['quiz']->id));
      return $data;
    }
  }

?>