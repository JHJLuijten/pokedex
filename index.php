<?php

require 'autoloading.php';
//laat alle waardes zien
$pikachu = new Pikachu('pika');
$pikachu->showName();
$pikachu->showEnergytype();
$pikachu->showHitpoints();
$pikachu->showAttacks();
$pikachu->showWeakness();
$pikachu->showResistance();
print_r('<pre>' . $pikachu . '</pre>');
// $pikachu->Attack($charmeleon, $pikachu->attacks[0], $pikachu->energytype);

$charmeleon = new Charmeleon('jurn');
$charmeleon->showName();
$charmeleon->showEnergytype();
$charmeleon->showHitpoints();
$charmeleon->showAttacks();
$charmeleon->showWeakness();
$charmeleon->showResistance();
print_r('<pre>' . $charmeleon . '</pre>');
$charmeleon->attack($pikachu, 1);