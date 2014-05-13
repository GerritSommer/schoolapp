<?php
  class Courses_controller extends app_controller{
    protected $models = array('answer','module','question','user', 'history');

    public function index(){
        $data['modules']            = Module::find('all');
        $data['user']               = User::find($_SESSION['user_id']);
        $data['users_answers']      = $data['user']->answers;
        $data['answered_questions'] = [];
        $data['started_modules']    = [];

        foreach ($data['users_answers'] as $answer) { $data['answered_questions'][] = $answer->question; }
        foreach ($data['answered_questions'] as $question) { $data['started_modules'][] = $question->module; }

        return $data;
    }

    public function show() {
      $data['module'] = Module::find($_GET['module_id']);
      return $data;
    }

    public function ask_question() {
      if(isset($_GET['module_id'])) {
        $module = Module::find($_GET['module_id']);
        $modules_question_ids = array_map(function($question){ return $question->id; }, $module->questions);
        $user = User::find($_SESSION['user_id']);
        $users_answers = $user->answers;
        $answered_questions_ids = [];

        // all modules questions the user already answered
        foreach ($users_answers as $i=>$answer) {
          if(in_array($answer->question->id, $modules_question_ids)) {
            $answered_questions_ids[] = $answer->question->id;
          }
        }

        // all modules questions the user didnt answer yet
        $unanswered_question_ids = array_diff($modules_question_ids, $answered_questions_ids);

        // save the answer
        if(!empty($_POST['answer_id'])) {
          $answer = Answer::find($_POST['answer_id']);
          // As this is a n:n relation, we only need to save the object representíng the join table
          $history = new History(array(
            'user_id' => $user->id,
            'answer_id' => $answer->id
            ));
          $history->save();
          // redirect to this method back
          Helper::routRedirect('ask_question',array('route'=>'courses','method'=>'ask_question'));
        }


        // if there are unanswered questions left, ask the next question
        if(!empty($unanswered_question_ids)) {
          $data['question'] = Question::find(reset($unanswered_question_ids));
        } else {
          // else go back to courses overview
          Helper::routRedirect('index',array('route'=>'courses','method'=>'index'));
        }

        $data['user'] = $user;
        $data['module'] = $module;
        return $data;
      }
    }

    public function check_question() {

    }
  }

?>