<?php
include ('autoloading.php');
function addPassenger($firstname, $lastname, $age, $gender){
$addPass = new AddPassenger($firstname, $lastname, $age, $gender);
$passInfo = $addPass->addPassenger();
echo $passInfo;exit;
}
function fetchAirCraftInfo(){
$airCraft = new AirCraft();
$airCraftInfo = $airCraft->getAirCraftDetails();
echo 'nishant';exit;
}
?>
