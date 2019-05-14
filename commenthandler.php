<?php
include 'db.php';
$db = new myfuncs();
$conn = $db -> dbConnect();

$commentID = strip_tags($_POST['pid']);
$commentContent = strip_tags($_POST['comment_content']);

$commentID = mysqli_real_escape_string($conn, $commentID);
$commentContent = mysqli_real_escape_string($conn, $commentContent);

$sql = "INSERT into comments (commentID, comment_content)  values = ($commentID, $commentContent)";

mysqli_query($conn, $sql);
header("Location: postview.php");
?>
