<?php
    $host = "localhost";
    $username = "root";
    $password = "mysql";
    $database = "databank_php";

    try {
        $connect = new PDO("mysql:host=$host;dbname=$database", $username, $password);
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Database connection succeed";

        return $connect;
    } catch (PDOException $error) {
        echo "Database connection failed: ".$error->getMessage();
    }

    $query = "SELECT * FROM onderwerpen";
        $data = $connect->query($queary);

        /*echo '<table width="70%" border="1" cellpadding="5" cellspacing="5">
            <tr>
                <th>id</th>
                <th>name</th>
                <th>description</th>
                <th>image</th>
            </tr>';

        foreach($data as $row){
            echo '<tr>
                <td>'.$row["id"].'</td
                <td>'.$row["name"].'</td
                <td>'.$row["description"].'</td
                <td>'.$row["image"].'</td
            </tr>';
        }
        echo "</table>";*/

    $connect = null;
?>


<?php $result = $stmt->fetch(PDO::FETCH_ASSOC);?>
<h1><?php echo $result["name"];?></h1>
<p><?php echo $result["description"];?></p>
<img class="images" src="<?php  echo $result["image"];?>" alt ="pageimages">
