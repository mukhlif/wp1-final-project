<?php
include('connect.php');
session_start();

include('connect.php');
include('functions.php');
$passwordErr="";
$usernameErr="";
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $username= $_POST['username'];
    $password= $_POST['password'];
    $role = isset($_POST['role']) ? $_POST['role'] : '';
    
    if(!empty($username) && !empty($password) && !is_numeric($username)){
        //save to db
        $id=random_num(20); 
        $query="SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";
        $result=mysqli_query($con,$query);

        if($result){
            if($result && mysqli_num_rows($result) > 0){

                $user_data= mysqli_fetch_assoc($result);
                
                if($user_data['password'] === $password && $user_data['role'] === "admin"){
                    $_SESSION['user_id'] = $user_data['user_id'];
                    $_SESSION['role'] = $user_data['role'];
                    header("location: prodpage.php");
                    die;
                }else{
                    header("location: index.php");
                }
            }
        }
        $passwordErr="Incorrect password or username";

        
    }else{
        if(empty($username)){
            $usernameErr="enter a username";
        }
        elseif(is_numeric($username)){
            $usernameErr="enter a valid username ";
        }
        if(empty($password)){
            $passwordErr="enter a password";
        }
        elseif(strlen($password) <=8){
            $passwordErr="at least 8 digits";
        }

    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="login.css">
</head>
<body>
  
    
    <div class="form-container">
        <form  class="login-form" method="post" action="login.php">
            <h2>Login</h2>
            <label>Name</label>
            <input type="text" name="username" placeholder="Enter You Name">
             <span style="color:red;"><?php echo $usernameErr;?></span>
            <br>
            <label>Password</label>
            <input type="password" name="password" placeholder="Enter Your Password">
            <span style="color:red;"><?php echo $passwordErr;?></span>

            <br>
           
            <button type="submit" name="login_user">Login</button>
            <p>You Don't have an account?</p><a href="Signup.php" class="signup-link">sign up</a>
        </form>
    </div>
</body>
</html>