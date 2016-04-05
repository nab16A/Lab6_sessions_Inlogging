<?php

//Filen sessiontest.php benytter klassen User

require ('user.class.php');
session_start();


if (!isset($_SESSION['bruker'])){
    //bruker referer til et nytt objekt som lagret i sesjon-tabell
    $_SESSION['bruker'] = new User("kc","Knut Collin");
}
else {

    if($_SESSION['bruker']->verifyUser()){
        echo "Velkommen<br />";
        echo $_SESSION['bruker']->getFullName();
        echo " - antall besok  er ";
        echo $_SESSION['bruker']->getHits();
    }
    else {
        echo "Session hijacked....";
    }

}
?>

<php?
# the <?=SID?> is necessary to preserve the session id
# in the case that the user has disabled cookies
?>

To continue, <A HREF="sessiontest.php?<?=SID?>">click here</A>