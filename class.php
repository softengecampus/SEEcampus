<?php 

require_once("config.php");
session_start();

if(!isset($_SESSION["user"])) header("Location: index.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Sanchez&display=swap" rel="stylesheet" />
        <link href="./css/class.css" rel="stylesheet" />
        <title>Class</title>
    </head>
    <body>
        <div class="v62_92">
            <div class="base"></div>
            <span class="v62_94">Welcome, Admin</span>
				<?php $stmt = $db->query("SELECT * from class");
					while ($row = $stmt->fetch()) {
						$id=$row['class_id'];
						$name=$row['class_name'];
						echo "<div class='kotak'>
								<div class='kecil'><a href='view_class.php?id=".$id."' class='text'>".$name."</a></div></div>";
					} 
				?>  
            <div class="v62_149">
                <a href="new_class.php"><div class="v62_150">+</div></a>
            </div>
        </div>
    </body>
</html>