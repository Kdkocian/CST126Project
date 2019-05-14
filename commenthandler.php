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

?>
<html>
<head>
</head>
<body>
<?php
echo "<form action = commenthandler.php method = Post>
    <input type='hidden' name = 'userID' value='pid'>
    <input type='hidden' name = 'commentID' value='ID'>
    <textarea name='comment_content'></textarea><br>
    <button type = 'submit' name='submit' value = 'POST'>Comment</button>
</form>"
?>
</body>
</html>