<?php

if (!include('inc/header-inc.php')){

    echo '<p>there was a problem</p>';
    
} 


?>
<body>
<h1>I am the main parent file</h1>
<?php


    require('inc/paragraph-inc.html');
?>

<h2>I am the rest of the file</h2>
    
</body>
</html>







 