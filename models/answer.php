<?php
class Answer extends ActiveRecord\Model {
  public function __toString() { return 'Answer '. $this->name; }
  static $validates_presence_of = array(array('answer'));
  static $belongs_to = array(array('question'));


}
?>

