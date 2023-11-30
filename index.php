<?php
// ENRUTADOR
require_once($_SERVER["DOCUMENT_ROOT"] . "/Controllers/InscripcionController.php");

$inscripcionController = new InscripcionController();

// Dividimos la ruta por el signo "?" para no leer los query params. Ejem: /clientes?id=1
$route = explode("?", $_SERVER["REQUEST_URI"]);

$method = $_SERVER["REQUEST_METHOD"];


if ($method === "POST") {
    switch ($route[0]) {
        case '/create':
            $inscripcionController->store($_POST["alumno_id"], $_POST["clase_id"]);
            break;

        default:
            echo "NO ENCONTRAMOS LA RUTA.";
            break;
    }
}

if ($method === "GET") {
    switch ($route[0]) {
        case '/index.php':
            $inscripcionController->index();
            break;

        case '/delete':
            $inscripcionController->destroy($_GET["id"]);
            break;

        default:
            echo "NO ENCONTRAMOS LA RUTA.";
            break;
    }
}

if ($method === "POST") {
    switch ($route[0]) {
        case '/login':
            $loginController->login($_POST["correo"]);
            break;

        default:
            echo "NO ENCONTRAMOS LA RUTA.";
            break;
    }
}

if ($method === "GET") {
    switch ($route[0]) {
        case '/index.php':
            $loginController->index();
            break;
        case '/dashboard':
            $loginController->dashboard();
            break;

        default:
            echo "NO ENCONTRAMOS LA RUTA.";
            break;
    }
}