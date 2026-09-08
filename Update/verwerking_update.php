<?php

$wie = $_POST["Wie"];
$onderwerp = $_POST["onderwerp"];
$subtext = $_POST["subtekst"];
$body = $_POST["body"];
if ($wie == "" || $onderwerp == "" || $subtext == "" || $body == "") {
    echo "er is een foutmelding";
}
error_reporting(E_ALL);
ini_set('display_errors', 1);
try {
    $pdo = new PDO("sqlite:../identifier.sqlite");
} catch (PDOException $e) {
    echo $e->getMessage();
}
$query = "
    UPDATE BlowBlo0gske SET
        BlogOnderwerp = :onderwerp,
        BlogSubtext = :subtext,
        BlogBody = :body
    WHERE
        
";
$stmt = $pdo->prepare($query);
$stmt->execute([
    ':wie' => $wie,
    ':onderwerp' => $onderwerp,
    ':subtext' => $subtext,
    ':body' => $body
]);
header("Location:../");