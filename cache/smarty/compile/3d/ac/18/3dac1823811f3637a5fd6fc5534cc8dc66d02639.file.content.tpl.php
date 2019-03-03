<?php /* Smarty version Smarty-3.1.19, created on 2019-03-03 13:45:14
         compiled from "/var/www/html/test-prestashop/admin/themes/default/template/controllers/shop/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6015428575c7bda6a6f7441-56095188%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3dac1823811f3637a5fd6fc5534cc8dc66d02639' => 
    array (
      0 => '/var/www/html/test-prestashop/admin/themes/default/template/controllers/shop/content.tpl',
      1 => 1541059270,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6015428575c7bda6a6f7441-56095188',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shops_tree' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c7bda6a6f86b5_85676483',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c7bda6a6f86b5_85676483')) {function content_5c7bda6a6f86b5_85676483($_smarty_tpl) {?>

<div class="row">
	<div class="col-lg-4">
		<?php echo $_smarty_tpl->tpl_vars['shops_tree']->value;?>

	</div>
	<div class="col-lg-8"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
</div>
<?php }} ?>
