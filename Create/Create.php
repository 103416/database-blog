<?php
$wie = $_POST["Wie"];
$onderwerp = $_POST["onderwerp"];
$subtext = $_POST["subtekst"];
$body = $_POST["body"];
if ($wie == ""||$onderwerp == ""||$subtext == ""||$body == "") {
    echo "er is een foutmelding";
}
error_reporting(E_ALL);
ini_set('display_errors', 1);
try {
    $pdo = new PDO("sqlite:../identifier.sqlite");
}catch(PDOException $e){
    echo $e->getMessage();
}
$query = "
    INSERT INTO BlowBlo0gske (wie, BlogOnderwerp, BlogSubTekst, BlogBody) values (:wie, :onderwerp, :subtext, :body);
";
    $stmt = $pdo->prepare($query);
    $stmt->execute([
        ':wie' => $wie,
        ':onderwerp' => $onderwerp,
        ':subtext' => $subtext,
        ':body' => $body
    ]);
    header("Location:../");