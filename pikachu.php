<?php
	require_once 'attack.php';
	require_once 'resistance.php';
class Pikachu extends Pokemon {

  //spawnt standaard waardes voor een pikachu
	public function __construct(){


  		$name = 'Pikachu';
  		$energyType = new EnergyType ('Lightning');
  		$hitpoints = 60;
  		$weakness = new Weakness('Fire', 1.5);
  		$resistance = new Resistance('Fighting' , 10);
		$myAttacks = [
  			new Attack('Eletric ring' , 50), new Attack('Pika Punch',20)
  		];
		parent::__construct ($name,$energyType,$hitpoints,$myAttacks,$weakness,$resistance);

	}

}