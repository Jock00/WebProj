
<?php
//session_start([
    //'cookie_lifetime' => 86400,
//]);
$servername = "mysql.hostinger.ro";
$username = "u872290312_inter";
$password = "alexutzu";
$dbname="u872290312_inter";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);


// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "select * FROM inter_proiect_student_login";
$result = $conn->query($sql);

$ok = 1;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if($row["nume"] == $_GET['username'] && $row["pass"]==$_GET['password'])
            {
          //  $_SESSION["name"]= $row['nume'];
            setcookie("user_cookie", $row["nume"], time()+3600, "/proiect_final/");
            if($row["admin"] == 0)
            header('Location: http://jock123.esy.es/proiect_final/user.php');
            else 
                header('Location: http://jock123.esy.es/proiect_final/index.php');
            $ok = 0;
        }
       
       
    }
    if($ok == 1){
        

        
        
        
        
    
    header('Location: http://jock123.esy.es/proiect_final/Login/');
} 

}

mysqli_close($conn);
?>
