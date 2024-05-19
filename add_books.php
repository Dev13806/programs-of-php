<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = new mysqli('localhost', 'root', '', 'library_management');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $title = $_POST['title'];
    $author = $_POST['author'];
    $quantity = $_POST['quantity'];

    $stmt = $conn->prepare("INSERT INTO books (title, author, quantity) VALUES (?, ?, ?)");
    $stmt->bind_param("ssi", $title, $author, $quantity);
    $stmt->execute();

    $stmt->close();
    $conn->close();

    header("Location: add_books.php?success=1");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Books</title>
</head>
<body>
    <h2>Add Books</h2>
    <form action="add_books.php" method="POST">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required><br><br>
        <label for="author">Author:</label>
        <input type="text" id="author" name="author" required><br><br>
        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" min="1" required><br><br>
        <button type="submit">Add Book</button>
    </form>
</body>
</html>
