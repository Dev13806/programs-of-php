<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "iwdpracticals";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("SELECT id FROM users WHERE username=? AND password=?");
    $stmt->bind_param("ss", $username, $password);

    $username = $_POST["username"];
    $password = $_POST["password"];
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $_SESSION["username"] = $username;
        $stmt = $conn->prepare("SELECT * FROM employees WHERE name=?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $_SESSION['details'] = $row;
        }
        header("Location: pr10-04.php");
        exit;
    } else {
        $error_message = "Invalid username or password";
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login Result</title>
</head>

<body>

    <h2>Login Result</h2>

    <?php
    if (isset($error_message)) {
        echo "<p>$error_message</p>";
    }
    ?>

    <p><a href="pr10-04.php">Back to Login</a></p>

</body>

</html>