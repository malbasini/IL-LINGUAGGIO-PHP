<?php
//WHILE
$condizione = true;
$i = 0;
while($condizione === true){//Facciamo attenzione a non creare un loop infinito, dove cioè la condizione
                            //booleana è sempre true;Visualizziamo i risultati nel browser.
    if ($i <= 10){
        echo $i++, '<br>';
    }else{
        $condizione = false;
    }  
}
echo 'Dopo il cilo while...', '<br>';

$alunni = ['Marco' , 'Simona', 'Francesca'];
$numeroAlunni = count( $alunni );
$i = 0;
while ($i < $numeroAlunni){
    echo $alunni[$i++] . "<br>";
}

while ($alunno = array_pop ( $alunni )){
    echo $alunno, '<br>';
}
var_dump ($alunni); //Array vuoto abbiamo rimosso tutti gli elementi dell'array.
?>