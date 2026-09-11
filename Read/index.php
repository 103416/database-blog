<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

try {
    $pdo = new PDO("sqlite:../identifier.sqlite");
}catch (PDOException $e){echo "Error: ".$e->getMessage();}

$ID = $_GET["ID"];

$stmt = $pdo->prepare("SELECT * FROM BlowBlo0gske WHERE BlogNummer = :ID");
$stmt->execute([
    ':ID' => $ID
]);

$results = $stmt->fetchAll();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../style/main.css">
    <link rel="stylesheet" href="../style/read.css">
</head>
<body>

<?php foreach ($results as $row) { ?>
        <div class="card">
            <h1><?= $row['BlogOnderwerp']. " - " . $row["wie"]?></h1>
            <div class="innertext">
                <h3><?= $row["BlogSubTekst"]?></h3>
                <p><?= $row["BlogBody"]?></p>
            </div>
            <a class="back" href="../">back </a>
        </div>

<?php }?>
</body>
</html>
