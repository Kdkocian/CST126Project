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
           $postcomments = new $db->getALLComments($id);

            $output = $bbcode->Parse($content);

            echo "<div><a href='view_post.php?pid=$id'>$title</a><p>$date</p><p>$output</p></div>";
           for($i = 0; $i < count($postcomments); $i++)
            {
                echo "<p>".$postcomments[$i]."</p>";
            }
            echo "<div><a href='del_post.php?pid=$id'>Delete</a></div>";
            echo "<div><a href='adminmanagement.php?pid=$id'>Management</a></div>";
            echo "<div><a href='comment.php?pid=$id'>Comment</a></div>";
        }
        echo $posts;
    } else {
        echo "There are no posts to display!";
    }
    mysqli_close($conn);
    ?>
</body>
</html>