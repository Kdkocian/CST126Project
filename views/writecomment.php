<?php
require_once '../commenthandler.php';
include_once("../db.php");
$db = new myfuncs();
$conn = $db -> dbConnect();



$pid = $_GET['pid'];
$title = $_GET['title'];
$content = $_GET['content'];
$comment = $_GET['comment_content'];

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Comment</title>
</head>
<body>
<form action="commenthandler.php" method="POST" enctype="multipart/form-data">
		<?php 
		echo '<input placeholder="Title" name="title" type="text" value="'.$title.'"autofocus size="48"><br /><br />';
		echo '<textarea placeholder="comment" name="comment" rows="20" cols="50">'.$content.'</textarea><br />';
		echo '<input type="hidden" name="pid" value="'.$pid.'"/>';
		?>
        	<input name="comment" type="submit" value="comment">
        	</form>
</body>
</html>