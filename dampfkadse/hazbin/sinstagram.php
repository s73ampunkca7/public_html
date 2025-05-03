<?php
if ($_COOKIE["forward"] == "yes") 
    header("Location: https://instagram.com/", true);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Sinstagram</title>
  <link rel="icon" type="image/x-icon" href="sinstagram.png">
</head>
<body>
<?php echo $cookie_value ?>
<h1>This is a Heading</h1>
<p>This is a paragraph.</p>

</body>
</html>