<?php
class myfuncs{
    function dbConnect() {
        $servername = 'localhost';
        $username = 'bubblepop';
        $password = 'bubbles';
        $dbname = 'blog';
        //creates connection
       $conn =  mysqli_connect($servername, $username, $password, $dbname);
        //tests the connection
        if ($conn->connect_error){
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }
}
?>