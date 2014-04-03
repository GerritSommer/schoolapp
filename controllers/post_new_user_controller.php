<?php
  if(isset($_POST['name']) and isset($_POST['password']) and isset($_POST['role'])) {

    $user = new User(array(
      'name'     => $_POST['name'],
      'password' => $_POST['password'],
      'role'     => $_POST['role']
      )
    );
    $user->save();
    $data['user'] = $user;
  }
?>