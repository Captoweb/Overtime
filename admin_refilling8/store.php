<?php

require_once('../connect.php');

$sql = "INSERT INTO refilling_cartridges8(printer, cartridge, price) VALUES(:printer, :cartridge, :price)"; 

$stmt = $pdo->prepare($sql); 
$stmt->execute($_POST);

header("location: admin_refilling.php");