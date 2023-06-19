<?php
/* Smarty version 4.3.1, created on 2023-05-29 17:37:45
  from '/home/vagrant/code/prestashop8/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6474c6c98b8053_99514319',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06167bd7588807227510d63c96b39f1c2169fe74' => 
    array (
      0 => '/home/vagrant/code/prestashop8/themes/classic/templates/_partials/helpers.tpl',
      1 => 1677256022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6474c6c98b8053_99514319 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/home/vagrant/code/prestashop8/var/cache/dev/smarty/compile/classiclayouts_layout_left_column_tpl/06/16/7b/06167bd7588807227510d63c96b39f1c2169fe74_2.file.helpers.tpl.php',
    'uid' => '06167bd7588807227510d63c96b39f1c2169fe74',
    'call_name' => 'smarty_template_function_renderLogo_9674308026474c6c98a6c43_08909900',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_9674308026474c6c98a6c43_08909900 */
if (!function_exists('smarty_template_function_renderLogo_9674308026474c6c98a6c43_08909900')) {
function smarty_template_function_renderLogo_9674308026474c6c98a6c43_08909900(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_9674308026474c6c98a6c43_08909900 */
}
