<?php
	class Car {
		public $model;
		public $maxSpeed;
		public $currentSpeed;
		public $color;
		public $currentGear = 1;
		public $isSportCar;
		public $price;
		public $owner;
		
		
		
		/* public function __construct($model, $maxSpeed, $color) {
			$this->color = $color;
			$this->model = $model;
			
			if ($maxSpeed > 0){
				$this->maxSpeed = $maxSpeed;
				
			}else{
				$this->maxSpeed = 200;
			}

			$this->currentSpeed = 0;
			
		} */
		
		
		public function __construct($model, $isSportCar, $color, $price, $maxSpeed){
			if($maxSpeed > 200 && !$isSportCar){
				echo "The car must be sport to have max speed more than 200 km";
			}elseif($maxSpeed > 0){
				$this->maxSpeed = $maxSpeed;
			}else{
				$this->maxSpeed = 200;
			}
			$this->model = $model;
			$this->color = $color;
			$this->price = $price;
		}
			
			
		public function accelerate(){
			if($this->currentSpeed + 30 >= $this->maxSpeed){	
				$this->currentSpeed = $this->maxSpeed;
			}else{
				$this->currentSpeed += 30;
			}
		}
		public function changeGearUp(){
			if($this->currentGear < 6){
				$this->currentGear++;
			}
		}
		public function changeGearDown(){
			if($this->currentGear > 1){
				$this->currentGear--;
			}
		}
		public function changeGear($nextGear){
			if (($gear > 0 && $gear < 7)) {
				$this->currentGear = $nextGear;
			}
		}
		public function changeColor($newColor){
			if(is_string($newColor)){
				$this->color = $newColor;
			}
		}
		
		
		
		public function isMoreExpensive($car){
			if($this->price > $car->price){
				echo $this->model." is more expensive than ".$car->model;
			}else{
				echo $car->model." is more expensive than ".$this->model;
			}
		}
		
		
		
		public function calculateCarPriceForScrap($metalPrice){
			$coef = 0.2;
			if($this->color === "white" || $this->color === "black" || $this->isSportCar){
				$coef+=0.05;
			}
			return $metalPrice*$coef;
		}
		
		
		public function changeOwner($newOwner){
			$this->owner = $newOwner;
		}
		
			
	}
	
?>