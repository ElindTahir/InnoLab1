<?php

function emptyInputSignup($Geschlecht, $Vorname, $Nachname, $Benutzername, $Email, $Passwort, $PasswortBestätigen)                  //Funktion um zu schauen ob Eingabezeilen nicht ausgefüllt wurden
{
    $result = 0;
    if (empty($Geschlecht) || empty($Vorname) || empty($Nachname) || empty($Benutzername) || empty($Email) || empty($Passwort) || empty($PasswortBestätigen)) {        //Falls eines von den aufgezählten Variablen leer ist setzte result auf wahr, wenn nicht auf falsch
        $result = true;
    } else {
        $result = false;
    }
    return $result;             //retoniert das Ergebnis
}

function invalidUsername($Benutzername)
{
    $result = 0;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $Benutzername)) {       //preg_match um den Benutzernamen nach den angeführten Zeichen zu scannen
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidEmail($Email)
{
    $result = 0;
    if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {           //Filtert und validiert die Email
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function passwordMatch($Passwort, $PasswortBestätigen)      //Funktion um zu prüfen ob die eingegebenen Passwörter übereinstimmen
{
    $result = 0;
    if ($Passwort !== $PasswortBestätigen) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function UsernameExists($connection, $Benutzername, $Email)                     //Prepared Statement - Sicherheitsmaßname um die Datenbank zu schützen
{
    $sql = "SELECT * FROM benutzer WHERE Benutzername = ? OR Email = ?;";       //Es wird auf die benutzer Datenbank zugegriffen
    $stmt = mysqli_stmt_init($connection);                                      //Initialisiert ein Statement und retoniert ein Objekt für mysqli_stmt_prepare

    if (!mysqli_stmt_prepare($stmt, $sql)) {                                    //Bereitet ein SQL Statement für eine Ausführung vor
        header("location: ../Registrierung.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $Benutzername, $Email);                         //Bindet variablen an ein prepared statement als parameter   // ss weil wir zwei strings haben
    mysqli_stmt_execute($stmt);                                                         //Führt ein prepared Statement durch

    $resultData = mysqli_stmt_get_result($stmt);                                        //Erhält ein Ergebnis von prepared statements

    if ($row = mysqli_fetch_assoc($resultData)) {                                       //Man schnappt sich das Ergebnis
        return $row;
    } else {
        $result = false;
        return $result;
    }
}

function createUser($connection, $Geschlecht, $Vorname, $Nachname, $Benutzername, $Email, $Passwort)               //Funktion um den Benutzer zu erstellen
{
    $sql = "INSERT INTO benutzer (Geschlecht, Vorname, Nachname, Benutzername, Email, Passwort) VALUES (?, ?, ?, ?, ?, ?);";           //SQL statement um die Datenbank benutzer mit den Werten zu befüllen
    $stmt = mysqli_stmt_init($connection);                                                                                                                  //Initialisiert ein Statement und retoniert ein Objekt für mysqli_stmt_prepare

    if (!mysqli_stmt_prepare($stmt, $sql)) {                                                                                                                //Bereitet ein SQL Statement für eine Ausführung vor
        header("location: ../Registrierung.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($Passwort, PASSWORD_DEFAULT);                                                                                                //Hashing Algorithmus um die Passwörter zu verschlüsseln

    mysqli_stmt_bind_param($stmt, "ssssss", $Geschlecht, $Vorname, $Nachname, $Benutzername, $Email, $hashedPwd);                        //Bindet variablen an ein prepared statement als parameter      // sssssss weil wir acht strings haben
    mysqli_stmt_execute($stmt);                                                                                                                             //Führt ein prepared Statement durch
    mysqli_stmt_close($stmt);                                                                                                                               //Schließt ein prepared Statement
    header("location: ResultReg.php");
    exit();

    // ... Um nach registrierung auf seite zu kommen weil sonst leer
}

function emptyInputLogin($Benutzername, $Passwort)                                                                                                          //Funktion um zu schauen ob Eingabezeilen nicht ausgefüllt wurden
{
    $result = 0;
    if (empty($Benutzername) || empty($Passwort)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;                                                                                                                                          //retoniert das Ergebnis
}

function LoginUser($connection, $Benutzername, $Passwort)                                                                                                       //Funktion um den Benutzer einzuloggen
{
    $UsernameExists = UsernameExists($connection, $Benutzername, $Benutzername);

    if ($UsernameExists === false) {                                                                                                                            //Falls die Zugangsdaten nicht stimmen soll eine Fehlermeldung ausgegeben werden
        header("location: ../Anmeldung.php?error=Falsche Zugangsdaten!");
        exit();
    }

    $PasswortHashed = $UsernameExists["Passwort"];  	                                                                                                        //Das gehashte Passwort wird auf die Variable $PasswortHashed gespeichert
    $CheckPassword = password_verify($Passwort, $PasswortHashed);                                                                                               //Es wird überprüft ob das eingegebene Passwort mit dem gehashten Passwort übereinstimmt

    if ($CheckPassword === false) {                                                                                                                             //Falls die Passwörter nicht übereinstimmen soll eine Fehlermeldung ausgegeben werden
        header("location: ../Anmeldung.php?error=Falsche Zugangsdaten!");
        exit();
    } else if ($CheckPassword === true) {                                                                               //Falls die Passwörter übereinstimmen und der Benutzeraccount aktiv ist soll der Benutzer eingeloggt werden
        session_start();                                                                                                                                        //Session wird gestartet
        $_SESSION["userid"] = $UsernameExists["BenutzerID"];                                                                                                    //BenutzerID wird in der Session gespeichert
        $_SESSION["useruid"] = $UsernameExists["Benutzername"];                                                                                                 //Benutzername wird in der Session gespeichert
        $_SESSION["gender"] = $UsernameExists["Geschlecht"];                                                                                                    //Geschlecht wird in der Session gespeichert
        $_SESSION["firstName"] = $UsernameExists["Vorname"];                                                                                                    //Vorname wird in der Session gespeichert
        $_SESSION["lastName"] = $UsernameExists["Nachname"];                                                                                                    //Nachname wird in der Session gespeichert
        $_SESSION["email"] = $UsernameExists["Email"];                                                                                                          //Email wird in der Session gespeichert                                                                                                          //Rolle wird in der Session gespeichert
        header("location: ../index.php");
        exit();
    }
}
