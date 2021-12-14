<?php 

require_once("config.php");
session_start();
// TODO: Change
if(!isset($_SESSION["user"])) header("Location: index.php");

$stmt = $db->query("SELECT * from assignment");
while ($row = $stmt->fetch()) {
    $id=$row['assignment_id'];
    $name=$row['assignment_name'];
    $title=$row['assignment_title'];
    $detail=$row['assignment_description'];
    $file=$row['assignment_file'];
    $lengthid=strlen((string)$id);
}

?>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
        <link href="./css/AssignmentView.css" rel="stylesheet" />
        <title>View Assignment</title>
    </head>
    <body>
        <div class="v100_280">
            <div class="v100_281"></div>
            <span class="v100_282"><?php echo $name ?></span>
            <span class="v100_283"><?php echo $title ?></span>
            <div class="v100_284"></div>
            <span class="v100_285"><?php echo $detail ?></span>
            <span class="v100_286">ID : A<?php while ($lengthid < 8){echo "0"; $lengthid=$lengthid+1;}echo $id ?></span>
            <span class="attitle">Attachment</span>
			<div class="attachment">
				<a download="<?php echo $title ;?>.pdf" href="data:application/pdf;base64,<?php echo base64_encode($file);?>" class="attachmentdesc">Download the File</a>
			</div>
            <div class="v100_287">
			<form>
                <a href=""><div class="v100_288"></div></a>
				<!-- <button type="submit" name="remove" class="v57_609">Make Class</button> -->
                <a href=""><span class="v100_289">REMOVE SUBMISSION</span></a>
            </div>
            <div class="v100_290">
                <a href=""><div class="v100_291"></div></a>
				<!-- <button type="submit" name="edit" class="v57_609">Make Class</button> -->
                <a href=""><span class="v100_292">EDIT SUBMISSION</span></a>
				</form>
            </div>
        </div>
    </body>
</html>