
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "livingbyl";

// Create the database connection
$db_conn = new mysqli($servername, $username, $password, $db_name);

// Verify the connection
if($db_conn->connect_error){
    die("Connection Failed: " . $db_conn-> connect_error);
}else{
    echo "The connection was successful";
}

?>