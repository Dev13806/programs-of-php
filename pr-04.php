<?php
if (isset($_POST['num'])) {
    for ($i = 1; $i < 11; $i++) {
        echo $_POST["num"] . " x " . $i . " = " . $_POST['num'] * $i . "<br>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 4-04</title>
</head>

<body>
    <form method="post">
        <label for="num">Enter a number : </label>
        <input type="number" name="num">
        <input type="submit">
    </form>
</body>

</html>