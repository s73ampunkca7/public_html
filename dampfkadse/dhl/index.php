<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sendungsverfolgung</title>
    <style>
        body {
  font-family: "Delivery",Verdana,sans-serif;
  font-weight: bold;
}

.balken {

  height: 42px;
  align-items: center;
    background: #fc0;
    border-radius: 0;
    display: flex;
    flex-direction: row;
    justify-content: center;
    margin-left: 15%;
    margin-right: 15%;
    padding: 16px 0;
    width: 1170px;
}
form {
  display: flex;
  align-content: center;
  align-items: center;
  justify-content: center;
}
.search{
  width: 24px;
    height: 24px;
    background-color: transparent;
    transition: fill 200ms;
    fill: currentColor;
    max-height: 100%;
}
.btn {
  background-color: #d40511;
  align-items: center;
    border: 2px solid #d40511;
    color: #fff;
    display: flex;
    flex: 0 0 48px;
    height: 42px;
    justify-content: center;
    outline: none;
    border-radius: 0 4px 4px 0;
    width: 85px;
}

.btntext {
  display: inline-block;
  vertical-align: super;
}

.inputfield {
  border: 1px solid #d1d1d1;
    border-radius: 4px 0 0 4px;
    border-right: 0;
    height: 42px;
    text-overflow: ellipsis;
    margin-left: 20px;
    width: 345px;
}
    </style>

</head>
<body>
<center>
    <img src="HDLUpper.png" alt=""><br>
    <div class="div"><form action="search.php" method="POST">

    <div class="balken" >
  <form>
    Sendung verfolgen
    <input type="text" name="Sendungsnummer" class="inputfield" placeholder="Sendungsnummer eingeben" value=<?php echo $_GET["Sendungsnummer"] ?>>
    <button type="submit" name="" class="btn" value="Sendung finden">
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1em" height="1em" viewBox="0 0 24 24" id="search" class="search"><defs><path id="search_svg__a" d="m21 19.794-6.063-5.938c.947-1.16 1.563-2.598 1.563-4.222C16.5 5.969 13.468 3 9.774 3 6.032 3 3 5.97 3 9.634c0 3.665 3.032 6.588 6.774 6.588 1.42 0 2.7-.418 3.79-1.16L19.673 21 21 19.794ZM4.516 9.68c0-2.83 2.32-5.103 5.21-5.103s5.21 2.274 5.21 5.103c0 2.83-2.32 5.104-5.21 5.104-2.842 0-5.21-2.274-5.21-5.104Z"></path></defs><use fill-rule="evenodd" xlink:href="#search_svg__a"></use></svg>
    <div class="btntext">Suchen</div>
  </button>
  </form>
</div>

</div>
    <img src="HDLLower.png" alt="">
    </center>
</body>
</html>
