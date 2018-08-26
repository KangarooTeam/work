<?php
/**
 * @param $controllerName название контроллера
 * @param string $actionName название функции
 */
    function loadPage($controllerName, $actionName ='index') {
        include_once PathPrefix . $controllerName . PathPostfix;

        $function = $actionName . 'Action';
        $function();
    }