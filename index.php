<?php
include ('autoloading.php');
function addPassenger($firstname, $lastname, $age, $gender){
$addPass = new AddPassenger($firstname, $lastname, $age, $gender);
$passInfo = $addPass->addPassenger();
print_r($passInfo);
}
function fetchAirCraftInfo(){
$airCraft = new AirCraft();
$airCraftInfo = $airCraft->getAirCraftDetails();
return $airCraftInfo;
}
function assignSeats($firstname){
$seats = getSeatsAvailability();
$airCraftInfo = fetchAirCraftInfo();
$filghtDetails = array();
foreach ($airCraftInfo['carrier_name'] as $key => $value) {
$assignedFlight = 'Hello '.$key. ' flight is assigned to you with Terminal at '.$value;
$filghtDetails['assigned_flight'] = $assignedFlight;
}
foreach ($airCraftInfo['brand_name'] as $key => $value) {
$assignedBrand = 'Brand '.$key. ' is assigned to you with Model '.$value;
$filghtDetails['assigned_brand'] = $assignedBrand;
}
print_r($filghtDetails);
}
function getSeatsAvailability(){
$airCraft = new SeatAvailability();
$getSeats = $airCraft->getSeatsAvailability();
return $getSeats;	
}
?>
