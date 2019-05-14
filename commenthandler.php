<?php
include 'db.php';
$db = new myfuncs();
$conn = $db -> dbConnect();

$commentID = mysqli_real_escape_string($conn, $_GET['commentID']);
$postID = mysqli_real_escape_string($conn, $_POST['pid']);
$commentContent = mysqli_real_escape_string($conn, $_POST['comment_content']);
$userID = mysqli_real_escape_string($conn, $db->getUserID());


$sql = "INSERT INTO comments (commentID, comment_content, postID, userID) values ('$commentID', '$commentContent', '$postID', '$userID')";
if($commentContent = "null"){
    echo " Please complete your comment.";
    return;
} else {
mysqli_query($conn, $sql);
}
if($db->getUseradmin()){
    header("Location: adminview.php");
}else {
    header("Location: postview.php");
}
mysqli_close($conn);
?>
