<?php
class Module extends ActiveRecord\Model {
  public function __toString() { return 'Modul '. $this->name; }

  static $has_many = array(array('questions'));
}
?>

