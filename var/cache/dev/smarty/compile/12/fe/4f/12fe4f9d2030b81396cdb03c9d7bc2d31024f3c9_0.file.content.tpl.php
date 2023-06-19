<?php
/* Smarty version 4.3.1, created on 2023-05-29 17:28:29
  from '/home/vagrant/code/prestashop8/admin-dev/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6474c49d3030f5_51544181',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12fe4f9d2030b81396cdb03c9d7bc2d31024f3c9' => 
    array (
      0 => '/home/vagrant/code/prestashop8/admin-dev/themes/new-theme/template/content.tpl',
      1 => 1684186289,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6474c49d3030f5_51544181 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
