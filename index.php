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
print_r($airCraftInfo);exit;
}
function assignSeats($firstname){
$airCraft = new AirCraft();
$seatAssign = $airCraft->assignSeatsToPassenger($firstname.'.json');
$getSeats = $airCraft->getSeats();
foreach ($getSeats as $key => $value) {
	foreach ($value as $keys => $values) {
		
	}
	}	
}
?>
