<?php
require "Autoloader.php";

Autoloader::register();
try {
    if(array_key_exists("entity", $_GET && !empty($_GET["entity"]))){
        $class = ucfirst($_GET["entity"]);
        $controller = new $class();

        $controller = getAll();
    // $controller->getCategories();
    $controller->getOne($_GET["id"]);
    // $controller->postOne($_POST);
    // $controller->deleteOne($_GET["id"]);
    // $controller->updateOne($_POST);
    }
    
} catch (\Throwable $th) {
    General::sendError($th->getCode(), $th->getMessage());
}