<?php

?>
<html>
<head>
</head>
<body>
<form action = 'commenthandler.php' method = 'Post'>
<?php
echo "<input type='hidden' name = 'postID' value='".$_GET['pid']."'>";
echo "<textarea placeholder = 'comment_content' name='comment_content'>Write your comment here.</textarea><br>";
?>
<input type = 'submit' name='submitform' value = 'Comment'>
</form>
</body>
</html>