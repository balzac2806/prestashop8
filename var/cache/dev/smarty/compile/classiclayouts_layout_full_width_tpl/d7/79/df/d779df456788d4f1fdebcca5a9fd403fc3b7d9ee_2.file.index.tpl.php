<?php
/* Smarty version 4.3.1, created on 2023-05-29 17:36:49
  from '/home/vagrant/code/prestashop8/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6474c691ebc340_92485518',
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
function content_6474c691ebc340_92485518 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1993401546474c691eb8682_09533706', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_7009817976474c691eb93b2_04571496 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_13170428836474c691eba6c1_91025744 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_20721322416474c691eba011_65619768 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13170428836474c691eba6c1_91025744', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1993401546474c691eb8682_09533706 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_1993401546474c691eb8682_09533706',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_7009817976474c691eb93b2_04571496',
  ),
  'page_content' => 
  array (
    0 => 'Block_20721322416474c691eba011_65619768',
  ),
  'hook_home' => 
  array (
    0 => 'Block_13170428836474c691eba6c1_91025744',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7009817976474c691eb93b2_04571496', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20721322416474c691eba011_65619768', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
