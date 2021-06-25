<?php
    header("Content-type: text/html; charset=utf-8");
    define("PASSWORD", "123456");
    define("USUARIO", "root");
    define("HOSTNAME", "localhost");
    define("DATABASE", "urnas");
    include("Votos.php");
    include("Database.php");
?>