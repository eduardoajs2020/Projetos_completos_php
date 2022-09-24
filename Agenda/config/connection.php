<?php 

$host = "localhost";
$dbname= "agenda";
$user= "root";
$pass= "10205618";

try{

    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

    //Ativar o modo de erros
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
}catch(PDOException $e){
    //erro de conexão
    $error = $e->getMessage();
    echo "Erro: $error";
}



?>