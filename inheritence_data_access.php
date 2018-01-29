<?php
	/**
	* 
	*/
	class Cars
	{
		public $door = 6;
		protected $wheel =4;
		private $steering = 1;

		function CheckData()
		{
			echo $this->door."<br>";
			echo $this->steering."<br>";
		}
	}


	class SubCar extends Cars
	{
		function showProperty(){
			
				echo $this->door;	
		}
	}

$bmw = new Cars();
$bmw->CheckData();	

$merc = new SubCar();
$merc->showProperty();

?>