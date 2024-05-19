<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = new mysqli('localhost', 'root', '', 'library_management');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $transaction_id = $_POST['transaction_id'];
    $return_date = date("Y-m-d");

    // Update book availability
    $stmt = $conn->prepare("UPDATE books b INNER JOIN transactions t ON b.id = t.book_id SET b.availability = 1 WHERE t.id = ?");
    $stmt->bind_param("i", $transaction_id);
    $stmt->execute();

    // Update return date in transaction record
    $stmt = $conn->prepare("UPDATE transactions SET return_date = ? WHERE id = ?");
    $stmt->bind_param("si", $return_date, $transaction_id);
    $stmt->execute();

    $stmt->close();
    $conn->close();

    header("Location: return_books.php?success=1");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Return Books</title>
</head>
<body>
    <h2>Return Books</h2>
    <form action="return_books.php" method="POST">
        <label for="transaction_id">Transaction ID:</label>
        <input type="number" id="transaction_id" name="transaction_id" required><br><br>
        <button type="submit">Return Book</button>
    </form>
</body>
</html>
