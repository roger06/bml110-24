<?php
session_start();

if ( session_destroy()  ) {


    echo "You have been logged off.";

    header('refresh:3; url=logon-form.php');

    ?>

    <a href="logon-form.php">Log on</a>

    <?php


   

}



?>