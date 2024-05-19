<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Employee</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <h1>Edit Employee</h1>
        <?php
        $conn = new mysqli('localhost', 'root', '', 'iwdpracticals');
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $sql = "SELECT * FROM employees WHERE id = $id";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                ?>
                <form action="process_edit_employee.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" value="<?php echo $row['name']; ?>" required><br><br>
                    <label for="age">Age:</label>
                    <input type="number" id="age" name="age" value="<?php echo $row['age']; ?>" required><br><br>
                    <label for="city">City:</label>
                    <input type="text" id="city" name="city" value="<?php echo $row['city']; ?>"><br><br>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>" required><br><br>
                    <input type="submit" value="Update Employee">
                </form>
                <?php
            } else {
                echo "Employee not found.";
            }
        }

        $conn->close();
        ?>
    </div>
</body