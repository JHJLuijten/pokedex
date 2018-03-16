<?php

require 'pokedex.php';
require 'pikachu.php';
require 'charmeleon.php';

$pikachu = new Pikachu();
print_r('<pre>' . $pikachu . '</pre>');

$charmeleon = new Charmeleon();
print_r('<pre>' . $charmeleon . '</pre>');