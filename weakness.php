<?php
	//helpt met de waardes goed zetten van de pokemon naar de defend function
	class Weakness  {
	  	public $energytype;
	  	public $multiplier;

	  	public function __construct($energytype, $multiplier){
	  		$this->energytype = $energytype;
	  		$this->multiplier = $multiplier;

	  	}
	  	public function __toString(){
		return $this->energytype . ' , ' . $this->multiplier; 

		}
	 }