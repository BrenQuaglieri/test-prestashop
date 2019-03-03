<?php /* Smarty version Smarty-3.1.19, created on 2019-03-03 16:08:57
         compiled from "/var/www/html/test-prestashop/admin545ke4ljr/themes/default/template/controllers/modules/warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12581858415c7bee09a9a1a7-94102908%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6372dcc7f90faeee3a50938fcaf93d2569d2c764' => 
    array (
      0 => '/var/www/html/test-prestashop/admin545ke4ljr/themes/default/template/controllers/modules/warning_module.tpl',
      1 => 1541059270,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12581858415c7bee09a9a1a7-94102908',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c7bee09abaf92_96443276',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c7bee09abaf92_96443276')) {function content_5c7bee09abaf92_96443276($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a>
<?php }} ?>
