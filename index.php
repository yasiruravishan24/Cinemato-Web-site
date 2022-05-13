<?php

include 'config.php';
session_start();
error_reporting(0);

if (isset($_SESSION["user_id"])) {
  header("Location:home.php");
}

if (isset($_POST['signup'])) {
  $full_name = mysqli_real_escape_string($conn,$_POST['signup_full_name']);
  $email = mysqli_real_escape_string($conn,$_POST['signup_email']);
  $password = mysqli_real_escape_string($conn,md5($_POST['signup_password']));
  $cpassword = mysqli_real_escape_string($conn,md5($_POST['signup_cpassword']));

  $check_email = mysqli_num_rows(mysqli_query($conn, "SELECT email From users WHERE email = '$email'"));

  if ($password !== $cpassword) {
    echo "<script>alert('Password is not matched.');</script>";
    
  }
  elseif ($check_email > 0) {
    echo "<script>alert('Email Already Exist.');</script>";
    
  }
  else {
    $sql = "INSERT INTO users (full_name, email, password) VALUES ('$full_name', '$email', '$password')";
    $result = mysqli_query($conn , $sql);
    if ($result) {
      $_POST["signup_full_name"] = "";
      $_POST["signup_email"] = "";
      $_POST["signup_password"] = "";
      $_POST["signup_cpassword"] = "";
      echo "<script>alert('User Registration Successfull.');</script>";
    }
    else{
      echo "<script>alert('User Registration Failed.');</script>";
      
    }
  }
}

  if (isset($_POST['signin'])) {
      $email = mysqli_real_escape_string($conn, $_POST["email"]);
      $password = mysqli_real_escape_string($conn, md5($_POST["password"]));

      $check_email = mysqli_query($conn, "SELECT ID From users WHERE email = '$email' AND password = '$password'");

      if (mysqli_num_rows($check_email) > 0) {
        $row = mysqli_fetch_assoc($check_email);
        $_SESSION["user_id"] = $row['ID'];
        header("Location:home.php");
      } 
      else {
        echo "<script>alert('Email or Password Incorrect,Please Try Again.');</script>";
        
      }
  }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="login-style.css" />
    <title>CINEMATO PROFILE</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="#" method="POST" class="sign-in-form">
            <h2 class="title">Log in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="email" placeholder="Email Address"  name="email" value="<?php echo $_POST['email'];?>" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password'];?>" required/>
            </div>
            <input type="submit" value="Login" name="signin" class="btn solid" />
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
          <form action="#" class="sign-up-form" method="POST">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
            <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="signup_full_name" value = "<?php echo $_POST["signup_full_name"]; ?>" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email Address" name="signup_email" value = "<?php echo $_POST["signup_email"]; ?>" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="signup_password" value = "<?php echo $_POST["signup_password"]; ?>" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Confirm Password" name="signup_cpassword" value = "<?php echo $_POST["signup_cpassword"]; ?>" required/>
            </div>
            <input type="submit" class="btn" name="signup" value="Sign up" />
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New To Cinemato ?</h3>
            <p>
            A better way to download your favourite TV shows and movies.
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of Us ?</h3>
            <p>
            A better way to download your favourite TV shows and movies.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Log in
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>
    </section>
    <script src="app.js"></script>
  </body>
</html>
