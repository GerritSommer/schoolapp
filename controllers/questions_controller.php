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
      header("Location: index.php?route=modules&method=show&module_id=". $question->module->id);
      die();
    } else {
      $data['modules'] = Module::find('all');
    }
    return $data;
  }
  public function delete() {
    if(isset($_GET['question_id'])) {
      $question = Question::find($_GET['question_id']);
      $question->delete();
      header("Location: index.php?route=modules&method=show&module_id=". $question->module->id);
      die();
      return $data;
    }
  }
  public function update() {
    if(!empty($_POST)) {
      $params = $_POST;
      $question = Question::find($params['id']);
      unset($params['id']);
      $question->update_attributes($params);
      header("Location: index.php?route=modules&method=show&module_id=". $question->module->id);
      die();
    } else {
      $data['question'] = Question::find($_GET['question_id']);
    }
    return $data;
  }
}
?>