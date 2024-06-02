
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="prodpage.css"> -->
    <link rel="stylesheet" href="crud.css">
    <title>Prodpage</title>
</head>
<body>
    <style>
      .card{
        float:right;
        margin-top:1.5rem;
        margin-left:.8rem;
        margin-right:.8rem;
      
      }
      .card img{
        width:100%;
        height:400px;
      }
      main{
        width:100%;
      }
    </style>
    <center>
        <h3>All The Availabe Products:</h3>
    </center>
    <?php
    include('connect.php');
    $result=mysqli_query($con,"SELECT * FROM prod");
    while($row = mysqli_fetch_array($result)){
        echo "
        <center>
        
    <main> <div class='card' style='width: 18rem;'>
    <img src='$row[image]' class='card-img-top'>
                  <div class='card-body'>
                  <h5 class='card-title'>$row[name]</h5>
                  <p class='card-text'>$row[price]</p>
    <a href='delete.php? id=$row[id]' class='btn btn-danger'>Delete Product</a>
    <a href='update.php? id=$row[id]' class='btn btn-primary'>Update Product</a>
  </div>
</div></main>
        <center>
        ";
     }
    ?>

</body>
</html>