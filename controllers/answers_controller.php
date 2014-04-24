<?php
  class Answers_controller extends app_controller{
    protected $models = array('answer','module','question');

    public function create(){
      if(!empty($_POST)) {
        $_POST['date_created'] = time();
        $answer = new Answer($_POST);
        $answer->save();
        header("Location: index.php?route=questions&method=update&question_id=". $answer->question->id);
        die();
      } else {
        $data['question'] = Question::find($_GET['question_id']);
      }
      return $data;
    }

    // public ------------
  }

?>