<?php
//SERIALIZE UNSERIALIZE

class FileManager{
    private SplFileObject $fileObj;
    public function __construct(
        protected string $filename,
        protected string $mode
    ){
        $this -> fileObj = new SplFileObject($filename,$mode);
    }
    public function read(){
        $fo = $this -> fileObj;
        return $fo -> fread($fo -> getSize());
    }
    //DA PHP 7.4 SONO STATI INTRODOTTI __serialize e __unserialize che
    //prendono il posto di __sleep() e __wakeup().


    /* public function __sleep(){
        return ['filename','mode']; //vogliamo serializzare solo queste due proprietà
    } */

    public function __serialize(){
        return ['filename' => $this -> filename,'mode' => $this -> mode]; //vogliamo serializzare solo queste due proprietà
    }

    /* public function __wakeup()
    {
        Tale metodo magico serve in fase di deserializzazione,
        mentre __sleep in fase di serializzazione.
        $this -> fileObj = new SplFileObject($this -> filename, $this -> mode);
    }*/
    public function __unserialize(array $dati)
    {
        /*--Tale metodo magico serve in fase di deserializzazione,
        mentre __sleep in fase di serializzazione.*/
        $this -> fileObj = new SplFileObject($dati['filename'], $dati['mode']);
    }
}
$testfile = new FileManager('./test.txt','r');//r=read
/*Se proviamo a serializzare $testfile abbiamo un errore fatale
in quanto non tutti gli oggetti sono serializzabili.
SplFileObject rientra tra questi. Risolviamo il problema con il metodo magico __sleep()
*/
serialize($testfile);
$testfile2 = unserialize(serialize($testfile));
echo $testfile2 -> read();

?>