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
        <title>Assignment</title>
    </head>
    <body>
        <div class="v93_140">
            <div class="v93_141"></div>
            <!--<span class="v93_142">Introduction to Zumba</span> !-->
            <div class="v93_143">
                <a href="attendance.php"><div class="v93_144"></div></a>
                <a href="attendance.php"><div class="v93_145"></div></a>
            </div>
            <div class="v93_146">
                <a href="forum_view.php"><div class="v93_147"></div></a>
                <a href="forum_view.php"><div class="v93_148"></div></a>
            </div>
			<?php $stmt = $db->query("SELECT * from assignment");
			//date blm bener
								//<span class='v93_152'>Due: ".$duedate."</span>
					while ($row = $stmt->fetch()) {
						$id=$row['assignment_id'];
						$name=$row['assignment_name'];
						$title=$row['assignment_title'];
						echo "<div class='kotakpanjang'>
								<a href='assignment_view.php?id=".$id."' class='fillkotakpanjang'><span class='v93_151'>".$title."</span></a>
								<span class='text'>ID : ".$id."</span>
								</div>";
					} 
				?>
            <div class="kotakpanjang" style="background: rgba(192,192,192,1)">
                <a href="new_assignment.php"><span class="bigtext">+</span></a>
            </div>
            <div class="v93_157">
                <a href="class.php"><div class="v93_158"></div></a>
                <a href="class.php"><div class="v93_159"></div></a>
            </div>
        </div>
    </body>
</html>