<?php
class Quizzes_controller extends app_controller {
  protected $models = array('quiz', 'category');

  public function index() {
    $data['quizzes'] = Quiz::find('all');
    unset($_POST);
    return $data;
  }

  public function create() {

    $_POST['date_created'] = time();
    $quiz = new Quiz($_POST);
    $quiz->save();
    $data['route_redirect'] = 'home_index';

    $data['categories'] = Category::find('all');
    return $data;
  }
}
?>