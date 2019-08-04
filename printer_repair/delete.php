<?php
$id = $_GET['id'];

require_once('../connect.php');

$sql = "DELETE FROM printer_repair WHERE id=:id";

$stmt = $pdo->prepare($sql);
$stmt->bindParam("id", $id);
$stmt->execute();

header("location: printer_repair.php");