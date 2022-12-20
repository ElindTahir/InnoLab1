<?php

if (isset($_POST["submit"])) {              //Funktion isset schaut ob etwas deklariert wurde als der submit button getätigt wurde

    $Benutzername = $_POST["username"];        //Der Benutzername wird auf die Variable $Benutzername gespeichert
    $Passwort = $_POST["password"];            //Das Passwort wird auf die Variable $Passwort gespeichert

    require_once '../dbaccess\db.php';          //Datenbank wird inkludiert
    require_once '../includes\functions.php';       //Die seperat angelegten Funktionen werden inkludiert

    if (emptyInputLogin($Benutzername, $Passwort) !== false) {              //Falls eine Eingabezeile ausgelassen wurde soll man durch die header Funktion wieder auf die AnmeldeSeite kommen
        header("location: ../Anmeldung.php?error=Bitte alles ausfüllen!");      
        exit();
    }

    LoginUser($connection, $Benutzername, $Passwort);                       //Die Datenbank Verbindung, Benutzername und Passwort werden als Parameter weitergegeben um die Funktion auszuführen die den Benutzer einloggt
} else {                                                                    //Falls jemand die Seite unerlaubt betritt soll der Benutzer wieder auf die Anmeldeseite gesendet werden
    header("location: ../Anmeldung.php");
    exit();
}
