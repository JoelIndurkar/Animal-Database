<?php
        include_once 'WebsitePart1.html';
        recquire_once 'phpTest.php';
        $conn = mysqli_connect($host, $user, $pass, $db, $port);
        if($conn->connect_error) die($conn->connect_error);
        $option = isset($_POST['myTest']) ?$_POST['myTest'] : false;
        if ($option){
          $testField = $_POST['myTest'];
          //echo $testField;
          $query = " select ". $testField . " from project_db;";
          //echo $query;
          $result = mysqli_query($conn, $query);
          while ($row = my sqli_fetch_assoc($result)) {
            echo $row[$testField] . "<br>" ;

          }
        }
        $result->close();
        $conn->close();
        

 ?>
