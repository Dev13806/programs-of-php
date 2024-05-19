<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $employee_id = $_POST['employee_id'];

    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'iwdpracticals';

    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "DELETE FROM employees WHERE id = $employee_id";

    if ($conn->query($sql) === TRUE) {
        echo "Employee profile deleted successfully.";
    } else {
        echo "Error deleting employee profile: " . $conn->error;
    }

    $conn->close();
}
?>