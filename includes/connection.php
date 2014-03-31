<?php
  $mysqli = new mysqli('localhost', 'root', '', 'schoolapp');

  if ($mysqli->connect_error) {
    trigger_error('Database connection failed: '  . $mysqli->connect_error, E_USER_ERROR);
  }
?>
