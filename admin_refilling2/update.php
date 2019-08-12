<?php

require_once('../connect.php');

$sql = "UPDATE refilling_cartridges2 SET printer=:printer, cartridge=:cartridge, price=:price WHERE id=:id";

$stmt = $pdo->prepare($sql);
$stmt->execute($_REQUEST);

header("Location: admin_refilling.php");