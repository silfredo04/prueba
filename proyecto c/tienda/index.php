<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CARRO DE COMPRAS</title>
</head>
</html>
<?php
    //require_once("vista/inicio.php");
    session_start();
    if(!isset($_SESSION['Reg']))
        require_once("login.php");
    else {
        if($_SESSION['Reg'] != 'ok')
            require_once("login.php");
        else
            require_once("login.php");
    }   
    if($_POST){
        $controlador = $_POST['controlador'];
        $accion = $_POST['accion'];
        if(file_exists("controlador/{$controlador}.php")){
            require_once("controlador/{$controlador}.php");
            $control = new $controlador();
            $control->$accion($_POST);
        }
    }
    /*if(isset($_GET['a'])){
        if($_GET['a']=='admin')
            require_once("vista/adminVista.php");
        if($_GET['a']=='sede')
            require_once("vista/sede.php");
        if($_GET['a']=='sala')
            require_once("vista/sala.php");
        if($_GET['a']=='comp')
            require_once("vista/compuVista.php");
    } */
    if(isset($_GET['b'])){
        session_destroy();
        header('Location: index.php');
    }     
?>