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
    <input type="number" name="price" id="email">
    <br><br><br>
    <label for="productimage">Product Image</label>
    <br><br>
    <input type="file" name="file" id="productimage">
    <br><br>
    <input type="submit" value="Upload">
    <form/>
    
</body>
</html>