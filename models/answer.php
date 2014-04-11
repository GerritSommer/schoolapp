<?php
class Answer extends ActiveRecord\Model {
  public function __toString() { return 'Answer '. $this->name; }

}
?>

