<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Durstlöscher Bewertung</title>
   
</head>
<body>
  <center>
  <h1>Bewertung für Durstlöscher</h1>
  <h2>Bitte mit Schulnoten von 1-6 bewerten</h2>
</center>
   <div class="div">
       
       <center>
       
    
        <form class="uff" action="send.php" method="POST">
        <div>Sorte:</div>
        <select id="sorte" name="sorte">
            <option value="i">SORTE WÄHLEN</option>
            <option value="Multivitamin">Multivitamin</option>
            <option value="T Multivitamin">T Multivitamin</option>
            <option value="Eistee Pfirsich">Eistee Pfirsich</option>
            <option value="T Eistee Pfirsich">T Eistee Pfirsich</option>
            <option value="Eistee Zitrone">Eistee Zitrone</option>
            <option value="T Eistee Zitrone">T Eiste Zitrone</option>
            <option value="Apfel Orange Zitrone">Apfel Orange Zitrone</option>
            <option value="Orange">Orange</option>
            <option value="T Orange">T Orange</option>
            <option value="Sauerkirsch Zitrone">Sauerkirsch Zitrone</option>
            <option value="Karamell">Karamell</option>
            <option value="Saurer Apfel">Saurer Apfel</option>
            <option value="Zuckerwatte">Zuckerwatte</option>
            <option value="Banane Kirsch">Banane Kirsch</option>
            <option value="Eistee Mango">Eistee Mango</option>
            <option value="Waldmeister">Waldmeister</option>
            <option value="Himbeere">Himbeere</option>
            <option value="Granatapfel Zitrone">Granatapfel Zitrone</option>
            <option value="Wassermelone">Wassermelone</option>
            <option value="T Wassermelone">T Wassermelone</option>
            <option value="Cola">Cola</option>
            <option value="Energy">Energy</option>
            <option value="T Wildbeeren">T Wildbeeren</option>

            <option value="ich will trollen">ich will trollen</option>

        </select>
        <div>Erwartung an den Geschmack:</div>
        <input type="number" id="erwartung" name="erwartung" min="1" max="6" required> <br>
        <div>Geruch:</div>
        <input type="number" id="geruch" name="geruch" min="1" max="6" required> <br>
        <div>Süße:</div>
        <input type="number" id="sweetness" name="sweetness" min="1" max="6" required> <br>
        <div>Geschmack Allgemein:</div>
        <input type="number" id="allgemein" name="allgemein" min="1" max="6" required> <br>
        <div>Geschmackstreue:</div>
        <input type="number" id="geschmackstreue" name="geschmackstreue" min="1" max="6" required> <br>
        <div>Farbe:</div>
        <input type="number" id="farbe" name="farbe" min="1" max="6" required> <br>
        <div>Nachgeschmack:</div>
        <input type="number" id="nachgeschmack" name="nachgeschmack" min="1" max="6" required> <br>
        <div>Wie warscheinlich würden Sie diese Geschmacksrichtung einem Freund empfehlen:</div>
        <input type="number" id="empfehlung" name="empfehlung" min="1" max="6" required> <br>
        <div>Wie warscheinlich würden Sie diese Geschmacksrichtung einem Feind empfehlen:</div>
        <input type="number" id="antiempfehlung" name="antiempfehlung" min="1" max="6" required> <br>
        <div>Erwartung erfüllt?:</div>
        <input type="number" id="erwerf" name="erwerf" min="1" max="6" required> <br>
        <div>Bemerkung:</div>
        <textarea id="bemerkung" name="bemerkung"> </textarea> <br>
       

    
    

 
    <input type="submit" value="Abschicken">
  </form>
  </center>
</div>

</body>
</html>