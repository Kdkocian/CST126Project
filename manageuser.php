<?php
include 'dp.php';
$db = new myfuncs();
$conn = $db ->dbConnect();
$id = mysqli_real_escape_string($conn, $_POST['ID']);
echo "hello nathan";
if(isset($_POST['Make Admin'])){
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