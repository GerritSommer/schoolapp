<?php
class Category extends ActiveRecord\Model {
  public function __toString() { return 'Category '. $this->name; }

  static $has_many = array(array('questions'));
}
?>

