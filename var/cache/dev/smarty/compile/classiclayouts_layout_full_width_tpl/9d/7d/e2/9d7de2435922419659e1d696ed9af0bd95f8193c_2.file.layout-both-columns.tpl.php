<?php
/* Smarty version 4.3.1, created on 2023-05-29 17:36:49
  from '/home/vagrant/code/prestashop8/themes/classic/templates/layouts/layout-both-columns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6474c691f238e2_12416966',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d7de2435922419659e1d696ed9af0bd95f8193c' => 
    array (
      0 => '/home/vagrant/code/prestashop8/themes/classic/templates/layouts/layout-both-columns.tpl',
      1 => 1677256022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/helpers.tpl' => 1,
    'file:_partials/head.tpl' => 1,
    'file:catalog/_partials/product-activation.tpl' => 1,
    'file:_partials/header.tpl' => 1,
    'file:_partials/notifications.tpl' => 1,
    'file:_partials/breadcrumb.tpl' => 1,
    'file:_partials/footer.tpl' => 1,
    'file:_partials/password-policy-template.tpl' => 1,
    'file:_partials/javascript.tpl' => 1,
  ),
),false)) {
function content_6474c691f238e2_12416966 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:_partials/helpers.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!doctype html>
<html lang="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['locale'], ENT_QUOTES, 'UTF-8');?>
">

  <head>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16369059206474c691f075d7_64079687', 'head');
?>

  </head>

  <body id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['body_classes'] )), ENT_QUOTES, 'UTF-8');?>
">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6626458906474c691f0af24_06547630', 'hook_after_body_opening_tag');
?>


    <main>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2462534986474c691f0c330_17982502', 'product_activation');
?>


      <header id="header">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10422293166474c691f0d692_51846395', 'header');
?>

      </header>

      <section id="wrapper">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1352506196474c691f0e976_89782096', 'notifications');
?>


        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperTop"),$_smarty_tpl ) );?>

        <div class="container">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2232275036474c691f10d38_65661001', 'breadcrumb');
?>


          <div class="row">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14561933806474c691f12af6_33550136', "left_column");
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6328721126474c691f16999_61085422', "content_wrapper");
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2218386356474c691f1a145_70043748', "right_column");
?>

          </div>
        </div>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperBottom"),$_smarty_tpl ) );?>

      </section>

      <footer id="footer" class="js-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18409236456474c691f1e313_48170115', "footer");
?>

      </footer>

    </main>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20766977586474c691f1fef0_60089429', 'javascript_bottom');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8405791366474c691f22482_55438189', 'hook_before_body_closing_tag');
?>

  </body>

</html>
<?php }
/* {block 'head'} */
class Block_16369059206474c691f075d7_64079687 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_16369059206474c691f075d7_64079687',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'head'} */
/* {block 'hook_after_body_opening_tag'} */
class Block_6626458906474c691f0af24_06547630 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_after_body_opening_tag' => 
  array (
    0 => 'Block_6626458906474c691f0af24_06547630',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_after_body_opening_tag'} */
/* {block 'product_activation'} */
class Block_2462534986474c691f0c330_17982502 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_activation' => 
  array (
    0 => 'Block_2462534986474c691f0c330_17982502',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-activation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php
}
}
/* {/block 'product_activation'} */
/* {block 'header'} */
class Block_10422293166474c691f0d692_51846395 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_10422293166474c691f0d692_51846395',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender('file:_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block 'header'} */
/* {block 'notifications'} */
class Block_1352506196474c691f0e976_89782096 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications' => 
  array (
    0 => 'Block_1352506196474c691f0e976_89782096',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender('file:_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block 'notifications'} */
/* {block 'breadcrumb'} */
class Block_2232275036474c691f10d38_65661001 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_2232275036474c691f10d38_65661001',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:_partials/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          <?php
}
}
/* {/block 'breadcrumb'} */
/* {block "left_column"} */
class Block_14561933806474c691f12af6_33550136 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_14561933806474c691f12af6_33550136',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <div id="left-column" class="col-xs-12 col-md-4 col-lg-3">
                <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {?>
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeftColumnProduct','product'=>$_smarty_tpl->tpl_vars['product']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value),$_smarty_tpl ) );?>

                <?php } else { ?>
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayLeftColumn"),$_smarty_tpl ) );?>

                <?php }?>
              </div>
            <?php
}
}
/* {/block "left_column"} */
/* {block "content"} */
class Block_10323753596474c691f18284_87506810 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <p>Hello world! This is HTML5 Boilerplate.</p>
                <?php
}
}
/* {/block "content"} */
/* {block "content_wrapper"} */
class Block_6328721126474c691f16999_61085422 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_6328721126474c691f16999_61085422',
  ),
  'content' => 
  array (
    0 => 'Block_10323753596474c691f18284_87506810',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <div id="content-wrapper" class="js-content-wrapper left-column right-column col-md-4 col-lg-3">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10323753596474c691f18284_87506810', "content", $this->tplIndex);
?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

              </div>
            <?php
}
}
/* {/block "content_wrapper"} */
/* {block "right_column"} */
class Block_2218386356474c691f1a145_70043748 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_2218386356474c691f1a145_70043748',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <div id="right-column" class="col-xs-12 col-md-4 col-lg-3">
                <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {?>
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRightColumnProduct'),$_smarty_tpl ) );?>

                <?php } else { ?>
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayRightColumn"),$_smarty_tpl ) );?>

                <?php }?>
              </div>
            <?php
}
}
/* {/block "right_column"} */
/* {block "footer"} */
class Block_18409236456474c691f1e313_48170115 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_18409236456474c691f1e313_48170115',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender("file:_partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block "footer"} */
/* {block 'javascript_bottom'} */
class Block_20766977586474c691f1fef0_60089429 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_bottom' => 
  array (
    0 => 'Block_20766977586474c691f1fef0_60089429',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender("file:_partials/password-policy-template.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php $_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, false);
?>
    <?php
}
}
/* {/block 'javascript_bottom'} */
/* {block 'hook_before_body_closing_tag'} */
class Block_8405791366474c691f22482_55438189 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_before_body_closing_tag' => 
  array (
    0 => 'Block_8405791366474c691f22482_55438189',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_before_body_closing_tag'} */
}
