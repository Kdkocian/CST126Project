<?php
include_once("db.php");
$db = new myfuncs();
$conn = $db -> dbConnect();

$id = mysqli_escape_string($conn, $_POST['pid']);
$title = mysqli_escape_string($conn, $_POST['title']);
$content = mysqli_escape_string($conn, $_POST['content']);

$sql = "UPDATE posts SET title = '$title' and content = '$content' WHERE id = '$id'";

mysqli_query($conn, $sql);
header("Location: postview.php")
?>