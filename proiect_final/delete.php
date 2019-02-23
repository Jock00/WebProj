<?php
$servername = "mysql.hostinger.ro";
$username = "u872290312_inter";
$password = "alexutzu";
$dbname="u872290312_inter";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to delete a record
$sql = "DELETE FROM inter_proiect_student WHERE id=".$_GET['id'];

if ($conn->query($sql) === TRUE) {
   header('Location: http://jock123.esy.es/proiect_final/');
} else {
    echo "Error deleting record: " . $conn->error;
}


    
    $conn->close();
?>