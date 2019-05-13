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
    function getUseradmin(){
        session_start();
        return $_SESSION["isadmin"];
    }
    function setUseradmin($admin){
        session_start();
        return $_SESSION["isadmin"] = $admin;
    }
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
    function getPostbyId($searchbar){
        $db = new myfuncs();
        $conn = $db -> dbConnect();
        $searchresult = mysqli_real_escape_string($conn, $searchbar);
        $sql = "SELECT * FROM posts WHERE post_ID LIKE '%$searchresult%'";
        $users = array();
        $result= mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result)){
            $users[] = array($row['post_ID'], $row['article_Title'], $row['post_content']);
        }
        mysqli_close($conn);
        return $users;
}
}
?>