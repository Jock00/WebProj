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
$sql = "update inter_proiect_student set 
nume ='".$_GET['nume']."',
mate ='".$_GET['mate']."',
romana ='".$_GET['romana']."',
geografie ='".$_GET['geografie']."',
istorie ='".$_GET['istorie']."',
engleza ='".$_GET['engleza']."',
franceza ='".$_GET['franceza']."',
informatica ='".$_GET['informatica']."'



WHERE 
id=". $_GET['id']. ""  ;

if ($conn->query($sql) === TRUE) {
   header('Location: http://jock123.esy.es/proiect_final/');
  //  echo $sql;
    
} else {
    echo "Error deleting record: " . $conn->error;
}


    
    $conn->close();
?>