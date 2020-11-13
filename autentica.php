<?php

$title = "Oficina";

if (!$_SESSION['usuario']) {
    header('Location: index.php');
    exit;
}

?>