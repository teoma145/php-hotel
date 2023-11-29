<?php
include __DIR__."/Model/db.php";
//var_dump($hotels)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
</head>
<body>
 <header>
  <div>
    <?php
       foreach($hotels as $hotel) {
        foreach($hotel as  $key=>$hotelitem){
            echo ("$key:$hotelitem.<br>");
        }
       }
       
    ?>
  </div>
 </header>
</body>
</html>