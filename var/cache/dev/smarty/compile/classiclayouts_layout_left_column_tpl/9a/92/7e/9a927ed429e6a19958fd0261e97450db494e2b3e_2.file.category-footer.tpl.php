<?php
/* Smarty version 4.3.1, created on 2023-05-29 17:39:57
  from '/home/vagrant/code/prestashop8/themes/classic/templates/catalog/_partials/category-footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6474c74d204a89_49506154',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a927ed429e6a19958fd0261e97450db494e2b3e' => 
    array (
      0 => '/home/vagrant/code/prestashop8/themes/classic/templates/catalog/_partials/category-footer.tpl',
      1 => 1677256022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6474c74d204a89_49506154 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="js-product-list-footer">
    <?php if ((isset($_smarty_tpl->tpl_vars['category']->value)) && $_smarty_tpl->tpl_vars['category']->value['additional_description'] && $_smarty_tpl->tpl_vars['listing']->value['pagination']['items_shown_from'] == 1) {?>
        <div class="card">
            <div class="card-block category-additional-description">
                <?php echo $_smarty_tpl->tpl_vars['category']->value['additional_description'];?>

            </div>
        </div>
    <?php }?>
</div>
<?php }
}
