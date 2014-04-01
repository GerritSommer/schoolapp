<?php
class User extends ActiveRecord\Model {
  public function __toString() { return 'user'. $this->name; }

  // setter example not really needed
  public function set_name($name) { $this->assign_attribute('name', $name); }
}
?>