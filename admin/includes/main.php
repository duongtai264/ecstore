<?php
    require '../functions/connect_db.php';

    $sql = "SELECT * FROM customers";
    $result =  $conn -> query($sql);

    if ($result){
        while ($row = $result -> fetch(PDO::FETCH_OBJ)){
            echo "<h4>$row->id</h4>";
            echo "<h4>$row->username</h4>";
            echo "<h4>$row->fullname</h4>";
        }
    }
?>
