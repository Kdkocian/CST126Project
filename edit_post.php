<?php
session_start();
include 'db.php';
$db = new myfuncs();
$conn = $db -> dbConnect();


    $title = strip_tags($_POST['article_title']);
    $content = strip_tags($_POST['post_content']);
    
    $title = mysqli_real_escape_string($conn, $title);
    $content = mysqli_real_escape_string($conn, $content);
    
$sql = "UPDATE posts SET article_title='$title', post_content='$content'";


mysqli_query($conn, $sql);

header("Location: update_edit_post.php");
?>