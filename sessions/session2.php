<?php
session_start();
echo "Student first name: "  .  $_SESSION['firstname'];
echo "<br>Student last name: "  .  $_SESSION['lastname'];

?>