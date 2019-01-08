<?php
  
    require_once 'logi.php';
    echo $_Post['myTest'];

//And now to perform a simple query to make sure it's working
    $query = "SELECT * FROM animals";
    $result = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($result)) {
         echo "The Name is: " . $row['name'] . " and the Location is: " . $row['location'] . " and the color is: " .$row['color'] . " and its food is: " .$row['food'] . "<br>";
    }
    
?>