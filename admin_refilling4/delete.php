<?php
$id = $_GET['id'];

require_once('../connect.php');

$sql = "DELETE FROM refilling_cartridges4 WHERE id=:id";

$stmt = $pdo->prepare($sql);
$stmt->bindParam("id", $id);
$stmt->execute();

header("location: admin_refilling.php");