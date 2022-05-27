<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="css/displaycourse.css" />
    <link
      rel="shortcut icon"
      href="images/favlogo.webp"
      type="image/x-icon"
    />
  </head>
</html>


<?php
  include "app.php";

  if ($mysqli->connect_error) 
  {
    die('Connect Error (' . $mysqli->connect_errno . ')' . $mysqli->connect_error);
  }

  if (isset($_POST['add'])) 
  {
    header('location:attendance.php');
  }

  if (isset($_POST['submit'])) 
  {
    $tid = $_POST['t'];
    $query = "SELECT * from coursename,course where coursename.T_ID='" . $tid . "' and coursename.C_ID=course.C_ID";
    $result3 = $mysqli->query($query);
    $count = mysqli_num_rows($result3);

    $q2 = "SELECT * from teacher where teacher.T_ID='" . $tid . "'";
    $result4 = $mysqli->query($q2);
    $count2 = mysqli_num_rows($result4);

    if ($count > 0) 
    {
      echo "<script>alert('Course Available')</script>";
      while ($rows = $result4->fetch_assoc()) 
      {
?>
        <div class="back-button">
          <a href="viewcourse.html">
            <img src="images/back.png" alt="" />
          </a>
        </div>
        <h1 class="main-heading">Welcome 
        <?php echo $rows['Teacher_Name'];
      } ?></h1>
      <div class="blog-card">
        <div class="inner-part">
          <label for="" class="img">
            <img src="images/main.png" alt="" />
          </label>
          <div class="content">
            <span>Course Details</span>
            <div class="text">
              <?php
                while ($rows = $result3->fetch_assoc()) 
                { ?>
                  <p>Course ID: <?php echo $rows['C_ID']; ?></p>
                  <p>Course Name: <?php echo $rows['C_Name']; ?></p>
                  <p>Branch: <?php echo $rows['C_Branch']; ?></p><br>
                  <form method="POST" action="attendance.php">
                    <div class="form-row submit-btn center-align">
                      <div class="input-data">
                        <div class="inner"></div>
                        <input style="background-color:#CD6155;border:none;color:white;padding:20px;text-align:center;text-decoration:none;display: inline-block;font-size:16px;margin:4px 2px;cursor:pointer;border-radius:12px;" type="submit" value="View Course" name="add" />
                      </div>
                  </form>
              </div>
          </div>
        </div>
      </div>
    <?php
                }
    } else 
    {
    ?>
      <div class="back-button">
        <a href="/viewcourse.html">
          <img src="images/back.png" alt="" />
        </a>
      </div>

      <div id="center">
        <h1 class="main-heading">
          No Course is registered!!!
        </h1>
        <img class="nodata" src="images/no-data.jpg" alt="" />
      </div>

      <?php

      }
  }

?>