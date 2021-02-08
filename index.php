<?php
include ('AddPassenger.php');

function addPassenger($firstname, $lastname, $age, $gender){
$addPass = new AddPassenger($firstname, $lastname, $age, $gender);
$passInfo = $addPass->addPassenger();
}
?>
