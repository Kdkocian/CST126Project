<?php
include_once("db.php");
$db = new myfuncs();
$conn = $db -> dbConnect();
?>
<html>
<head>
</head>
<body>
<table>
<tr><th>ID</th><th>Username</th></tr>
</table>
<?php
$user = $db->getAllusers();
for($id = 0;$id < count($user);$id++){
    echo "<tr><td>".$user[$id][0]."</td><td>".$user[$id][1]."</td></tr>";
}
?>
</body>
</html>
