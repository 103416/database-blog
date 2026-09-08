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
<a href="./Create">create blog</a>
<h1>Welkom bij onze blog</h1>

<h3>"Wat als ik niet gewelkomt wil worden"</h3>
    <?php foreach ($result as $row) { ?>
<!--    <a href="" class="ding"></a>-->
         <h1><?= $row['BlogOnderwerp']?></h1>
        <h3><?= $row["BlogSubTekst"]?></h3>
        <p><?= $row["BlogBody"]?></p>
    <?php }?>
</body>
</html>

