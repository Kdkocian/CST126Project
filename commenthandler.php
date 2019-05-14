<?php
include 'db.php';
$db = new myfuncs();
$conn = $db -> dbConnect();

$commentID = strip_tags($_POST['pid']);
$commentContent = strip_tags($_POST['comment_content']);

$commentID = mysqli_real_escape_string($conn, $commentID);
$commentContent = mysqli_real_escape_string($conn, $commentContent);
$userID = mysqli_real_escape_string($conn, $db->getUserID());

$sql = "INSERT into comments (postID, comment_content, userID)  values = ($commentID, $commentContent, $userID)";

mysqli_query($conn, $sql);
header("Location: postview.php");
?>
