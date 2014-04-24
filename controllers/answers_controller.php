<?php
  class Answers_controller extends app_controller{
    protected $models = array('answer','module','question');

    public function create(){
      if(!empty($_POST)) {
        $_POST['date_created'] = time();
        $answer = new Answer($_POST);
        $answer->save();
        Helper::routRedirect('index',array('route'=>'questions','method'=>'update','question_id'=>$answer->question->id));
      } else {
        $data['question'] = Question::find($_GET['question_id']);
      }
      return $data;
    }

    // public ------------
  }

?>