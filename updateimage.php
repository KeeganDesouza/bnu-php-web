<?php

// Include the database connection file

include("_includes/config.inc");
include("_includes/dbconnect.inc");
include("_includes/functions.inc");


$image = "C:/xampp/htdocs/bnu-php-web/img/pic2.jpg";
 
// Read the image file
$imagedata = addslashes(file_get_contents($image));


// SQL query to select the student image based on the provided student ID ($_GET['id'])
$sql ="UPDATE student SET picture = '$imagedata' WHERE studentid = '20000000';"; 


// Execute the SQL query
$result = mysqli_query($conn, $sql);

// Close the database connection
mysqli_close($conn);

?>


