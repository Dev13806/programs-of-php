<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 6-01</title>
</head>

<body>
    <h1>Currency Converter</h1>
    <form method="post">
        <label for="amount">Enter amount (in Rupees):</label>
        <input type="number" name="amount" id="amount" required>
        <br>
        <input type="submit" value="Convert">
    </form>
</body>

</html>
<?php
$amount = $_POST['amount'];

function calculateNotes($amount)
{
    $notes = array(100, 50, 20, 10, 5, 2, 1);
    $result = array();
    $remaining = $amount;

    foreach ($notes as $note) {
        $result[$note] = floor($remaining / $note);
        $remaining %= $note;
    }

    return $result;
}

$notes = calculateNotes($amount);

echo "<h2>Minimum number of notes for Rs. $amount:</h2>";
foreach ($notes as $note => $count) {
    if ($count > 0) {
        echo "$count note(s) of Rs. $note<br>";
    }
}
?>