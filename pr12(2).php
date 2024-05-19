<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>View Employees</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <h1>View Employees</h1>
        <table>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>City</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            <?php
            $conn = new mysqli('localhost', 'root', '', 'iwdpracticals');
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM premployees";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>{$row['name']}</td>";
                    echo "<td>{$row['age']}</td>";
                    echo "<td>{$row['city']}</td>";
                    echo "<td>{$row['email']}</td>";
                    echo "<td><a href='pr12(4).php?id={$row['id']}'>Edit</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No employees found</td></tr>";
            }

            $conn->close();
            ?>
        </table>
    </div>
</body>

</html>