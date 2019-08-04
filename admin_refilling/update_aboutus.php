<?php

require_once('../connect.php');

$sql = "UPDATE aboutus SET title=:title, content1=:content1, content2=:content2";

$stmt = $pdo->prepare($sql);
$stmt->execute($_POST);

header("Location: aboutus.php");