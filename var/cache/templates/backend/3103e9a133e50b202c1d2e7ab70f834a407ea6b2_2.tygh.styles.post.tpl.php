<?php
/* Smarty version 4.3.0, created on 2024-11-04 14:18:43
  from '/var/www/cscart/design/backend/templates/addons/store_locator/hooks/index/styles.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6728ad93638ad7_33759876',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3103e9a133e50b202c1d2e7ab70f834a407ea6b2' => 
    array (
      0 => '/var/www/cscart/design/backend/templates/addons/store_locator/hooks/index/styles.post.tpl',
      1 => 1728378216,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6728ad93638ad7_33759876 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/cscart/app/functions/smarty_plugins/function.style.php','function'=>'smarty_function_style',),));
if ($_smarty_tpl->tpl_vars['store_locator_shipping']->value && $_smarty_tpl->tpl_vars['shipping']->value['company_id'] == 0) {?>
    <?php echo smarty_function_style(array('src'=>"addons/store_locator/styles.less"),$_smarty_tpl);?>

<?php }
}
}
