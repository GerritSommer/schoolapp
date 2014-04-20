<?php
class Question extends ActiveRecord\Model {
  public function __toString() { return 'Question '. $this->name; }

  static $validates_presence_of = array(array('question'),array('hint'));
  static $belongs_to = array(array('module'));
  static $has_many = array(array('answers'));
}
?>