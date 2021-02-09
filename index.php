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
		// print_r($value);exit;
		if ($keys == 'airbus_a380'){
		if ($values->first_class > 0){
			echo $keys.' Flight assigned to ' . $firstname. ' in first class.';exit;
		}
		elseif ($values->business > 0) {
			echo 'Boeing 737 800 Flight assigned to ' . $firstname. ' in business class.';exit;
		}
	}
	}
	}	
}
function getSeatsAvailability(){
$airCraft = new AirCraft();
$getSeats = $airCraft->getSeats();
print_r($getSeats);exit;	
}
?>
