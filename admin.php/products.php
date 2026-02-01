<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Add Product - Admin Panel</title>
  <style>
    body {
  font-family: Arial, sans-serif;
  background: #f4f6f9;
  margin: 0;
  padding: 0;
}

.form-container {
  max-width: 500px;
  margin: 50px auto;
  background: #fff;
  padding: 30px;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}

.form-container h2 {
  margin-bottom: 20px;
  text-align: center;
  color: #343a40;
}

.form-group {
  margin-bottom: 15px;
}

.form-group label {
  display: block;
  margin-bottom: 6px;
  font-weight: bold;
  color: #555;
}

.form-group input[type="text"],
.form-group input[type="file"] {
  width: 100%;
  padding: 10px;
  border: 1px solid #ddd;
  border-radius: 6px;
  font-size: 14px;
}

.form-group input[type="text"]:focus {
  border-color: #007bff;
  outline: none;
}

.btn {
  width: 100%;
  padding: 12px;
  background: #007bff;
  color: #fff;
  border: none;
  border-radius: 6px;
  font-size: 16px;
  cursor: pointer;
  transition: background 0.3s ease;
}

.btn:hover {
  background: #0056b3;
}

  </style>
</head>
<body>
  <div class="form-container">
    <h2>Add New Product</h2>
    <form action="products.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" placeholder="Enter product title" required>
      </div>

      <div class="form-group">
        <label for="description">Description</label>
        <input type="text" name="description" id="description" placeholder="Enter product description" required>
      </div>

      <div class="form-group">
        <label for="price">Price</label>
        <input type="text" name="price" id="price" placeholder="Enter product price" required>
      </div>

      <div class="form-group">
        <label for="category">Category</label>
        <input type="text" name="category" id="category" placeholder="Enter product category" required>
      </div>

      <div class="form-group">
        <label for="image">Product Image</label>
        <input type="file" name="image" id="image">
      </div>
            <?php
include "connect.php";
if(isset($_POST['submit'])){
$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];
$category = $_POST['category'];

$imageName = $_FILES['image']['name'];
$tmp = $_FILES['image']['tmp_name'];
move_uploaded_file($tmp,"uploads/".$imageName);
$imagePath = "http://localhost/store/admin.php/uploads/".$imageName;


$query = "INSERT INTO store(title,description,price,category,image) VALUES('$title','$description','$price','$category','$imagePath')";
mysqli_query($conn,$query);
echo "Product added";

}

?>
      <button type="submit" name="submit" class="btn">Add Product</button>

    </form>
  </div>
</body>
</html>

