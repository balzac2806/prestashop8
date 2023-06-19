<?php
/* Smarty version 4.3.1, created on 2023-05-29 17:36:49
  from '/home/vagrant/code/prestashop8/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6474c691ed9d13_63106287',
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
function content_6474c691ed9d13_63106287 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12185990686474c691ed1597_35340369', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_19628536026474c691ed27f7_09671650 extends Smarty_Internal_Block
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
class Block_20344145026474c691ed1e13_52547336 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19628536026474c691ed27f7_09671650', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_12652321956474c691ed62e6_77462249 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_21066100836474c691ed6f24_00744020 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_5426882906474c691ed5568_85760530 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12652321956474c691ed62e6_77462249', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21066100836474c691ed6f24_00744020', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_16321538496474c691ed8819_39341149 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_11426344606474c691ed80c7_81457051 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16321538496474c691ed8819_39341149', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_12185990686474c691ed1597_35340369 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12185990686474c691ed1597_35340369',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_20344145026474c691ed1e13_52547336',
  ),
  'page_title' => 
  array (
    0 => 'Block_19628536026474c691ed27f7_09671650',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_5426882906474c691ed5568_85760530',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_12652321956474c691ed62e6_77462249',
  ),
  'page_content' => 
  array (
    0 => 'Block_21066100836474c691ed6f24_00744020',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_11426344606474c691ed80c7_81457051',
  ),
  'page_footer' => 
  array (
    0 => 'Block_16321538496474c691ed8819_39341149',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20344145026474c691ed1e13_52547336', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5426882906474c691ed5568_85760530', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11426344606474c691ed80c7_81457051', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
