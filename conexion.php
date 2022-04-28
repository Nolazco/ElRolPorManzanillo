<?php
    $mysqli = new mysqli("localhost", "root", "Root12345!", "base_user");
    if ($mysqli->connect_errno) {
        echo "Conexión fallida a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
?>