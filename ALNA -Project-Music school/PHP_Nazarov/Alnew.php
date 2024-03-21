<?php
$entry = TRUE;
if (isset($_POST['instlec'])) {$instlec= $_POST['instlec'];} else {$entry =FALSE;}
if (isset($_POST['musicinst'])) {$musicinst = $_POST['musicinst'];} else {$entry = FALSE;}
if (isset($_POST['tutor'])) {$tutor = $_POST['tutor'];} else {$entry = FALSE;}

if (isset($_POST['amount'])) {$amount = $_POST['amount'];} else {$entry = FALSE;}
if (isset($_POST['musiccost'])) {$musiccost = $_POST['musiccost'];} else {$entry = FALSE;}
if (isset($_POST['lechours'])) {$lechours = $_POST['lechours'];} else {$entry = FALSE;}
?>
 
 <?php
if ($entry){
$conn = new mysqli($server, $username, $password, $database);
if ($entry) {
$query = " INSERT INTO subjects ( instlec, musicinst, tutor ,amount, musiccost , lechours )";
$query .="VALUES('".$instlec."','".$musicinst."','".$tutor."','".$amount."','".$musiccost."','".$lechours."')";
$conn->query($query);
}
$conn->close();
}
?>