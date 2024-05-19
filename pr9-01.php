<!DOCTYPE html>
<html>

<head>
    <title>Practical 9-01 (Page 1)</title>
</head>

<body>

    <h2>Page 1</h2>

    <form method="post" action="pr9-01p2.php">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>
        <input type="submit" value="Go to Page 2">
    </form>

</body>

</html>
<?php 
session_start();
if (isset($_SESSION['name'])) {
    echo "Name : " . $_SESSION['name'] . "<br>";
}
?>