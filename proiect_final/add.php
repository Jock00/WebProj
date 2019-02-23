<?php
$servername = "mysql.hostinger.ro";
$username = "u872290312_inter";
$password = "alexutzu";
$dbname="u872290312_inter";
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);


// Check connection
if (!$conn) 
    die("Connection failed: " . mysqli_connect_error());

// Check connection
                                    
  if(isset($_POST['submit']))
{
    $sql = "INSERT INTO inter_proiect_student (nume, mate, romana,geografie,istorie,engleza,franceza,informatica)
    VALUES ('".$_POST["nume"]."','".$_POST["mate"]."','".$_POST["rom"]."'
    ,'".$_POST["geo"]."'
    ,'".$_POST["isto"]."'
    ,'".$_POST["engleza"]."'
    ,'".$_POST["franceza"]."'
    ,'".$_POST["informatica"]."'
    
    
    
    
    
    )";

    $result = mysqli_query($conn,$sql);
      header('Location: http://jock123.esy.es/proiect_final/index.php');
}

 mysqli_close($conn);
?>
