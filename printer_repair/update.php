<?php

require_once('../connect.php');

$sql = "UPDATE printer_repair SET printer=:printer, model=:model, price=:price WHERE id=:id";

$stmt = $pdo->prepare($sql);
$stmt->execute($_REQUEST);

header("Location: printer_repair.php");