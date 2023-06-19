<?php
/* Smarty version 4.3.1, created on 2023-05-29 17:37:45
  from '/home/vagrant/code/prestashop8/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6474c6c98039f9_70193640',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79200f2002aaebdecfc1b5bc04aee66d96fab25e' => 
    array (
      0 => '/home/vagrant/code/prestashop8/themes/classic/templates/page.tpl',
      1 => 1677256022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6474c6c98039f9_70193640 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1892723476474c6c97f1928_79587405', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_15544893166474c6c97f4416_56447270 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_18740263416474c6c97f2936_53141413 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15544893166474c6c97f4416_56447270', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_7224663516474c6c97fb358_84525535 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_16398094826474c6c97fd2e6_66840817 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_15803852746474c6c97fa883_48937121 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7224663516474c6c97fb358_84525535', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16398094826474c6c97fd2e6_66840817', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_7592969366474c6c9800490_62706186 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_959703146474c6c97ff783_20461146 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7592969366474c6c9800490_62706186', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_1892723476474c6c97f1928_79587405 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1892723476474c6c97f1928_79587405',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_18740263416474c6c97f2936_53141413',
  ),
  'page_title' => 
  array (
    0 => 'Block_15544893166474c6c97f4416_56447270',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_15803852746474c6c97fa883_48937121',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_7224663516474c6c97fb358_84525535',
  ),
  'page_content' => 
  array (
    0 => 'Block_16398094826474c6c97fd2e6_66840817',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_959703146474c6c97ff783_20461146',
  ),
  'page_footer' => 
  array (
    0 => 'Block_7592969366474c6c9800490_62706186',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18740263416474c6c97f2936_53141413', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15803852746474c6c97fa883_48937121', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_959703146474c6c97ff783_20461146', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
