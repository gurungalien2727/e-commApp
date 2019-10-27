<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ProductsImage</title>
</head>
<body>

<h2>Inserting data to the Products Table</h2>
<br><br>

<form method="POST" action="products.php" enctype="multipart/form-data">
<label for="category">Category</label>
    <br>
    <input type="text" name="category" id="brandname">
    <br><br>
    <label for="brandname">Brandname</label>
    <br>
    <input type="text" name="brandname" id="brandname">
    <br><br>
    <label for="Price">Price</label>
    <br>
    <input type="number" name="price" id="price">
    <br><br>
    <label for="description">Description</label>
    <br>
   <textarea name="description" id="textarea"></textarea>
    <br><br><br>
    <label for="productimage">Product Image</label>
    <br><br>
    <input type="file" name="file" id="productimage">
    <br><br>
    <input type="submit" value="Upload">
    <form/>
  <br><br><br><br>
  
  <a href="login.php" style="text-decoration:none">
  <div style="background-color:blue;color:white;height:40px;width:100px;padding:8px;text-align:center;">Sign out</div>
  </a>
  
</body>
</html>