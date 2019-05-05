<?php
include 'db.php';
$db = new myfuncs();
$conn = $db -> dbConnect();

$id = mysqli_real_escape_string($conn, $_POST['ID']);

if(isset($_POST['Make Admin'])){
    $sql = "SELECT * FROM users WHERE ID = '$id';";
    $result = mysqli_query($conn, $sql);
    
    $row = mysqli_fetch_row($result);
    
    $adminstatus = false;
    $adminstatus = !$row['admin'];
    
    $sql = "UPDATE users SET admin = '$adminstatus' WHERE ID ='$id';";
    mysqli_query($conn,$sql);
}
mysqli_close($conn);
?>