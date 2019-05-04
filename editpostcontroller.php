<?php
include_once("db.php");
$db = new myfuncs();
$conn = $db -> dbConnect();

$id = mysqli_escape_string($conn, $_POST['pid']);
$title = mysqli_escape_string($conn, $_POST['title']);
$content = mysqli_escape_string($conn, $_POST['content']);

$sql = "UPDATE posts SET article_title = '$title', post_content = '$content' WHERE post_ID = '$id'";

mysqli_query($conn, $sql);
header("Location: postview.php");
?>