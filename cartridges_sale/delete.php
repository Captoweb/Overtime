<?php
$id = $_GET['id'];

require_once('../connect.php');

$sql = "DELETE FROM cartridges_sale WHERE id=:id";

$stmt = $pdo->prepare($sql);
$stmt->bindParam("id", $id);
$stmt->execute();

header("location: cartridges_sale.php");