<?php
/* Smarty version 4.3.1, created on 2023-05-18 21:22:44
  from '/home/vagrant/code/prestashop8/admin-dev/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64667b04dc2b52_48112785',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4960da79e5573ac9c545a720f58652266a03e68f' => 
    array (
      0 => '/home/vagrant/code/prestashop8/admin-dev/themes/default/template/content.tpl',
      1 => 1684186289,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64667b04dc2b52_48112785 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
