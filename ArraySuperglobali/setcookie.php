<?php
   $scadenzaCookie = time() + 3600;
   //Ritorna il tempo attuale + 3600 secondi;
   setcookie('coloriPreferiti','Scuri',$scadenzaCookie);
   var_dump($_COOKIE);
?>