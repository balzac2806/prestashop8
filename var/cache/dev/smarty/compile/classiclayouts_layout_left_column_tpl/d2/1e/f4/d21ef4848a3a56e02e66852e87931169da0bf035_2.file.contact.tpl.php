<?php
/* Smarty version 4.3.1, created on 2023-05-29 17:37:45
  from '/home/vagrant/code/prestashop8/themes/classic/templates/contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6474c6c97ccf06_52506120',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd21ef4848a3a56e02e66852e87931169da0bf035' => 
    array (
      0 => '/home/vagrant/code/prestashop8/themes/classic/templates/contact.tpl',
      1 => 1677256022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6474c6c97ccf06_52506120 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17757611276474c6c97b8d88_76854839', 'page_header_container');
?>


<?php if ($_smarty_tpl->tpl_vars['layout']->value === 'layouts/layout-left-column.tpl') {?>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6574034266474c6c97c4758_24461242', "left_column");
?>

<?php } elseif ($_smarty_tpl->tpl_vars['layout']->value === 'layouts/layout-right-column.tpl') {?>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19826656036474c6c97c9de3_22366491', "right_column");
?>

<?php }?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11636750256474c6c97cba15_84380203', 'page_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_header_container'} */
class Block_17757611276474c6c97b8d88_76854839 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_header_container' => 
  array (
    0 => 'Block_17757611276474c6c97b8d88_76854839',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_header_container'} */
/* {block "left_column"} */
class Block_6574034266474c6c97c4758_24461242 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_6574034266474c6c97c4758_24461242',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="left-column" class="col-xs-12 col-sm-4 col-md-3">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayContactLeftColumn'),$_smarty_tpl ) );?>

    </div>
  <?php
}
}
/* {/block "left_column"} */
/* {block "right_column"} */
class Block_19826656036474c6c97c9de3_22366491 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_19826656036474c6c97c9de3_22366491',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="right-column" class="col-xs-12 col-sm-4 col-md-3">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayContactRightColumn'),$_smarty_tpl ) );?>

    </div>
  <?php
}
}
/* {/block "right_column"} */
/* {block 'page_content'} */
class Block_11636750256474c6c97cba15_84380203 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_11636750256474c6c97cba15_84380203',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayContactContent'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'page_content'} */
}
