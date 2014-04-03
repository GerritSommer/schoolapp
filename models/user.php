<?php
class User extends ActiveRecord\Model {
  static $attr_protected = array('password');
  static $validates_presence_of = array(array('name'), array('role'));

  public function __toString() { return 'user'. $this->name; }
  public function set_password($plaintext) { $this->assign_attribute('password', md5($plaintext)); }
}

class Teacher extends User {
  static $table_name = 'users';
}

class Student extends User {
  static $table_name = 'users';
}
?>