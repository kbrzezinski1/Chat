<?php

require_once 'connect.php';
class User {

  public $id;
  public $login;
  public $password;
  public $registration_date;
  function __construct($chosen_id){
    if ($chosen_id) {
        $conn = connect();
        $stmt = $conn->prepare("SELECT * FROM user WHERE id=?");
        try {
          $stmt->execute([$chosen_id]);
          $user = $stmt->fetch();
          $this->id = $chosen_id;
          $this->login = $user['text'];
          $this->password = $user['password'];
          $this->registration_date = $user['registration_date'];
        } catch (Exception $e) {
          die($e->getMessage());
        }
      }
  }

  function save()
  {

    try {
      $conn = connect();
      $sql = "INSERT INTO user (login, password) VALUES ('$this->login', '$this->password')";
      $conn->exec($sql);
    } catch (PDOException $e) {
      echo $sql . "<br>" . $e->getMessage();
    }
  }

  function setLogin($login)
  {
    $this->login = $login;
  }

  function setPassword($password)
  {
    $this->password = $password;
  }
}
