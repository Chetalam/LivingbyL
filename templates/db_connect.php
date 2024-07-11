
// create the database connection using constants previously created.

// Inserting constants content 


<?php 

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "livingbyl";

// Create the database connection
$dbConn = new mysqli($servername, $username, $password, $db_name);

// Verify the connection
if($dbConn->connect_error){
    die("Connection Failed: " . $dbConn-> connect_error);
}
    echo "The connection was successful";


?>