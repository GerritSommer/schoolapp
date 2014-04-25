<?php
class User extends ActiveRecord\Model {
  static $validates_presence_of = array(array('name'), array('role'));

  public function __toString() { return 'user'. $this->name; }
  public function set_password($plaintext) { $this->assign_attribute('password', md5($plaintext)); }

  static $has_many = array(array('courses'));
}

class Teacher extends User {
  static $table_name = 'users';
}

class Student extends User {
  static $table_name = 'users';
}
?>