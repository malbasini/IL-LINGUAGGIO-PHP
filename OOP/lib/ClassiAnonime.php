<?php
//CLASSI ANONIME
class A{
    public int $a=1;
}

$obj = new class("Classe anonima \n") extends A{
    public function __construct(public string $nome){
        echo $nome;
    }
};
//SIMULAZIONE CLASSI ANNIDATE
class Course{
    public int $p1 = 20;
    public function riepilogo(){
        return new class($this) extends Course{
        public function __construct(){}
        public function getP1(){
            echo $this -> p1;
        }
        
    };
  }
}

$corsoPHP = new Course();
$obj = $corsoPHP->riepilogo();
$obj->getP1();
?>