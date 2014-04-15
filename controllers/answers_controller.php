<?php
  class Answers_controller extends app_controller{
    protected $models = array('answer','category','quiz');
    
      private $tables = array(
              "id"            => array("/^[0-9]+$/", true), 
              "quiz_id"       => array("/^[0-9]+$/"),
              "user_id"       => array("/^[0-9]+$/"),
              "answer"        => false,
              "kind"          => array("/[0|1]{1}/"),
              "date_created"  => false);
    
    public function create(){
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
          $answer = new Answer($_POST);
          $answer->save();
          $data['route_redirect'] = 'home_index';
        }
      }
      $data['quiz']     = Quiz::find($_POST['quiz_id']);
      $data['category'] = Category::find($data['quiz']->id_category);
      $data['answers']  = Answer::find('all', array('conditions' => "quiz_id = ".$data['quiz']->id));
      return $data;
    }
  }

?>