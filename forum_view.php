<!DOCTYPE html>
<?php 

require_once("config.php");
session_start();
// TODO: Change
if(!isset($_SESSION["user"])) header("Location: index.php");

$stmt = $db->query("SELECT * from forum");
while ($row = $stmt->fetch()) {
    $id=$row['id'];
    $title=$row['forum_title'];
    $detail=$row['forum_message'];
    $postby=$row['post_by'];
    $time=$row['time'];
    $lengthid=strlen((string)$id);
}

?>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Sanchez&display=swap" rel="stylesheet" />
        <link href="./css/forumView.css" rel="stylesheet" /><title>Forum</title>
    </head>
    <body>
        <div class="v54_34">
            <div class="v54_35"></div>
            <span class="v54_36">Discussion Topic</span>
            <div class="kotakpanjang">
                <span class="text" style="top:140px;font-size:10px;">ID : P<?php while ($lengthid < 8){echo "0"; $lengthid=$lengthid+1;}echo $id ?></span>
            <span class="text" style="font-weight: Bold; font-size: 18px;"><?php echo $title ;?></span>
                <span class="text" style="top:40px; font-size:10px;">Created by <?php echo $postby ;?>, <?php echo $time;?>. </span>
                <span class="text" style="top:75px;"><?php echo $detail ;?> </span>
            
            <a href="" class="link" style="left:300px;">Reply</a> <!-- Reply edit Parent -->
            <a href="" class="link" style="left:250px;">Edit</a>
                
            </div>
            
            <div class="v54_48"> <!-- Add Icon -->
                <a href=""><div class="v54_49"></div></a>
                <a href="new_topic.php"><span class="v54_50">+</span></a>
            </div>
            <div class="v54_51">
                <div class="name"></div>
                <div class="name"></div>
            </div>
            <div class="v54_54">
                <div class="name"></div>
                <div class="name"></div>
            </div>
            <span class="v100_224">ID : F00000001</span>
        </div>
    </body>
</html>