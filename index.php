<?php
var_dump($_GET);
//echo "Corso {$_GET['corso']} realizzato da {$_GET['nome']}";
//extract($_GET);
//echo "Corso {$corso} realizzato da {$nome}";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action='index.php' method='GET'>
        <input type='text' name = 'nome' placeholder='Nome...'>
        <input type='text' name = 'corso' placeholder='Corso...'>
        <br>
        <br>
        <input type='submit' value="Invia..">
    </form>
</body>
</html>