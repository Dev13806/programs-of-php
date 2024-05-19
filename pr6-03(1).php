<!DOCTYPE html>
<html>

<head>
    <title>Practical 6-02(4)</title>
</head>

<body>
    <h2>Word Replacer</h2>
    <form method="post">
        <label for="inputString">Enter a string:</label><br>
        <input type="text" id="inputString" name="inputString" required><br>
        <label for="wordToReplace">Enter word to replace:</label><br>
        <input type="text" id="wordToReplace" name="wordToReplace" required><br>
        <label for="replacement">Enter replacement word:</label><br>
        <input type="text" id="replacement" name="replacement" required><br>
        <input type="submit" name="submit" value="Replace Word">
    </form>

    <?php
    function replaceWord($str, $wordToReplace, $replacement)
    {
        return str_replace($wordToReplace, $replacement, $str);
    }

    if (isset($_POST['submit'])) {
        $inputString = $_POST['inputString'];
        $wordToReplace = $_POST['wordToReplace'];
        $replacement = $_POST['replacement'];

        $newString = replaceWord($inputString, $wordToReplace, $replacement);

        echo "<p>Modified string: $newString</p>";
    }
    ?>
</body>

</html>