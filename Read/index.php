<?php
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
</head>
<body>

<?php foreach ($results as $row) { ?>
    <a href="./Read/index.php?ID=<?= $row['BlogNummer']; ?>" class="ding"></a>
    <h1><?= $row['BlogOnderwerp']. " - " . $row["wie"]?></h1>
    <h3><?= $row["BlogSubTekst"]?></h3>
    <p><?= $row["BlogBody"]?></p>
    <a href="../">back </a>
<?php }?>
</body>
</html>
