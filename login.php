<?php
include "app.php";

if(isset($_POST['submit'])){
   $username = $_POST['u_name'];
   $password= $_POST['password'];

   $query="SELECT * from login where UserName='".$username."' and pass='".$password."'";
   $result=$mysqli->query($query);
   $count=mysqli_num_rows($result);

   if($count>0){
       echo "<script>alert('Login Successful !')</script>";
       header('location:info.html');
   }
   else{
    echo "<script>alert('Login Failed !')</script>";

   }
}
?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
    <meta charset="utf-8" />
    <title>Login Page</title>
    <link rel="stylesheet" href="css/login.css" />
    <link
      rel="shortcut icon"
      href="images/favlogo.webp"
      type="image/x-icon"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <style>
    a {
      position: relative;
      font-size: 22px;
      font-weight: 100;
      color: rgb(114, 28, 114);
      justify-content: center;
      align-items: center;
      text-align: center;
    }
    @media screen and (max-width: 900px) {
      a {
        font-size: 17px;
      }
    }
  </style>
  <body>
    <div class="back-button">
      <a href="index.php">
        <img src="images/back.png" alt="" />
      </a>
    </div>
    <div class="container">
      <h1>Login Form</h1>

      <form action="" method="POST">
        
        <div class="form-row">
          <div class="input-data">
            <input type="text" name="u_name" required />
            <div class="underline"></div>
            <label for="u_name">Enter your username</label>
          </div>
        </div>
        <div class="form-row">
          <div class="input-data">
            <input type="password" name="password" required />
            <div class="underline"></div>
            <label for="password">Enter your password</label>
          </div>
        </div>

        <div class="form-row submit-btn center-align">
          <div class="input-data">
            <div class="inner"></div>
            <input type="submit" value="Login" name="submit" href="info.html" />
          </div>
          <div class="input-data">
            <div class="inner"></div>
            <input type="reset" value="Reset" />
          </div>
        </div>
        <div class="text sign-up-text">
          Already have an account?
          <a href="register.php">Register Here</a>
        </div>
      </form>
    </div>
  </body>
</html>
