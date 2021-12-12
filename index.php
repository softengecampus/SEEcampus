<?php 

require_once("config.php");

if(isset($_POST['login'])){

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM login WHERE username=:username";
    $stmt = $db->prepare($sql);
    
    $params = array(
        ":username" => $username,
    );

    $stmt->execute($params);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if($user){
        if(password_verify($password, $user["password"])){
            session_start();
            $_SESSION["user"] = $user;
            header("Location: home.php");
        }
    }
}
?>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
        <link href="./css/main.css" rel="stylesheet" /><title>Document</title>
    </head>
    <body>
        <div class="v3_2">
			<form action="" method="POST">
				<button type="submit" name="login" class="v6_10">Login</button>
				<div class="v6_8">
					<input type="text" name="username" class="v6_6" placeholder="Username">
				</div>
				<div class="v6_9">
					<input type="password" name="password" class="v6_6" placeholder="Password">
				</div>
			</form>
            <div class="v62_153">
            </div>
        </div>
    </body>
</html>