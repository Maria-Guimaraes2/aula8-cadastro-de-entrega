<?php

$codigo = $_POST['codigo'];
$destinatario = $_POST['destinatario'];
$cidade = $_POST['cidade'];
$peso = $_POST['peso'];

echo "Código do produto: " . $codigo . "<br>";
echo "Destinatário: " . $destinatario . "<br>";
echo "Cidade: " . $cidade . "<br>";
echo "Peso do produto: " . $peso;
?>