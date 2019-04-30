<?php
session_start();
include 'db.php';
$db = new myfuncs();
$conn = $db -> dbConnect();

$sql = "DELETE FROM posts WHERE post_ID = post_ID";
mysqli_query($conn, $sql);
header("Location: adminview.php");