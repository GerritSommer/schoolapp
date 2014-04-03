<?php

if(isset($_POST['name']) and isset($_POST['password'])) {
  $username = $_POST['name'];
  $password = $_POST['password'];
  $mysqli = new mysqli('localhost', 'root', '', 'schoolapp');
  $sql = 'SELECT id, name, password FROM users WHERE name="'. $username .'"';
  $result = $mysqli->query($sql);
  $row = $result->fetch_assoc();

  if($row['password'] === $password) {
    $_SESSION['user_id'] = $row['id'];
  }
}
?>