<?php

//error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);
try {
//connectie database
    $pdo = new PDO("sqlite:identifier.sqlite");
}catch(PDOException $e){
    echo $e->getMessage();
}
//pakt de database
$stmt = $pdo->prepare("SELECT * FROM BlowBlo0gske ORDER BY BlogNummer ASC LIMIT 1");
$stmt->execute();

$result = $stmt->fetchAll();
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style-index.css">
    <title>Blog met mijjjj</title>
</head>
<body>
<div id="main_grid">
    <div id="balkie">
        <a href="./Create">Create</a>
        <a href="./Update">Update</a>
        <a href="./Delete">Delete</a>
    </div>
    <div id="left_side">
        <div id="main">
            <?php foreach ($result as $row) { ?>
                <div class="db_section">
                    <a href="./Read/index.php?ID=<?= $row['BlogNummer']; ?>" class="ding">
                        <h1><?= $row['BlogOnderwerp']. " - " . $row["wie"]?></h1>
                        <h3><?= $row["BlogSubTekst"]?></h3>
                        <p><?= $row["BlogBody"]?></p>
                    </a>
                </div>
            <?php }?>
        </div>
    </div>
    <div id="right_side">

    </div>
</div>
</body>
</html>

