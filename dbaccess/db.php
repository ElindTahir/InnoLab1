<?php

$serverName = "localhost";  //Xampp Verlinkung wegen der lokalen Datenbank
$dbUsername = "root";
$dbPassword = "";           //leere Passwortbezeichnung durch Xampp
$dbName = "InnoLab1";    //Name von der Datenbank

$connection = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);   //Verbindung zur Datenbank

if (!$connection) {     //Falls die Verbindung nicht hergestellt werden kann
    die("Verbindung zur Datenbank fehlgeschlagen: " . mysqli_connect_error());
}
