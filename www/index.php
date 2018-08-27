<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 22.08.2018
 * Time: 20:03
 */
    include_once ('../config/config.php'); // настройки
    include_once ('../library/mainFunctions.php'); // функции
    // определяем контроллер
    $controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';
    // опрнделяем фунецию
    $actionName = isset($_GET['action']) ? ucfirst($_GET['action']) : 'index';

    loadPage($smarty, $controllerName, $actionName);