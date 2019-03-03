<?php /* Smarty version Smarty-3.1.19, created on 2019-03-03 15:54:10
         compiled from "/var/www/html/test-prestashop/admin545ke4ljr/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6463420605c7bea92189403-58314022%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '021bd980dc7876dcbc14181ab6bff905562fc9df' => 
    array (
      0 => '/var/www/html/test-prestashop/admin545ke4ljr/themes/default/template/content.tpl',
      1 => 1541059270,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6463420605c7bea92189403-58314022',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c7bea9218b524_24780363',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c7bea9218b524_24780363')) {function content_5c7bea9218b524_24780363($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
