<?php
class User extends ActiveRecord\Model {
  static $has_many = array(
    array('histories'),
    array('answers', 'through' => 'histories')
  );

  static $validates_presence_of = array(array('name'), array('role'));

  public function __toString() { return 'user'. $this->name; }
  public function set_password($plaintext) { $this->assign_attribute('password', md5($plaintext)); }


}
?>