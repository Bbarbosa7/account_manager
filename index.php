<?php
//Carrega as clases
include_once 'classes/User.php';
include_once 'classes/Account.php';

//Criação do OBJETO Cliente
$client = new User;
$client->id = 01;
$client->name = "Carlos da Silva";
$client->height = 1.85;
$client->age = 44;
$client->birthday = '10/04/1976';
$client->schooling = 'Ensino Superior';
$client->salary = 4500;

//var_dump($client);

//criação da Accaunt (conta) do User (usuário)
$clientAccount = new Account();
$clientAccount->agency = 777;
$clientAccount->id = "CC: 00777-7";
$clientAccount->criationDate = "13/09/2020";
$clientAccount->holder = $client;
$clientAccount->passwd = '070707';
$clientAccount->balance = 15000;
$clientAccount->canceled = false;

//var_dump($clientAccount);

//Manipulando conta: Depósito
$clientAccount->Deposit(1000);
var_dump($clientAccount->GetBalance());

//Manipulando conta: Retirando
$clientAccount->Withdraw(1000);
var_dump($clientAccount->GetBalance());