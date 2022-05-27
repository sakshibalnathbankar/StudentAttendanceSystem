<?php
include "app.php";

if($mysqli->connect_error){
    die('Connect Error ('.$mysqli->connect_errno.')'.$mysqli->connect_error);
}

if(isset($_POST['submit'])){
    $course_id=$_POST['c_id'];
    $course_name=$_POST['c_name'];
    $dept=$_POST['c_dname'];
    $year=$_POST['c_year'];
    $tid=$_POST['c_tid'];

    $t="SELECT * from teacher where T_ID='".$tid."'";
    $result3=$mysqli->query($t);
    $count=mysqli_num_rows($result3);

    if($count<0){
        echo "<script>alert('Invalid ID)</script>";

    }else{
        $w2="INSERT into coursename(C_ID,C_Name,T_ID) values('".$course_id."','".$course_name."','".$tid."')";

        $result2=$mysqli->query($w2);

        $w="INSERT into course(C_ID,C_Branch,C_Year) values('".$course_id."','".$dept."','".$year."')";
        
        $result=$mysqli->query($w);
    

        if($result==true && $result2==true){
            echo "<script>alert('Data added successsfully')</script>";
        }else{
            echo "<script>alert('Invalid Data)</script>";

        }
    }
    
}
?>


<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
    <meta charset="utf-8" />
    <title>Add Course</title>
    <link rel="stylesheet" href="css/addcourse.css" />
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
      <h1>Add Course</h1>

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
        <div class="form-row">
          <div class="input-data">
            <input type="text" name="c_dname" required />
            <div class="underline"></div>
            <label for="u_name">Enter course's department name</label>
          </div>
        </div>
        <div class="form-row">
          <div class="input-data">
            <input type="text" name="c_year" required />
            <div class="underline"></div>
            <label for="u_name">Enter course's year</label>
          </div>
        </div>
        <div class="form-row">
          <div class="input-data">
            <input type="text" name="c_tid" required />
            <div class="underline"></div>
            <label for="u_name">Enter teacher-id</label>
          </div>
        </div>
     

        <div class="form-row submit-btn center-align">
          <div class="input-data">
            <div class="inner"></div>
            <input type="submit" value="Add Course" name="submit" href="info.html"/>
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



