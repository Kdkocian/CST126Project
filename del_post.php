<?php
session_start();
include 'db.php';
$db = new myfuncs();
$conn = $db -> dbConnect();
$id = mysqli_real_escape_string($conn, $_GET['pid']); //gets pid that is then assigned to id
$sql = "DELETE FROM posts WHERE post_ID = '$id'";   //delets post from posts database
mysqli_query($conn, $sql);
header("Location: adminview.php");