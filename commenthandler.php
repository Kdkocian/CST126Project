<?php
include ('writecomment.php');
include_once("db.php");
$db = new myfuncs();
$conn = $db -> dbConnect();

$sql = "INSERT into comments (comment_content) value('$comment')";

mysqli_query($conn, $sql);
header ("Location: postview.php");
?>