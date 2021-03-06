<?php 

require_once("config.php");
session_start();

if(!isset($_SESSION["user"])) header("Location: index.php");

if(isset($_POST['post'])){

    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);

	$sql = "UPDATE class (class_name) VALUES (:name)";
    $stmt = $db->prepare($sql);
    
    $params = array(
        ":name" => $name,
    );

    $saved = $stmt->execute($params);

    if($saved) header("Location: class.php");
}
?>
<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Sanchez&display=swap" rel="stylesheet" />
    <link href="./css/classView.css" rel="stylesheet" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Class</title>
  </head>
  <body>
    <div class="v40_33">
      <div class="v40_34"></div>
      <span class="v40_35">Class Detail</span>
      <div class="v40_45">
		<input type="text" name="class_name" class="v40_46" placeholder="Class Name">
        <div class="v40_47">
		<form action="" method="POST">
          <span class="v40_48">Class Name</span>
          <span class="v40_49">*</span>
        </div>
      </div>
      <div class="v58_157">
        <div class="v58_158">
          <span class="v58_159">Edit Picture</span>
          <div class="name"></div>
          <div class="v58_161">
			  <div class="upload-btn-wrapper">
				<button class="v58_163">+</button>
				<input type="file" id="myfile" name="file" accept="application/pdf" multiple>
			  </div>
		  </div>
		  
        </div>
      </div>
      <div class="v58_165">
        <div class="v58_166">
          <div class="v58_167"></div>
          <span class="v58_168">DISCARD</span>
        </div>
        <div class="v58_169">
          <div class="v58_170"></div>
		  <button type="submit" name="post" class="v58_170">SAVE</button>
        </div>
      </div>
    </div>
  </body>
</html>