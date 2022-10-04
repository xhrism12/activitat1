<?php
    session_start();
    //configuració entorn
    define ('APP',__DIR__);

    require 'config.php';
    require 'src/route.php';
    require 'src/routes.php';
    //enrutament
    /*if ($_GET['url'] = )*/
    //crida al controlador
    $controlador = getRoute($routes); 
    echo $controlador;
    
    require 'src/controllers/'.$controlador.'.php';

/*$ruta = $_GET['url'];
$url = $_SERVER['REQUEST_URL'];
$ar_url = parse_url('url');
var_dump($ruta);

if ($ar_url['path'] == 'login'){
    header('Location:login.php');
}*/
?>