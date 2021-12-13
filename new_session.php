<?php 

require_once("config.php");
session_start();

if(!isset($_SESSION["user"])) header("Location: login.php");

if(isset($_POST['post'])){

    $week = filter_input(INPUT_POST, 'week', FILTER_SANITIZE_STRING);
    $date = filter_input(INPUT_POST, 'SesDate', FILTER_SANITIZE_STRING);

	$sql = "INSERT INTO attendance (week, date) VALUES (:week, :date)";
    $stmt = $db->prepare($sql);
    
    $params = array(
        ":week" => $week,
		":date" => $date,
    );

    $stmt->execute($params);

    $newpost = $stmt->fetch(PDO::FETCH_ASSOC);
	if($newpost){
            header("Location: attendance.php");
        }
    }
?>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
        <link href="./css/NewSession.css" rel="stylesheet" />
        <title>Document</title>
    </head>
    <body>
        <div class="v90_112">
            <div class="v90_113"></div>
            <span class="v90_114">New Session</span>
            <div class="v90_127">
                <div class="v90_128">
				<form action="" method="POST">
					<input type="number" class="v90_129" name="week" min="1" max="14" required>
                    <span class="v90_131">Week:</span>
                    <span class="v90_132">*</span>
                </div>
            </div>
            <div class="v90_133">
                <div class="v90_134">
                    <span class="v90_137">Date:</span>
					<input type="date" name="SesDate" class="v90_129"value="<?php echo date('Y-m-d'); ?>" required>
                    <span class="v90_138">*</span>
                </div>
            </div>
            <div class="v90_139">
                <a href=""><div class="v90_140"></div></a>
				<button type="submit" name="post" class="v90_140">CREATE</button>
            </div>
            <div class="v90_142">
				<input type="reset" class="v90_143">
            </div>
        </div>
    </body>
</html>