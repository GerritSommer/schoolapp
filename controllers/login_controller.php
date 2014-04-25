<?php
class Login_controller  extends app_controller {

  public function logout(){
    session_unset();
    session_destroy();
    session_write_close();
    setcookie(session_name(),'',0,'/');
    session_regenerate_id(true);
    Helper::routRedirect('index',array('route'=>'login','method'=>'index'));
  }

  public function validate() {
    if(isset($_POST['name']) and isset($_POST['password'])) {
      $username = $_POST['name'];
      $password = $_POST['password'];
      $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWD, DB_NAME);
      $sql = 'SELECT id, name, password, role FROM users WHERE name="'. $mysqli->real_escape_string($username) .'"';
      $result = $mysqli->query($sql);
      $row = $result->fetch_assoc();
      if($row['password'] === $password) {
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['role'] = $row['role'];
      }
      Helper::routRedirect('index',array('route'=>'home','method'=>'index'));
    }
  }
}


?>