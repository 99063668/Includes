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
	include "includes/header.php";
?>

<!--Pages-->
<div class="container">
  <div class="pagecontainer">
    <?php
        include "includes/database.php";
    ?>
  
    <?php
      $query = $connect->prepare("SELECT * FROM onderwerpen");

      $query->execute();
      $result = $query->FetchAll(PDO::FETCH_ASSOC);
      $page = $_GET["page"];
      $key = array_search($page, $result);
      print_r($key);

      $value = $result[$index];

      $connect = null;
    ?>

    <h1><?php echo $result["name"];?></h1>
    <p><?php echo $result["description"];?></p>
    <img class="images" src="<?php  echo $result["image"];?>" alt ="pageimages">

  </div>
</div>

<!--Footer-->
<?php
	include "includes/footer.php";
?>

</body>
</html>
