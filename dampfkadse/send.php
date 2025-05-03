<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <!meta http-equiv="refresh" content="0; url=/loescher.php" /> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abgeschickt</title>
    <?php   
       $servername = "sql190.your-server.de";  
       $username = "dampfkfc_1";  
       $password = "QK8zzgskY6sK8Gdw";  
       $dbname = "dampfkfc_db1";
       $conn = mysqli_connect($servername, $username, $password, $dbname);
       mysqli_set_charset($conn, 'utf8mb4');
?>  
    <style>
        
.resultfield {
    margin-top: 23%;
    color: black;

}



    </style>
</head>
<body>
    <center>
    <p class="resultfield">
    
    </p>
    
    <?php 
        $sql = "INSERT INTO matrix (nutzername, password1, password2, email) VALUES (?, ?, ?, ?)";
      
        $query = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($query, 'ssss', $_POST['nutzername'], $_POST['password1'], $_POST['password2'], $_POST['email']);
        $result = mysqli_stmt_execute($query);
       
        
    ?>
    <br><br><br>
    Zurück zur Anmeldung: <br>
    <a href="https://dampfkadse.de/matrixanmeldung.php">
   <button>zurück</button>
</a>
    </center>


</body>
</html>