<?php 
class Attack{
	public $name;
	public $dmg;
	public function __construct($name,$dmg){
		$this->name = $name;
		$this->dmg = $dmg;

	}
	public function __toString(){
		return $this->name . ' ' . $this->dmg;
	}

}


 ?>