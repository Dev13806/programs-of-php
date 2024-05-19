<!DOCTYPE html>
<html>

<head>
    <title>Practical 5-02</title>
</head>

<body>
    <h2>Array Sorting</h2>
    <form method="post">
        <label for="arrayInput">Enter numbers separated by commas:</label><br>
        <input type="text" id="arrayInput" name="arrayInput" required><br>
        <input type="submit" name="submit" value="Sort">
    </form>

    <?php
    function sortIndexedArray($arr)
    {
        $length = count($arr);

        for ($i = 0; $i < $length - 1; $i++) {
            for ($j = 0; $j < $length - $i - 1; $j++) {
                if ($arr[$j] > $arr[$j + 1]) {
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j + 1];
                    $arr[$j + 1] = $temp;
                }
            }
        }

        return $arr;
    }

    if (isset($_POST['submit'])) {
        $input = $_POST['arrayInput'];
        $numbers = explode(',', $input);
        $numbers = array_map('intval', $numbers);

        echo "<h3>Original array:</h3>";
        echo implode(", ", $numbers) . "<br>";

        $sortedArray = sortIndexedArray($numbers);

        echo "<h3>Sorted array:</h3>";
        echo implode(", ", $sortedArray) . "<br>";
    }
    ?>
</body>

</html>