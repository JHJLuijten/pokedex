<?php

class Pikachu extends Pokemon {
  public $name = 'Pikachu';
  public $energyType = 'Lightning';
  public $hitpoints = 60;
  public $attack1 = 'electric ring';
  public $attack2 = 'Pika Punch';
  public $weakness = 'Fire';
  public $resistance= 'fighting';

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