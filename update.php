
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="prodpage.css">
    <title>Update</title>
</head>
<body>
    <?php
    include('connect.php');
    $ID=$_GET['id'];
    $update= mysqli_query($con,"SELECT * FROM prod WHERE id='$ID'");
    $data  = mysqli_fetch_array($update);
    
    
    ?>
        <div class="main">
            <form action="up.php" method="post" enctype="multipart/form-data">
            <h2>Update The Products</h2>
            <img src="./images/casual-life-3d-young-couple-sitting-on-the-floor-and-reading-books.png" width="400px">
            <input type="text" name='id' value='<?php echo $data['id']?>'>
            <br>
            <input type="text" name='name' value='<?php echo $data['name']?>'>
            <br>
            <input type="text" name='price' value='<?php echo $data['price']?>'>
            <br>
            <input type="file" id="file" name='image' style="display: none;">
            <label for="file">Update Photo</label>
            <button name='update' type='submit'>Update Product</button>
            <br><br>
            <a href="productsCrud.php">View All Products</a>
            </form>
        </div>
</body>
</html>