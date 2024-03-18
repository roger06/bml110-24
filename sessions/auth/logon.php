<?php
session_start();

// form data posted
if (isset($_POST)) {

    if ($_POST['username'] == 'admin' AND $_POST['password'] == 'password' ) {

        $_SESSION['loggedon'] = true;
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $_POST['password'];
        echo "<p>Log on successful</p>";
        
        ?>

        <a href="showdetails.php">Go to user details page</a>

        <?php

}

// log in fails
else {
        $_SESSION['loggedon'] = false;
        echo "Log in failed - please try again";

        die();
        // redirect to log in form
    }

}

// nothing posted
else {
    echo "You need to access log on form";
    // todo - provide link or auto redirect
}




?>