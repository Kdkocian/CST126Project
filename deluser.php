<?php
include 'db.php';
$db = new myfuncs();
$conn = $db -> dbConnect();

$id = mysqli_real_escape_string($conn, $_GET['ID']);

$sql = "DELETE USERNAME FROM users WHERE ID = '$id'";
mysqli_query($conn, $sql);

mysqli_close($conn);
header("Location: adminmanagement.php");
?>
