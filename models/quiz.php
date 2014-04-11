<?php
class Quiz extends ActiveRecord\Model {
  public function __toString() { return 'Quiz '. $this->name; }

}
?>