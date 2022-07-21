<?php
$my = new mysqli("localhost",'root','',"lovegame");

$resalt = mysqli_query($my,"SELECT * FROM `sms`");

$aray = array();




for ($i=0; $i < $resalt->num_rows; $i++) { 
    $aray[]=mysqli_fetch_assoc($resalt);
}


echo json_encode($aray);




?>