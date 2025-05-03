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
        $sql = "UPDATE Sendungsverfolgung SET sendungsstatus=? WHERE Sendungsnummer=?";
      
        $query = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($query, 'ss', $_POST['sendungsstatus'],  $_POST['Sendungsnummer']);
        $result = mysqli_stmt_execute($query);
       
        $sql = "INSERT INTO Sendungsverfolgung (Sendungsnummer, Empfänger, sendungsstatus) VALUES (?, ?, ?)";
      
        $query = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($query, 'sss', $_POST['Sendungsnummer'], $_POST['Empfänger'], $_POST['sendungsstatus']);
        $result = mysqli_stmt_execute($query);
       
        
        
    ?>
    <br><br><br>
   ERFOLG
</a>
    </center>


</body>
</html>