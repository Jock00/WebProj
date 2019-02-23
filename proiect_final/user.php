<!DOCTYPE html>
<html lang="en">
<head>
  <title>Studenti</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <style>
   #header-fixed {
    position: fixed;
    top: 0px; display:none;
    background-color:white;
}
         p.user
        {
            padding-right:50px;
            text-align: right;
        }
    </style>
     <script>
         function anuntz() {
             if(document.getElementById("anuntz").innerHTML == "[MODIFICA]")
                 
                     
                 
             {
                 
                 document.getElementById("anuntz").innerHTML = "[SALVEAZA]";
                 document.getElementById("anunt").contentEditable = "true";
             }
             else 
             {
                   window.location.href="http://jock123.esy.es/proiect_final/anunt.php?anunt='"+document.getElementById("anunt").textContent+"'";
                
                 document.getElementById("anuntz").innerHTML = "[MODIFICA]";
                 document.getElementById("anunt").contentEditable = "false";
             }
                 
           
}
      function delete1(id) {
                   var r = confirm("Sigur vrei sa stergi intrarea ?");
          if (r == true) {
        window.location.href="http://jock123.esy.es/proiect_final/delete.php?id="+id;
    } else {
        window.location.href="http://jock123.esy.es/proiect_final/";
    }
      
    }
          function modify(id)
        {
           // header('Location: http://alexsejoaca.esy.es/projject/update_data.php?id='+id);
           
            if(document.getElementById("tdn"+id).contentEditable=='true')
            document.getElementById("tdn"+id).contentEditable='false';
            else document.getElementById("tdn"+id).contentEditable='true';
            
             if(document.getElementById("tdm"+id).contentEditable=='true')
            document.getElementById("tdm"+id).contentEditable='false';
            else document.getElementById("tdm"+id).contentEditable='true';
            
            
             if(document.getElementById("tdr"+id).contentEditable=='true')
            document.getElementById("tdr"+id).contentEditable='false';
            else document.getElementById("tdr"+id).contentEditable='true';
            
                    if(document.getElementById("tdg"+id).contentEditable=='true')
            document.getElementById("tdg"+id).contentEditable='false';
            else document.getElementById("tdg"+id).contentEditable='true';
            
               if(document.getElementById("tdis"+id).contentEditable=='true')
            document.getElementById("tdis"+id).contentEditable='false';
            else document.getElementById("tdis"+id).contentEditable='true';
            
                if(document.getElementById("tde"+id).contentEditable=='true')
            document.getElementById("tde"+id).contentEditable='false';
            else document.getElementById("tde"+id).contentEditable='true';
            
            if(document.getElementById("tdf"+id).contentEditable=='true')
            document.getElementById("tdf"+id).contentEditable='false';
            else document.getElementById("tdf"+id).contentEditable='true';
            
            if(document.getElementById("tdin"+id).contentEditable=='true')
            {
                
   
                document.getElementById("tdin"+id).contentEditable='false';
                
                var nume = document.getElementById("tdn"+id).textContent;
                var mate = document.getElementById("tdm"+id).textContent;
                var romana = document.getElementById("tdr"+id).textContent;
                var geografie = document.getElementById("tdg"+id).textContent;
                var istorie = document.getElementById("tdis"+id).textContent;
                var engleza = document.getElementById("tde"+id).textContent;
                var franceza = document.getElementById("tdf"+id).textContent;
                var informatica = document.getElementById("tdin"+id).textContent;
           
               
                
                window.location.href = "http://jock123.esy.es/proiect_final/update.php?id="+id+"&nume="+nume+"&mate="+mate+"&romana="+romana
                +"&geografie="+geografie+"&istorie="+istorie+"&engleza="+engleza+"&franceza="+franceza+"&informatica="+informatica;

            }
            else 
                document.getElementById("tdin"+id).contentEditable='true';
            // if(document.getElementById("tdin"+id).contentEditable=='false')
                
                
        }
           function fct()
         {
             if(document.getElementById("cuser").innerHTML == "Conectat ca vizitator(conectare)")
                 window.location.href = "http://jock123.esy.es/proiect_final/Login";
             else
                 {
             document.getElementById("cuser").innerHTML = "Conectat ca vizitator";
             var kap = <?php echo setcookie("user_cookie", $row["nume"], time()-3600, "/proiect_final/");?>;
             window.location.href = "http://jock123.esy.es/proiect_final/user.php";
                 }
         }
    </script>
</head>
<body>
     <p class="user" onclick="fct()" id="cuser"><?php
            echo "Conectat ca ";
        if( $_COOKIE["user_cookie"] == true)
            echo $_COOKIE["user_cookie"]." (deconectare)";
            else echo "vizitator(conectare)";
            ?></p>
  <?php
  //  session_start([
  //  'cookie_lifetime' => 86400,
//]);
// if($_SESSION['name']==null)
       // {
// header('Location: http://jock123.esy.es/proiect_final/error.php');
  
  //  }
    ?>
        
        <?php
    
$servername = "mysql.hostinger.ro";
$username = "u872290312_inter";
$password = "alexutzu";
$dbname="u872290312_inter";
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);


// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
                                    

    
    // output data of each row
?>
    
        
<div class="container">
  <h2>Anunturi</h2>
  <p  id="anunt" contenteditable="false">
      
      
      
      
      
      <?php
      
    $sql="SELECT * from inter_proiect_student_anunt";
        
$result = $conn->query($sql);
        $i=0;
if ($result->num_rows >= 0) {
    $i = 1;
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row['anunt'];
    }
}

      ?>
      </p>
  
      <br/>
  <table class="table  table-hover header-fixed">
    <thead>
      <tr>
        <th class="col-xs-2" align="center">#</th>
        <th class="col-xs-2" align="center">Nume</th>
        <th class="col-xs-2" align="center">Matematica</th>
        <th class="col-xs-2" align="center">Romana</th>
       <th class="col-xs-2" align="center">Geografie</th>
        <th class="col-xs-2" align="center">Istorie</th>
       <th class="col-xs-2" align="center">Engleza</th>
       <th class="col-xs-2" align="center">Franceza</th>
       <th class="col-xs-2" align="center">Informatica</th>
         
        
      </tr>
    </thead>
    <tbody>
        <?php
    $sql="SELECT * from inter_proiect_student";
        
$result = $conn->query($sql);
        $i=0;
if ($result->num_rows >= 0) {
    $i = 1;
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>".$i."</td>
        <td align=\"center\" contenteditable='false' id=\"tdn".$row["id"]."\">".$row['nume']."</td>
        <td align=\"center\" contenteditable='false' id=\"tdm".$row["id"]."\">".$row['mate']."</td>
        <td align=\"center\" contenteditable='false' id=\"tdr".$row["id"]."\">".$row['romana']."</td>
        <td align=\"center\" contenteditable='false' id=\"tdg".$row["id"]."\">".$row['geografie']."</td>
        <td align=\"center\" contenteditable='false' id=\"tdis".$row["id"]."\">".$row['istorie']."</td>
        <td align=\"center\" contenteditable='false' id=\"tde".$row["id"]."\">".$row['engleza']."</td>
        <td align=\"center\" contenteditable='false' id=\"tdf".$row["id"]."\">".$row['franceza']."</td>
        <td align=\"center\" contenteditable='false' id=\"tdin".$row["id"]."\">".$row['informatica']."</td>
     
        
   
      </tr>";
        $i++;
    }
       

}
                                    
                                    mysqli_close($conn);
        
       
    ?>
      
    
    </tbody>
  </table>
</div>

    
    
</body>
</html>
