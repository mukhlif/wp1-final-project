<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="crud.css">
    <title>Products</title>
</head>
<body>
  
<style>
    body{
        background-color: #4B4453;
    }
      .card{
        float:right;
        margin-top:1.5rem;
        margin-left:.8rem;
        margin-right:.8rem;
        background-color: #845EC2;
        color:#fff;

      
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
<!--         
        <main> 
            <div class='card' style='width: 18rem;'>
        <img src='./images/book-1.png' class='card-img-top'>
                      <div class='card-body'>
                      <h5 class='card-title'>Black Knight</h5>
                      <p class='card-text'>30$</p>
      </div>
    </div>
    <div class='card' style='width: 18rem;'>
        <img src='./images/book-2.png' class='card-img-top'>
                      <div class='card-body'>
                      <h5 class='card-title'>About The First Night</h5>
                      <p class='card-text'>20$</p>
      </div>
    </div>
    <div class='card' style='width: 18rem;'>
        <img src='./images/book-3.png' class='card-img-top'>
                      <div class='card-body'>
                      <h5 class='card-title'>Open The Sky</h5>
                      <p class='card-text'>10$</p>
      </div>
    </div>
    <div class='card' style='width: 18rem;'>
        <img src='./images/book-4.png' class='card-img-top'>
                      <div class='card-body'>
                      <h5 class='card-title'>Book Hardcover</h5>
                      <p class='card-text'>15$</p>
      </div>
    </div>
    <div class='card' style='width: 18rem;'>
        <img src='./images/book-5.png' class='card-img-top'>
                      <div class='card-body'>
                      <h5 class='card-title'>The Big Book Of Science</h5>
                      <p class='card-text'>12$</p>
      </div>
    </div>
    <div class='card' style='width: 18rem' >
        <img src='./images/book-7.png' class='card-img-top'>
                      <div class='card-body'>
                      <h5 class='card-title'>Murduring Last Year</h5>
                      <p class='card-text'>40$</p>
      </div>
    </div>
    <div class='card' style='width: 18rem;'>
        <img src='./images/book-6.png' class='card-img-top'>
                      <div class='card-body'>
                      <h5 class='card-title'>By The Air</h5>
                      <p class='card-text'>20$</p>
      </div>
    </div>
    <div class='card' style='width: 18rem;'>
        <img src='./images/book-9.png' class='card-img-top'>
                      <div class='card-body'>
                      <h5 class='card-title'>Self Care</h5>
                      <p class='card-text'>30$</p>
      </div>
    </div>
    <div class='card' style='width: 18rem;'>
        <img src='./images/book-10.png' class='card-img-top'>
                      <div class='card-body'>
                      <h5 class='card-title'>Welcome To Space</h5>
                      <p class='card-text'>30$</p>
      </div>
    </div>
    <div class='card' style='width: 18rem;'>
        <img src='./images/book-11.png' class='card-img-top'>
                      <div class='card-body'>
                      <h5 class='card-title'>Monsoon</h5>
                      <p class='card-text'>30$</p>
      </div>
    </div>
</main> -->
          <main>
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
  </div>
</div></main>
        <center>
        ";
     }
    ?>
            </main>

</body>
</html>