<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$databasename = "data";

$conn = new mysqli($servername, $username, $password, $databasename);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE IF NOT EXISTS warehouse_inventory (
  id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL,
  quantity INT NOT NULL,
  price DECIMAL(10, 2) NOT NULL
)";

if ($conn->query($sql) === true) {
    $selectQuery = "SELECT * FROM warehouse_inventory";
    $result = $conn->query($selectQuery);

    if ($result === false) {
        die("Error executing the query: " . $conn->error);
    }

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["quantity"] . "</td>";
            echo "<td>" . $row["price"] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='4'>No products found in inventory</td></tr>";
    }
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
