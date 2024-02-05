<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
    crossorigin="anonymous">
</head>
<body>
    

</html>
<?php  session_start();
 print_r($_POST); // LEGGO I DATI INVIATI DAL FORM // tipo console log
 print_r($_REQUEST); // LEGGO I DATI INVIATI DAL FORM

$contact = [
'Nome'=>$_REQUEST["nome"],
 "Cognome" =>$_REQUEST["cognome"], 
 "citta"=>$_REQUEST["città"], 
 "telefono"=>$_REQUEST["phone"], 
 "email"=>$_REQUEST["email"]
];

 $_SESSION["contacts"] = $contact;

 
session_write_close();
header("location : http://localhost/backend/S1-L2/");

?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>