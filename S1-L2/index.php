<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
    crossorigin="anonymous">
</head>
<body>

 <div class="container">
<form class="mt-5" method="POST" action="datiinseriti.php"  >
  <input  class="col-3" type= "text" placeholder="nome" name="nome">
  <input class="col-3" type="text" placeholder="cognome" name="cognome">
  <input class="col-3" type="text" placeholder="città" name="città">
  <input class="col-3" type="tel" placeholder="telefono" name="phone">
  <input  class="col-3" type="email" placeholder="email" name="email">
<!--    <input class="col-3" type="file" placeholder="inserisci file" name="fileinserito"> -->
  <button class="col-3" type="submit" class="btn btn-primary mt-2">Submit</button>
</form>
<div>





<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">cognome</th>
      <th scope="col">città</th>
      <th scope="col">phone</th>
      <th scope="col">email</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      
    </tr>
    
 
  </tbody>
</table>
</div>

</div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>