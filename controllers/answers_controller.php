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

    public function update() {
      if(!empty($_POST)) {
        $params = $_POST;
        $answer = Answer::find($params['id']);
        unset($params['id']);
        $answer->update_attributes($params);
        header("Location: index.php?route=questions&method=update&question_id=". $answer->question->id);
        die();
      } else {
        $data['answer'] = Answer::find($_GET['answer_id']);
      }
      return $data;
    }
  }

?>