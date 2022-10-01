<?php
//METODO MAGICO __CALL
/*--Come sappiamo le classi che scriviamo non devono essere troppo grandi
ma compatte ed inserite in un contesto ben più ampio. Se una classe
non ha tutte le funzionalità al proprio interno, da qualche parte deve
averle per portare a termine il proprio compito. Uno dei metodi che abbiamo
studiato è l'ereditarietà.*/
class EmailService{

    public function sendEmail(){
       echo "Email inviata....";
    }
    

}
class Course{
    public function __construct(public EmailService $emailService){

    }
    /*--Se entriamo nel metodo _call significa che o il metodo esiste
    all'interno della classe Course però non è accessibile, oppure
    non esiste nella classe Course ma esiste nella classe EmailService.
    Il metodo magico __call() può essere utile per delegare l'invocazione di un metodo
    di una classe da un'altra classe*/
    public function __call(string $metodo, array $args):mixed{

        if (method_exists($this -> emailService, $metodo)){
            $this->emailService ->sendEmail();
        }
        return true;

    }
}
$corsoPHP = new Course(new EmailService()); 
$corsoPHP -> sendEmail();  

?>