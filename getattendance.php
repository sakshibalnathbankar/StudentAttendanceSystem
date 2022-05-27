<?php
    include "app.php";
   
        $date = $_POST["cyear"]."-".$_POST["cmonth"]."-".$_POST["cdate"];
        $query = "select * from student";
        $result=$mysqli->query($query);
        while($rows = mysqli_fetch_array($result))
        {
            $rno = $rows["RollNo"];
            if(isset($_POST[$rno]))
            
            {
                $query1 = "INSERT into attendance (RollNo,date1,attendance) values('".$rno."','".$date."','1')";
                $result2=$mysqli->query($query1);
                echo "<script>alert('Attendance taken successfully !')</script>";
            }
            else{
                $query1 = "INSERT into attendance (RollNo,date1,attendance) values('".$rno."','".$date."','0')";
                $result2=$mysqli->query($query1);
            }
           
            
        }
       header("location:printreport.php");
    
?>
    