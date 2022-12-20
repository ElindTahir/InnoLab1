<?php

if (isset($_POST["submit"])) {                                                      //Funktion isset schaut ob etwas deklariert wurde als der submit button getätigt wurd

    $Geschlecht = $_POST["gender"];                                                 //Die diversen Werte werden auf den Variablen gespeichert
    $Vorname = $_POST["firstName"];
    $Nachname = $_POST["lastName"];
    $Benutzername = $_POST["username"];
    $Email = $_POST["email"];
    $Passwort = $_POST["password"];
    $PasswortBestätigen = $_POST["passwordConfirm"];

    require_once '../dbaccess\db.php';                                              //Die Datenbank wird inkludiert
    require_once '../includes\functions.php';                                       //Die seperat angelegten Funktionen werden inkludiert          


    if (emptyInputSignup($Geschlecht, $Vorname, $Nachname, $Benutzername, $Email, $Passwort, $PasswortBestätigen) != false) {                  //Falls eine Eingabezeile nicht ausgefüllt wurde soll eine Fehlermeldung ausgegeben werden  
        header("location: ../Registrierung.php?error=BitteAllesAusfüllen!");
        exit();
    }

    if (invalidUsername($Benutzername) != false) {                                                                                                              //Falls der Benutzername nicht gültig ist soll eine Fehlermeldung ausgegeben werden
        header("location: ../Registrierung.php?error=UngueltigerBenutzername!");
        exit();
    }

    if (invalidEmail($Email) != false) {                                                                                                                        //Falls die Email nicht gültig ist soll eine Fehlermeldung ausgegeben werden
        header("location: ../Registrierung.php?error=UngueltigeEmail!");
        exit();
    }

    if (passwordMatch($Passwort, $PasswortBestätigen) != false) {                                                                                               //Falls die Passwörter nicht übereinstimmen soll eine Fehlermeldung ausgegeben werden
        header("location: ../Registrierung.php?error=PasswörterStimmenNichtÜberein!");
        exit();
    }

    if (UsernameExists($connection, $Benutzername, $Email) != false) {                                                                                          //Falls der Benutzername schon vergeben ist soll eine Fehlermeldung ausgegeben werden
        header("location: ../Registrierung.php?error=BenutzernameSchonVergeben!");
        exit();
    }

    createUser($connection, $Geschlecht, $Vorname, $Nachname, $Benutzername, $Email, $Passwort);           //Die Funktion wird ausgeführt um den Benutzer zu erstellen
} else {                                                                                                                    //Um nicht manuell auf die signup.inc.php kommen zu können - Weiterleitung zur RegistrierungsSeite
    header("location: ../Registrierung.php");
    exit();
}
