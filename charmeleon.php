<?php
	require_once 'attack.php';
	require_once 'resistance.php';
class Charmeleon extends Pokemon {

  //maakt een vuurdoggo aan met juiste waardes
	public function __construct($name){


  		$name = $name;
  		$EnergyType = new EnergyType ('Fire');
  		$hitpoints = 60;
  		$weakness = new Weakness ('Water', 2) ;
  		$resistance = new Resistance ('Lightning', 10);
		  $myAttacks = [
  		new Attack('Flare' , 50), new Attack('Headbutt',20)
  ];
		parent::__construct ($name,$EnergyType,$hitpoints,$myAttacks,$weakness,$resistance);

	}

}