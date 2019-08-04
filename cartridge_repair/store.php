<?php

require_once('../connect.php');

$sql = "INSERT INTO cartridge_repair(printer, model, price) VALUES(:printer, :model, :price)"; 

$stmt = $pdo->prepare($sql); 
$stmt->execute($_POST);

header("location: cartridge_repair.php");