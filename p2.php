<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>information</title>
</head>
<body>
     <form type=Post action="p2.php" method="post">
        <label for="username">UserName:</label>
        <input type="text" name="username">
        <br>
        <label for="Password">Password</label>
        <input type="password" name="Password">
        <br>
        <label for="Email">Email:</label>
        <input type="email" name="Email">
        <br>
        <input type="submit" name="save">
     </form>
</body>
</html>
<?php
  echo $_POST["username"]."<br>";
  echo $_POST["Password"]."<br>";
  echo $_POST["Email"]."<br>";
?>