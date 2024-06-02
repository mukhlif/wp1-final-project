<?php
session_start();

include('connect.php');
include('functions.php');
$passwordErr="";
$usernameErr="";
$emailErr   ="";
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $username= $_POST['username'];
    $password= $_POST['password'];
    $email   = $_POST['email'];
    if(!empty($username) && !empty($password) && !empty($email) && !is_numeric($username)){
        //save to db
        $id=random_num(10); 
        $query="INSERT into users (id,username,email,password, role) VALUES('$id','$username','$email','$password', 'user')";

        mysqli_query($con,$query);

        header("location: login.php");
        die;
    }else{
        if(empty($username)){
            $usernameErr="Enter a username";
        }
        elseif(is_numeric($username)){
            $usernameErr="Enter a valid username ";
        }
        if(empty($password)){
            $passwordErr="Enter a password";
        }
        elseif(strlen($password) <=8){
            $passwordErr="at least 8 digits";
        }
        if(empty($email)){
            $emailErr="Enter your email";
        }
        elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) { $emailErr= "Invalid email format"; }

    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="signup.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <title>Signup</title>
</head>
<body>
    
   
    <div class="form-container">
        <form class="signup-form" method="post" action="Signup.php">
        <label>Your Name:</label>
      <input type="text" name="username" placeholder="Enter Your Name:">
      <span style="color:red;"><?php echo $usernameErr;?></span>
      <br>
      <label>Your Email:</label>
      <input type="email" name="email" placeholder="Enter Your Email:">
      <span style="color:red;"><?php echo $emailErr;?></span>
      <br>
      <label >Your Password</label>
      <input type="password" placeholder="Enter Your Password:" name="password">
      <span style="color:red;"><?php echo $passwordErr;?></span>
      <br>
      <button type="submit" name="reg_user">Sign up</button>
      <p>Already have an account? <a href="login.php" class="login-link">Login</a></p>
        </form>
    </div>
</body>
</html>