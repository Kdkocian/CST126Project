<?php
include 'db.php';
$db = new myfuncs();
$conn = $db -> dbConnect();

$postID = mysqli_real_escape_string($conn, $_POST['pid']);
$commentContent = mysqli_real_escape_string($conn, $_POST['commentcontent']);
$userID = mysqli_real_escape_string($conn, $db->getUserID());

$sql = "INSERT into comments (postID, comment_content, userID)  values ($postID, $commentContent, $userID)";

mysqli_query($conn, $sql);
if($db->getUseradmin()){
    header("Location: adminview.php");
}else {
    header("Location: postview.php");
}
mysqli_close($conn);
?>
