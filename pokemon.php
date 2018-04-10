<?php

class Pokemon  {
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

    public function attack($target, $attacknr){
        $target->defend($this->attacks[$attacknr],$this->energytype);
    }
    public function defend($attack, $attackerEnergytype){
        echo $attack;
        echo '<br>';
        echo $attackerEnergytype;
        echo '<br>';
        echo $this->energytype;

        //$target->resistance->energytype;
        //$this->energytype;


                if ($this->resistance == $attackerEnergytype) {
                   $newDamage =  $this->hitpoints - $attack->dmg - 10;
                    $this->hitpoints = $this->hitpoints + $newDamage;
                } elseif ($this->weakness == $attackerEnergytype) {
                   $newDamage =  $this->hitpoints - $attack->dmg * 2;
                     $this->hitpoints = $this->hitpoints + $newDamage;
                }
                else {
                    $newDamage = $this->hitpoints - $attack->dmg;
                    $this->hitpoints = $this->hitpoints + $newDamage;
                }

                echo '<br>';
                echo $this->hitpoints;
         
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