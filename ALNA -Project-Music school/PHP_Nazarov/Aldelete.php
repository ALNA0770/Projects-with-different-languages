<?php
$delete = TRUE;
if (isset($_POST['delete'])) {$id=$_POST['delete'];} else {$delete = False;}
if ($delete){$conn = new mysqli($server, $username, $password, $database);
if ($delete) {$query = "DELETE FROM L11_Alijon_60299_musicalschool_Mid2.subjects WHERE id='".$id."'";
$conn->query($query);
}
$conn->close();
}
 ?>