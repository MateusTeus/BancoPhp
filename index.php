<!DOCTYPE html>
<html lang="pt-br">
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Prática 04</title>
</head>
<body>
<?php
// Importo os scripts
require_once("ContaBancaria.php");
require_once("ContaCorrente.php");
require_once("moeda.php");
// Crio uma conta corrente e faço algumas operações
echo "** CONTA CORRENTE **<br>";
$conta_corrente = new ContaCorrente(123456, "Fernando");
echo Moeda::formata_real($conta_corrente->get_saldo()), "<br>";
echo $conta_corrente->sacar(100), "<br>";
echo Moeda::formata_real($conta_corrente->get_saldo()), "<br>";
echo $conta_corrente->depositar(1000), "<br>";
echo Moeda::formata_real($conta_corrente->get_saldo()), "<br>";
echo $conta_corrente->sacar(500), "<br>";
echo Moeda::formata_real($conta_corrente->get_saldo()), "<br>";
$conta_corrente->mudarGold();
echo $conta_corrente->get_classe(), "<br>";
echo Moeda::formata_real($conta_corrente->get_saldo()), "<br>";
echo "<br>";
// Crio uma conta poupança e faço algumas operações
echo "** CONTA POUPANÇA **<br>";
$conta_poupanca = new ContaPoupanca(456789, "João");
echo Moeda::formata_real($conta_poupanca->get_saldo()), "<br>";
echo $conta_poupanca->depositar(5000), "<br>";
echo Moeda::formata_real($conta_poupanca->get_saldo()), "<br>";
echo $conta_poupanca->sacar(3000), "<br>";
echo Moeda::formata_real($conta_poupanca->get_saldo()), "<br>";
echo $conta_poupanca->sacar(3000), "<br>";
echo Moeda::formata_real($conta_poupanca->get_saldo()), "<br>";
echo $conta_poupanca->aplicarJutosMes(), "<br>";
echo Moeda::formata_real($conta_poupanca->get_saldo()), "<br>";

?>
</body>
</html>