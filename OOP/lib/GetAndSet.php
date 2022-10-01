<?php
//METODI MAGICI GET E SET
Class Test{
    public $a = 1;
    private $b = 2;
    public function __get(string $name)
    {
          if (property_exists($this, $name)){
            echo "La proprietà esiste ma non è accessibile....";
          }
          else{
            echo "La proprietà non esiste....";
          }
          
    }
    public function __set(string $name, mixed $value)
    {
        if (property_exists($this, $name)){
           $this -> $name = $value; //assegno la proprietà
          }
          else{
            echo "La proprietà non esiste....";
          }
    }
    public function getB()
    {
        return $this -> b;
    }
}
$test = new Test();
$test -> a; //OK
$test -> b = 9;
echo $test -> getB();

/*--Non possiamo accedere a proprietà private o protected
dal global scope il metodo magico __get controlla l'accesso
a proprietà non esistenti o non accessibili. __set assegna
un valore a una proprietà, private o protected*/
?>

