<?php

require_once('../connect.php');

$sql = "UPDATE cartridges_sale SET printer=:printer, model=:model, price=:price WHERE id=:id";

$stmt = $pdo->prepare($sql);
$stmt->execute($_REQUEST);

header("Location: cartridges_sale.php");