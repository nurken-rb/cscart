<?php
/* Smarty version 4.3.0, created on 2024-11-04 14:18:45
  from '/var/www/cscart/design/backend/templates/addons/vendor_communication/hooks/index/scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6728ad950be6b7_13065484',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '936ed556f9d21269b85d631f3b9dbc4396bdbbae' => 
    array (
      0 => '/var/www/cscart/design/backend/templates/addons/vendor_communication/hooks/index/scripts.post.tpl',
      1 => 1728378216,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6728ad950be6b7_13065484 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/cscart/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
echo smarty_function_script(array('src'=>"js/addons/vendor_communication/backend/vendor_communication.js"),$_smarty_tpl);
}
}
