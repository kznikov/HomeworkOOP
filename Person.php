<?php


	class Person{
		public $name;
		public $age;
		public $personalNumber;
		public $isMale;
		public $friend;
		public $money;
		public $car;
		
		public  function __construct($name, $age, $personalNumer, $isMale, $friends = array()){
			$this->name = $name;
			$this->age = $age;
			$this->personalNumber = $personalNumer;
			$this->isMale = $isMale;
			$this->friend = $friends;
		}
		
		
		
		public function buyCar($car){
			if($this->money >=$car->price){
				$this->money -=$car->price;
				$this->car = $car;
				return "You just buy a new car! Your balance is $this->money";
			}else{
				return "You do not have enough money";
			}
		}
		
		
		public function sellCarForScrap(){
			$this->money += $this->car->calculateCarPriceForScrap(400);
			$this->car = null;
			return $this->money;
		}
		
			
	}
	


?>