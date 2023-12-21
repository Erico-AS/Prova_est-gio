<?php
    $server = "localhost";
    $db = "Biblioteca";

    $conn = new mysqli($server, 'root', '', $db);
    
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }
?>