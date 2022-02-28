<?php require 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>
<?php include 'includes/fczat.php'; ?>
<?php
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    include 'includes/message_cont.php';
}
?>
    <?php require 'includes/footer.php'; ?>
