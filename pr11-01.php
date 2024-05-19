<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];

    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'iwdpracticals';

    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT password FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $stored_password = trim($row['password']);

        if ($current_password == $stored_password) {
            $update_sql = "UPDATE users SET password = '$new_password' WHERE username = '$username'";

            if ($conn->query($update_sql) === TRUE) {
                echo "Password updated successfully.";
            } else {
                echo "Error updating password: " . $conn->error;
            }
        } else {
            echo "Incorrect current password.";
        }
    } else {
        echo "User not found.";
    }

    $conn->close();
}
?>