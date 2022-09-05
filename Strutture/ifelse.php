<?php
//IF ELSE
//sintassi

/*if(condizione/i){
  all'interno del blocco mettiamo le istruzioni nel caso in cui la condizione è verificata
  }else if (condizione/i){ else if non è obbligatoria. Possiamo mettere tutti gli else if
    che ci servono.
  else{ In tutti gli altri casi....
  }
  E' una struttura molto importante che useremo spesso per chè in base a una o più condizioni
  decidiamo il flusso di esecuzione del programma.
}*/
$anni = 18;
if($anni < 12 ){
    echo 'Ha meno di 12 anni';
}else if ($anni >= 12 && $anni < 18){
    echo 'Ha tra i 12 e i 17 anni';
}else{
    echo 'Ha 18 anni o più'; 
}
/*--Spesso è probabile che dobbiamo mostrare un elemento HTML in base ad una condizione. Creiamo
un template HTML. Supponiamo che le voci di menù Home e Contatti siano visibili da chiunque*/
$isLogged = false;
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Contatti</a></li>
            <?php if ($isLogged === true) : ?><!--Possiamo usare i due punti al posto delle parentesi-->
                <li><a href="">Profilo</a></li>
            <?php else : ?>
                <li><a href="">Login</a></li>
            <?php endif; ?>
            
        </ul>
    </nav>
</body>
</html>