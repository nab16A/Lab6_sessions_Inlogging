<?php

//Filen intern.php kan ikke aksesseres uten at brukeren har logget seg inn via login.php

@session_start();
//@session_start(); //@ gjør at evt. feilmelding ikke vises
if ( isset($_SESSION['innlogget']) )
{
    echo "Du er logget inn " . $_SESSION['navn'];
}
else {
    include "login.php"; //viser skjema for innlogging
}