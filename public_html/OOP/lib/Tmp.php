<?php
//COPIA DI UN OGGETTO
class User{
   protected int $id;
   public string $nome;
   public Skills $skillsInstance;
   public function __construct(string $nome, array $competenze){
      $this -> nome = $nome;
      $this -> id = rand(1,100000);
      $this -> skillsInstance = new Skills($competenze);
   }
   public function __clone(){
      $this -> id = rand(1,100000);
      $this -> nome = 'Utente clonato';
      $this -> skillsInstance = new Skills([]);
      /*Non conoscendo le capacità dell'utente clonato
      passiamo un array vuoto*/
   }
}
class Skills{
   public function __construct(public array $competenze){ 
   }
}
$user1 = new User("Utente uno",['HTML','CSS']);
$user2 = clone $user1;
$user2 -> skillsInstance -> competenze =['JS' , 'PHP'];
var_dump($user1,$user2);
?>