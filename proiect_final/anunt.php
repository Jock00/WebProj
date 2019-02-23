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




    $sql="update inter_proiect_student_anunt set anunt = ".$_GET['anunt']." where id=1;";
        
if ($conn->query($sql) === TRUE) {
   header('Location: http://jock123.esy.es/proiect_final/');
} else {
    echo "Error updating record: " . $conn->error;
}


// sql to delete a record

  // header('Location: http://jock123.esy.es/proiect_final/');


    
    $conn->close();
?>