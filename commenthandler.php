<?php
include 'db.php';
$db = new myfuncs();
$conn = $db -> dbConnect();

$postID = mysqli_real_escape_string($conn, $_POST['pid']);
$commentContent = mysqli_real_escape_string($conn, $_POST['comment_content']);
$userID = mysqli_real_escape_string($conn, $db->getUserID());


$sql = "INSERT into comments (postID, comment_content, userID)  values ('$postID', '$commentContent', '$userID')";
if($commentContent = "null"){
    echo " Please complete your comment.";
    return;
}
mysqli_query($conn, $sql);
if($db->getUseradmin()){
    header("Location: adminview.php");
}else {
    header("Location: postview.php");
}
mysqli_close($conn);
?>
