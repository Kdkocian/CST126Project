<?php
require_once '../db.php';
$conn = dbConnect();

$searchresult = mysqli_real_escape_string($conn, $_GET['SearchBar']);

$sql = "Select * from posts where post_content='$searchresult'";

$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_array($result))
{
    echo $row['article_title']."<br.>".$row['post_content'];
}
    echo "<a href='searchpage.php'>Searchpage</a>";

?>
