<?php

echo "<pre>";
print_r( $_GET);
echo "</pre>";

$result = $_GET["num1"]  + $_GET["num2"];

echo $result;

?>