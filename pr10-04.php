<!DOCTYPE html>
<html>

<head>
    <title>Practical 10-04</title>
</head>

<body>

    <h2>Employee Login</h2>

    <form method="post" action="pr10-04(loginpage).php">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Login">
    </form>

</body>

</html>
<?php
session_start();
if (isset($_SESSION["username"])) {
    echo "Logged in!<br>";
    echo "Name : " . $_SESSION["details"]["name"] . "<br>" . "Email : " . $_SESSION["details"]["email"] . "<br>" . "Postition : " . $_SESSION["details"]["position"];
}
?>