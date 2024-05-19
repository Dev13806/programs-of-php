<!DOCTYPE html>
<html>

<head>
    <title>Practical 6-02(3)</title>
</head>

<body>
    <h2>Whitespace Remover</h2>
    <form method="post">
        <label for="inputString">Enter a string:</label><br>
        <input type="text" id="inputString" name="inputString" required><br>
        <input type="submit" name="submit" value="Remove Whitespace">
    </form>

    <?php
    function removeWhitespace($str)
    {
        return preg_replace('/\s+/', '', $str);
    }

    if (isset($_POST['submit'])) {
        $inputString = $_POST['inputString'];

        $noWhitespaceString = removeWhitespace($inputString);

        echo "<p>String without whitespace: $noWhitespaceString</p>";
    }
    ?>
</body>

</html>