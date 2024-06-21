<?php

require_once 'inicio/inicio_fnc.php';

$accion = "";
if (isset($_POST['accion'])) {
    $accion = $_POST['accion'];
}

$acc = "todo";
if (isset($_GET['acc'])) {
    $acc = $_GET['acc'];
}

if ($acc == "todo") {
    banner($accion);
    vender();
    clientes();
} else {
    if ($acc == "vender") {
        vender();
    } elseif ($acc == "clientes") {
        clientes_solo();
    }
}
