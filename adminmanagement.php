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
$user = $db->getAllusers();
for($id = 0;$id < count($user);$id++){
    echo "<form action = 'manageuser.php' method = 'POST'>";
    echo "<tr><td>".$user[$id][0]."</td><td>".$user[$id][1]."</td>";
    echo '<input type="submit" name = "Make Admin" value="Make Admin" /></td></tr>';
    echo "</form>";
    echo "<form action = 'deluser.php' method = 'POST'>";
    echo '<td><input type = "hidden" name = "ID" value = "'.$user[$id][0].'"><input type="submit" name = "Delete" value="Delete" />';
    echo "</form>";
}
?>
</table>
</body>
</html>
