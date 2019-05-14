<?php

?>
<html>
<head>
</head>
<body>
<?php
echo "<form action = 'commenthandler.php' method = 'Post'>";
echo "<input type='hidden' name = 'postID' value='".$_GET['pid']."'>";
echo "<textarea name='commentcontent'></textarea><br>";
echo "<input type = 'submit' name='submit' value = 'Comment'>";
echo "</form>";
?>
</body>
</html>