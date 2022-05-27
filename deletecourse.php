<?php
include "app.php";

if($mysqli->connect_error){
    die('Connect Error ('.$mysqli->connect_errno.')'.$mysqli->connect_error);
}

if(isset($_POST['submit'])){
    $c_id=$_POST['c_id'];
    $c_name=$_POST['c_name'];

    $t="SELECT * from coursename where C_ID='".$c_id."'";
   
    $result3=$mysqli->query($t);
    $count=mysqli_num_rows($result3);

   
        $w="DELETE from course where C_ID='".$c_id."'";
        $result=$mysqli->query($w);
    
        $w2="DELETE from coursename where C_ID='".$c_id."'";
        $result=$mysqli->query($w2);

        if($count>0){
            echo "<script>alert('Data removed successsfully')</script>";
        }else{
            echo "<script>alert('Invalid ID)</script>";

        }
   
}
?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
    <meta charset="utf-8" />
    <title>Delete Course</title>
    <link rel="stylesheet" href="css/deletecourse.css" />
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
      <a href="info.html">
        <img src="images/back.png" alt="" />
      </a>
    </div>
    <div class="container">
      <h1>Delete Course</h1>

      <form action="" method="POST">
        <div class="form-row">
          <div class="input-data">
            <input type="text" name="c_id" required />
            <div class="underline"></div>
            <label for="u_name">Enter your Course-id</label>
          </div>
        </div>
        <div class="form-row">
          <div class="input-data">
            <input type="text" name="c_name" required />
            <div class="underline"></div>
            <label for="u_name">Enter Course Name</label>
          </div>
        </div>
        

        <div class="form-row submit-btn center-align">
          <div class="input-data">
            <div class="inner"></div>
            <input type="submit" value="Delete Course" name="submit" href="info.html"/>
          </div>
          <div class="input-data">
            <div class="inner"></div>
            <input type="reset" value="Reset" />
          </div>
        </div>
      </form>
    </div>
  </body>
</html>