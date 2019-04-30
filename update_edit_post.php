<?php
include 'db.php';
$db = new myfuncs();
$conn = $db -> dbConnect();
$pid = $_GET['pid'];

?>
<html>
<head>
</head>
<body>
<?php
$sql_get = "SELECT * FROM posts WHERE id=$pid LIMIT 1";
$res = mysqlI_quert($conn, $sql_get);

            if(mysqli_num_rows($res) > 0){
                while ($row = mysqli_fetch_assoc($res)){
                    $title = $row['article_title'];
                    $content = $row['post_content'];
                    
                  echo  "<form action='edit_post.php?pid=$pid' method='post' enctype='multipart/form-data'>";
                  echo  "<input placeholder='Title' name='title' type='text' value='$title' autofocus size='48'><br /><br />";
                  echo  "<textarea placeholder='Content' name='content' rows='20' cols='50'>$content</textarea><br /?";
                    
                }
              echo " <input name='update' type='submit' value='Update'>";
              echo " </form>";
            }           
?>
</body>
</html>