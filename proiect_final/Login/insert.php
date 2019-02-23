
<?php
$servername = "mysql.hostinger.ro";
$username = "u256443097_jbny";
$password = "alexutzu";
$dbname="u256443097_jbny";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);


// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql="SELECT email from user ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
$user=1;
$pass_rep=1;
    $ok=1;
while($row = $result->fetch_assoc()) {
    if($row["email"] == $_POST['username'])
      {
    $ok=0;
       

    
    }
}
    if($ok==0)
    {
      
        echo "<script type=\"text/javascript\">
if(confirm(\"Username existent\")) window.location.replace(\"http://alexsejoaca.esy.es/bd/Login/Register.html\");
else 
window.location.replace(\"http://bfy.tw/I1XF\");
</script>";
        //sleep(5);
        //header("Location:http://alexsejoaca.esy.es/site/girlshare.ro_BD%20(3)/BD/Login/index.html");
    }

else 
{
   // echo $_POST['password']." ".$_POST['password2'];
    if( $_POST['password']!= $_POST['password2'])
    {
        echo "<script type=\"text/javascript\">
if(confirm(\"Parolele nu corespund\")) window.location.replace(\"http://alexsejoaca.esy.es/bd/Login/Register.html\");
else 
window.location.replace(\"http://bfy.tw/I1XF\");
</script>";
    }
    else
    {
        $insert="INSERT INTO user values 
        ('".$_POST["username"]."','".$_POST["password"]."','".$_POST["query"]."');";
            
         

            if ($conn->query($insert) === TRUE) {
                header("Location: http://alexsejoaca.esy.es/bd/Elevi/");
die();
                
                
             //   echo "New record created successfully";
                }           
        else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

    }
    
}
        
}




mysqli_close($conn);
?>
