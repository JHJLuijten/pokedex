<?php

class pokemon  {
	public $name; 
	public $energytype; 
	public $hitpoints;
	public $attacks;
    public $weakness;
    public $resistance;



	public function __construct($name, $energytype, $hitpoints, $attacks, $weakness, $resistance)
    {
        $this->name = $name;
        $this->energytype = $energytype;
        $this->hitpoints = $hitpoints;
        $this->attacks = $attacks;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
        
    }

    public function attack($target, $attack) {
        
        $target->resistance->energytype;
        $this->energytype;

        if (attacks) {
            if(target == true)
                if($resistance = $energytype){
                    $target->hitpoints - ($dmg - 10);
                }
                else($weakness = $energytype)
                {
                    $target->hitpoints-($dmg * 2);
                
                

                }
            }
        }
    }

    public function showName()
    {
        echo '<h2> nickname is:' . $this->name . '</h2>';
    }

     public function showEnergytype()
    {
        echo '<h2> energytype is:' . $this->energytype . '</h2>';
    }

        public function showHitpoints()
    {
        echo '<h2> hitpoints:' . $this->hitpoints . '</h2>';
    }

        public function showAttacks()
    {
        foreach ($this->attacks as $atk) {
      echo '<h2> attack: ' . $atk . '</h2>';
        }
        
    }
        public function showWeakness()
    {
        echo '<h2>Weakness: ' . $this->weakness . '</h2>';
    }

        public function showResistance()
    {
        echo '<h2>resistance: ' . $this->resistance . '</h2>';
    }
     public function __toString() {
        return $this->name;
    }

}