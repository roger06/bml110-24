<?php

    echo '<pre>';
    print_r($_FILES);
    echo '</pre>';  

    $tmp_name = $_FILES['myfile']['tmp_name'];
    $name = $_FILES['myfile']['name'];
    $size = $_FILES['myfile']['size'];
    $type = $_FILES['myfile']['type'];
// only upload a file if it is an image (.jpg)
// allow jpg and png files
// AND must be under 1mb
// display the image after upload.


if  ( $type == 'image/jpeg' OR $type == 'image/png') {

    if ($size < 1000000) {

        if (move_uploaded_file($tmp_name  , 'uploads/'. $name)   ) echo 'File upload a success!!!!';
        else echo "Failed!!";
    }

    else echo "File is too big";

} 
else echo "Must be a JPG or PNG image";

if (file_exists('uploads/'.$name) ) {

    ?>
<img src="<?php echo 'uploads/'.$name;?>" alt="">
<?php
}
?>
