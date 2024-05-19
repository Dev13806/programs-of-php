<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Books</title>
</head>
<body>
    <h2>All Books</h2>
    <table border="1">
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>ISBN</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Database connection
            $servername = "localhost";
            $username = "root";
            $password = ""; // If you have set a password, update it here
            $database = "library_management";

            $conn = new mysqli($servername, $username, $password, $database);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Fetch all books
            $sql = "SELECT * FROM books";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    // Determine book status
                    $status = "Available";
                    if (isset($row["book_id"])) {
                        $book_id = $row["book_id"];
                        $check_sql = "SELECT * FROM issued_books WHERE book_id = $book_id";
                        $check_result = $conn->query($check_sql);
                        if ($check_result->num_rows > 0) {
                            $status = "Issued";
                        }
                    } else {
                        $status = "Unknown";
                    }

                    echo "<tr>";
                    echo "<td>" . $row["title"] . "</td>";
                    echo "<td>" . $row["author"] . "</td>";
                    echo "<td>";
                    if (isset($row["isbn"])) {
                        echo $row["isbn"];
                    } else {
                        echo "N/A";
                    }
                    echo "</td>";
                    echo "<td>" . $status . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No books found</td></tr>";
            }
            ?>
        </tbody>
    </table>
    <a href="add_books.php">Add Books</a>
</body>
</html>
