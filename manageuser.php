<?php
include 'dp.php';
$db = new myfuncs();
$conn = $db ->dbConnect();
if(isset($_POST['Make Admin'])){
$id = mysqli_real_escape_string($conn, $_POST['ID']);
$sql = "SELECT * FROM users WHERE ID = '$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_row($result);

$adminstatus = false;
$adminstatus = !$row['admin']; 

$sql= "Update users SET admin = '$adminstatus' WHERE ID = '$id'";
mysqli_query($conn, $sql);
close($conn);
header("Location: adminmanagement.php");
}
?>