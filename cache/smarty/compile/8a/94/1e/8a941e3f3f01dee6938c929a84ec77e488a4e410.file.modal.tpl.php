<?php /* Smarty version Smarty-3.1.19, created on 2019-03-03 15:53:24
         compiled from "/var/www/html/test-prestashop/admin545ke4ljr/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1770177475c7bea64a34700-63155247%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a941e3f3f01dee6938c929a84ec77e488a4e410' => 
    array (
      0 => '/var/www/html/test-prestashop/admin545ke4ljr/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1541059270,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1770177475c7bea64a34700-63155247',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c7bea64a35263_47429446',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c7bea64a35263_47429446')) {function content_5c7bea64a35263_47429446($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
