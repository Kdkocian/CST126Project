<?php
session_start();
include 'db.php';
$db = new myfuncs();
$conn = $db -> dbConnect();
$id = mysqli_real_escape_string($conn, $_GET['pid']);
$sql = "DELETE FROM posts WHERE post_ID = '$id'";
mysqli_query($conn, $sql);
header("Location: adminview.php");