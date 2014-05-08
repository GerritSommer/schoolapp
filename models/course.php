<?php
class Course extends ActiveRecord\Model {
	static $belongs_to = array(array('module'),array('question'),array('answer'),array('user'));

  public function questions_answered() {
    $user_courses = User::find($_SESSION['user_id'])->courses
  }
}
?>