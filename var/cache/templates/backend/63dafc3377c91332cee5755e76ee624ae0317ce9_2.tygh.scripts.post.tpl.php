<?php
/* Smarty version 4.3.0, created on 2024-11-04 14:18:45
  from '/var/www/cscart/design/backend/templates/addons/paypal_checkout/hooks/index/scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6728ad9506ee43_51828848',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63dafc3377c91332cee5755e76ee624ae0317ce9' => 
    array (
      0 => '/var/www/cscart/design/backend/templates/addons/paypal_checkout/hooks/index/scripts.post.tpl',
      1 => 1728378216,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6728ad9506ee43_51828848 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/cscart/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
echo smarty_function_script(array('src'=>"js/addons/paypal_checkout/configure.js"),$_smarty_tpl);?>

<?php }
}
