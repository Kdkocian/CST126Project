<?php
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
    function filterwords($content){
        $filterWords = array('dagnabit','floop','dangit');
        $filterCount = sizeof($filterWords);
        for($i=0; $i<$filterCount; $i++){
            $content = preg_replace('/\b'.$filterWords[$i].'\b/ie',"str_repeat('*',strlen('$0'))",$content);
        }
        return $content;
    }
    function setUseradmin($admin){
        session_start();
        return $_SESSION["isadmin"] = $admin;
    }
    function getAllusers(){
        $conn = dbConnect();
        $sql = "SELECT ID, USERNAME FROM users";
        $users = array();
        $result = mysqli_query($conn, $sql);
        
        while ($row = mysqli_fetch_array($result)){
            $users[] = array($row['ID'], $row['USERNAME']);
        }
        mysqli_close($conn);
        return $users;
    }
    function getPostbyId($searchbar){;
        $conn = dbConnect();
        $searchresult = mysqli_real_escape_string($conn, $searchbar);
        $sql = "SELECT * FROM posts WHERE post_content LIKE '%$searchresult%' or post_content LIKE '%$searchresult%'";
        $users = array();
        $result= mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result)){
            $users[] = array($row['post_ID'], $row['article_Title'], $row['post_content']);
        }
        mysqli_close($conn);
        return $users;
    }
    function getAllPosts(){
        $posts = array();
        $conn = dbConnect();
        $sql = "Select * from posts orderby post_ID DESC";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result))
        {
            $posts[] = array($row['post_ID'], $row['userID'], $row['article_title'], $row['post_content']);
        }
        mysqli_close($conn);
        return $posts;
    }
    function getALLComments($id){  
        $conn = dbConnect();
        $comments = array();
        $postID = mysqli_real_escape_string($conn, $id);
        $sql = "SELECT * FROM comments WHERE postID = '$postID'";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result)){
            $comments[] = array($row['comment_content']);
        }
        mysqli_close($conn);
        return $comments;
    }
?>