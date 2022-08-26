<?php
/*--Se vogliamo conservare lato server i dati nella comunicazione
con un client utilizziamo le sessioni. La prima cosa da fare è avviare
una sessione con l'istruzione session_start();*/
session_start();
echo session_id() . '<br>';
echo session_save_path();
if(isset($_POST['preferenza'])){
    $_SESSION['preferenzaColori'] = $_POST['colori'];
}
?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="pagina2.php">Pagina 2</a>
    <br>
    <br>
    <form action="$_SESSION.php" method="post">
        <input type="text" name="colori" placeholder="Colori preferiti...">
        <input type="submit" name='preferenza' value="Invia preferenza...">
    </form>
</body>

</html>