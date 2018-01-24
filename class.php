<?php
	
	/**
	* 
	*/
	class Car {
		
		function MoovWheels()
		{
			echo "wheel moves";
		}
	}
if(method_exists("Car","MoovWheels")){
	echo "the method_exists";
}else
echo "it doesn't exist";








?>
