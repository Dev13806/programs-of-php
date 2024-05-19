<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = new mysqli('localhost', 'root', '', 'library_management');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $book_id = $_POST['book_id'];
    $member_id = $_POST['member_id'];
    $issue_date = date("Y-m-d");
    $return_date = date("Y-m-d", strtotime("+2 weeks")); // Return date after 2 weeks

    // Update book availability
    $stmt = $conn->prepare("UPDATE books SET availability = 0 WHERE id = ?");
    $stmt->bind_param("i", $book_id);
    $stmt->execute();

    // Record transaction
    $stmt = $conn->prepare("INSERT INTO transactions (book_id, member_id, issue_date, return_date) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("iiss", $book_id, $member_id, $issue_date, $return_date);
    $stmt->execute();

    $stmt->close();
    $conn->close();

    header("Location: issue_books.php?success=1");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Issue Books</title>
</head>
<body>
    <h2>Issue Books</h2>
    <form action="issue_books.php" method="POST">
        <label for="book_id">Book ID:</label>
        <input type="number" id="book_id" name="book_id" required><br><br>
        <label for="member_id">Member ID:</label>
        <input type="number" id="member_id" name="member_id" required><br><br>
        <button type="submit">Issue Book</button>
    </form>
</body>
</html>
