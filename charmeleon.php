<?php


class Charmeleon extends Pokemon {
  public $name = 'vuur_doggo';
  public $energyType = 'Fire';
  public $hitpoints = 60;
  public $attack1 = 'Headbutt';
  public $attack2 = 'Flare';
  public $weakness = 'Water';
  public $resistance = 'Lightning';



	public function __construct(){
		parent::__construct (
		$this->name,
		$this->energyType,
		$this->hitpoints,
		$this->attack1,
		$this->attack2,
		$this->weakness ,
		$this->resistance);

	}

}