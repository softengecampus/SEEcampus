<?php 

require_once("config.php");
session_start();

if(!isset($_SESSION["user"])) header("Location: index.php");

$stmt = $db->query("SELECT * from studentattendance where attendance_id = 1");
$row = $stmt->fetch();
$id=$row['attendance_id'];
$lengthid=strlen((string)$id); 
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
            <span class="v86_122">ID : AT<?php while ($lengthid < 8){echo "0"; $lengthid=$lengthid+1;}echo $id ?></span>
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
                <span class='v57_392'>".$name."</span>
                <button type='submit' class='v57_424'>UNATTEND</button>
                <button type='submit' class='v57_448'>PERMIT</button>
                <button type='submit' class='v57_400'>ATTEND</button>
            </div>"	;
            } 
				?> 
            
                <div class="v57_592">
                    <a href="new_student_attendance.php"><span class="v57_592">+</span></a>
                </div>
            
        </div>
    </body>
    <style>
        .kumpul{
            float:left;
            width: 250px;
            height: 70px;
            position: relative;
            margin-top: 5px;
            top: -5px;
            left: 0px;
        }
    .v57_424 {
        width: 94px;
        height: 27px;
        background: rgba(234,89,93,1);
        color: white;
        opacity: 1;
        position: absolute;
        overflow: hidden;
        border-top-left-radius: 16px;
        border-top-right-radius: 16px;
        border-bottom-left-radius: 16px;
        border-bottom-right-radius: 16px;
        }
    .v57_448 {
        width: 94px;
        height: 27px;
        background: rgba(189,229,26,1);
        color: white;
        opacity: 1;
        overflow: hidden;
        border-top-left-radius: 16px;
        border-top-right-radius: 16px;
        border-bottom-left-radius: 16px;
        border-bottom-right-radius: 16px;
    }
    .v57_400 {
        width: 94px;
        height: 27px;
        background: rgba(95,221,136,1);
        color: white;
        opacity: 1;
        position: absolute;
        overflow: hidden;
        border-top-left-radius: 16px;
        border-top-right-radius: 16px;
        border-bottom-left-radius: 16px;
        border-bottom-right-radius: 16px;
    }
        .v57_591 {
  width: 73px;
  height: 73px;
  background: url("../images/v62_149.png");
  background-repeat: no-repeat;
  background-position: center center;
  background-size: cover;
  position: absolute;
  top: 200px;
  left: 320px;
  overflow: hidden;
}
.v57_592 {
  width: 73px;
  height: 73px;
  background: rgba(0, 52, 81, 1);
  position: fixed;
  top: 610px;
  left: 870px;
  border-radius: 50%;
  text-align: center;
  color: rgba(255, 255, 255, 1);
  font-size: 100px;
}
    </style>
</html>