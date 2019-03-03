<?php /* Smarty version Smarty-3.1.19, created on 2019-03-03 13:45:14
         compiled from "/var/www/html/test-prestashop/admin/themes/default/template/controllers/logs/employee_field.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9121803255c7bda6a92cd99-70465703%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf0ad52d0105073d11b29e086f2fe1066dba0f4a' => 
    array (
      0 => '/var/www/html/test-prestashop/admin/themes/default/template/controllers/logs/employee_field.tpl',
      1 => 1541059270,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9121803255c7bda6a92cd99-70465703',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'employee_image' => 0,
    'employee_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c7bda6a92e606_96560217',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c7bda6a92e606_96560217')) {function content_5c7bda6a92e606_96560217($_smarty_tpl) {?>
<span class="employee_avatar_small">
	<img class="imgm img-thumbnail" alt="" src="<?php echo $_smarty_tpl->tpl_vars['employee_image']->value;?>
" width="32" height="32" />
</span>
<?php echo $_smarty_tpl->tpl_vars['employee_name']->value;?>

<?php }} ?>
