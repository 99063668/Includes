<?php
    function connection_database(){
        $host = "localhost";
        $username = "root";
        $password = "mysql";
        $database = "databank_php";

        try {
            $connect = new PDO("mysql:host=$host;dbname=$database", $username, $password);
            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Database connection succeed";
            echo "<br>";
            return $connect;
        } catch (PDOException $error) {
            echo "Database connection failed: ".$error->getMessage();
            echo "<br>";
        }
    }

    function fetchall_data(){
        global $result, $value;
        $connect = connection_database();

        $stmt = $connect->prepare("SELECT * FROM onderwerpen");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC); 
        
        if(isset($_GET["pages"])){
            $index = ($_GET["pages"] - 1);
        }else{
            $index = 0;
        }

        $value = $result[$index];

        $connect = null;       
    }
    fetchall_data();

    //haalt 1 onderwep (die van de pagina) op
    /*function een_resultaat(){
        global $result2, $value2;
        $connect = connection_database();

        if(isset($_GET["pages"])){
            $index = ($_GET["pages"]);
        }else{
            $index = 0;
        }
        $stmt = $connect->prepare("SELECT * FROM onderwerpen WHERE id=?");
        $stmt->execute([$index]);
        $result2 = $stmt->fetch(PDO::FETCH_ASSOC); 
    
        $value2 = $result2[$index];

        $connect = null;       
    }

     //haalt alle id en name op van onderwep voor de header 
     function een_resultaat(){
        global $result3, $value3;
        $connect = connection_database();

        $stmt = $connect->prepare("SELECT id, name FROM onderwerpen");
        $stmt->execute();
        $result3 = $stmt->fetchAll(PDO::FETCH_ASSOC); 
    
        $value3 = $result3[$index];

        $connect = null;       
    }*/
?>
