<?php

class pokemon  {
	public $name; 
	public $energytype; 
	public $hitpoints;
	public $attack_1;
    public $attack_2;
    public $weakness;
    public $resistance;



	public function __construct($name, $energytype, $hitpoints, $attack_1, $attack_2, $weakness, $resistance)
    {
        $this->name = $name;
        $this->energytype = $energytype;
        $this->hitpoints = $hitpoints;
        $this->attack_1 = $attack_1;
        $this->attack_2 = $attack_2;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
        
            }
   
     public function __toString() {
        return json_encode($this);
    }

}