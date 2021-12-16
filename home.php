<?php
session_start();
if(!isset($_SESSION["user"])) header("Location: login.php");
?>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
        <link href="./css/main.css" rel="stylesheet"/>
        <title>Home</title>
    </head>
    <body>
        <div class="v3_16">
            <div class="v36_12"></div>
			<a href="logout.php"><span class="v36_14">Logout</span></a>
            <span class="v36_13">Welcome, Admin</span>
            <a href="forum_view.php"><div class="v54_29"></div></a><!--Forum Box-->
            <a href="attendance.php"><div class="v54_30"></div></a><!--Attendance Box-->
            <a href="new_class.php"><div class="v54_31"></div></a><!--Enrollment Box-->
            <a href="class.php"><div class="v54_33"></div></a><!--Edit Class Box-->
            <div class="v54_15">
                <a href="forum_view.php"><div class="v54_16"></div></a><!--Forum Icon-->
                <a href="forum_view.php"><div class="v54_17"></div></a><!--Forum Icon-->
            </div>
            <div class="v54_12">
                <a href="attendance.php"><div class="v54_13"></div></a><!--Attendance Icon-->
                <a href="attendance.php"><div class="v54_14"></div></a><!--Attendance Icon-->
            </div>
            <div class="v36_30">
                <div class="v36_31">
                    <a href="new_class.php"><div class="v36_32"></div></a><!--Enrollment Icon-->
                    <a href="new_class.php"><div class="v36_33"></div></a><!--Enrollment Icon-->
                </div>
            </div>
            <div class="v54_18">
                <a href="class.php"><div class="v54_19"></div></a><!--Edit Class Icon-->
                <a href="class.php"><div class="v54_20"></div></a><!--Edit Class Icon-->
            </div>
            <a href="forum_view.php"><span class="v63_50">Forum</span></a>
            <a href="new_class.php"><span class="v63_52">Enrollment</span></a>
            <a href="class.php"><span class="v90_202">Edit Class</span></a>
            <a href="attendance.php"><span class="v63_53">Attendance</span></a>
            <a href="assignment.php"><div class="v54_32"></div></a><!--Assignment Box-->
            <div class="v54_27">
                <div class="v54_21">
                    <a href="assignment.php"><div class="v54_22"></div></a><!--Assignment Icon-->
                </div>
                <a href="assignment.php"><div class="v54_26"></div></a><!--Assignment Icon-->
            </div>
            <a href="assignment.php"><span class="v63_51">Assignment</span></a>
			<div class="submissionbox">
                <div class="submissionround1">
                    <a href="submission.php"><div class="submissionround2"></div></a>
                </div>
                <a href="submission.php"><div class="submissionimg"></div></a>
            </div>
			<a href="submission.php"><span class="submissionspan">Submission</span></a>
        </div>
    </body>
</html>