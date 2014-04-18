<?php
class Questions_controller extends app_controller {
  protected $models = array('question', 'category', 'answer');

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
      $data['categories'] = Category::find('all');
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
}
?>