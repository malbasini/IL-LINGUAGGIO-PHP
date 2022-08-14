<?php
//ARRAY MULTIDIMENSIONALI
$multidimensionale = [
    ['ISBN' => 1238, 'titolo' => 'Libro 1' ],
    ['ISBN' => 1234, 'titolo' => 'Libro 2' ],
    ['ISBN' => 1234, 'titolo' => 'Libro 3' ]
];
var_dump($multidimensionale); 
//Vogliamo accedere a Libro 3
$item = $multidimensionale[2];
echo $item['titolo'];
echo $multidimensionale[0]['ISBN'];

$multidimensionale = [
    'primo' => ['ISBN' => 1238, 'titolo' => 'Libro 1' ],
    'secondo' => ['ISBN' => 1234, 'titolo' => 'Libro 2' ],
    'terzo' => ['ISBN' => 1234, 'titolo' => 'Libro 3' ]
];
echo $multidimensionale['secondo']['titolo'];
?>