<?php
include('connect.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="prodpage.css">
    <title>Prodpage</title>
</head>
<body>
    
        <div class="main">
            <form action="insert.php" method="post" enctype="multipart/form-data">
            <h2>Library Website</h2>
            <img src="./images/casual-life-3d-young-couple-sitting-on-the-floor-and-reading-books.png" width="400px">
            <input type="text" name='name'>
            <br>
            <input type="text" name='price'>
            <br>
            <input type="file" id="file" name='image' style="display: none;">
            <label for="file">Upload Photo</label>
            <button name='upload'>Upload Product</button>
            <br><br>
            <a href="productsCrud.php">View All Products</a>
            </form>
        </div>
    
</body>
</html>