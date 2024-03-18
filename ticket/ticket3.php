<?php
echo '<pre>';
print_r($_POST);
echo '</pre>';

$thename = $_POST['thename'];
// echo '<pre>';
// print_r($thename);
// echo '</pre>';

$totaltickets = count($thename);

if ($totaltickets > 3 ){

    echo "too many!";
    exit();


}
$totalprice = 0;

foreach($thename as $name) {

    echo $name . "<br>";
    $totalprice += 10;


}





echo "<p>Total = £ " . $totalprice . "<p>";




?>