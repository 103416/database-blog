<?php
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../style/form.css">
    <link rel="stylesheet" href="../style/main.css">
</head>
<body>

    <form method="post" action="./Create.php">
        <h1>form</h1>
        <label for="onderwerp">je onderwerp:</label>
        <input type="text" id="onderwerp" name="onderwerp">
        <br>

        <label for="subtekst">subtekst</label>
        <input type="text" id="subtekst" name="subtekst">
        <br>
        <label for="body">body tekst</label>
        <input type="text" id="body" name="body">
        <br>


        <label for="wie">wie</label>
        <select name="Wie" id="wie" required>
            <option value="Ruben">Ruben</option>
            <option value="Sven">Sven</option>
            <option value="Niels">Niels</option>
        </select>
        <br>
        <input type="submit" class="submit">
        <a href="../" class="back">go back</a>
    </form>
</body>
</html>
