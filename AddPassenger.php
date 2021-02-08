<?php
class AddPassenger{

protected $firstName;
protected $lastName;
protected $age;
protected $gender;
public function __construct($firstName, $lastName, $age, $gender){
$this->firstName = $firstName;
$this->lastName = $lastName;
$this->age = $age;
$this->gender = $gender;
}
public function addPassenger(){
$fileName = time()._.$this->firstName.'.json';
$data = array('first_name' => $this->firstName, 'last_name' => $this->lastName, 'age' => $this->age, 'gender' => $this->gender);
$jsonData = json_encode($data);
if (!file_exists($fileName)){
fopen($fileName, "w");	
}
$saveDataToFile = file_put_contents($fileName, $jsonData);
var_dump($saveDataToFile);exit;
}
}
?>
