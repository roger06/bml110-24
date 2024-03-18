<?php
function sum($num1, $num2) {
    
    echo $num1 . "<br>" . $num2;
    // die();
   

    if ( !isset($num1) ) {
        echo "you need value 1";
        return false;
    }
    
    if ( !isset($num2) ) {
        echo "you need value 2";
        return false;
    }
   
   



    return $num1 + $num2;
}

$age = 10;
$years = 15;

if( !sum("Bob",$age)) {

    echo "ther's a problem";
    die;
}




echo "The sum is ";
echo "<hr>" . $total;






?>