<?php
try {
    $pdo = new PDO("sqlite:../identifier.sqlite");
}catch (PDOException $e){echo "Error: ".$e->getMessage();}

$ID = $_GET["ID"];

$stmt = $pdo->prepare("DELETE FROM BlowBlo0gske WHERE BlogNummer = :ID");
$stmt->execute([
    ':ID' => $ID
]);

$results = $stmt->fetchAll();
header("Location: ../");
?>
