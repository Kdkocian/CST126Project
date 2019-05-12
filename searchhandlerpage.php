<?php
include 'db.php';
$getuser = new myfuncs();
$searchresult = $_POST['SearchBar'];
$user = $getuser->getUsersbyFirstNAME($searchresult);
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