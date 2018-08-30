<?php

    function testAction () {
        echo 'IndexController.php';
    }

/**
 * @param $smarty
 */
    function indexAction ($smarty) {
            $smarty->assign('pageTitle', "Main a page for site");

            loadTemplate($smarty, 'header');
            loadTemplate($smarty, 'index');
            loadTemplate($smarty, 'footer');
        }