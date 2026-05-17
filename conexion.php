<?php
function leerDatos() {
    if(!file_exists("datos.json")){
        file_put_contents("datos.json", "[]");
    }
    $json = file_get_contents("datos.json");
    return json_decode($json, true) ?? [];
}

function guardarDatos($datos) {
    file_put_contents("datos.json", json_encode($datos, JSON_PRETTY_PRINT));
}
?>