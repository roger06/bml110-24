<h1>Let's create a session</h1>

<?php

session_start();

$_SESSION['firstname'] = "Boby";
$_SESSION['lastname'] = "Smith";

print_r($_SESSION);
die();

echo "Student first name: "  .  $_SESSION['firstname'];
echo "<br>Student last name: "  .  $_SESSION['lastname'];


?>