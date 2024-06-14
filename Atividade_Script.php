<?php
require_once 'Atividade_Classes_Filhas.php';

echo "Detalhes do carro<br>";
$carro = new Carro("Vermelho", "Onix", 220 . "<br><br>");

$carro->exibirDetalhes();

echo "Detalhes da moto<br>";
$moto = new Moto("Branca", "CG", 150);
$moto->exibirDetalhes();

?>