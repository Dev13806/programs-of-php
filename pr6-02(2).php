<!DOCTYPE html>
<html>

<head>
    <title>Practical 6-02(1)</title>
</head>

<body>
    <h2>Lowercase Checker</h2>
    <form method="post">
        <label for="inputString">Enter a string:</label><br>
        <input type="text" id="inputString" name="inputString" required><br>
        <input type="submit" name="submit" value="Check">
    </form>

    <?php
    function isLowercase($str)
    {
        return ctype_lower($str);
    }

    if (isset($_POST['submit'])) {
        $inputString = $_POST['inputString'];

        if (isLowercase($inputString)) {
            echo "<p>The string \"$inputString\" is lowercase.</p>";
        } else {
            echo "<p>The string \"$inputString\" is not lowercase.</p>";
        }
    }
    ?>
</body>

</html>