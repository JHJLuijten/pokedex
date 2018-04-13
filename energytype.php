//heeft een naam/type
<?php

// geeft een mals energytype mee
class Energytype{
	public $energytype;
	public function __construct($energytype){
		$this->energytype = $energytype;
		

	}
	public function __toString(){
		return $this->energytype ;
	}
}