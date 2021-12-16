<?php 

require_once("config.php");
session_start();

if(!isset($_SESSION["user"])) header("Location: index.php");

$stmt = $db->query("SELECT * from studentattendance where attendance_id = 1");
?>

<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Sanchez&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
        <link href="./css/attendanceview.css" rel="stylesheet" />
        <title>View Attendance</title>
    </head>
    <body>
        <div class="v57_388">
            <span class="v57_389">Attendance</span>
            <span class="v86_122">ID : AT</span>
            <div class="v57_472">
                <span class="v57_473">Session 1</span>
                <span class="v57_474">January 3</span>
            </div>
            <div class="v57_390">
            </div>
            <?php 
                while ($row = $stmt->fetch()) {
                    $stat=$row['attendance_status'];
                    $name=$row['student_name'];
                    $sid=$row['student_id'];
                      
				echo "<div class='kumpul'>
                <span class='name'>".$name."</span>
                <div class='button'>
                    <button type='submit' class='v57_424' style='background: rgba(234,89,93,1);'>UNATTEND</button>
                    <button type='submit' class='v57_424' style='background: rgba(189,229,26,1);'>PERMIT</button>
                    <button type='submit' class='v57_424' style='background: rgba(95,221,136,1);'>ATTEND</button>
                </div>
            </div>"	;
            } 
				?> 
            
                <div class="v57_592">
                    <a href="new_student_attendance.php"><span class="v57_592">+</span></a>
                </div>
            
        </div>
    </body>
    <style>
.button{
            width: 325px;
            height: 30px;
            margin-top:5px;
        }
        .kumpul{
            float:left;
            width: 325px;
            height: 70px;
            position: relative;
            margin-top: 5px;
            top: 100px;
            left: 70px;
            font-size: 16px;
        }
        .name{
            margin-left: 15px;
            font-family: Poppins;
            font-weight: bold;
        }
    .v57_424 {
        width: 94px;
        height: 27px;
        color: white;
        margin-left: 10px;
        opacity: 1;
        border-top-left-radius: 16px;
        border-top-right-radius: 16px;
        border-bottom-left-radius: 16px;
        border-bottom-right-radius: 16px;
        }
.v57_592 {
  width: 73px;
  height: 73px;
  position: fixed;
  top: 610px;
  left: 870px;
  border-radius: 50%;
  text-align: center;
  color: rgba(0, 52, 81, 1);
  font-size: 90px;
  font-weight: bold;
}
        .v57_472 {
  width: 100px;
  height: 52px;
  background: url("../images/v57_472.png");
  background-repeat: no-repeat;
  background-position: center center;
  background-size: cover;
  opacity: 1;
  position: absolute;
  top: 14px;
  left: 276px;
  overflow: hidden;
}
.v57_473 {
  width: 88px;
  color: rgba(255,255,255,1);
  position: absolute;
  top: 0px;
  left: 12px;
  font-family: Poppins;
  font-weight: Regular;
  font-size: 20px;
  opacity: 1;
  text-align: right;
}
.v57_474 {
  width: 100px;
  color: rgba(255,255,255,1);
  position: absolute;
  top: 22px;
  left: 0px;
  font-family: Poppins;
  font-weight: Regular;
  font-size: 20px;
  opacity: 1;
  text-align: right;
}
    </style>
</html>