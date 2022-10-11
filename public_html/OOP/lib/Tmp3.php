<?php   
//instanceof
class C{}
class A extends C {}
class B extends A {}
$b = new B();
var_dump($b instanceof A);//true
var_dump($b instanceof B);//true
var_dump($b instanceof C);//true
$a = new A();
var_dump($a instanceof A);//true
var_dump($a instanceof B);//false

interface Udemy{
    public function curriculum();
}
class Course2 implements Udemy{
    public function curriculum(){}
}
$maestroPHP = new Course2();
var_dump($maestroPHP instanceof Udemy);
echo get_class($maestroPHP)."\n\r";
//possiamo usare anche questa sintassi
echo $maestroPHP::class;