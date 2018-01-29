<?php



class Car {

	var $door =4;
		
		function MoovWheels()
		{
			$this->door=10;;
		}
		function CreateDoors(){
			$this->door = 6;

		}
	}


$bmw = new Car();

	class Plane extends Car{
		var $door = 100;
		
		function MoveInAir()
		{
			echo "yea i am flying";
		}
	}

	$jet = new Plane();
	//$jet->door;
	echo $jet->door."<br>";
	echo $jet->MoovWheels();
	echo $jet->door."<br>";
	echo $jet->MoveInAir();

?>