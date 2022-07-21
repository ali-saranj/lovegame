<?php

$my = new mysqli("localhost",'root','',"lovegame");

$sender = $_REQUEST['sender'];
$sms = $_REQUEST['sms'];


 $resalt = mysqli_query($my,"INSERT INTO `sms` (`id`, `sender`, `mesage`) VALUES (Null,'$sender','$sms')");

 echo $resalt ? 'yes':'no';
?>