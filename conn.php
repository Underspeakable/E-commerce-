<?php
// database configuration
define ('DB_HOST','localhost');
define ('DB_USER','root');
define ('DB_PASS','');
define ('DB_NAME','e-commerce');



$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS ,DB_NAME);

if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}

?>