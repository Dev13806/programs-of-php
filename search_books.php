<?php
$conn = new mysqli('localhost', 'root', '', 'library_management');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $search_query = $_POST['search_query'];

    $stmt = $conn->prepare("SELECT * FROM books WHERE title LIKE ? OR author LIKE ?");
    $search_query = "%$search_query%";
    $stmt->bind_param("ss", $search_query, $search_query);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "Title: " . $row['title'] . "<br>";
            echo "Author: " . $row['author'] . "<br>";
            echo "Quantity: " . $row['quantity'] . "<br><br>";
        }
    } else {
        echo "No books found.";
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Books</title>
</head>
<body>
    <h2>Search Books</h2>
    <form action="search_books.php" method="POST">
        <label for="search_query">Search:</label>
        <input type="text" id="search_query" name="search_query" required><br><br>
        <button type="submit">Search</button>
    </form>
</body>
</html>
