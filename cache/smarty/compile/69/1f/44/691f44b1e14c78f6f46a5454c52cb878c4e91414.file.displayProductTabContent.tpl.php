<?php /* Smarty version Smarty-3.1.19, created on 2019-03-04 15:09:08
         compiled from "/var/www/html/test-prestashop/modules/mymodcomments/views/templates/hook/displayProductTabContent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19892531135c7d31849d3d07-42818369%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '691f44b1e14c78f6f46a5454c52cb878c4e91414' => 
    array (
      0 => '/var/www/html/test-prestashop/modules/mymodcomments/views/templates/hook/displayProductTabContent.tpl',
      1 => 1551708465,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19892531135c7d31849d3d07-42818369',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c7d31849d4610_00766720',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c7d31849d4610_00766720')) {function content_5c7d31849d4610_00766720($_smarty_tpl) {?><h3 class="page-product-heading">
Les commentaires sur le produit
</h3>
<div class="rte">
    <form action="" method="POST" id="comment-form">
        <div class="form-group">
            <label for="grade">Note:</label>
            <div class="row">
                <div class="col-xs-4">
                    <select id="grade" class="form-control" name="grade">
                        <option value="0">--Choisissez--</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="comment">Commentaire:</label>
            <textarea name="comment" id="comment" class="form-control"></textarea>
        </div>
        <div class="submit">
            <button type="submit" name="mymod_pc_submit_comment" class="button btw btn-default button-medium">
                <span>Envoyer <i class="icon-chevron-right right"></i></span>
            </button>
        </div>
    </form>
</div>
<?php }} ?>
