<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
try {
    $pdo = new PDO("sqlite:../identifier.sqlite");
}catch(PDOException $e){
    echo $e->getMessage();
}

//pakt de database
$stmt = $pdo->prepare("SELECT * FROM BlowBlo0gske");
$stmt->execute();

$result = $stmt->fetchAll();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../style/tables.css">
</head>
<body>
    <table border="1px">
        <tr>
            <th>onderwerp</th>
            <th>subtekst</th>
            <th>tekst</th>
            <th>wie</th>
            <th>actie</th>
        </tr>
        <?php foreach ($result as $row) { ?>
        <tr>
            <td><?= $row['BlogOnderwerp'];?></td>
            <td><?= $row['BlogSubTekst'];?></td>
            <td><?= $row['BlogBody'];?></td>
            <td><?= $row['wie'];?></td>
            <td><a href="./Delete.php?ID=<?= $row['BlogNummer']; ?>">delete</a></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
