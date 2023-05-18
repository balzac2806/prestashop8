<?php
/* Smarty version 4.3.1, created on 2023-05-18 21:22:31
  from '/home/vagrant/code/prestashop8/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64667af7ed78e3_89741186',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd779df456788d4f1fdebcca5a9fd403fc3b7d9ee' => 
    array (
      0 => '/home/vagrant/code/prestashop8/themes/classic/templates/index.tpl',
      1 => 1677256022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64667af7ed78e3_89741186 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_165725105464667af7ec6133_91880628', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_100230593264667af7ec76d1_29653861 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_20991665464667af7eccbe5_52645796 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_120879438264667af7eca770_67915717 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20991665464667af7eccbe5_52645796', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_165725105464667af7ec6133_91880628 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_165725105464667af7ec6133_91880628',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_100230593264667af7ec76d1_29653861',
  ),
  'page_content' => 
  array (
    0 => 'Block_120879438264667af7eca770_67915717',
  ),
  'hook_home' => 
  array (
    0 => 'Block_20991665464667af7eccbe5_52645796',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_100230593264667af7ec76d1_29653861', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_120879438264667af7eca770_67915717', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
