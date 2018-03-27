<?php

require 'autoloading.php';

$pikachu = new Pikachu();
$pikachu->showName();
$pikachu->showEnergytype();
$pikachu->showHitpoints();
$pikachu->showAttacks();
$pikachu->showWeakness();
$pikachu->showResistance();
print_r('<pre>' . $pikachu . '</pre>');
/*$pikachu->attack($pikachu->attacks[0], $charmeleon);*/

$charmeleon = new Charmeleon();
$charmeleon->showName();
$charmeleon->showEnergytype();
$charmeleon->showHitpoints();
$charmeleon->showAttacks();
$charmeleon->showWeakness();
$charmeleon->showResistance();
print_r('<pre>' . $charmeleon . '</pre>');
$charmeleon->attack($pikachu, $charmeleon->attacks[0]);