<?php

session_start();                            //Session wird gestartet
session_unset();                            //Hier werden alle Session Variablen freigegeben
session_destroy();                          //Hier werden die Daten welche in der Session gespeichert wurden gelöscht

header("location: ../index.php");           //Nach dem ausloggen soll man auf die Startseite kommen
exit();
