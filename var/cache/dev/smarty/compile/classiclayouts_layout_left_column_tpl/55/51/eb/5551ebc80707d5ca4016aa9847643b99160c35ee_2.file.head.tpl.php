<?php
/* Smarty version 4.3.1, created on 2023-05-29 17:37:45
  from '/home/vagrant/code/prestashop8/themes/classic/templates/_partials/head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6474c6c9921f30_58052277',
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
function content_6474c6c9921f30_58052277 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7723745406474c6c98cbcd2_58542758', 'head_charset');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18349659786474c6c98ce212_45629738', 'head_ie_compatibility');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12781156474c6c98cf744_06167715', 'head_seo');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18242904946474c6c9908430_76948028', 'head_viewport');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12232689816474c6c990a6a9_72406838', 'head_icons');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16301517776474c6c9911d21_72439992', 'stylesheets');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12056929896474c6c99190d4_24817325', 'javascript_head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1054387086474c6c991e625_37123480', 'hook_header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19816599886474c6c9920087_57794127', 'hook_extra');
}
/* {block 'head_charset'} */
class Block_7723745406474c6c98cbcd2_58542758 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_charset' => 
  array (
    0 => 'Block_7723745406474c6c98cbcd2_58542758',
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
class Block_18349659786474c6c98ce212_45629738 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_ie_compatibility' => 
  array (
    0 => 'Block_18349659786474c6c98ce212_45629738',
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
class Block_8216348716474c6c98d1c33_98797004 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_title'} */
/* {block 'hook_after_title_tag'} */
class Block_17320817316474c6c98d5615_54363140 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterTitleTag'),$_smarty_tpl ) );?>

  <?php
}
}
/* {/block 'hook_after_title_tag'} */
/* {block 'head_seo_description'} */
class Block_20972689446474c6c98d8e84_05052163 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_description'} */
/* {block 'head_seo_keywords'} */
class Block_8399501906474c6c98df025_19709256 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['meta']['keywords'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_keywords'} */
/* {block 'head_hreflang'} */
class Block_11186854576474c6c98eaaa9_28608952 extends Smarty_Internal_Block
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
class Block_5384634836474c6c98f34e3_59767767 extends Smarty_Internal_Block
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
class Block_6525022446474c6c98f6904_44364646 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head_microdata_special'} */
/* {block 'head_pagination_seo'} */
class Block_12537582376474c6c98f8560_40536708 extends Smarty_Internal_Block
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
class Block_379215296474c6c98fabe4_94605355 extends Smarty_Internal_Block
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
class Block_12781156474c6c98cf744_06167715 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo' => 
  array (
    0 => 'Block_12781156474c6c98cf744_06167715',
  ),
  'head_seo_title' => 
  array (
    0 => 'Block_8216348716474c6c98d1c33_98797004',
  ),
  'hook_after_title_tag' => 
  array (
    0 => 'Block_17320817316474c6c98d5615_54363140',
  ),
  'head_seo_description' => 
  array (
    0 => 'Block_20972689446474c6c98d8e84_05052163',
  ),
  'head_seo_keywords' => 
  array (
    0 => 'Block_8399501906474c6c98df025_19709256',
  ),
  'head_hreflang' => 
  array (
    0 => 'Block_11186854576474c6c98eaaa9_28608952',
  ),
  'head_microdata' => 
  array (
    0 => 'Block_5384634836474c6c98f34e3_59767767',
  ),
  'head_microdata_special' => 
  array (
    0 => 'Block_6525022446474c6c98f6904_44364646',
  ),
  'head_pagination_seo' => 
  array (
    0 => 'Block_12537582376474c6c98f8560_40536708',
  ),
  'head_open_graph' => 
  array (
    0 => 'Block_379215296474c6c98fabe4_94605355',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8216348716474c6c98d1c33_98797004', 'head_seo_title', $this->tplIndex);
?>
</title>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17320817316474c6c98d5615_54363140', 'hook_after_title_tag', $this->tplIndex);
?>

  <meta name="description" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20972689446474c6c98d8e84_05052163', 'head_seo_description', $this->tplIndex);
?>
">
  <meta name="keywords" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8399501906474c6c98df025_19709256', 'head_seo_keywords', $this->tplIndex);
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11186854576474c6c98eaaa9_28608952', 'head_hreflang', $this->tplIndex);
?>

  
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5384634836474c6c98f34e3_59767767', 'head_microdata', $this->tplIndex);
?>

  
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6525022446474c6c98f6904_44364646', 'head_microdata_special', $this->tplIndex);
?>

  
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12537582376474c6c98f8560_40536708', 'head_pagination_seo', $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_379215296474c6c98fabe4_94605355', 'head_open_graph', $this->tplIndex);
?>
  
<?php
}
}
/* {/block 'head_seo'} */
/* {block 'head_viewport'} */
class Block_18242904946474c6c9908430_76948028 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_viewport' => 
  array (
    0 => 'Block_18242904946474c6c9908430_76948028',
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
class Block_12232689816474c6c990a6a9_72406838 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_icons' => 
  array (
    0 => 'Block_12232689816474c6c990a6a9_72406838',
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
class Block_16301517776474c6c9911d21_72439992 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'stylesheets' => 
  array (
    0 => 'Block_16301517776474c6c9911d21_72439992',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender("file:_partials/stylesheets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stylesheets'=>$_smarty_tpl->tpl_vars['stylesheets']->value), 0, false);
}
}
/* {/block 'stylesheets'} */
/* {block 'javascript_head'} */
class Block_12056929896474c6c99190d4_24817325 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_head' => 
  array (
    0 => 'Block_12056929896474c6c99190d4_24817325',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['head'],'vars'=>$_smarty_tpl->tpl_vars['js_custom_vars']->value), 0, false);
}
}
/* {/block 'javascript_head'} */
/* {block 'hook_header'} */
class Block_1054387086474c6c991e625_37123480 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_header' => 
  array (
    0 => 'Block_1054387086474c6c991e625_37123480',
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
class Block_19816599886474c6c9920087_57794127 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_extra' => 
  array (
    0 => 'Block_19816599886474c6c9920087_57794127',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'hook_extra'} */
}
