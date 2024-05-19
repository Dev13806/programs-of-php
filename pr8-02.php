<!DOCTYPE html>
<html>

<head>
    <title>Practical 8-02</title>
</head>

<body>

    <h2>Employee Information Form</h2>

    <form method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="position">Position:</label><br>
        <input type="text" id="position" name="position" required><br><br>

        <label for="salary">Salary:</label><br>
        <input type="number" id="salary" name="salary" required><br><br>

        <input type="submit" value="Submit">
    </form>

</body>

</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $position = $_POST["position"];
    $salary = $_POST["salary"];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email address!";
        exit;
    }

    echo "<h2>Employee Information</h2>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Position:</strong> $position</p>";
    echo "<p><strong>Salary:</strong> $salary</p>";
}
?>