<?php


/**
* 
*/
class Cars
{
	var $steering = 1;
	static $wheels = 4;
	function MoovWheels()
	{
		echo Cars::$wheels = 6;
	}
}



$bmw = new Cars();
#$bmw->wheels;
echo Cars::$wheels;
?>