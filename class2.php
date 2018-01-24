
<?php
class Car {

	var $door=4;
	var $widow=4;
	var $seat=6;

		
		function MoovWheels()
		{
			$this->door=10;
		}
	}
$bmw = new Car();
$bmw->MoovWheels();
//$bmw->door = 9;
echo $bmw->door;	

	?>