<?php

require_once('../connect.php');

$sql = "UPDATE cartridge_repair SET printer=:printer, model=:model, price=:price WHERE id=:id";

$stmt = $pdo->prepare($sql);
$stmt->execute($_REQUEST);

header("Location: cartridge_repair.php");