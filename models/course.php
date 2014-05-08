<?php
class Course extends ActiveRecord\Model {
	static $belongs_to = array(array('module'),array('question'),array('answer'),array('user'));
}
?>