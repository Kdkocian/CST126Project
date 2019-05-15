<?php
    require_once '../db.php';
    $db = new myfunc();
    $posts = $db->getAllPosts();
?>

<html>
    <head>
    	<title>Posts</title>
	</head>
    <body>
        <?php
        if(!getUseradmin())
        {
            if(count($posts)!=0)
            {       
                for($i=0; $i < count($posts); $i++)
                {
                    
                    echo "<a href='view_post.php?pid=".$posts[$i][0]."'>".$posts[$i][2]."</a>";
                    echo "<p>".$posts[$i][3]."</p>";
                    /*$postcomments = $db->getALLComments($posts[$i][0]);
                    for($i = 0; $i < count($postcomments); $i++)
                    {
                        echo "<p>".$postcomments[$i]."</p>";
                    }*/
                    echo "<a href='editPost.php?pid=".$posts[$i][0]."&title=".$posts[$i][2]."&content=".$posts[$i][3]."'>Edit</a>";
                    echo "<a href='comment.php?pid=".$posts[$i][0]."'>Comment</a>";
                } 
            }
            else 
            {
                echo "There are no posts to display!";
            }
        }
        else 
        {
            if(count($posts)!=0)
            {
                for($i=0; $i < count($posts); $i++)
                {
                    echo "<a href='view_post.php?pid=".$posts[$i][0]."'>".$posts[$i][2]."</a>";
                    echo "<p>".$posts[$i][3]."</p>";
                    
                    /*$postcomments = $db->getALLComments($posts[$i][0]);
                    for($i = 0; $i < count($postcomments); $i++)
                    {
                        echo "<p>".$postcomments[$i]."</p>";
                    }*/
                    
                    echo "<a href='../controllers/postManagement.php?pid=".$posts[$i][0]."&Delete=\"Delete\"'>Delete</a>";
                    echo "<a href='adminmanagement.php?pid=".$posts[$i][0]."'>Management</a>";
                    echo "<a href='comment.php?pid=".$posts[$i][0]."'>Comment</a>";
                }
                echo $posts;
            } else {
                echo "There are no posts to display!";
            }
        }
       
        ?>
    </body>
</html>

