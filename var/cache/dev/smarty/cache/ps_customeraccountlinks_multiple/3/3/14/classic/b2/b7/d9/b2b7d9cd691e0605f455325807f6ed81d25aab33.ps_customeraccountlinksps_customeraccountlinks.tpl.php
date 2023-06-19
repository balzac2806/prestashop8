<?php
/* Smarty version 4.3.1, created on 2023-05-29 17:36:50
  from 'module:ps_customeraccountlinksps_customeraccountlinks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6474c69242db50_01729801',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:ps_customeraccountlinksps_customeraccountlinks.tpl',
      1 => 1677256022,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_6474c69242db50_01729801 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/home/vagrant/code/prestashop8/var/cache/dev/smarty/compile/classiclayouts_layout_full_width_tpl/06/16/7b/06167bd7588807227510d63c96b39f1c2169fe74_2.file.helpers.tpl.php',
    'uid' => '06167bd7588807227510d63c96b39f1c2169fe74',
    'call_name' => 'smarty_template_function_renderLogo_1507183366474c691f355a6_70128529',
  ),
));
?><!-- begin /home/vagrant/code/prestashop8/themes/classic/modules/ps_customeraccountlinks/ps_customeraccountlinks.tpl -->
<div id="block_myaccount_infos" class="col-md-3 links wrapper">
  <p class="h3 myaccount-title hidden-sm-down">
    <a class="text-uppercase" href="http://wojkom.local/index.php?controller=my-account" rel="nofollow">
      Twoje konto
    </a>
  </p>
  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3">Twoje konto</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
            <li><a href="http://wojkom.local/index.php?controller=identity" title="Informacja" rel="nofollow">Informacja</a></li>
                  <li><a href="http://wojkom.local/index.php?controller=addresses" title="Adresy" rel="nofollow">Adresy</a></li>
                          <li><a href="http://wojkom.local/index.php?controller=history" title="Zamówienia" rel="nofollow">Zamówienia</a></li>
                          <li><a href="http://wojkom.local/index.php?controller=order-slip" title="Moje pokwitowania - korekty płatności" rel="nofollow">Moje pokwitowania - korekty płatności</a></li>
                                
<!-- begin module:blockwishlist/views/templates/hook/account/myaccount-block.tpl -->
<!-- begin /home/vagrant/code/prestashop8/modules/blockwishlist/views/templates/hook/account/myaccount-block.tpl -->
  <li>
    <a href="http://wojkom.local/index.php?fc=module&amp;module=blockwishlist&amp;controller=lists" title="Moje listy życzeń" rel="nofollow">
      Lista życzeń
    </a>
  </li>
<!-- end /home/vagrant/code/prestashop8/modules/blockwishlist/views/templates/hook/account/myaccount-block.tpl -->
<!-- end module:blockwishlist/views/templates/hook/account/myaccount-block.tpl -->

<!-- begin /home/vagrant/code/prestashop8/themes/classic/modules/ps_emailalerts/views/templates/hook/my-account-footer.tpl -->
<li>
  <a href="//wojkom.local/index.php?fc=module&module=ps_emailalerts&controller=account" title="Moje powiadomienia">
    Moje powiadomienia
  </a>
</li>

<!-- end /home/vagrant/code/prestashop8/themes/classic/modules/ps_emailalerts/views/templates/hook/my-account-footer.tpl -->

        <li><a href="http://wojkom.local/index.php?mylogout=" title="Wyloguj mnie" rel="nofollow">Wyloguj się</a></li>
       
	</ul>
</div>
<!-- end /home/vagrant/code/prestashop8/themes/classic/modules/ps_customeraccountlinks/ps_customeraccountlinks.tpl --><?php }
}
