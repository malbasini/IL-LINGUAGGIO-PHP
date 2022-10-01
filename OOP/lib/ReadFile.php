<?php
//DESCRUCT
class FileManager{
    private $fh;
    private $filename;

    public function __construct($filename,$mode){
        $this->filename = $filename;
        $this->fh= fopen($filename,$mode);
    }

    public function read()
    {
        echo fread($this -> fh,filesize($this -> filename))."<br>";
    }
    public function __destruct(){
        fclose($this -> fh);
        echo "Distruttore invocato e file chiuso...<br>";
    }

}
$testfile = new FileManager('./test.txt','r');//r=read
$testfile -> read();
unset($testfile);