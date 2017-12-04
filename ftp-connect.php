<?php

$ftp_server = "123.1.2.3.4";

// Variablen definieren
$local_file = 'test.csv';
$server_file = 'test';

// Verbindung aufbauen
$conn_id = ftp_connect($ftp_server);
$ftp_user_name = 'name';
$ftp_user_pass = 'passwort';

// Login mit Benutzername und Passwort
$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);

// Versuche $server_file herunterzuladen und in $local_file zu speichern
if (ftp_get($conn_id, $local_file, $server_file, FTP_BINARY)) {
    echo "$local_file wurde erfolgreich geschrieben\n";
} else {
    echo "Ein Fehler ist aufgetreten\n";
}

// Verbindung schließen
ftp_close($conn_id);

?>
