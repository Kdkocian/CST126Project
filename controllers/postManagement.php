<?php
    require_once("../db.php");
    $db = new myfunc();
    $conn = $db->dbConnect();
    
    if(isset($_POST['submitPost']))
    {
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $content = mysqli_real_escape_string($conn, $db->filterwords($_POST['content']));
        $user = mysqli_real_escape_string($conn, $db->getUserID());
        
        $sql = "INSERT into posts (post_content, article_title, userID) VALUES('$title', '$content', '$user')";
        
            mysqli_query($conn, $sql);
        
        mysqli_close($conn);
        header("Location: ../views/postview.php");
    }
    if(isset($_GET['Delete']))
    {
        $id = mysqli_real_escape_string($conn, $_GET['pid']);
        $sql = "Delete from posts where post_ID = '$id'";
        mysqli_query($conn, $sql);
        mysqli_close($conn);
        header("Location: ../views/postview.php");
    }
    if(isset($_POST['edit']))
    {
        $id = mysqli_real_escape_string($conn, $_POST['pid']);
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $content = mysqli_real_escape_string($conn, $_POST['content']);
        
        $sql = "Update posts SET article_title='$title', post_content='$content', where post_ID='$id'";
        mysqli_query($conn, $sql);
        mysqli_close($conn);
        header("Location: ../views/postview.php");
    }
?>