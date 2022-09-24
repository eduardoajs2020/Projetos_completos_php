<?php 

include_once("conexao.php");
include_once("dao/CarDAO.php");

$carDAO = new CarDAO($conn);

$cars = $carDAO->findAll();

?>

<h1>Insira um carro:</h1>
<form action="process.php" method="POST">
<div>
    <label for="brand">Marca do carro:</label>
    <input type="text" name="brand" placeholder="insira a marca">
</div>
<div>
    <label for="km">Kilometragem:</label>
    <input type="text" name="km" placeholder="insira a kilometragem">
</div>
<div>
    <label for="color">Cor do carro:</label>
    <input type="text" name="color" placeholder="insira a cor">

    <input type="submit" value="Salvar">
</div>
</form>
<ul>
    <?php foreach($cars as $car): ?>
        <li><?= $car->getBrand()?> - <?= $car->getKm()?> - <?= $car->getColor()?></li>
    <?php endforeach;?>
</ul>
