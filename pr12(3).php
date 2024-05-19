<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Employee</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <h1>Add Employee</h1>
        <form action="process_add_employee.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" required><br><br>
            <label for="city">City:</label>
            <input type="text" id="city" name="city"><br><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>
            <input type="submit" value="Add Employee">
        </form>
    </div>
</body>

</html>