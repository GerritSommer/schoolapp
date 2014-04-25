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
      Helper::routRedirect('index',array('route'=>'modules','method'=>'show','module_id' => $question->module->id));
    } else {
      $data['modules'] = Module::find('all');
    }
    return $data;
  }
  public function delete() {
    if(isset($_GET['question_id'])) {
      $question = Question::find($_GET['question_id']);
      $question->delete();
      Helper::routRedirect('index',array('route'=>'modules','method'=>'show','module_id' => $question->module->id));
      return $data;
    }
  }
  public function update() {
    if(!empty($_POST)) {
      $params = $_POST;
      $question = Question::find($params['id']);
      unset($params['id']);
      $question->update_attributes($params);
      Helper::routRedirect('index',array('route'=>'modules','method'=>'show','module_id' => $question->module->id));
    } else {
      $data['question'] = Question::find($_GET['question_id']);
    }
    return $data;
  }
}
?>