<?php
session_start();
include_once("db.php");
$db = new myfuncs();
$conn = $db -> dbConnect();

if(isset($_POST['post'])){
    $title = strip_tags($_POST['title']);
    $content = strip_tags($_POST['content']);

    $title = mysqli_real_escape_string($conn, $title);
    $content = mysqli_real_escape_string($conn, $content);
    //sets the date from the DB
    $date = date('1 js \of F Y h:i:s A');

    $sql = "INSERT into posts (article_title, post_content, post_date) VALUES('$title', '$content', '$date')";
    if($title == "" || $content == ""){
        echo " Please complete your post.";
        return;
    }
    mysqli_query($conn, $sql);

    header("Location: postview.php");
   }
    //language filter for the blog
    function filterwords($content){
        $filterWords = array('dagnabit','floop','dangit');
        $filterCount = sizeof($filterWords);
        for($i=0; $i<$filterCount; $i++){
         $content = preg_replace('/\b'.$filterWords[$i].'\b/ie',"str_repeat('*',strlen('$0'))",$content);
        }
        return $content;
       }
?>
<html>
<head>
</head>
<body>
    <form action="post.php" method="post" enctype="multipart/form-data">
    <input placeholder="Title" name="title" type="text" autofocus size="48"><br /><br />
    <textarea placeholder="Content" name="content" rows="20" cols="50"></textarea><br />
    <input name="post" type="submit" value="Post">
    <?php 
    if($db->getUseradmin()){
        echo "<input type=\"button\" value =\"View Posts\" onclick=\"window.location.href='adminview.php'\">";
        echo " <input type =\"button\" value =\"To Search\" onclick=\"window.location.href='searchpage.html'\">";
        echo "<div><a href='writecomment.php?pid-$id'>$title</a><p>$date</p><p>$output</p></div>";
    }
    if(!$db->getUseradmin()){
      echo " <input type=\"button\" value =\"View Posts\" onclick=\"window.location.href='postview.php'\">";
      echo "<div><a href='writecomment.php?pid-$id'>$title</a><p>$date</p><p>$output</p></div>";
    }
    ?>
</form>
</body>
</html>
