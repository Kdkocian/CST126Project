<?php
include 'db.php';
$db = new myfuncs();
$conn = $db -> dbConnect();

$id = mysqli_real_escape_string($conn, $_POST['ID']);

//if($_POST['Make Admin'] == 'Make Admin'){ if statement not working in current php version?
    $sql = "UPDATE users SET admin = 1 WHERE ID ='$id';";
    mysqli_query($conn,$sql);
//}
mysqli_close($conn);
header( "Location: adminmanagement.php");
?>