<?php

require_once 'connect.php';
class Message
{

  public $id;
  public $text;
  public $id_user;
  public $date_added;
  function __construct($chosen_id)
  {
    if ($chosen_id) {
      $conn = connect();
      $stmt = $conn->prepare("SELECT * FROM msgs WHERE id=?");
      try {
        $stmt->execute([$chosen_id]);
        $message = $stmt->fetch();
        $this->id =  $chosen_id;
        $this->text = $message['text'];
        $this->id_user = $message['id_user'];
        $this->date_added = $message['date_added'];
      } catch (Exception $e) {
        die($e->getMessage());
      }
    }
  }


  function save()
  {

    try {
      $conn = connect();
      $sql = "INSERT INTO msgs (id_user, tekst) VALUES ('$this->id_user', '$this->text')";
      $conn->exec($sql);
    } catch (PDOException $e) {
      echo $sql . "<br>" . $e->getMessage();
    }
  }

  function setIdUser($id_user)
  {
    $this->id_user = $id_user;
  }

  function setText($text)
  {
    $this->text = $text;
  }

  public static function get_all()
  {
    $conn = connect();
    $stmt = $conn->prepare("SELECT * FROM msgs");
    $stmt->execute();
    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
      $stmt2 = $conn->prepare("SELECT * FROM user WHERE id=?");
      $stmt2->execute([$result["id_user"]]);
      $user = $stmt2->fetch();
      echo  " Wiadomość: " . $result["tekst"] . "<br> Autor: " . $user["login"] . "<br><br>";
    }
  }
}
