<?php
//TRAIT
trait Trait1{
    public static function fn1(){
        echo "Metodo ". __METHOD__ ." eseguito <br>";
    }
    abstract public function fn3();

    public $p1;

    public function fn5(){
        echo $this->p2;
    }
}
class A{
    use Trait1;
    public $p2 = "Pluto <br>";
    public function fn4($p1){
        $this->p1 = $p1;
    }
    public function fn2(){
        self::fn1();
    }
    public function fn3(){
        echo "Metodo ". __METHOD__ ." eseguito <br>";
    }
}
$a = new A();
$a->fn2();
$a->fn3();
$a->fn4("Pippo <br>");
echo $a->p1;
$a->fn5();
?>