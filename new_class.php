<!DOCTYPE html>
<?php 

require_once("config.php");
session_start();

if(!isset($_SESSION["user"])) header("Location: index.php");

if(isset($_POST['post'])){

    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $pass = filter_input(INPUT_POST, 'pass', FILTER_SANITIZE_STRING);
    $lecturer = filter_input(INPUT_POST, 'lecturer', FILTER_SANITIZE_STRING);
    $code = filter_input(INPUT_POST, 'code', FILTER_SANITIZE_STRING);
    $credit = 3;

	$sql = "INSERT INTO class (class_name, class_credit, class_code, class_pass, class_lecturer) VALUES (:name, :credit, :code, :pass, :lecturer)";
    $stmt = $db->prepare($sql);
    
    $params = array(
        ":name" => $name,
		":credit" => $credit,
		":code" => $code,
		":pass" => $pass,
		":lecturer" => $lecturer,
    );

    $stmt->execute($params);

    $newpost = $stmt->fetch(PDO::FETCH_ASSOC);
	if($newpost){
            header("Location: class.php");
        }
    }
?>
<html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
        <link href="./css/NewClass.css" rel="stylesheet" />
        <title>New Class</title>
    </head>
    <body>
        <div class="v57_593">
            <div class="v57_594"></div>
            <form action="" method="POST">
            <span class="v57_595">New Class</span>
            <div class="v57_596">
                <input type="text" class="v57_597" name="pass" placeholder="Zumba2022">
                <div class="v57_598">
                    <span class="v57_599">*</span>
                    <span class="v57_600">Password: </span>
                </div>
            </div>
            <div class="v57_601">
                <div class="v57_603">
                    <input type="text" class="v57_597" name="code" placeholder="IntroductionToZumba_2022">
                    <span class="v57_604">Code of the class:</span>
                    <span class="v57_605">*</span>
                </div>
            </div>
            <div class="v57_611">
                <div class="v57_612">
                    <input type="text" class="v57_597" name="name" placeholder="Introduction To Zumba">
                    <span class="v57_615">Name of the class:</span>
                    <span class="v57_616">*</span>
                </div>
            </div>
            <div class="v57_617">
                <div class="v57_618">
                    <input type="text" class="v57_597" name="lecturer" placeholder="Mawar">
                    <span class="v57_621">Lecture:</span>
                    <span class="v57_622">*</span>
                </div>
            </div>
            <div class="v57_608"><!-- Make Class Button -->
                <button type="submit" name="post" class="v57_609">Make Class</button>
            </div>
            <div class="v57_623"><!-- Discard Button -->
                <a href=""><div class="v57_624"></div></a>
                <a href=""><span class="v57_625">DISCARD</span></a>
            </div>
        </div>
    </body>
</html>