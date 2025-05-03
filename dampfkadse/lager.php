<?php
    session_start();
?>
<?php
    if ($_COOKIE["forward"] == "yes") {
        $url = "https://heimkistenbestand.dampfkadse.de/a/".$_GET['id'];
        //header("HTTP/1.1 301 Moved Permanently"); 
        header("Location: $url");
        }
?>


<?php
    $id = $_GET['id'];
    //echo $id;
?>


    <?php  
       $servername = "sql190.your-server.de";  
       $username = "dampfkfc_1";  
       $password = "QK8zzgskY6sK8Gdw";  
       $dbname = "dampfkfc_db1";
       $conn = mysqli_connect($servername, $username, $password, $dbname);
       mysqli_set_charset($conn, 'utf8mb4');
?>  

<?php
    echo $_COOKIE["forward"];
?>

<!DOCTYPE html>
<html>
<head>
  <title>lost & found</title>
  <link rel="icon" type="image/x-icon" href="Hazbin_Hotel_logo.png">
  <style>
    .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
    }
    .app_logo {
        height: 64px;
        width: 64px;
    }
  </style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body class="center">
  <br><br>
<h1>Lost&Found</h1>

<?php 
        $sql = "SELECT ID, Namestring FROM lagerbestand WHERE ID='$id'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $name = $row['Namestring'];
            }
        }
        else {
            $name = "something that belongs to Dampfkadse";
        }
        
?>
<p>It seems like you found <?php echo $name; ?></p>
<p>If you think Dampfkadse lost it, please contact them via the following form:</p>
<div id="zammad-feedback-form">form will be placed in here</div>

<script id="zammad_form_script" src="https://hilfetisch.dampfkadse.de/assets/form/form.js"></script>

<script>
$(function() {
  $('#zammad-feedback-form').ZammadForm({
    messageTitle: 'Lost and Found',
    messageSubmit: 'Submit',
    messageThankYou: 'Thanks for helping me to keep my shit together, (#%s)! We\'ll contact you as soon as possible.',
    showTitle: true,
    attachmentSupport: true
  });
});
</script>



  <form action="send2.php" method="POST">
    <p>Activate automatic redirect to the Inventory Sytsem?</p>
    <p>This can only be undone by deleting this sites cookie</p>
    <p>By klicking the "set" button, you agree to this site setting a cookie</p>
    <input type="radio" name="forward" id="yes" value="yes" />
    <label for="yes">yes</label>
    <input type="radio" name="forward" id="no" value="no" />
    <label for="no">no</label>
    <input type="submit" value="set">
  </form>
</body>
</html>



