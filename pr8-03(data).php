<!DOCTYPE html>
<html>

<head>
    <title>Practical 8-03 (Data page)</title>
</head>

<body>

    <h2>Page 2</h2>

    <?php
    if (isset($_GET['name']) && isset($_GET['age'])) {
        $name = $_GET['name'];

        echo "<p>Name: $name</p>";
    } else {
        echo "<p>No information received!</p>";
    }
    ?>

</body>

</html>