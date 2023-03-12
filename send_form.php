<?php
  if($_POST["message"]) {
    mail("info@ires-fotowoltaika.pl", "New message from Balkontracker",
    $_POST["insert your message here"]. "From: an@email.address");
  }
?>
<!DOCTYPE html>
