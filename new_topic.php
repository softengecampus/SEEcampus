<?php 

require_once("config.php");

if(isset($_POST['post'])){

    $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
    $msg = filter_input(INPUT_POST, 'msg', FILTER_SANITIZE_STRING);

	$sql = "INSERT INTO forum (forum_title, forum_message) VALUES (:title, :msg)";
    $stmt = $db->prepare($sql);
    
    $params = array(
        ":title" => $title,
		":msg" => $msg,
    );

    $stmt->execute($params);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Sanchez&display=swap" rel="stylesheet" />
        <link href="./css/main.css" rel="stylesheet" />
        <title>Document</title>
    </head>
    <body>
        <div class="v90_145">
            <div class="v90_146"></div>
            <span class="v90_147">New Forum</span>
            <div class="v90_148">
				<form action="" method="POST">
                <input type="text" name="ftitle" class="v90_149">
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
                    <a href=""><div class="v90_176"></div></a>
                    <a href=""><span class="v90_177">DISCARD</span></a>
                </div>
                <div class="v90_178">
                    <a href=""><div class="v90_179"></div></a>
					<button type="submit" name="post" class="v90_179">POST</button>
                </div>
            </div>
        </div>
    </body>
</html>