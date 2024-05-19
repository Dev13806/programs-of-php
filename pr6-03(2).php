<!DOCTYPE html>
<html>

<head>
    <title>Practical 6-03(2)</title>
</head>

<body>
    <h2>Number Base Converter</h2>
    <form method="post">
        <label for="decimalNumber">Enter a decimal number:</label><br>
        <input type="number" id="decimalNumber" name="decimalNumber" required><br>
        <input type="submit" name="submit" value="Convert">
    </form>

    <?php
    function decimalToBinary($decimal)
    {
        return decbin($decimal);
    }

    function decimalToOctal($decimal)
    {
        return decoct($decimal);
    }

    function decimalToHexadecimal($decimal)
    {
        return dechex($decimal);
    }

    if (isset($_POST['submit'])) {
        $decimalNumber = $_POST['decimalNumber'];

        $binary = decimalToBinary($decimalNumber);
        $octal = decimalToOctal($decimalNumber);
        $hexadecimal = decimalToHexadecimal($decimalNumber);

        echo "<p>Binary representation: $binary</p>";
        echo "<p>Octal representation: $octal</p>";
        echo "<p>Hexadecimal representation: $hexadecimal</p>";
    }
    ?>
</body>

</html>