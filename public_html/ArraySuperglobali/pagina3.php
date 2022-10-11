<?php
//STATO DELLA SESSIONE
session_start();
/*--L'ID di sessione creato è lo stesso di
SESSION_STATUS.php, questo vuol dire che solo alla
prima invocazione si session_start() viene creato
un nuovo ID di sessione, se si invoca nuovamente tale
funzione viene recuperata la sessione attiva e il suo ID.
Grazie a questo meccanismo che prevede la generazione di un ID di
sessione che non cambia tra le varie richieste,lato server
siamo in grado di mantenere lo stato. Siamo cioè 
in grado di mantenere le informazione con un client
all'interno di una sessione di navigazione.*/
echo session_id();
?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="SESSION_STATUS.php">Home</a>
</body>

</html>
