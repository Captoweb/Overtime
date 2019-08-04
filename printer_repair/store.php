<?php

require_once('../connect.php');

$sql = "INSERT INTO printer_repair(printer, model, price) VALUES(:printer, :model, :price)"; 

$stmt = $pdo->prepare($sql); 
$stmt->execute($_POST);

header("location: printer_repair.php");