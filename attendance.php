<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Sanchez&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
        <link href="./css/attendance.css" rel="stylesheet" /><title>Document</title>
    </head>
    <body>
        <div class="v57_531">
            <span class="v57_532">Attendance</span>
			<?php 

			require_once("config.php");
			session_start();
			// TODO: Change
			if(!isset($_SESSION["user"])) header("Location: index.php");

			$stmt = $db->query("SELECT * from attendance");
			while ($row = $stmt->fetch()) {
				$id=$row['attendance_id'];
				$week=$row['attendance_week'];
				$date=$row['attendance_date'];				
				echo "<a href='attendance_view.php?id=".$id."' style='text-decoration:none; color:black;'>
						<div class='kotak'>
							<span class='bigtext'><center>Session ".$week."</center></span><br>
							<span class='text'>ID : ".$id."</span>
						</div>
						</a>";
			} 
			?>
        </div>
    </body>
</html>