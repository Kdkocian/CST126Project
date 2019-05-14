<?php
include 'db.php';
$db = new myfuncs();
$conn = $db -> dbConnect();

$sql = "INSERT into comments WHERE userID = ID";

mysqli_query($conn, $sql);
?>