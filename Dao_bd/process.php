<?php 

include_once("conexao.php");
include_once("dao/CarDAO.php");

$carDAO = new CarDAO($conn);

$brand = $_POST["brand"];
$km = $_POST["km"];
$color = $_POST["color"];


$newCar = new Car($brand, $km, $color);

$newCar->setBrand($brand);
$newCar->setKm($km);
$newCar->setColor($color);

$carDAO->create($newCar);

header("Location: index.php");

?>