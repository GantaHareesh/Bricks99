<!DOCTYPE html>
<html>
<head>
    <title>Database Connection Example</title>
</head>
<body>
    <?php
    // Database connection parameters
    $servername = "jdbc:mysql://localhost:3306";
    $username = "root";
    $password = "root";
    $database = "collage";

    // Create a connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to retrieve data from the database
    $sql = "SELECT * FROM collage";

    // Execute the query
    $result = $conn->query($sql);

    // Check if there are any rows returned
    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "ID: " . $row["id"] . "<br>";
            echo "Name: " . $row["name"] . "<br>";
            echo "Email: " . $row["email"] . "<br>";
            echo "<br>";
        }
    } else {
        echo "No results found.";
    }

    // Close the database connection
    $conn->close();
    ?>
</body>
</html>
