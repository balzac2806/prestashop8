<?php
/* Smarty version 4.3.1, created on 2023-05-29 17:36:50
  from '/home/vagrant/code/prestashop8/themes/classic/templates/_partials/head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6474c69203c6a8_65646723',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5551ebc80707d5ca4016aa9847643b99160c35ee' => 
    array (
      0 => '/home/vagrant/code/prestashop8/themes/classic/templates/_partials/head.tpl',
      1 => 1677256022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/microdata/head-jsonld.tpl' => 1,
    'file:_partials/pagination-seo.tpl' => 1,
    'file:_partials/stylesheets.tpl' => 1,
    'file:_partials/javascript.tpl' => 1,
  ),
),false)) {
function content_6474c69203c6a8_65646723 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12852822646474c692008fc1_61172809', 'head_charset');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7457649726474c69200a5a2_44136579', 'head_ie_compatibility');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_667252576474c69200b686_88944126', 'head_seo');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1404913726474c6920251f7_11040739', 'head_viewport');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8160856706474c692026764_94857430', 'head_icons');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11500051586474c69202ee52_82162228', 'stylesheets');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17372621406474c692032a92_20782942', 'javascript_head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12872903336474c692037b75_64881314', 'hook_header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_532874146474c69203b640_18412990', 'hook_extra');
}
/* {block 'head_charset'} */
class Block_12852822646474c692008fc1_61172809 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_charset' => 
  array (
    0 => 'Block_12852822646474c692008fc1_61172809',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <meta charset="utf-8">
<?php
}
}
/* {/block 'head_charset'} */
/* {block 'head_ie_compatibility'} */
class Block_7457649726474c69200a5a2_44136579 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_ie_compatibility' => 
  array (
    0 => 'Block_7457649726474c69200a5a2_44136579',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <meta http-equiv="x-ua-compatible" content="ie=edge">
<?php
}
}
/* {/block 'head_ie_compatibility'} */
/* {block 'head_seo_title'} */
class Block_15809909536474c69200bdd6_94902226 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_title'} */
/* {block 'hook_after_title_tag'} */
class Block_14777787316474c69200d335_35657745 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterTitleTag'),$_smarty_tpl ) );?>

  <?php
}
}
/* {/block 'hook_after_title_tag'} */
/* {block 'head_seo_description'} */
class Block_20926095396474c69200e5e0_08605889 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_description'} */
/* {block 'head_seo_keywords'} */
class Block_229705146474c692010a13_09464369 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['meta']['keywords'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_keywords'} */
/* {block 'head_hreflang'} */
class Block_17525744966474c692017318_24892278 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['urls']->value['alternative_langs'], 'pageUrl', false, 'code');
$_smarty_tpl->tpl_vars['pageUrl']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['code']->value => $_smarty_tpl->tpl_vars['pageUrl']->value) {
$_smarty_tpl->tpl_vars['pageUrl']->do_else = false;
?>
      <link rel="alternate" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pageUrl']->value, ENT_QUOTES, 'UTF-8');?>
" hreflang="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php
}
}
/* {/block 'head_hreflang'} */
/* {block 'head_microdata'} */
class Block_908891736474c69201a8f5_48130158 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:_partials/microdata/head-jsonld.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php
}
}
/* {/block 'head_microdata'} */
/* {block 'head_microdata_special'} */
class Block_2078700106474c69201c818_73535007 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head_microdata_special'} */
/* {block 'head_pagination_seo'} */
class Block_16541411176474c69201d295_67278494 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:_partials/pagination-seo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php
}
}
/* {/block 'head_pagination_seo'} */
/* {block 'head_open_graph'} */
class Block_6678773336474c69201e717_93964160 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <meta property="og:title" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');?>
" />
    <meta property="og:description" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');?>
" />
    <meta property="og:url" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
" />
    <meta property="og:site_name" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
