<?php
include_once("db.php");
$db = new myfuncs();
?>
<html>
<head>
</head>
<body>
<table>
<tr><th>ID</th><th>Username</th></tr>
<?php
$user = $db->getAllusers();
for($id = 0;$id < count($user);$id++){
    echo "<tr><td>".$user[$id][0]."</td><td>".$user[$id][1]."</td></tr>";
}
?>
</table>
</body>
</html>
