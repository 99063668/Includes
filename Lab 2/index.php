<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Lab 2 - Includes en require</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!--Header-->
	<?php
    include "includes/header.php";
  ?>

<!--Pages-->
  <?php 
    if($_GET["page"] == "onderwerp1") {
      include "pages/onderwerp1.php";
    }
    if($_GET["page"] == "onderwerp2") {
      include "pages/onderwerp2.php";
    }
    if($_GET["page"] == "onderwerp3") {
      include "pages/onderwerp3.php";
    }
    if($_GET["page"] == "onderwerp4") {
      include "pages/onderwerp4.php";
    }
  ?>

	<!--Footer-->
	<?php
    include "includes/footer.php";
  ?>


</body>
</html>