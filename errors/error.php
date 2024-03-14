<?php
// XAMMP on uni PCs, php.ini display_errors = On
//  dev server display_errors = Off

error_reporting(E_ALL);
ini_set('display_errors', 0);    // this 1 / 0
ini_set('display_startup_errors', 1);

echo 'hello';   // remove quote to cause error

echo '<h2>display_errors ini directive = ' . ini_get('display_errors') . "</h2>\n";

$array = [1,2,3];
echo $array[4];





$name = 'Bob';
echo $name;

die("halting script");



// get_defined_vars - https://www.php.net/manual/en/function.get-defined-vars.php

$b = array(1, 1, 2, 3, 5, 8);

$arr = get_defined_vars();

echo "<h2>get_defined_vars()</h2>\n";
// print $b
echo '<pre>';
print_r($arr);
echo '</pre>';

 

?>