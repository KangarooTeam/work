<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 25.08.2018
 * Time: 20:32
 */

    function loadPage($controllerName, $actionName ='index') {
        include_once PathPrefix . $controllerName . PathPostfix;

        $function = $actionName . 'Action';
        $function();
    }