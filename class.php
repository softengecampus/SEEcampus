<?php 

require_once("config.php");
session_start();

if(!isset($_SESSION["user"])) header("Location: index.php");

$stmt = $db->query("SELECT * from class");
while ($row = $stmt->fetch()) {
    $id=$row['class_id'];
    $name=$row['class_name'];
    $lecturer=$row['class_lecturer'];
    echo $id.$name.$lecturer."<br>";
}

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
            <div class="v62_93"></div>
            <span class="v62_94">Welcome, Admin</span>
            <div class="v62_95">
                <a href=""><div class="v62_96"></div></a>
                <a href=""><div class="v62_97"></div></a>
                <a href=""><span class="v62_98"><?php echo $name; ?></span></a>
            </div>
            
            <div class="v62_107">
                <a href=""><div class="v62_108"></div></a>
                <a href=""><div class="v62_109"></div></a>
                <a href=""><span class="v62_110">Introduction to Zumba</span></a>
            </div>
            <div class="v62_149">
                <a href="new_class.php"><div class="v62_150">+</div></a>
            </div>
        </div>
    </body>
</html>