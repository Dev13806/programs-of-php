<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 10-06</title>
</head>

<body>
    <h2>Change Password</h2>

    <form method="post" action="pr10-06(2).php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br><br>
        <label for="current_password">Current Password:</label>
        <input type="password" id="current_password" name="current_password" required>
        <br><br>
        <label for="new_password">New Password:</label>
        <input type="password" id="new_password" name="new_password" required>
        <br><br>
        <input type="submit" value="Change Password">
    </form>
</body>

</html>