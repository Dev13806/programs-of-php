<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 10-05</title>
</head>

<body>
    <h2>Delete Employee Profile</h2>

    <form method="post" action="pr10-05(2).php">
        <label for="employee_id">Select Employee:</label>
        <select name="employee_id" id="employee_id">
            <?php
            $db_host = 'localhost';
            $db_user = 'root';
            $db_pass = '';
            $db_name = 'iwdpracticals';

            $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT id, name FROM employees";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
                }
            }

            $conn->close();
            ?>
        </select>
        <br><br>
        <input type="submit" value="Delete">
    </form>
</body>

</html>