" />
    <?php if (!(isset($_smarty_tpl->tpl_vars['product']->value)) && $_smarty_tpl->tpl_vars['page']->value['page_name'] != 'product') {?><meta property="og:type" content="website" /><?php }?>
  <?php
}
}
/* {/block 'head_open_graph'} */
/* {block 'head_seo'} */
class Block_667252576474c69200b686_88944126 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo' => 
  array (
    0 => 'Block_667252576474c69200b686_88944126',
  ),
  'head_seo_title' => 
  array (
    0 => 'Block_15809909536474c69200bdd6_94902226',
  ),
  'hook_after_title_tag' => 
  array (
    0 => 'Block_14777787316474c69200d335_35657745',
  ),
  'head_seo_description' => 
  array (
    0 => 'Block_20926095396474c69200e5e0_08605889',
  ),
  'head_seo_keywords' => 
  array (
    0 => 'Block_229705146474c692010a13_09464369',
  ),
  'head_hreflang' => 
  array (
    0 => 'Block_17525744966474c692017318_24892278',
  ),
  'head_microdata' => 
  array (
    0 => 'Block_908891736474c69201a8f5_48130158',
  ),
  'head_microdata_special' => 
  array (
    0 => 'Block_2078700106474c69201c818_73535007',
  ),
  'head_pagination_seo' => 
  array (
    0 => 'Block_16541411176474c69201d295_67278494',
  ),
  'head_open_graph' => 
  array (
    0 => 'Block_6678773336474c69201e717_93964160',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15809909536474c69200bdd6_94902226', 'head_seo_title', $this->tplIndex);
?>
</title>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14777787316474c69200d335_35657745', 'hook_after_title_tag', $this->tplIndex);
?>

  <meta name="description" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20926095396474c69200e5e0_08605889', 'head_seo_description', $this->tplIndex);
?>
">
  <meta name="keywords" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_229705146474c692010a13_09464369', 'head_seo_keywords', $this->tplIndex);
?>
">
  <?php if ($_smarty_tpl->tpl_vars['page']->value['meta']['robots'] !== 'index') {?>
    <meta name="robots" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['meta']['robots'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['page']->value['canonical']) {?>
    <link rel="canonical" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['canonical'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17525744966474c692017318_24892278', 'head_hreflang', $this->tplIndex);
?>

  
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_908891736474c69201a8f5_48130158', 'head_microdata', $this->tplIndex);
?>

  
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2078700106474c69201c818_73535007', 'head_microdata_special', $this->tplIndex);
?>

  
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16541411176474c69201d295_67278494', 'head_pagination_seo', $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6678773336474c69201e717_93964160', 'head_open_graph', $this->tplIndex);
?>
  
<?php
}
}
/* {/block 'head_seo'} */
/* {block 'head_viewport'} */
class Block_1404913726474c6920251f7_11040739 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_viewport' => 
  array (
    0 => 'Block_1404913726474c6920251f7_11040739',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <meta name="viewport" content="width=device-width, initial-scale=1">
<?php
}
}
/* {/block 'head_viewport'} */
/* {block 'head_icons'} */
class Block_8160856706474c692026764_94857430 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_icons' => 
  array (
    0 => 'Block_8160856706474c692026764_94857430',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">
<?php
}
}
/* {/block 'head_icons'} */
/* {block 'stylesheets'} */
class Block_11500051586474c69202ee52_82162228 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'stylesheets' => 
  array (
    0 => 'Block_11500051586474c69202ee52_82162228',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender("file:_partials/stylesheets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stylesheets'=>$_smarty_tpl->tpl_vars['stylesheets']->value), 0, false);
}
}
/* {/block 'stylesheets'} */
/* {block 'javascript_head'} */
class Block_17372621406474c692032a92_20782942 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_head' => 
  array (
    0 => 'Block_17372621406474c692032a92_20782942',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['head'],'vars'=>$_smarty_tpl->tpl_vars['js_custom_vars']->value), 0, false);
}
}
/* {/block 'javascript_head'} */
/* {block 'hook_header'} */
class Block_12872903336474c692037b75_64881314 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_header' => 
  array (
    0 => 'Block_12872903336474c692037b75_64881314',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo $_smarty_tpl->tpl_vars['HOOK_HEADER']->value;?>

<?php
}
}
/* {/block 'hook_header'} */
/* {block 'hook_extra'} */
class Block_532874146474c69203b640_18412990 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_extra' => 
  array (
    0 => 'Block_532874146474c69203b640_18412990',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'hook_extra'} */
}
