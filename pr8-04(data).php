<!DOCTYPE html>
<html>

<head>
    <title>Practical 8-04 (Data page)</title>
</head>

<body>

    <h2>Page 2</h2>

    <?php
    if (isset($_POST['name']) && isset($_POST['age'])) {
        $name = $_POST['name'];

        echo "<p>Name: $name</p>";
    } else {
        echo "<p>No information received!</p>";
    }
    ?>

</body>

</html>