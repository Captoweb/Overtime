<?php

require_once('../connect.php');

$sql = "INSERT INTO cartridges_sale(printer, model, price) VALUES(:printer, :model, :price)"; 

$stmt = $pdo->prepare($sql); 
$stmt->execute($_POST);

header("location: cartridges_sale.php");