<?php
include 'db.php';
$db = new myfuncs();
$conn = $db -> dbConnect();

$sql = "INSERT into comments WHERE userID = ID";

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
    <button type = 'submit' name='submit'>Comment</button>
</form>"
?>
</body>
</html>