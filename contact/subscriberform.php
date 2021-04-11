<?php

if($_POST["message"]) {

mail("noroute@noroute", "Here is the subject line",

$_POST["insert your message here"]. "From: an@email.address");

}

?>
