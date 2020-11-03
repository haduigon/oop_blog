<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

require_once "vendor/autoload.php";

spl_autoload_register(function ($class){
$folder = "Helpers";
if (strpos($class, "Model") !== false) {
    $folder = "Models";
} else if (strpos($class, "Controller")!== false){
    $folder = "Controllers";
}
$filePath = "$folder/$class.php";
if(!file_exists($filePath)){
    die($filePath);
}
require_once $filePath;
});

$uri = ltrim($_SERVER['REQUEST_URI'],'/');
$uri_array = explode('/', $uri);
$class = empty($uri_array[0]) ? 'main' : $uri_array[0];
$method= $uri_array[1] ?? 'index';
$parameter = $uri_array[2] ?? null;

$controller = ucfirst($class) . 'Controller';
$object = new $controller();

if(method_exists($object,$method)){
    $object->$method();
}else{

    die("NOT FOUND");
}

