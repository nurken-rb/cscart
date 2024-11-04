<?php
/* Smarty version 4.3.0, created on 2024-11-04 14:18:45
  from '/var/www/cscart/design/backend/templates/addons/rus_payments/hooks/index/scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6728ad950d37f5_75205006',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec65fe4a16a6cc09e664aec0fd92887d5ca85f5e' => 
    array (
      0 => '/var/www/cscart/design/backend/templates/addons/rus_payments/hooks/index/scripts.post.tpl',
      1 => 1728378216,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6728ad950d37f5_75205006 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/cscart/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
echo smarty_function_script(array('src'=>"js/addons/rus_payments/yandex_checkpoint.js"),$_smarty_tpl);
}
}
