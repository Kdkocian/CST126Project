<?php
include 'db.php';
$db = new myfuncs();
$conn = $db -> dbConnect();

$postID = mysqli_real_escape_string($conn, $_POST['postID']);
$commentContent = mysqli_real_escape_string($conn, $_POST['comment_content']);
$userID = mysqli_real_escape_string($conn, $db->getUserID());


$sql = "INSERT INTO comments (comment_content, postID, userID) VALUES ('$commentContent', '$postID', '$userID')";
if($commentContent = "null"){
    echo " Please complete your comment.";
} else {
    if (mysqli_query($conn, $sql)) {
        if($db->getUseradmin()){
            header("Location: adminview.php");
        }else {
            header("Location: postview.php");
        } 
    } else {
        echo "there is no connection";
    }
}
/*if($db->getUseradmin()){
    header("Location: adminview.php");
}else {
    header("Location: postview.php");
}*/
mysqli_close($conn);
?>
