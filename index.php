<?php
include __DIR__."/Model/db.php";
//var_dump($hotels)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Hotel</title>
</head>
<body>
 <header  class="container">
  <div class="ms-4">
  <table class="table">
  <tr>
      <th scope="col">Nome Hotel</th>
      <th scope="col">Descrizione</th>    
      <th scope="col">Stelle</th>
      <th scope="col">Distanza dal centro</th>
      <th scope="col">Parcheggio</th>
    </tr>
  <?php
            foreach($hotels as $item){?>
    <tr>
      <th scope="col"><?php echo $item['name']?></th>
      <th scope="col"><?php echo $item['description']?></th>    
      <th scope="col"><?php echo $item['vote']?></th>
      <th scope="col"><?php echo $item['distance_to_center']?></th>
      <th scope="col"><?php
        
        if ($item['parking']) {
          echo 'Disponibile';
        } else {
          echo 'Non disponibile';
        }
        ?></th>
    </tr>
    <?php } ?>
</table>
    
  </div>
 </header>
</body>
</html>