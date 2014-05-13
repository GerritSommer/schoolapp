<?php
class History extends ActiveRecord\Model {
	static $belongs_to = array(
    array('user'),
    array('answer')
  );
}
?>
