<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Lab 4 - Dynamische content</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!--Header-->
<?php
  include "includes/database.php";
	include "includes/header.php"; 
?>

<!--Pages-->
<div class="container">
  <div class="pagecontainer">
    <h1><?php echo $value["name"];?></h1>
    <p><?php echo $value["description"];?></p>
    <img class="images" src="<?php echo $value["image"];?>" alt ="pageimages">
  </div>
</div>

<!--Footer-->
<?php
	include "includes/footer.php";
?>

</body>
</html>
