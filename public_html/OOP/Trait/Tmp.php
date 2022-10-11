<?php
//TRAIT
trait Trait1{
    public function fn1(){
        echo "Metodo ". __METHOD__ ." eseguito <br>";
    }
}
trait Trait2{
    public function fn1(){
        echo "Metodo ". __METHOD__ ." eseguito <br>";
    }
    public function fn2(){
        echo "Metodo ". __METHOD__ ." eseguito <br>";
    }
}
class A{
    use Trait1, Trait2{
        Trait2::fn1 insteadof Trait1;//SE VOGLIAMO USARE IL METODO fn1() DI TRAIT2
        Trait1::fn1 as fn1_a;//LA KEYWORD as CREA UN ALIAS PER UTILIZZARE fn1() DI TRAIT1
    }
    public function a(){
        echo "Metodo ". __METHOD__ ." eseguito <br>";
    }
    public function fn3(){
        echo "Method ".__METHOD__;
    }

}
$a = new A();
$a->fn1();
$a->fn2();
$a->fn1_a();
?>