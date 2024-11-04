<?php
/* Smarty version 4.3.0, created on 2024-11-04 14:18:45
  from '/var/www/cscart/design/backend/templates/addons/seo/hooks/index/scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6728ad950ca944_12561198',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23803f210c901fbcd7b2d4ba6ef6249221a2b6ef' => 
    array (
      0 => '/var/www/cscart/design/backend/templates/addons/seo/hooks/index/scripts.post.tpl',
      1 => 1728378216,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6728ad950ca944_12561198 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/cscart/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
echo smarty_function_script(array('src'=>"js/addons/seo/func.js"),$_smarty_tpl);
}
}
