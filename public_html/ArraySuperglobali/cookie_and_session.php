<?php
//IL RUOLO DEI COOKIE NELLE SESSIONI
    session_start();
    echo session_id();
    $_SESSION['colorePreferito'] = 'Blu';
    echo $_SESSION['colorePreferito'];
?>