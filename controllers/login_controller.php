<?php
class Login_controller  extends app_controller {

  public function logout(){
    session_unset();
    session_destroy();
    session_write_close();
    setcookie(session_name(),'',0,'/');
    session_regenerate_id(true);
    $data['route_redirect'] = 'login_index';
    return $data;
  }

  public function validate() {
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
      $data['route_redirect'] = 'home_index';
      return $data;
    }
  }
}


?>