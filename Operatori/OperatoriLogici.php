<?php
//OPERATORI LOGICI AND &&; OR ||;XOR ;NOT !
$sole = true;
$voglia = true;
/*--Supponiamo che vogliamo fare una passegiiata
se c'è il sole e se ne abbiamo voglia.*/
if ($sole === true && $voglia === true)//Se vogliamo che entrambe le condizioni siano vere usiamo un AND.
{
    echo 'Faremo una passeggiata'."\n\r";
}else{
    echo 'Non faremo una passeggiata'."\n\r";
}
/*--L'opratore logico AND ritorna true solo se entrambe le condizioni
sono vere.*/
var_dump(true && true)."\n\r";
var_dump(true && false)."\n\r";
var_dump(false && false). "\n\r";
/*--L'operatore logico || ritorna true se almeno una delle due condizioni è vera.*/
var_dump(true || true)."\n\r";
var_dump(true || false)."\n\r";
var_dump(false || false). "\n\r";
/*--Operatore xor abbiamo true se una condizione è true e l'altra false*/
var_dump(true xor true)."\n\r";
var_dump(true xor false)."\n\r";
var_dump(false xor true). "\n\r";
var_dump(false xor false). "\n\r";
/*--L'operatore not (!) di negazione inverte il valore, da true a false
e da false a true*/
var_dump(!false). "\n\r";
$stringa = 'Corso PHP';
var_dump((boolean)($stringa));//Solo se abbiamo una stringa vuota ciene convertita in false.
var_dump((boolean)(0));//false
var_dump((boolean)(0.0));//false
var_dump((boolean)(null));//false
var_dump((boolean)([]));//Array vuoto (false)

if (!$_POST){//Array vuoto. Non possiamo utlizzare una stretta uguaglianza $_POST === false perchè i tipi sono diversi (ramo else)
    echo 'Form non inviato...';
}else
{
    echo 'Form inviato...'; 
}
/*--$_POST verrà convertito da PHP nel booleano false e l'uguaglianza $_POST == false sarà vera. possiamo anche usare l'operatore
! per entrare nella struttura condizionale, $_POST viene convertito in false, negandolo avremo true.*/
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="OperatoriLogici.php" method="post">
        <input type="text" name="campo1">
        <input type="submit" name="myForm" value="Invia...">
    </form>
</body>
</html>