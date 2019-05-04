<?php
include_once("db.php");
$db = new myfuncs();
$conn = $db -> dbConnect();

/*$id = mysqli_escape_string($conn, $_GET['pid']);
$uname = mysqli_escape_string($conn, $_GET['USERNAME']);*/

    function getAllusers(){
        $db = new myfuncs();
        $conn = $db->dbConnect();
        $sql = "SELECT ID, USERNAME FROM users";
        $users = array();
        $result = mysqli_query($conn, $sql);
        
        while ($row = mysqli_fetch_array($result)){
            $users[] = array($row['ID'], $row['USERNAME']);
        }
        mysqli_close($conn);
        return $users;
    }
