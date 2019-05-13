<?php
session_start();
include_once("db.php");
$db = new myfuncs();
$conn = $db -> dbConnect();

?>
<html>
    <head>
</head>
<body>
    <?php
    require_once("nbbc/nbbc.php");

    $bbcode = new BBCode;

    $sql = "SELECT * FROM posts ORDER BY post_ID ";

    $res = mysqli_query($conn, $sql) or die (mysqli_connect_error());

    $posts = "";

    if(mysqli_num_rows($res) > 0){
        while($row = mysqli_fetch_assoc($res)){
            $id = $row['post_ID'];
            $date = $row['post_date'];
            $content = $row['post_content'];
            $title = $row['article_title'];

            $output = $bbcode->Parse($content);

            echo "<div><a href='view_post.php?pid=$id'>$title</a><p>$date</p><p>$output</p></div>";
            echo "<div><a href='edit_post.php?pid=$id&title=$title&content=$content'>Edit</a></div>";
            echo "<div><a href='writecomment.php?pid-$id'>$title</a><p>$date</p><p>$output</p></div>";
        }
        echo $posts;
    } else {
        echo "There are no posts to display!";
    }
    ?>
</body>
</html>

