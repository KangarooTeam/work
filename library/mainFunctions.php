<?php
/**
 * @param $controllerName название контроллера
 * @param string $actionName название функции
 */
    function loadPage($smarty, $controllerName, $actionName ='index') {
        include_once PathPrefix . $controllerName . PathPostfix;

        $function = $actionName . 'Action';
        $function($smarty);
    }

    function loadTemplate($smarty, $templateName){
        TemplatePrefix . $templateName .= TemplatePostfix;
        $smarty->display( $templateName);
    }

    function d($value=Null, $die=1) {

        echo 'Debag: <br /><pre>';
        print_r($value);
        echo '</pre>';

        if($die) die;
    }