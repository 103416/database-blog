<?php
try {
    $pdo = new PDO("sqlite:identifier.sqlite");
}catch(PDOException $e){
    echo $e->getMessage();
}

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
    <title>Blog met mijjjj</title>
</head>
<body>
    <?php foreach ($result as $row) { ?>
    <a href="" class="ding"></a>
         <h1><?php $row['BlogOnderwerp']?></h1>
        <h3><?php $row["BlogSubTekst"]?></h3>
        <p><?php $row["BlogBody"]?></p>
    <?php }?>
</body>
</html>

