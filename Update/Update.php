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
    <link rel="stylesheet" href="../style/main.css">
    <link rel="stylesheet" href="../style/form.css">
    <title>Document</title>
</head>
<body>
<h1></h1>
<?php foreach ($results as $result) { ?>
<form method="post" action="./verwerking_update.php?ID=<?= $result['BlogNummer']; ?>"">
    <label for="onderwerp">Je onderwerp:</label>
    <input type="text" id="onderwerp" name="onderwerp" value="<?= $result['BlogOnderwerp'] ?>">

    <label for="subtekst">Subtekst</label>
    <input type="text" id="subtekst" name="subtekst" value="<?= $result['BlogSubTekst'] ?>">

    <label for="body">Body tekst</label>
    <input type="text" id="body" name="body"value="<?php echo $result['BlogBody'] ?>">



    <label for="wie">Wie</label>
    <select name="Wie" id="wie" Required>
        <option value="Ruben">Ruben</option>
        <option value="Sven">Sven</option>
        <option value="Niels">Niels</option>
    </select>

    <input id="submit-button" type="submit">
    <style>
        #submit-button{
            background-color: #b798ff;
        }
    </style>
</form>
<?php } ?>
</body>
</html>
