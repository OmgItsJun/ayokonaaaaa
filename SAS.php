<!DOCTYPE html>
<html>
<head>
  <title>Supply Chain Management</title>
  <link rel="stylesheet" type="text/css" href="SAS.css">
</head>
<body>
  <h1>Warehouse Inventory</h1>
  <table>
  <th><form action="process.php" method="POST">
    <label for="name">Product Name:</label>
    <input type="text" name="productname" required><br>
</th>
    <th>
    <label for="quantity">Quantity:</label>
    <input type="number" name="quantity" required><br>
</th>
    <th>
    <label for="price">Price:</label>
    <input type="text" name="price" required><br>
</th>
    <th>
    <input type="submit" value="Add Product">
  </form>
</th>
</tr>
</table>
  <table>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Quantity</th>
      <th>Price</th>
    </tr>
    <?php include 'display.php'; ?>
  </table>
</body>
</html>
