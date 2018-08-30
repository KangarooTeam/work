<?php /* Smarty version Smarty-3.1.6, created on 2018-08-30 20:11:17
         compiled from "../views/default\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:48405b88253580d3b1-92451134%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9797888b337e03f99b06385b60a372bbb52d5e02' => 
    array (
      0 => '../views/default\\header.tpl',
      1 => 1535648843,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48405b88253580d3b1-92451134',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pageTitle' => 0,
    'TemplateWebPath' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5b8825359361f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b8825359361f')) {function content_5b8825359361f($_smarty_tpl) {?><HTML>
<HEAD>
    <meta charset="'utf-8">
    <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['TemplateWebPath']->value;?>
css/main.css" type="text/css">
</HEAD>
<BODY>
<div id="header">
    <h1>my shop - интернет магазин</h1>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("leftcolumn.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div id="centerColumn">
    centerColumn<?php }} ?>