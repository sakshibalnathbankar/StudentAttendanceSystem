<?php 
include "app.php";

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HomePage</title>
    <link rel="stylesheet" href="css/index.css" />
    <link
      rel="shortcut icon"
      href="images/favlogo.webp"
      type="image/x-icon"
    />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    />
    <script
      src="https://kit.fontawesome.com/da8beb7649.js"
      crossorigin="anonymous"
    ></script>
    <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
  </head>

  <body>
    <!---------NAVBAR------>

    <nav>
      <div class="logo">
        <img src="images/logo.png" alt="" class="logoimg" />
        <h4>Student Attendance Management System</h4>
      </div>
      <input type="checkbox" name="" id="click" />
      <label for="click" class="menu-btn">
        <i class="fas fa-bars"></i>
      </label>
      <ul>
      <li><a href="index.php">Home</a></li>
        <li>
          <a
            href="https://www.cumminscollege.org/wp-content/uploads/2022/03/Academic-Calendar-2021-22-SEm-1-2-R3-1.pdf"
            >Academic Calendar</a
          >
        </li>
        <li><a href="images/timetable.png">SY Timetable</a></li>
        
      </ul>
    </nav>

    <!---------GUIDELINE CONTENT------>

    <div
      class="homepage"
      style="background-image: url('images/main.png')"
    >
      <!--<h1>
        <h1>
          Keep your <span class="health">health</span> pristine get the
          <span class="vaccine">vaccine.!</span>
        </h1>
      </h1>
      <h2>- or something to that effect!</h2>-->
      <!--<div>
        <button type="button" class="btn btn-outline-light btn-1" style="margin-left:-500px;">
          Do's and Don'ts
        </button>
      </div>-->
      <div class="single-box">
        <div class="fas fa-user" style="font-size: 60px"></div>
        <div class="img-text">
          <span class="header-text">
            <a
              href="login.php"
              class="user-manual-link";
              style="color: #000000";
            >
              <!--<button type="button" class="btn btn-outline-light btn-2">-->
                Teacher Login
              
            </a>
          </span>
        </div>
      </div>
    </div>

  </body>
</html>
