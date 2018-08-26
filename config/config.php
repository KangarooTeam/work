<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 25.08.2018
 * Time: 20:30
 */

    //> константы для обрпщения к контроллерам

    define('PathPrefix', '../controllers/');
    define('PathPostfix', 'Controller.php');
    //<

    //> используемый шаблон

    $template = 'default' ;

    // пути к файлам шаблонов (*.tpl)

    define('TemplatePrefix', "../views/($template)/"); // где находятся шаблоны
    define('TemplatePostfix', ".tpl"); // чтобы не дописывать каждый раз формат

    // пути к файлам шаблонов в веб-пространстве
    define('TemplateNamePath', "/templates/($template)/");
    //<

    //инициализация шаблона Smarty
    require('../library/Smarty/libs/Smarty.class.php');
    $smarty = new Smarty();

    $smarty->setTemplateDir(TemplatePrefix);
    $smarty->setCompileDir('../tmp/smarty/templates_c');
    $smarty->setCaheDir('../tmp/smarty/cashe');
    $smarty->setConfigDir('../library/Smarty/configs');

    $smarty->assign('templateWebPath', TemplateNamePath);
