<?php
class User
{
  private $id;
  private $name;
  private $role;
  private $password;

  public function __construct($id, $mysqli) {
    if (is_numeric($id)) {
      $sql = "SELECT id, name, role FROM users WHERE id=$id";
      $result = $mysqli->query($sql);
      $row = $result->fetch_assoc();
      $this->id = $row['id'];
      $this->name = $row['name'];
      $this->role = $row['role'];
    }
  }

  public function getId() { return $this->name; }
  public function getName() { return $this->name; }
  public function setName($name) { $this->name = $name; }
  public function getRole() { return $this->role; }
  public function setRole($role) { $this->role = $role; }
  public function getPassword() { return $this->name; }
  public function setPassword($pw) { $this->password = $pw; }

  function __toString() { return 'user'. $this->name; }
}
?>