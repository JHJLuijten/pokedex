<?php
	require_once 'attack.php';
	require_once 'resistance.php';
class Charmeleon extends Pokemon {


	public function __construct(){


  		$name = 'vuur_doggo';
  		$energyType = 'Fire';
  		$hitpoints = 60;
  		$weakness = new Weakness ('Water') ;
  		$resistance = new Resistance ('Lightning');
		$myAttacks = [
  		new Attack('Flare' , 50), new Attack('Headbutt',20)
  ];
		parent::__construct ($name,$energyType,$hitpoints,$myAttacks,$weakness,$resistance);

	}

}