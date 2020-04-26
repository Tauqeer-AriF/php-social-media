<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jpwebphp";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn) {
    echo "";
}
else{
    die("Connection failed because of". mysqli_connect_error());
}
?>