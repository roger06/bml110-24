<?php

    $empjson = "employees.json";
    
    // echo $empjson;

    $empdata = file_get_contents($empjson);

    // echo $empdata;

    $emparray = json_decode($empdata, true);
    // echo '<pre>';     print_r($emparray);     echo '</pre>';

    foreach($emparray as $row){
        echo $row['first_name'] . ' ' .$row['last_name']. ' &pound;' 
        . number_format( $row['salary'], 2) . '<br>';
        
        // todo - convert to a function
        foreach($row['staff'] as $staff) {

            foreach ($staff as $name) {
                echo $name . "<hr>";

            }

        }

        echo '<a href="http://'.$row['website'].'">'. $row['website'] . '</a>'  ;
        
        echo '<br>***************************************************************<p>';
    }


?>

