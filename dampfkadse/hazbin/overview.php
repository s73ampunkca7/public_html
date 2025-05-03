<?php
    echo $_COOKIE["forward"];
?>
<!DOCTYPE html>
<html>
<head>
  <title>Hazbin Apps</title>
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
</head>
<body class="center">

<h1 class="center">Hazbin App Übersicht</h1>
<table class="center">
    <tr>
      <td><a href="bee_eats.php" class="center">
        <img src="bee_eats.png" alt="Bee Eats" class="app_logo">
        <p>Bee Eats</p>
      </a></td>
      <td><a href="email.php" class="center">
        <img src="email.png" alt="E-Mail" class="app_logo">
        <p>E-Mail</p>
    </a></td>
    <td><a href="envee.php" class="center">
        <img src="envee.png" alt="envee" class="app_logo">
        <p>envee</p>
    </a></td>
    </tr>
    <tr>
    <td><a href="horse_dressup.php" class="center">
        <img src="horse_dressup.png" alt="Horse Dressup" class="app_logo">
        <p>Horse Dressup</p>
    </a></td>
    <td><a href="lustinder.php" class="center">
        <img src="lustinder.png" alt="Lustinder" class="app_logo">
        <p>Lustinder</p>
    </a></td>
    <td><a href="maps.php" class="center">
        <img src="maps.png" alt="Maps" class="app_logo">
        <p>Maps</p>
    </a></td>
     </tr>
     <tr>
        <td><a href="messages.php" class="center">
            <img src="messages.png" alt="Messages" class="app_logo">
            <p>Messages</p>
        </a></td>
        <td><a href="moneymakerz.php" class="center">
            <img src="moneymakerz_app.png" alt="Moneymakerz App" class="app_logo">
            <p>Moneymakerz App</p>
        </a></td>       
        <td><a href="satans.php" class="center">
            <img src="satans_workout.png" alt="Satans Workout" class="app_logo">
            <p>Satans workout</p>
        </a></td>     
    </tr>
    <tr>
        <td><a href="sinstagram.php" class="center">
            <img src="sinstagram.png" alt="Sinstagram" class="app_logo">
            <p>Sinstagram</p>
        </a></td>
        <td><a href="voxflix.php" class="center">
            <img src="voxflix.png" alt="Voxflix" class="app_logo">
            <p>Voxflix</p>
        </a></td>        
        <td><a href="voxtagram.php" class="center">
            <img src="voxtagram.png" alt="Voxtagram" class="app_logo">
            <p>Voxtagram</p>
        </a></td>
      </tr>
      <tr>
        <td></td>
        <td><a href="whackdonalds.php" class="center">
            <img src="whackdonalds.png" alt="Whackdonalds" class="app_logo">
            <p>Whackdonalds</p>
        </a></td> 
        <td></td>
        </tr>
  </table>

  <form action="send.php" method="POST">
    <p>Forward?</p>
    <input type="radio" name="forward" id="yes" value="yes" />
    <label for="yes">yes</label>
    <input type="radio" name="forward" id="no" value="no" />
    <label for="no">no</label>
    <input type="submit" value="set">
  </form>
</body>
</html>