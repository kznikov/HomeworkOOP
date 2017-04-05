<?php
	function __autoload($className) {
		require_once $className . '.php';
	}

	/* $audi = new Car();
	$audi->model = "A4";
	$audi->maxSpeed = 240;
	$audi->currentSpeed = 120;
	$audi->currentGear = 6;
	$audi->color = "grey";
	
	$bmw = new Car();
	$bmw->model = "A4";
	$bmw->maxSpeed = 220;
	$bmw->currentSpeed = 120;
	$bmw->currentGear = 5;
	$bmw->color = "black"; 
	
	
 	echo "Audi current gear: ".$audi->currentGear."<br/> BMW current gear: ".$bmw->currentGear."<br/>";
	$audi->currentGear = 3;
	$bmw->currentGear = 2;
	echo "Audi current gear: ".$audi->currentGear."<br/> BMW current gear: ".$bmw->currentGear; */
	
	
	$audi = new Car("A4",true, "grey", 30000, 260);
	$audi->owner = new Person("Gosho", 24, "9305253423", true);
	
	$bmw = new Car("320",true, "black", 20000, 230);
	
	echo $audi->owner->name." ".$audi->owner->age;
	
	
	//$person1 = new Person("Gosho", 24, "123312123", true);
	$person2 = new Person("Ivan", 22, "123312333", true);
	$person3 = new Person("Pesho", 21, "189912123", true);
	
	//$person1->friend = array($person2, $person3);
	//echo $person1->friend[1]->name;
	
	
	
	$person1 =  new Person("Gosho", 24, "123312123", true, array($person2, $person3));
	
	echo $person1->friend[0]->name."<br/>";
	
	
	$audi->isMoreExpensive($bmw);
	
	
	echo $audi->calculateCarPriceForScrap(400);
	
	$person1 =  new Person("Gosho", 24, "123312123", true, array($person2, $person3));
	$person1->money = 40000;
	
	
	echo $person1->buyCar($audi);
	
	$person2->money = 40000;
	echo $person2->buyCar($audi);
	echo $audi->owner->name;
	
	$audi->changeOwner($person1);
	echo $audi->owner->name;
	
	
	echo $person1->sellCarForScrap()."<br/>";
	
	$carList = new CarShop();
	$carList->addCar($audi);
	$carList->addCar($bmw);
	
	
	//$carList->removeCar($bmw);
	//$carList->removeCar($audi);
	
	
	$carList->showAllCarsInTheShop();
	
	
	
	
	
	
?>