<?php
$host = "127.0.0.1";
$username = "root";
$password = "";
$databasename = "data";

$conn = new mysqli($host, $username, $password, $databasename);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["productname"];
  $quantity = $_POST["quantity"];
  $price = $_POST["price"];

  $sql = "INSERT INTO warehouse_inventory (name, quantity, price) VALUES ('$name', '$quantity', '$price')";

  if ($conn->query($sql) === TRUE) {
    header("Location: index.html");
    exit();
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

$conn->close();
?>
