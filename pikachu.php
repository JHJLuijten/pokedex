<?php
	require_once 'attack.php';
class Pikachu extends Pokemon {


	public function __construct(){


  		$name = 'Pikachu';
  		$energyType = 'Lightning';
  		$hitpoints = 60;
  		$weakness = 'Fire | 2';
  		$resistance = 'fighting | 10';
		$myAttacks = [
  		new Attack('Eletric ring' , 50), new Attack('Pika Punch',20)
  ];
		parent::__construct ($name,$energyType,$hitpoints,$myAttacks,$weakness,$resistance);

	}

}