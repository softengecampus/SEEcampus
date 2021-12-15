<?php 

require_once("config.php");
session_start();
// TODO: Change
if(!isset($_SESSION["user"])) header("Location: index.php");

$stmt = $db->query("SELECT * from submission");
while ($row = $stmt->fetch()) {
    $id=$row['submission_id'];
    $title=$row['submission_title'];
    $detail=$row['submission_description'];
    $file=$row['submission_file'];
    $lengthid=strlen((string)$id);
}

?>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
        <link href="./css/submissionView.css" rel="stylesheet" />
        <link href="./css/AssignmentView.css" rel="stylesheet" />
        <title>Submission View</title>
    </head>
    <style>
    .attachment {
        top: 402px;
        left: 23px;
        }
    </style>
    <body>
        <div class="v93_380">
            <span class="v93_381">Submission</span>
            <div class="v93_382"></div>
            <span class="v93_384">Student 1</span>
            <div class="name"></div>
            <textarea class="v93_388" placeholder= "Hello sir/mam, This is ..."><?php echo $detail?></textarea>
            <span class="v93_389">Description</span>
            <span class="v93_390">Attachment</span>
			<div class="attachment">
				<a download="<?php echo $title ;?>.pdf" href="data:application/pdf;base64,<?php echo base64_encode($file);?>" class="attachmentdesc">Download the File</a>
			</div>
            <span class="v93_402"></span>
            <div class="v93_403">
                <div class="v93_404">
                    <a href=""><div class="v93_405"></div></a>
                    <a href=""><span class="v93_406">DISCARD</span></a>
                </div>
                <div class="v93_407">
                    <a href=""><div class="v93_408"></div></a>
                    <a href=""><span class="v93_409">SAVE</span></a>
                </div>
            </div>
            <span class="v93_410">ID : 00000000</span>
            <span class="v93_419">ID : S<?php while ($lengthid < 8){echo "0"; $lengthid=$lengthid+1;}echo $id ?></span>
        </div>
    </body>
</html>