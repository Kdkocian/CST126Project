<?php
include 'db.php';
$db = new myfuncs();
$conn = $db -> dbConnect();

//$id = mysqli_real_escape_string($conn, $_GET['pid']);

if(isset($_POST['update'])){
    $title = strip_tags($_POST['article_title']);
    $content = strip_tags($_POST['post_content']);
    
    $title = mysqli_real_escape_string($conn, $title);
    $content = mysqli_real_escape_string($conn, $content);
$sql = "UPDATE posts SET article_title='$title', post_content='$content'";
}

mysqli_query($conn, $sql);


header("Location: edit_post.php");
?>