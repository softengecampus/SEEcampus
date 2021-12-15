<?php 

require_once("config.php");
session_start();
if(!isset($_SESSION["user"])) header("Location: index.php");

if(isset($_POST['post'])){

    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
    $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
    $file = $_POST["file"];
	$duedate = filter_input(INPUT_POST, 'duedate', FILTER_SANITIZE_STRING);

	$sql = "INSERT INTO assignment (assignment_name, assignment_title, assignment_description, assignment_file, assignment_duedate) VALUES (:name, :title, :description, :file, :duedate)";
    $stmt = $db->prepare($sql);
    
    $params = array(
        ":name" => $name,
		":title" => $title,
		":description" => $description,
		":file" => $file,
		":duedate" => $duedate,
    );

    $saved = $stmt->execute($params);

    if($saved) header("Location: new_assignment.php");
}
?>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Sanchez&display=swap" rel="stylesheet" />
        <link href="./css/AssignmentNew.css" rel="stylesheet" />
        <title>New Assignment</title>
    </head>
    <body>
        <div class="v93_104">
            <div class="v93_105"></div>
            <form action="" method="POST">
            <span class="v93_106">New Assignment</span>
            <div class="v93_107">
                <textarea class="v93_108" name="description" placeholder= "Description"></textarea>
                <div class="v93_109">
                    <span class="v93_110">Description</span>
                    <span class="v93_111">*</span>
                </div>
            </div>
            <div class="v93_121">
                <div class="v93_122">
                    <span class="v93_123">Add Attachment</span>
                    <div class="name"></div>
                    <div class="v93_125"></div>
                    <span class="v93_126">You can add the files here.</span>
                    <div class="upload-btn-wrapper">
                        <button class="v93_125">+</button>
                        <input type="file" id="myfile" name="file" accept="application/pdf" multiple>
                    </div>
                </div>
            </div>
			<div class="dd">
				<span class="v93_123">Due Date</span>
					
            </div>
			<input type="date" name="duedate" class="sesdate"value="<?php echo date('Y-m-d'); ?>" required>
            <div class="v93_128">
                <input type="text" class="v93_129" name="name" placeholder="Assignment 1">
                <div class="v93_130">
                    <span class="v93_131">Assignment Name</span>
                    <span class="v93_132">*</span>
                </div>
            </div>
            <div class="title">
                <input type="text" class="v93_129" name="title" placeholder="Report of ...">
                <div class="v93_130">
                    <span class="v93_131">Assignment Title</span>
                    <span class="v93_132" style="left: 153px;">*</span>
                </div>
            </div>
            <div class="v93_133">
                <div class="v93_134">
                    <a href=""><div class="v93_135"></div></a>
                    <a href=""><span class="v93_136">DISCARD</span></a>
                </div>
                <div class="v93_137">
                    <button type="submit" name="post" class="v93_138">SAVE</button>
                </div>
            </div>
        </div>
    </body>
</html>