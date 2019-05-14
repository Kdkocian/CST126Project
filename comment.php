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
    <button type = 'submit' name='submit' value = 'POST'>Comment</button>
</form>";
?>
</body>
</html>