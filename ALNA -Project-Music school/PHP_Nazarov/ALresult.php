<?php
$conn = new mysqli($server, $username, $password, $database);
$query = "SELECT * FROM subjects ";
$rs = $conn->query($query);
$conn->close();
$num = $rs->num_rows;
 ?>