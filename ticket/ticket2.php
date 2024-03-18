<h1>Please fill in details below</h1>
<?php
    $numtickets = $_POST['numtickets'];

    echo $numtickets;
?>

<form action="ticket3.php" method="post">
<?php
    $count = 1;
    while ($count <= $numtickets) {

       echo  '<p>Enter name number '. $count . ' <input type="text" name="thename[]"></p>';
       $count++;

    } 


?>
<input type="submit" name="button" value="Go">

</form>