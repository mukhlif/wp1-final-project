<?php
session_start();

include('connect.php');
include('functions.php');
// $user_data= check_login($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <title>BookShelf</title>
</head>
<body> 
    <?php
    include('navbar.php');?>
    <div class="section">
        <div class="para">
        <h1>Get Your New Book Collections</h1>
        <a href="#explore"><button>Explore More</button></a>
    </div>
    <img src="./images/hero-banner.png" alt="">
    </div>
    <div id="explore" class="section1">
        <div class="card">
        <div>
        <img src="./images/feature-1.png" alt="">
    </div>
    <div>
        <h3>Free Shipping</h3>
        <p>Order Over 100$</p>
    </div>
    </div>
    <div  class="card">
        <div>
        <img src="./images/feature-2.png" alt="">
    </div>
    <div>
        <h3>Secure Payment</h3>
        <p>100% Secure Payment</p>
    </div>
    </div>
    <div  class="card">
        <div>
        <img src="./images/feature-3.png" alt="">
    </div>
    <div>
        <h3>Best Price</h3>
        <p>Guaranteed Low Cost</p>
    </div>
    </div>
    <div  class="card">
        <div>
        <img src="./images/feature-4.png" alt="">
    </div>
    <div>
        <h3>Easy Return</h3>
        <p>Within 30 Days Returns</p>
    </div>
    </div>
    </div>
    <!-- <section class="book">
        <h2 class="book-category">Featured Collections</h2>
        <button class="pre-btn"><img src="./images/icons8-right-arrow-50.png"></button>
        <button class="next-btn"><img src="./images/icons8-right-arrow-50.png"></button>
        <div class="book-container">
            <div class="book-card">
                <div class="book-image">
                    <span class="discount-tag">50% off</span>
                    <img src="./images/book-1.png" class="book-thumb">
                </div>
                <div class="book-info">
                    <h2 class="book-name">Black Kight</h2>
                    <span class="book-price">$80.00</span>
                </div>
            </div>
            <div class="book-card">
                <div class="book-image">
                    <span class="discount-tag">50% off</span>
                    <img src="./images/book-2.png" class="book-thumb">
                </div>
                <div class="book-info">
                    <h2 class="book-name">Black Kight</h2>
                    <span class="book-price">$80.00</span>
                </div>
            </div>
            <div class="book-card">
                <div class="book-image">
                    <span class="discount-tag">50% off</span>
                    <img src="./images/book-3.png" class="book-thumb">
                </div>
                <div class="book-info">
                    <h2 class="book-name">Black Kight</h2>
                    <span class="book-price">$80.00</span>
                </div>
            </div>
            <div class="book-card">
                <div class="book-image">
                    <span class="discount-tag">50% off</span>
                    <img src="./images/book-4.png" class="book-thumb">
                </div>
                <div class="book-info">
                    <h2 class="book-name">Black Kight</h2>
                    <span class="book-price">$80.00</span>
                </div>
            </div>
            <div class="book-card">
                <div class="book-image">
                    <span class="discount-tag">50% off</span>
                    <img src="./images/book-5.png" class="book-thumb">
                </div>
                <div class="book-info">
                    <h2 class="book-name">Black Kight</h2>
                    <span class="book-price">$80.00</span>
                </div>
            </div>
            <div class="book-card">
                <div class="book-image">
                    <span class="discount-tag">50% off</span>
                    <img src="./images/book-6.png" class="book-thumb">
                </div>
                <div class="book-info">
                    <h2 class="book-name">Black Kight</h2>
                    <span class="book-price">$80.00</span>
                </div>
            </div>
            <div class="book-card">
                <div class="book-image">
                    <span class="discount-tag">50% off</span>
                    <img src="./images/book-7.png" class="book-thumb">
                </div>
                <div class="book-info">
                    <h2 class="book-name">Black Kight</h2>
                    <span class="book-price">$80.00</span>
                </div>
            </div>
            <div class="book-card">
                <div class="book-image">
                    <span class="discount-tag">50% off</span>
                    <img src="./images/book-8.png" class="book-thumb">
                </div>
                <div class="book-info">
                    <h2 class="book-name">Black Kight</h2>
                    <span class="book-price">$80.00</span>
                </div>
            </div>
        </div>

    </section> -->
    <section class="book">
    <h2 class='book-category'>Featured Collections</h2><div class='book-container'>
    <button class='pre-btn'><img src='./images/icons8-right-arrow-50.png'></button>
    <button class='next-btn'><img src='./images/icons8-right-arrow-50.png'></button>
            
    <?php
    include('connect.php');
    $result=mysqli_query($con,"SELECT * FROM prod");
    while($row = mysqli_fetch_array($result)){
        echo "
            
                <div class='book-card'>
                    <div class='book-image'>
                        <span class='discount-tag'>50% off</span>
                        <img src='$row[image]' class='book-thumb'>
                    </div>
                    <div class='book-info'>
                        <h2 class='book-name'>$row[name]</h2>
                        <span class='book-price'>$row[price]</span>
                    </div>
                </div>
        ";
     }
    ?>
    </div>
    </section>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><img src="./images/icons8-up-arrow-50.png"  class="arrow-up"alt=""></button>
    <?php include('footer.php');?>
    <script src="open.js"></script>
</body>
</html>