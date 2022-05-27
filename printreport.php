<?php
include "app.php";
if (isset($_POST['print_r'])) {
    header('location:print_r.php');
}

?>

<title>Attendance Report</title>
<link
      rel="shortcut icon"
      href="images/favlogo.webp"
      type="image/x-icon"
    />
<style type="text/css">
    * {
        font-family: "Poppins", sans-serif;
    }

    /***********NAVIGATION***********/
    nav {
        margin-left: -15px;
        margin-top: -15px;
        margin-right: -20px;
        height: 100px;
        background: black;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0px 50px 0px 100px;
        font-family: "Open Sans", sans-serif;
    }

    nav .logo {
        margin-left: -72px;
        display: flex;
        font-size: 26px;
        color: white;
    }

    nav.logo.active {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 1000;
    }

    nav .logo h4 {
        margin: 10px;
        font-weight: 100;
    }

    nav .logo img {
        height: 50px;
        width: 60px;
        margin-top: 5px;
        filter: invert(100%);
    }

    nav ul {
        display: flex;
        list-style: none;
    }

    nav ul li a {
        color: white;
        text-decoration: none;
        font-size: 17px;
        padding: 7px 7px;
        border-radius: 3px;
        transition: all 0.3s ease;
    }

    nav ul li a:hover,
    nav ul li a.active {
        background: white;
        color: black;
    }

    nav ul li {
        margin: 0 7px;
    }

    nav .menu-btn i {
        color: #fff;
        font-size: 20px;
        cursor: pointer;
        display: none;
    }

    #click:checked~.menu-btn i::before {
        content: "\f00d";
    }

    #click {
        display: none;
    }

    #click:checked~ul {
        left: 0%;
    }

    @media (max-width: 940px) {
        nav ul {
            position: fixed;
            top: 60px;
            left: -100%;
            background-color: #111;
            height: 100vh;
            width: 100%;
            display: block;
            text-align: center;
            transition: all 0.5s ease;
            z-index: 1000;
        }

        nav ul li {
            margin: 40px 0;
        }

        nav ul li a {
            font-size: 20px;
            display: block;
        }

        nav ul li a:hover,
        nav ul li a.active {
            background: none;
            color: cyan;
        }

        nav .menu-btn i {
            display: block;
        }
    }

    .style1 {
        font-family: "Courier New", Courier, monospace;
        font-size: 60px;
        color: #FFFFFF;
        font-style: italic;
    }

    .style2 {
        font-size: 20px;
        color: #ffffff
    }

    .style6 {
        font-size: 14px;
        font-weight: 500;
        color: #009879;
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }

    th,
    td {
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2
    }

    th {
        background-color: #04AA6D;
        color: white;
    }

    /***************TABLE CSS**************/
    .content-table {
        border-collapse: collapse;
        margin: 25px 0;
        font-size: 0.9em;
        min-width: 400px;
        border-radius: 5px 5px 0 0;
        overflow: hidden;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    }

    .content-table thead tr {
        background-color: #009879;
        color: #ffffff;
        text-align: left;
        font-weight: bold;
    }

    .content-table th,
    .content-table td {
        padding: 12px 15px;
    }

    .content-table tbody tr {
        border-bottom: 1px solid #dddddd;
    }

    .content-table tbody tr:nth-of-type(even) {
        background-color: #f3f3f3;
    }

    .content-table tbody tr:last-of-type {
        border-bottom: 2px solid #009879;
    }

    .content-table tbody tr.active-row {
        font-weight: bold;
        color: #009879;
    }

    .button1 {
        background-color: #009879;
        color: #ffffff;
        border: none;
        padding: 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 18px;
        margin: 4px 2px;
        cursor: pointer;
        font-weight: bold;
    }

    .button1 {
        border-radius: 12px;
    }

    .button2 {
        background-color: #009879;
        color: #ffffff;
        border: none;
        padding: 15px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        font-weight: bold;
    }

    .button2 {
        border-radius: 12px;
    }

    .report-table {
        margin-top: 10em;
    }
    .attend{
        font-weight: bold;
        font-size: 26px;
        color: #009879;
        margin-left: 50px;
    }
</style>

