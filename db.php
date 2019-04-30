<?php
class myfuncs{
    function dbConnect() {
        $servername = 'us-cdbr-iron-east-02.cleardb.net';
        $username = 'b6ffb30b240cf8';
        $password = '95210590';
        $dbname = 'heroku_7993010182d04ea';
        //creates connection
       $conn =  mysqli_connect($servername, $username, $password, $dbname);
        //tests the connection
        if ($conn->connect_error){
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }
    function setUserID($id){
        session_start();
        $_SESSION["id"] = $id;
    }
    function getUserID(){
        session_start();
        return $_SESSION["id"];
    }
}
?>