<?php
class Questions_controller extends app_controller {
  protected $models = array('question', 'module', 'answer');

  public function index() {
    $data['questions'] = Question::find('all');
    unset($_POST);
    return $data;
  }

  public function create() {
    if(!empty($_POST)){
      $_POST['date_created'] = time();
      $question = new Question($_POST);
      $question->save();
      $data['route_redirect'] = 'home_index';
    } else {
      $data['modules'] = Module::find('all');
    }
    return $data;
  }
  public function delete() {
    if(isset($_GET['question_id'])) {
      $question = Question::find($_GET['question_id']);
      $question->delete();
      $data['route_redirect'] = 'home_index';
      return $data;
    }
  }
  public function update() {
    if(isset($_GET['question_id'])) {
      $question = Question::find($_GET['question_id']);
      $params = $_POST;
      unset($params['id']);
      $question->update_attributes($params);
      $data['question'] = Question::find($_GET['question_id']);
    } else {
      $data['question'] = Question::find($_GET['question_id']);
    }
    return $data;
  }
}
?>