<?php

?>
<html>
<head>
</head>
<body>
<form action = 'commenthandler.php' method = 'Post'>
<?php
echo "<input type='hidden' name = 'postID' value='".$_GET['pid']."'>";
echo "<textarea name='commentcontent'>'.$commentcontent.'</textarea><br>";
echo "<input type = 'submit' name='submitform' value = 'Comment'>";
?>
</form>;
</body>
</html>