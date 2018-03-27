<?php
	require_once 'attack.php';
class Charmeleon extends Pokemon {


	public function __construct(){


  		$name = 'vuur_doggo';
  		$energyType = 'Fire';
  		$hitpoints = 60;
  		$weakness = 'Water | 2';
  		$resistance = 'Lightning | 10';
		$myAttacks = [
  		new Attack('Flare' , 50), new Attack('Headbutt',20)
  ];
		parent::__construct ($name,$energyType,$hitpoints,$myAttacks,$weakness,$resistance);

	}

}