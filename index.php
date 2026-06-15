<?php
header("Acess-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Acess-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Acess-Control-Max-age: 3600");
header("Acess-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers,Authorization, X-Requested-With");

echo json_encode(["mensagem"=>"Bem vindos à API Pizzaria"],JSON_PRETTY_PRINT);











?>




<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzaria</title>
</head>
<body>
    
</body>
</html>