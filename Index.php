<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

 <div class="container">

    <h1>Squadre di calcio Serie A</h1>

    

    <?php 
  echo  "<h2>" . date("F j, Y, g:i a"). "</h2>";

?>



<?php 
$squadre = [
    'Atalanta' => [3, 4, 3],
    'Juve' => [4, 2, 4],
    'Inter' => [3, 5, 2],
    'Milan' => [4, 4, 2],
    'Roma' => [3, 3, 4],
    'Fiorentina' => [4, 3, 3],
    'Lazio' => [4, 2, 4],
    'Bologna' => [3, 5, 2],
    'Napoli' => [4, 4, 2],
    'Torino' => [3, 4, 3],
    'Genoa' => [3, 3, 4],
    'Monza' => [4, 3, 3],
    'Frosinone' => [4, 2, 4],
    'Lecce' => [3, 5, 2],
    'Sassuolo' => [4, 4, 2],
    'Verona' => [3, 4, 3],
    'Udinese' => [3, 3, 4],
    'Cagliari' => [4, 3, 3],
    'Empoli' => [4, 2, 4],
    'Salernitana' => [3, 5, 2]

];

?>


<ul class="list-group">

<div class="row">



<?php foreach ($squadre as $key => $value) {
    echo '  <div class="col-3"> <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">'.$key.'</div>
     
    </div><p class="mx-2"> formazione</p>
    
  ';
    foreach ($value as $keys => $number) {
        echo  '<span class="badge bg-primary rounded-pill">'.$number.'</span>';
    }
    echo '</li> </div>';
} ?>

</ul>



</div>

</div>
 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>