<?php 

require_once("config.php");
session_start();

if(!isset($_SESSION["user"])) header("Location: index.php");

if(isset($_POST['post'])){

    $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
    $msg = filter_input(INPUT_POST, 'msg', FILTER_SANITIZE_STRING);

	$sql = "INSERT INTO forum (forum_title, forum_message, post_by, time) VALUES (:title, :msg, :owner, :time)";
    $stmt = $db->prepare($sql);
    
    $params = array(
        ":title" => $title,
		":msg" => $msg,
		":owner" => $_SESSION["user"],
		":time" => now(),
    );

    $stmt->execute($params);

    $newpost = $stmt->execute($params);
	if($newpost){
            header("Location: forum.php");
        }
    }
?>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Sanchez&display=swap" rel="stylesheet" />
        <link href="./css/NewTopic.css" rel="stylesheet" />
        <title>Document</title>
    </head>
    <body>
        <div class="v90_145">
            <div class="v90_146"></div>
            <span class="v90_147">New Forum</span>
            <div class="v90_148">
				<form action="" method="POST">
                <input type="text" name="title" class="v90_149">
                <div class="v90_150">
                    <span class="v90_151">Forum Title</span>
                    <span class="v90_152">*</span>
                </div>
            </div>
            <div class="v90_153">
                <textarea class="v90_154" name="msg"></textarea>
                <div class="v90_155">
                    <span class="v90_156">Message</span>
                    <span class="v90_157">*</span>
                </div>
            </div>
            <div class="v90_174">
                <div class="v90_175">
					<input type="reset" class="v90_176">
                </div>
                <div class="v90_178">
                    <a href=""><div class="v90_179"></div></a>
					<button type="submit" name="post" class="v90_179">POST</button>
					</form>
                </div>
            </div>
        </div>
    </body>
</html>