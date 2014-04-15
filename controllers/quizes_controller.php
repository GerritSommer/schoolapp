<?php
class Quizes_controller extends app_controller {
  protected $models = array('quiz', 'category', 'answer');
  
  private $tables = array(
              "id"            => array("/^[0-9]+$/", true), 
              "id_user"       => array("/^[0-9]+$/"),
              "id_category"   => array("/^[0-9]+$/"),
              "question"      => false,
              "hint"          => false,
              "date_created"  => false);
 
  public function index() {
    $quizzes = Quiz::find('all');
    $data['categories'] = Category::find('all');
    
    foreach($quizzes as $key => $quizz){
      //var_dump($quizz->id.'<=');
      $data['quizzes'][$key]['quizz'] = $quizz;
      $data['quizzes'][$key]['answers'] =  Answer::find('all',array('conditions' => "quiz_id = ".$quizz->id));
    }
    return $data;
  }
  
  public function create() {
    if(isset($_POST)) {
      $check = true;
      foreach($this->tables as $table => $validate){
        if(!preg_match($validate[0], $_POST[$table])){
          if($validate == false || $validate[1]){
            continue;
          }
          $check = false;
        }
      }
      if($check){
        $_POST['date_created'] = time();
        $quiz = new Quiz($_POST);
        $quiz->save();
        $data['route_redirect'] = 'home_index';
      }
    }
    $data['categorys'] = Category::find('all');
    return $data;
  }
}
?>