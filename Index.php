<?php

require_once "Corrida.php";
require_once "Passageiro.php";
require_once "Motorista.php";

$motorista = new Motorista();

$Motorista->id = 1;
$Motorista->nome = "Algusto";
$Motorista->cnh = 123416879;
$Motorista->setAvaliacao(5);
$Motorista->historico ="15 corridas";

$passageiro = new Passageiro();

$passageiro->id = 1;
$Passageiro->cpf = 12345678911;
$passageiro->setAvaliacao(4);
$passageiro->historico ="15";

$Corrida = new Corrida();

$Corrida->id = 1;
$Corrida->motorista = "CalcularDistancia";
$Corrida->passageiro = "Serjao Berranteiro";
$Corrida->end_partida = "Rua das Flores";
$Corrida->end_destino = "Rua das Dores";
$Corrida->valor = 12;
$Corrida->mod_pagamento = "dinheiro";
$Corrida->tipo_corrida = "Carro";

?>