<?php
class SeatAvailability extends AirCraft
{
	public function __construct(){

	}

	public function getAllSeats(){
	$getAllSeats = $this->getSeats();
	return $getAllSeats;	
	}

	public function getSeatsAvailability(){
	$getSeats = $this->getAllSeats();
	$seatAvailable = array();
	foreach ($getSeats->qantas as $key => $value) {
		if ($key == 'boeing_737_800'){
			$qantasBoeingAvailable['first_class'] = $value->first_class == 0 ? 'No Seat Available in first class for '.$key : 'No. of Seats Available in first class for '.$key. ' is ' .$value->first_class;
			$qantasBoeingAvailable['business'] = $value->business == 0 ?  'No Seat Available in business class for '.$key : 'No. of Seats Available in busness class for '.$key. ' is ' .$value->business;
			$qantasBoeingAvailable['premium_economy'] = $value->premium_economy == 0 ?  'No Seat Available in premium class for '.$key : 'No. of Seats Available in premium class for '.$key. ' is ' .$value->premium_economy;
			$qantasBoeingAvailable['economy'] = $value->economy == 0 ?  'No Seat Available in economy class for '.$key : 'No. of Seats Available in economy class for '.$key. ' is ' .$value->economy;
			$qantasBoeingAvailable['total_seats_qantas_boeing'] = $value->first_class + $value->business + $value->premium_economy + $value->economy;
		}
			if ($key == 'airbus_a380'){
			$qantasAirbusAvailable['first_class'] = $value->first_class == 0 ? 'No Seat Available in first class for '.$key : 'No. of Seats Available in first class for '.$key. ' is ' .$value->first_class;
			$qantasAirbusAvailable['business'] = $value->business == 0 ?  'No Seat Available in business class for '.$key : 'No. of Seats Available in busness class for '.$key. ' is ' .$value->business;
			$qantasAirbusAvailable['premium_economy'] = $value->premium_economy == 0 ?  'No Seat Available in premium class for '.$key : 'No. of Seats Available in premium class for '.$key. ' is ' .$value->premium_economy;
			$qantasAirbusAvailable['economy'] = $value->economy == 0 ?  'No Seat Available in economy class for '.$key : 'No. of Seats Available in economy class for '.$key. ' is ' .$value->economy;
			$qantasAirbusAvailable['total_seats_qantas_airbus'] = $value->first_class + $value->business + $value->premium_economy + $value->economy;
		}
		if ($key == 'dash_8'){
			$qantasDash8Available['first_class'] = $value->first_class == 0 ? 'No Seat Available in first class for '.$key : 'No. of Seats Available in first class for '.$key. ' is ' .$value->first_class;
			$qantasDash8Available['business'] = $value->business == 0 ?  'No Seat Available in business class for '.$key : 'No. of Seats Available in busness class for '.$key. ' is ' .$value->business;
			$qantasDash8Available['premium_economy'] = $value->premium_economy == 0 ?  'No Seat Available in premium class for '.$key : 'No. of Seats Available in premium class for '.$key. ' is ' .$value->premium_economy;
			$qantasDash8Available['economy'] = $value->economy == 0 ?  'No Seat Available in economy class for '.$key : 'No. of Seats Available in economy class for '.$key. ' is ' .$value->economy;
			$qantasDash8Available['total_seats_qantas_dash8'] = $value->first_class + $value->business + $value->premium_economy + $value->economy;
		}

	}
	foreach ($getSeats->singapore_airlines as $key => $value) {
		if ($key == 'boeing_737_800'){
			$singaporBoeingAvailable['first_class'] = $value->first_class == 0 ? 'No Seat Available in first class for '.$key : 'No. of Seats Available in first class for '.$key. ' is ' .$value->first_class;
			$singaporBoeingAvailable['business'] = $value->business == 0 ?  'No Seat Available in business class for '.$key : 'No. of Seats Available in busness class for '.$key. ' is ' .$value->business;
			$singaporBoeingAvailable['premium_economy'] = $value->premium_economy == 0 ?  'No Seat Available in premium class for '.$key : 'No. of Seats Available in premium class for '.$key. ' is ' .$value->premium_economy;
			$singaporBoeingAvailable['economy'] = $value->economy == 0 ?  'No Seat Available in economy class for '.$key : 'No. of Seats Available in economy class for '.$key. ' is ' .$value->economy;
			$singaporBoeingAvailable['total_seats_singapore_boeing8'] = $value->first_class + $value->business + $value->premium_economy + $value->economy;
		}
			if ($key == 'airbus_a380'){
			$singaporAirbusAvailable['first_class'] = $value->first_class == 0 ? 'No Seat Available in first class for '.$key : 'No. of Seats Available in first class for '.$key. ' is ' .$value->first_class;
			$singaporAirbusAvailable['business'] = $value->business == 0 ?  'No Seat Available in business class for '.$key : 'No. of Seats Available in busness class for '.$key. ' is ' .$value->business;
			$singaporAirbusAvailable['premium_economy'] = $value->premium_economy == 0 ?  'No Seat Available in premium class for '.$key : 'No. of Seats Available in premium class for '.$key. ' is ' .$value->premium_economy;
			$singaporAirbusAvailable['economy'] = $value->economy == 0 ?  'No Seat Available in economy class for '.$key : 'No. of Seats Available in economy class for '.$key. ' is ' .$value->economy;
			$singaporAirbusAvailable['total_seats_singapore_airbus'] = $value->first_class + $value->business + $value->premium_economy + $value->economy;
		}
		if ($key == 'dash_8'){
			$singaporDash8Available['first_class'] = $value->first_class == 0 ? 'No Seat Available in first class for '.$key : 'No. of Seats Available in first class for '.$key. ' is ' .$value->first_class;
			$singaporDash8Available['business'] = $value->business == 0 ?  'No Seat Available in business class for '.$key : 'No. of Seats Available in busness class for '.$key. ' is ' .$value->business;
			$singaporDash8Available['premium_economy'] = $value->premium_economy == 0 ?  'No Seat Available in premium class for '.$key : 'No. of Seats Available in premium class for '.$key. ' is ' .$value->premium_economy;
			$singaporDash8Available['economy'] = $value->economy == 0 ?  'No Seat Available in economy class for '.$key : 'No. of Seats Available in economy class for '.$key. ' is ' .$value->economy;
			$singaporDash8Available['total_seats_singapore_dash8'] = $value->first_class + $value->business + $value->premium_economy + $value->economy;
		}

	}
		foreach ($getSeats->emirates as $key => $value) {
		if ($key == 'boeing_737_800'){
			$emiratesBoeingAvailable['first_class'] = $value->first_class == 0 ? 'No Seat Available in first class for '.$key : 'No. of Seats Available in first class for '.$key. ' is ' .$value->first_class;
			$emiratesBoeingAvailable['business'] = $value->business == 0 ?  'No Seat Available in business class for '.$key : 'No. of Seats Available in busness class for '.$key. ' is ' .$value->business;
			$emiratesBoeingAvailable['premium_economy'] = $value->premium_economy == 0 ?  'No Seat Available in premium class for '.$key : 'No. of Seats Available in premium class for '.$key. ' is ' .$value->premium_economy;
			$emiratesBoeingAvailable['economy'] = $value->economy == 0 ?  'No Seat Available in economy class for '.$key : 'No. of Seats Available in economy class for '.$key. ' is ' .$value->economy;
			$emiratesBoeingAvailable['total_seats_emirates_boeing'] = $value->first_class + $value->business + $value->premium_economy + $value->economy;
		}
			if ($key == 'airbus_a380'){
			$emiratesAirbusAvailable['first_class'] = $value->first_class == 0 ? 'No Seat Available in first class for '.$key : 'No. of Seats Available in first class for '.$key. ' is ' .$value->first_class;
			$emiratesAirbusAvailable['business'] = $value->business == 0 ?  'No Seat Available in business class for '.$key : 'No. of Seats Available in busness class for '.$key. ' is ' .$value->business;
			$emiratesAirbusAvailable['premium_economy'] = $value->premium_economy == 0 ?  'No Seat Available in premium class for '.$key : 'No. of Seats Available in premium class for '.$key. ' is ' .$value->premium_economy;
			$emiratesAirbusAvailable['economy'] = $value->economy == 0 ?  'No Seat Available in economy class for '.$key : 'No. of Seats Available in economy class for '.$key. ' is ' .$value->economy;
			$emiratesAirbusAvailable['total_seats_emirates_airbus'] = $value->first_class + $value->business + $value->premium_economy + $value->economy;
		}
		if ($key == 'dash_8'){
			$emiratesDash8Available['first_class'] = $value->first_class == 0 ? 'No Seat Available in first class for '.$key : 'No. of Seats Available in first class for '.$key. ' is ' .$value->first_class;
			$emiratesDash8Available['business'] = $value->business == 0 ?  'No Seat Available in business class for '.$key : 'No. of Seats Available in busness class for '.$key. ' is ' .$value->business;
			$emiratesDash8Available['premium_economy'] = $value->premium_economy == 0 ?  'No Seat Available in premium class for '.$key : 'No. of Seats Available in premium class for '.$key. ' is ' .$value->premium_economy;
			$emiratesDash8Available['economy'] = $value->economy == 0 ?  'No Seat Available in economy class for '.$key : 'No. of Seats Available in economy class for '.$key. ' is ' .$value->economy;
			$emiratesDash8Available['total_seats_emirates_dash8'] = $value->first_class + $value->business + $value->premium_economy + $value->economy;
		}

	}
	$seatAvailable['qantas_boeing_available'] = $qantasBoeingAvailable;
	$seatAvailable['qantas_airbus_available'] = $qantasAirbusAvailable;
	$seatAvailable['qantas_dash8_available'] = $qantasDash8Available;
	$seatAvailable['singapore_boeing_available'] = $singaporBoeingAvailable;
	$seatAvailable['singapore_airbus_available'] = $singaporAirbusAvailable;
	$seatAvailable['singapore_dash8_available'] = $singaporDash8Available;
	$seatAvailable['emirates_boeing_available'] = $emiratesBoeingAvailable;
	$seatAvailable['emirates_airbus_available'] = $emiratesAirbusAvailable;
	$seatAvailable['emirates_dash8_available'] = $emiratesDash8Available;
	return $seatAvailable;
	}
}

?>