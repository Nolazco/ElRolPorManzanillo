<?php

$mysqli = new mysqli("localhost", "root", "", "base_user");
if ($mysqli->connect_errno) {
    echo "Conexión fallida a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "\n"; echo "<br/>";


?>