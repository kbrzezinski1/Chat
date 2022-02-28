<?php
session_start();
require_once 'Message.php';

$message = $_POST['message'];

$length = strlen($message);
if ($length < 1 or $length > 200) {
  die("Nieodpowiednia długość wiadomości");
}
$conn = connect();
$stmt = $conn->prepare("SELECT id FROM user WHERE login=?");
$stmt->execute([$_SESSION['login']]);
$result = $stmt->fetch();
$id = $result['id'];

$newmessage = new Message(null);
$newmessage->setText($message);
$newmessage->setIdUser($id);
$newmessage->save();
header("Location: /chat/");
die();
