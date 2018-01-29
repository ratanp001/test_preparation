<?php

	class Cars
	{
		var $door=9;
		
		function __construct()
		{
			echo $this->door=10;
		}
	}

$bmw = new Cars();
$merc = new Cars();


?>
