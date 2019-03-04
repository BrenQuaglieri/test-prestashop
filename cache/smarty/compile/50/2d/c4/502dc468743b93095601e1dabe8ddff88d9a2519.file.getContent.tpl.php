<?php /* Smarty version Smarty-3.1.19, created on 2019-03-04 16:22:20
         compiled from "/var/www/html/test-prestashop/modules/mymodcomments/views/templates/hook/getContent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11864565515c7d0c8891ce50-74755351%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '502dc468743b93095601e1dabe8ddff88d9a2519' => 
    array (
      0 => '/var/www/html/test-prestashop/modules/mymodcomments/views/templates/hook/getContent.tpl',
      1 => 1551711029,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11864565515c7d0c8891ce50-74755351',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c7d0c8891e623_77814555',
  'variables' => 
  array (
    'confirmation' => 0,
    'enable_grades' => 0,
    'enable_comments' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c7d0c8891e623_77814555')) {function content_5c7d0c8891e623_77814555($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['confirmation']->value)) {?>
<div class="alert alert-success">
La configuration a bien été mise à jour
</div>
<?php }?>
<form method="post" action="" class="defaultForm form-horizontal">
    <div class="panel">
        <div class="panel-heading">
            <i class="icon-cogs"></i>
            La configuration de mon module
        </div>

        <div class="form-wrapper">
            <div class="form-group">
                <label class="control-label col-lg-3">Activer les notes:</label>
                <div class="col-lg-9">
                    <img src="../img/admin/enabled.gif" alt="">
                    <input type="radio" id="enable_grades_1" name="enable_grades" value="1" <?php if ($_smarty_tpl->tpl_vars['enable_grades']->value=='1') {?> checked <?php }?> />
                    
                    <label class="t" for="enable_grades_1">Oui</label>
                    <img src="../img/admin/disabled.gif" alt="">
                    <input type="radio" id="enable_grades_0" name="enable_grades" value="0" <?php if ($_smarty_tpl->tpl_vars['enable_grades']->value!='1') {?> checked <?php }?> />
                    <label class="t" for="enable_grades_0">Non</label>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-lg-3">Activer les commentaires:</label>
                <div class="col-lg-9">
                    <img src="../img/admin/enabled.gif" alt="">
                    <input type="radio" id="enable_comments_1" name="enable_comments" value="1" <?php if ($_smarty_tpl->tpl_vars['enable_comments']->value=='1') {?> checked <?php }?> />
                    <label class="t" for="enable_comments_1">Oui</label>
                    <img src="../img/admin/disabled.gif" alt="">
                    <input type="radio" id="enable_comments_0" name="enable_comments" value="0" <?php if ($_smarty_tpl->tpl_vars['enable_comments']->value!='1') {?> checked <?php }?> />
                    <label class="t" for="enable_comments_0">Non</label>
                </div>
            </div>
        </div>
        <div class="panel-footer">
            <button class="btn btn-default pull-right" name="submit_mymodcomments_form" value="1" type="submit">
                <i class="process-icon-save"></i> Enregistrer
            </button>
        </div>
    </div>
</form><?php }} ?>
