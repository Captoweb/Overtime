<?php
$id = $_GET['id'];

require_once('../connect.php');

$sql = "DELETE FROM cartridge_repair WHERE id=:id";

$stmt = $pdo->prepare($sql);
$stmt->bindParam("id", $id);
$stmt->execute();

header("location: cartridge_repair.php");