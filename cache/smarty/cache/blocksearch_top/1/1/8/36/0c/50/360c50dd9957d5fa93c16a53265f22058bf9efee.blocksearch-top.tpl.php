<?php /*%%SmartyHeaderCode:9710815615c7d43a37f6388-96416391%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '360c50dd9957d5fa93c16a53265f22058bf9efee' => 
    array (
      0 => '/var/www/html/test-prestashop/themes/default-bootstrap/modules/blocksearch/blocksearch-top.tpl',
      1 => 1541059272,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9710815615c7d43a37f6388-96416391',
  'variables' => 
  array (
    'link' => 0,
    'search_query' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c7d43a383fec0_44907213',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c7d43a383fec0_44907213')) {function content_5c7d43a383fec0_44907213($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="//localhost/test-prestashop/index.php?controller=search" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Search" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Search</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP -->
<?php }} ?>
