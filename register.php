<?php
include "app.php";

if($mysqli->connect_error){
    die('Connect Error ('.$mysqli->connect_errno.')'.$mysqli->connect_error);
}
if(isset($_POST['submit'])){
    $tid=$_POST['t_id'];
    $name=$_POST['t_name'];
    $dept=$_POST['d_name'];
    $user=$_POST['u_name'];
    $password=$_POST['password'];

    $w="INSERT into teacher(T_ID,Teacher_Name,Dept_Name) values('".$tid."','".$name."','".$dept."')";
    $w2="INSERT into login(UserName,pass,T_ID) values('".$user."','".$password."','".$tid."')";

    $result=$mysqli->query($w);
    $result2=$mysqli->query($w2);

    if($result==true && $result2==true){
        echo "<script>alert('Data added successsfully')</script>";
    }else{
        echo "<script>alert('Invalid Data)</script>";

    }

}
?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
    <meta charset="utf-8" />
    <title>Register Page</title>
    <link rel="stylesheet" href="css/register.css" />
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
      <a href="login.php">
        <img src="images/back.png" alt="" />
      </a>
    </div>
    <div class="container">
      <h1>Register Form</h1>

      <form action="" method="POST">
        <div class="form-row">
          <div class="input-data">
            <input type="text" name="t_id" required />
            <div class="underline"></div>
            <label for="u_name">Enter your teacher-id</label>
          </div>
        </div>
        <div class="form-row">
          <div class="input-data">
            <input type="text" name="t_name" required />
            <div class="underline"></div>
            <label for="u_name">Enter your name</label>
          </div>
        </div>
        <div class="form-row">
          <div class="input-data">
            <input type="text" name="d_name" required />
            <div class="underline"></div>
            <label for="u_name">Enter your department name</label>
          </div>
        </div>
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
            <input type="submit" value="Register" name="submit"/>
          </div>
          <div class="input-data">
            <div class="inner"></div>
            <input type="reset" value="Reset" />
          </div>
        </div>
        <div class="text sign-up-text">
          Already have an account?
          <a href="login.php">Login Here</a>
        </div>
      </form>
    </div>
  </body>
</html>
