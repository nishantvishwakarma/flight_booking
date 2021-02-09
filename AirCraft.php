<?php
class AirCraft{
public function __construct(){
}
public function getAirCraftDetails(){
if (file_exists('carrier_name.json') && file_exists('brand_name.json')){
	$getCarrierName = file_get_contents('carrier_name.json');
	$getBrandName = file_get_contents('brand_name.json');
	$flightDetails = array('carrier_name' => json_decode($getCarrierName), 'brand_name' => json_decode($getBrandName));
	return $flightDetails;
}
}
public function getSeats(){
	if (file_exists('seat_availability.json')){
	 $getSeats = file_get_contents('seat_availability.json');
	 $decodeSeats = json_decode($getSeats);
	 return $decodeSeats;		
	}
}
public function assignSeatsToPassenger($firstName){
	if (file_exists($firstName)){
		$getUserDetails = file_get_contents($firstName);
		return $getUserDetails;
	}
}	
}
?>