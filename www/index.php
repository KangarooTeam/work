<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 22.08.2018
 * Time: 20:03
 */
    include_once ('../config/config.php');
    include_once ('../library/mainFunctions.php');

    $controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';

    $actionName = isset($_GET['action']) ? ucfirst($_GET['action']) : 'index';

    loadPage($controllerName, $actionName);