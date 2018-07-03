<?php

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $email_from = $_POST['mail'];
  $message = $_POST['message'];

  $email_to = "shaunak@dreambig.believe";
  $headers = "From: ".$email_from;
  $txt = "You have a message from ".$name.".\n\n".$message;

  mail($email_to, $subject, $txt, $headers);
  header("Location: contactMe.html?mailsend");
}
?>
