<?php
include __DIR__."/Model/db.php";
//var_dump($hotels)
$parking='all';
if(isset($_GET['ablepark'])){
    $parking=$_GET['ablepark'];
}
$hotels= array_filter($hotels, fn($item) =>$parking =='all'|| $item['parking']==$parking);

$stars='all';
if(isset($_GET['stars'])){
    $stars=$_GET['stars'];
}
$hotels= array_filter($hotels, fn($staritem) =>$stars =='all'|| $staritem['vote']>=$stars);

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
    <div>
        <h1 class="m-auto mb-4">HOTEL BOOL</h1>
        <div class='d-flex'>
            <form action="index.php" role="search" method="GET">
                <select class="form-control me-2" placeholder="search" name="ablepark">
                    <option value='all'<?php echo ($parking == 'all') ? 'selected' : ''; ?>>tutti</option>
                    <option value='1'<?php echo ($parking == '1') ? 'selected' : ''; ?>> parcheggio disponibile</option>
                    <option value='0' <?php echo ($parking == '0') ? 'selected' : ''; ?>>parcheggio non disponibile</option>
                </select>
                <select class="form-control me-2" placeholder="search" name="stars">
                    <option value='all'<?php echo ($stars == 'all') ? 'selected' : ''; ?>>tutti</option>
                    <option value='1'<?php echo ($stars == '1') ? 'selected' : ''; ?>> 1 stella o più</option>
                    <option value='2'<?php echo ($stars == '2') ? 'selected' : ''; ?>>2 stelle o più</option>
                    <option value='3'<?php echo ($stars == '3') ? 'selected' : ''; ?>>3 stelle o più</option>
                    <option value='4'<?php echo ($stars == '4') ? 'selected' : ''; ?>>4 stelle o più</option>
                    <option value='5'<?php echo ($stars == '5') ? 'selected' : ''; ?>>5 stelle</option>
                </select>
                <button class="btn" type="submit">filtra</button>
            </form>
        </div>
    </div>
   
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