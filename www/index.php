<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 22.08.2018
 * Time: 20:03
 */
    $controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';
    echo $controllerName.'<br />';

    $functionName = isset($_GET['action']) ? ucfirst($_GET['action']) : 'index';
    echo $functionName.'<br />';

    include_once '..controllers/'.$controllerName.'Controller.php';