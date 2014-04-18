<?php
class Question extends ActiveRecord\Model {
  public function __toString() { return 'Question '. $this->name; }

  static $belongs_to = array(array('category'));
  static $has_many = array(array('answers'));
}
?>