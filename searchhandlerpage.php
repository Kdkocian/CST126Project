<?php
include 'db.php';
$getuser = new myfuncs();
$searchresult = $_POST['SearchBar'];
$user = $getuser->getPostbyId($searchresult);
?>

<html>
<head>
<title>Search Results</title>
</head>
<body>
<?php 
include '_displaysearch.php';
?>
</body>
</html>