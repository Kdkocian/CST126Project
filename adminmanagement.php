<?php
include_once("db.php");
$db = new myfuncs();
?>
<html>
<head>
</head>
<body>
<table>
<tr><th>ID</th><th>Username</th><th>Delete/Change User</th></tr>
<?php
echo "<form action = 'manageuser.php' method = 'GET'>";
$user = $db->getAllusers();
for($id = 0;$id < count($user);$id++){
    echo "<form action = 'manageuser.php' method = 'GET'>";
    echo "<tr><td>".$user[$id][0]."</td><td>".$user[$id][1]."</td>";
    echo '<td><input type="button" value="Delete" onclick="window.location.href=\'manageuser.php?id='.$user[$id][0].'\'/">';
    echo '<input type="button" value="Make Admin" onclick="window.location.href=\'manageuser.php?id='.$user[$id][0].'\'/"></td></tr>';
    echo "</form>";
}
?>
</table>
</body>
</html>
