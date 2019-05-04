<?php
$pid = $_GET['pid'];
$title = $_GET['title'];
$content = $_GET['content'];
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="ISO-8859-1">
		<title>All Posts</title>
	</head>
	<body>
		<form action="editpostcontroller.php" method="POST" enctype="multipart/form-data">
		<?php 
		echo '<input placeholder="Title" name="title" type="text" value="'.$title.'"autofocus size="48"><br /><br />';
		echo '<textarea placeholder="Content" name="content" value="'.$content.'"rows="20" cols="50"></textarea><br />';
		echo '<input type="hidden" name="pid" value="'.$pid.'"/>';
		?>
        	<input name="edit" type="submit" value="edit">
        	</form>
	</body>
</html>