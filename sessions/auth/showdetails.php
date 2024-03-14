<?php

session_start();

if ($_SESSION['loggedon']) {
// user is logged on so show details

    echo "username = " . $_SESSION['username'] . " ";
    echo "Password = " . $_SESSION['password'] . "<hr>";
    ?>
    <a href="logoff.php">Log off</a>
    <?php
}

// user is not logged on
else {
    echo "<p>You are not logged on</p>";
    ?>

    <p><a href="logon-form.php">Return to log in page</a>/p>

    <?php

}





?>