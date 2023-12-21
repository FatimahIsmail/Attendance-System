<?php
//First, connect to the MySQL server.

$link = mysqli_connect("localhost", "root", "");

if (!$link) {
    die('Could not connect: ' . mysqli_connect_error());
}

//Then, create a database named "cb19078project".

$sql = "CREATE DATABASE cb19078project";

if (mysqli_query($link, $sql)) {
    echo "Database created successfully\n";
} else {
    echo 'Error creating database: ' . mysqli_connect_error() . "\n";
}

//And finally we close the connection to the MySQL server
mysqli_close($link);
?>