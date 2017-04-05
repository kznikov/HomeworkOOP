<?php

	class CarShop{
		public $price;
		public $isSportCar;
		public $carList;
		
		
		public function __construct(){
			$this->carList= array();
		}
		
		
		public function addCar($car) {
			$this->carList [] = $car;
		}
		
		
		
		
		
		public function removeCar($car){
			for($index = 0;$index <=count($this->carList);$index++){
				if($this->carList[$index] === $car){
					array_splice($this->carList, $index, 1);
				}
			}
		}
		
		
		public function showAllCarsInTheShop(){
			foreach ($this->carList as $car){
				echo $car->model." ".$car->price." ".$car->maxSpeed." ".$car->color."<br/>";
			}
		}
		
		
		
	}
	
	
	

?>