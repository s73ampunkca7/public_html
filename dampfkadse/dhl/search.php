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
        $sql = "SELECT  Empfänger, sendungsstatus FROM Sendungsverfolgung WHERE Sendungsnummer=" .$_POST['Sendungsnummer'];
        $result = $conn->query($sql);
        //echo $result;
        //var_dump($result);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              echo "Sendungsnummer: " . $_POST['Sendungsnummer'] . $row["Sendungsnummer"]. " - Name: " . $row["Empfänger"]. " - Sendungsstatus: " . $row["sendungsstatus"]. "<br>";
            }}
        else{
        echo "Sendungsnummer nicht gefunden";
        echo "<script> window.location.href = 'https://www.dhl.de/de/privatkunden/pakete-empfangen/verfolgen.html?piececode=" . $_POST['Sendungsnummer'] . "';</script>";

        header("Location: https://www.dhl.de/de/privatkunden/pakete-empfangen/verfolgen.html?piececode=". $_POST['Sendungsnummer']);
    }
    ?>
    
    <br><br>
        <a href="https://dauerthaltlänger.de">
   <button>zurück</button>
    <br>
</a>
    </center>


</body>
</html>