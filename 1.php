<?php

/**    Input data */

// a , b - means need -a<value> -b<value> parameters
// so run script as `php 1.php -a100 -b20`
$options = getopt('a:b:');
$a = $options['a'];
$b = $options['b'];

/**
 * if need extra parameter c do
 * 
 * CHANGE $options = getopt('a:b:c:');
 * ADD $c = $options['c'];
 * 
 * So, for every <x> parameter you should add "x:" into string like this $options = getopt('a:b:');
 * and add line $x = $options['x'];
 */

$square = $a * $b;

//use PHP_EOL constant for end line
echo "Площадь:" . $square . PHP_EOL;
