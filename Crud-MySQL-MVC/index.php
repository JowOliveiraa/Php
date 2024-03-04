<?php 

    include "controller/UserController.php";

    $url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

    switch($url) {

        case "/":
            echo "pagina inicial";
            break;

        case "/user":
            UserController::index();
            break;

        case "/user/form":
            UserController::form();
            break;

        case "/user/from/save":
            UserController::save();
            break;    

        default:
            echo "Erro 404";                
    }
?>