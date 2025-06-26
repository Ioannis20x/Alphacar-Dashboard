<?php
$mysqli = new mysqli("ioannisdev.de", "samp", "Kokoras_12!!", "Alphacar");

if($mysqli -> connect_errno) {
    echo "Fehler beim verbinden: " . $mysqli -> connect_error;
    exit();
}
else{
    print("ERFOLG: Verbindung zur Datenbank hergestellt");
}