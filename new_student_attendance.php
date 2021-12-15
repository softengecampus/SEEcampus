<?php 

require_once("config.php");
session_start();

if(!isset($_SESSION["user"])) header("Location: index.php");

if(isset($_POST['post'])){

    $sid = filter_input(INPUT_POST, 'studentid', FILTER_SANITIZE_STRING);
    $sname = filter_input(INPUT_POST, 'student_name', FILTER_SANITIZE_STRING);

	$sql = "INSERT INTO studentattendance (student_id, student_name) VALUES (:sid, :sname)";
    $stmt = $db->prepare($sql);
    
    $params = array(
        ":sid" => $sid,
		":sname" => $sname,
    );

    $stmt->execute($params);
	if($stmt){
            header("Location: attendance.php");
        }
    }
?>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
        <link href="./css/NewStudentAttendance.css" rel="stylesheet" />
        <title>Document</title>
    </head>
    <body>
        <div class="v90_181">
            <div class="v90_182"></div>
            <span class="v90_183">New Student</span>
            <div class="v90_184">
                <div class="v90_185">
				<form action="" method="POST">
                    <input type="text" class="v90_186" name="studentid" placeholder="S00000100">
                    <span class="v90_188">Student ID:</span>
                    <span class="v90_189">*</span>
                </div>
            </div>
            <div class="v90_190">
                <div class="v90_191">
                    <input type="text" class="v90_186" name="student_name" placeholder="Name">
                    <span class="v90_194">Student Name:</span>
                    <span class="v90_195">*</span>
                </div>
            </div>
            <div class="v90_196">
                <a href=""><div class="v90_197"></div></a>
                <a href=""><span class="v90_198">ADD</span></a>
            </div>
            <div class="v90_199">
                <a href=""><div class="v90_200"></div></a>
				<input type="reset" class="v90_200">
				</form>
            </div>
        </div>
    </body>
</html>