<form method="POST">
    <table width="800">
        <tr>
            <td>
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
                            <a href="https://www.cumminscollege.org/wp-content/uploads/2022/03/Academic-Calendar-2021-22-SEm-1-2-R3-1.pdf">Academic Calendar</a>
                        </li>
                        <li><a href="images/timetable.png">SY Timetable</a></li>

                    </ul>
                </nav>
            </td>
        </tr>
        <tr>
            <td>
                <div align="center">
                    <?php
                    include "app.php";
                    ?>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div align="center">
                    <form action="" method="post">
                        <table class="content-table">
                            <thead>
                                <tr>
                                    <td colspan="3" align="center">
                                        <h3>
                                            <center style="font-size:22px;">Search Enrolment No. Wise Records Here</center>
                                        </h3>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td width="308">
                                        <div align="center"><strong><span class="style2" style="font-size:22px;color: #009879;">Enter the enrolment no</span></strong></div>
                                    </td>
                                    <td width="144"><span class="style6">
                                            <input type="text" name="eno" size="20" />
                                        </span></td>
                                    <td width="200">
                                        <input class="button1" type="submit" value="View Information" name="btnsubmit" />
                                        
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
            </td>
        </tr>
        <?php
        if (isset($_POST["btnsubmit"])) {
            $eno = $_POST['eno'];
            $query = "select * from `student` where RollNo = " . $eno . " limit 1";

            $result = $mysqli->query($query);
            while ($rec = mysqli_fetch_array($result)) {
                echo   '<tr><td colspan="2">
                            <table width="90%" border="1" align="center" bordercolor="009879" bgcolor="#ffffff">
				                <tr bgcolor="#009879">
				                <td width="160"><span class="style2">Enrolment No</span></td>
				                <td width="160"><span class="style2">First Name</span></td>
                                <td width="160"><span class="style2">Last Name</span></td><br>';
                                $query1 = "select * from `attendance` where `RollNo` = " . $rec["RollNo"] . " order by date1";
                                $result1 = $mysqli->query($query1);
                                while ($rec1 = mysqli_fetch_array($result1)) 
                                {
                                    echo '<td bgcolor="#009879" class=style2>' . $rec1["date1"] . '</td>';
                                }
                        echo   '</tr>
				                <tr>
				                    <td width="222"><span class="style6">' . $rec["RollNo"] . '</span></td>
				                    <td width="222"><span class="style6">' . $rec["F_Name"] . '</span></td>
                                    <td width="222"><span class="style6">' . $rec["L_Name"] . '</span></td>';
                                    $query1 = "select *from `attendance` where `RollNo` = " . $rec["RollNo"] . " order by date1";
                                    $result1 = $mysqli->query($query1);
                                    while ($rec1 = mysqli_fetch_array($result1)) 
                                    {
                                    echo '<td>';
                                            if ($rec1["attendance"] == 0)
                                                echo '<span style="color: red; font-weight: bold;"> A </span>';
                                            else
                                                echo "P";
                                    echo '</td>';
                                    }

                        echo    '</tr>
							
			                </table>
                        </td> </tr>
                        <tr>
                            <td>
                            <br><br>
                            <div align="left"><strong><span class="style2" style="font-size:20px;color: #009879;">Attendance Percentage</span></strong></div>
                            </td>
                        </tr>';
                   
            }
        } 
        else 
        {

            $query = "select * from `student` ";

            $result = $mysqli->query($query);

            while ($rec = mysqli_fetch_array($result)) 
            {
                echo '<tr><td colspan="2">
                    <table width="90%" border="1" align="center" bordercolor="009879" bgcolor="#ffffff">
				        <tr bgcolor="#009879">
				            <td width="160"><span class="style2">Enrolment No</span></td>
				            <td width="160"><span class="style2">First Name</span></td>
                            <td width="160"><span class="style2">Last Name</span></td><br>';
                            $query1 = "select * from `attendance` where `RollNo` = " . $rec["RollNo"] . " order by date1";
                            $result1 = $mysqli->query($query1);
                            while ($rec1 = mysqli_fetch_array($result1)) 
                            {
                                echo '<td class=style2>' . $rec1["date1"] . '</td>';
                            }
                echo    '</tr>
				        <tr bgcolor="#ffffff">
				            <td width="222"><span class="style6">' . $rec["RollNo"] . '</span></td>
				            <td width="222"><span class="style6">' . $rec["F_Name"] . '</span></td>
                            <td width="222"><span class="style6">' . $rec["L_Name"] . '</span></td>';
                            $query1 = "select *from `attendance` where `RollNo` = " . $rec["RollNo"] . " order by date1";
                            $result1 = $mysqli->query($query1);
                            while ($rec1 = mysqli_fetch_array($result1)) 
                            {
                                echo '<td>';
                                    if ($rec1["attendance"] == 0)
                                        echo '<span style="color: red; font-weight: bold;"> A </span>';
                                    else
                                        echo "P";
                                echo '</td>';
                            }

                echo    '</tr>
								
			        </table></td></tr>';
            }
        }
        ?>
    </table>
</form>

<?php
    if (isset($_POST['btnsubmit'])) {
        $eno=$_POST['eno'];
        $r="SELECT count(attendance) from attendance where RollNo='".$eno."'";
        $r2="SELECT count(attendance) from attendance where RollNo='".$eno."' and attendance=1";
                      
        $result=$mysqli->query($r);
        $row=mysqli_fetch_array($result);
                    
        $result2=$mysqli->query($r2);
        $row2=mysqli_fetch_array($result2);
                    
         $att=($row2[0]/$row[0])*100;
?>
                
<div class="attend">
    <?php printf("%d%% \n", $att); ?>
</div>
<?php }  ?>
                
