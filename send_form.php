<?php
  if($_POST["message"]) {
    mail("silver7784@gmail.com", "New message from Balkontracker",
    $_POST["insert your message here"]. "From: an@email.address");
  }
?>
<!DOCTYPE html>
