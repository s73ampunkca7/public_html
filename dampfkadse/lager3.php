<?php
    session_start();
    if ($_COOKIE["forward"] == "yes") {
        $url = "https://heimkistenbestand.dampfkadse.de/a/".$_GET['id'];
        //header("HTTP/1.1 301 Moved Permanently"); 
        header("Location: $url");
        }
    $ch = curl_init('https://heimkistenbestand.dampfkadse.de/api/v1/users/login');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, 'username=heimkistenbestand@dampfkadse.de&password=!M$XH5MXoJ!s67');
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
    $response = curl_exec($ch);
    curl_close($ch);
    $id = $_GET['id'];
    //echo $response;
    $arr = json_decode($response, true);
    //echo $arr['token'];
    $ch = curl_init('https://heimkistenbestand.dampfkadse.de/api/v1/assets/' . $id);
    curl_setopt($ch, CURLOPT_POST, 0);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    $headers = ['Authorization: '.$arr['token']];
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $asset = curl_exec($ch);
    curl_close($ch);
    //var_dump($asset);
    //echo $asset;
    $item = json_decode($asset, true);
    var_dump($asset);
    //var_dump($item);
    echo '<br>';
    $itemname = $item['items'][0]['name'];
    $itemid = $item['items'][0]['id'];
    //$imageid = $item[][][];
?>
<?php  
// set post fields

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


<p>It seems like you found <strong><?php echo $itemname?></strong></p>
<?php

?>
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



