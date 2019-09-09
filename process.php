<?php
session_start();

if (isset($_POST['contact'])) {
  # code...
  $name = strip_tags(htmlspecialchars($_POST['name']));
  $email = strip_tags(htmlspecialchars($_POST['email']));
  $message = strip_tags(htmlspecialchars($_POST['message']));

  $_SESSION['msg'] = '<h1 class="intro">Thank you '.$name.' for sending us a Message!</h1>';
  header('Location: index.php');
}
?>