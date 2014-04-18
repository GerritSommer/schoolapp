<?php
  class Answers_controller extends app_controller{
    protected $models = array('answer','module','question');


    public function create(){
      if(!empty($_POST)) {
        $_POST['date_created'] = time();
        $answer = new Answer($_POST);
        $answer->save();
        $data['route_redirect'] = 'home_index';
      } else {
        $data['question']     = Question::find($_GET['question_id']);
        // $data['category'] = Category::find($data['quiz']->id_category);
        // $data['answers']  = Answer::find('all', array('conditions' => "quiz_id = ".$data['quiz']->id));
      }
      return $data;
    }
  }

?>