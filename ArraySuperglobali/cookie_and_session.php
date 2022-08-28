<?php
//IL RUOLO DEI COOKIE NELLE SESSIONI
    session_start();
    echo session_id(); exit;
    $_SESSION['colorePreferito'] = 'Blu';
    echo $_SESSION['colorePreferito'];
?>