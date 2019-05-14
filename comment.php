<?php

?>
<html>
<head>
</head>
<body>
<?php
echo "<form action = 'commenthandler.php' method = 'Post'>
    <input type='hidden' name = 'postID' value='".$_GET['pid']."'>
    <textarea name='comment_content'></textarea><br>
    <input type = 'submit' name='submit' value = 'Comment'>
</form>";
?>
</body>
</html>