<!DOCTYPE html>
<html>

<head>
    <title>Practical 10-01</title>
</head>

<body>

    <h2>Add Employee</h2>

    <form method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="position">Position:</label><br>
        <input type="text" id="position" name="position" required><br><br>

        <input type="submit" value="Add Employee">
    </form>

</body>

</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iwdpracticals";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO employees (name, email, position) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $position);

$name = $_POST["name"];
$email = $_POST["email"];
$position = $_POST["position"];
$stmt->execute();

echo "New employee added successfully";

$stmt->close();
$conn->close();
?>