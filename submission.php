<?php 
require_once("config.php");
session_start();
if(!isset($_SESSION["user"])) header("Location: login.php");
?>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Sanchez&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
        <link href="./css/assignment.css" rel="stylesheet" />
        <title>Submission</title>
    </head>
    <body>
        <div class="v93_140">
            <div class="v93_141"></div>
            <!--<span class="v93_142">Introduction to Zumba</span> !-->
            <div class="v93_143">
                <a href="../Attendance/index.html"><div class="v93_144"></div></a>
                <a href="../Attendance/index.html"><div class="v93_145"></div></a>
            </div>
            <div class="v93_146">
                <a href="../ForumIN/index.html"><div class="v93_147"></div></a>
                <a href="../ForumIN/index.html"><div class="v93_148"></div></a>
            </div>
			<?php $stmt = $db->query("SELECT * from submission");
			//date blm bener
								//<span class='v93_152'>Due: ".$duedate."</span>
					while ($row = $stmt->fetch()) {
						$id=$row['submission_id'];
						$title=$row['submission_title'];
						echo "<div class='kotakpanjang'>
								<a href='submission_view.php?id=".$id."' class='fillkotakpanjang'><span class='v93_151'>".$title."</span></a>
								<span class='text'>ID : ".$id."</span>
								</div>";
					} 
				?>
            <div class="v93_157">
                <a href="../NewClass/index.html"><div class="v93_158"></div></a>
                <a href="../NewClass/index.html"><div class="v93_159"></div></a>
            </div>
        </div>
    </body>
</html>