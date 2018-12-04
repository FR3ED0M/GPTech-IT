<?php
if($_POST["message"]) {
    mail("lukaspbsd@gmail.com",
         $_POST['subject'],
         $_POST['message'],
         $_POST['senderEmail'],
         $_POST['sender']);
}
?>