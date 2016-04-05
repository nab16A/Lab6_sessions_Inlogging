<?php
session_start();
//et skjema for å logge seg inn
if (isset($_POST['knapp']) ){
    //sjekk om brukernavn og passord er riktig
    if ( $_POST['bruker'] == "jens" && $_POST['passord'] == "1234" ) {
        $_SESSION['navn'] = ucfirst($_POST['bruker']);
        $_SESSION['innlogget'] = true;
        include "intern.php";
    }
    else {
        //kaller opp siden p� nytt igjen, dvs tvinger ny innlogging
        header("Location: {$_SERVER['PHP_SELF']}");
        exit; //hindrer at koden under utf�res p� tross av redirect
    }
}//slutt if, knapp trykket
else {
    //skal vise skjemaet
    ?>
    <h3>Du m&aring logge inn</h3>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <table>
            <tr><td>Brukernavn: </td>
                <td><input type="text" name="bruker"></td></tr>
            <tr><td>Passord: </td>
                <td><input type="password" name="passord" size="5"></td></tr>
            <tr><td colspan="2"><input type="submit" name="knapp"></td>
            </tr></table></form>
    <?php
}//slutt else