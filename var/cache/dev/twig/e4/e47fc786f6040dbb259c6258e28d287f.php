<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__1365e57bb3cdb90756571e02278e9eef */
class __TwigTemplate_2b9b7ce6fb8dbb5c71a000ffe1269558 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__1365e57bb3cdb90756571e02278e9eef"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__1365e57bb3cdb90756571e02278e9eef"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pl\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>SEO & URL • wojkom</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminMeta';
    var iso_user = 'pl';
    var lang_is_rtl = '0';
    var full_language_code = 'pl';
    var full_cldr_language_code = 'pl-PL';
    var country_iso_code = 'PL';
    var _PS_VERSION_ = '8.1.0';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Złożono nowe zamówienie w Twoim sklepie.';
    var order_number_msg = 'Numer zamówienia: ';
    var total_msg = 'Razem: ';
    var from_msg = 'Od: ';
    var see_order_msg = 'Zobacz to zamówienie';
    var new_customer_msg = 'Nowy klient zarejestrował się w Twoim sklepie.';
    var customer_name_msg = 'Nazwa klienta: ';
    var new_msg = 'Nowa wiadomość pojawiła się w Twoim sklepie.';
    var see_msg = 'Przeczytaj tą wiadomość';
    var token = 'c4d7610dd37ee885fed69dfc59509f0d';
    var currentIndex = 'index.php?controller=AdminMeta';
    var employee_token = 'd5f34063f76f16d0f223876d341f781d';
    var choose_language_translate = 'Wybierz język:';
    var default_language = '1';
    var admin_modules_link = '/admin-dev/index.php/improve/modules/manage?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0';
    var admin_notification_get_link = '/admin-dev/index.php/common/notifications?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0';
    var admin_notification_push_link = adminNotificationPushLink = '/admin-dev/index.php/common/notifications/ack?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0';
    var update_success_msg = 'Aktualizacja powiodła się';
    var search_product_msg = 'Szukaj produktu';
  </script";
        // line 43
        echo ">



<link
      rel=\"preload\"
      href=\"/admin-dev/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/admin-dev/themes/new-theme/public/create_product_default_theme.css?v=8.1.0\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin-dev/themes/new-theme/public/theme.css?v=8.1.0\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin-dev/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin-dev\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/admin-dev\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\";
var currency = {\"iso_code\":\"PLN\",\"sign\":\"z\\u0142\",\"name\":\"Z\\u0142oty polski\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"PLN\",\"currencySymbol\":\"z\\u0142\",\"numberSymbols\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":true};
var show_new_customers = \"1\";
var sh";
        // line 69
        echo "ow_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/admin-dev/themes/new-theme/public/main.bundle.js?v=8.1.0\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=8.1.0\"></script>
<script type=\"text/javascript\" src=\"/admin-dev/themes/new-theme/public/cldr.bundle.js?v=8.1.0\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=8.1.0\"></script>
<script type=\"text/javascript\" src=\"/admin-dev/themes/new-theme/public/create_product.bundle.js?v=8.1.0\"></script>
<script type=\"text/javascript\" src=\"/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin-dev/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/admin-dev/index.php/common/notifications?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


";
        // line 101
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-pl adminmeta developer-mode\"
  data-base-url=\"/admin-dev/index.php\"  data-token=\"PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://wojkom.local/admin-dev/index.php?controller=AdminDashboard&amp;token=bf3c44575cbf9bc01ba31afcaeb26e80\"></a>
      <span id=\"shop_version\">8.1.0</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Szybki dostęp
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://wojkom.local/admin-dev/index.php/sell/catalog/categories/new?token=11b1c6d518000cf7577bef3554a37c54\"
                 data-item=\"Nowa kategoria\"
      >Nowa kategoria</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://wojkom.local/admin-dev/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=a27bc286b43c267ab5c58a6a6b96a25c\"
                 data-item=\"Nowy kupon\"
      >Nowy kupon</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"http://wojkom.local/admin-dev/index.php/sell/catalog/products-v2/create?token=11b1c6d518000cf7577bef3554a37c54\"
                 data-item=\"Nowy produkt\"
      >Nowy produkt</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://wojkom.local/admin-dev/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=20e8e289acaf49c72f58c08b39205f89\"
                 data-item=\"Ocena katalogu\"
      >Ocena katalogu</a>
          <a class=\"dropdown-item quick-row";
        // line 138
        echo "-link \"
         href=\"http://wojkom.local/admin-dev/index.php/improve/modules/manage?token=11b1c6d518000cf7577bef3554a37c54\"
                 data-item=\"Zainstalowane moduły\"
      >Zainstalowane moduły</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://wojkom.local/admin-dev/index.php/sell/orders?token=11b1c6d518000cf7577bef3554a37c54\"
                 data-item=\"Zamówienia\"
      >Zamówienia</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"51\"
        data-icon=\"icon-AdminParentMeta\"
        data-method=\"add\"
        data-url=\"index.php/configure/shop/seo-urls\"
        data-post-link=\"http://wojkom.local/admin-dev/index.php?controller=AdminQuickAccesses&token=939527f4f36cf24944b5671d813027d9\"
        data-prompt-text=\"Proszę podać nazwę tego skrótu:\"
        data-link=\"SEO &amp; URL - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Dodaj aktualną stronę do Szybkiego dostępu
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://wojkom.local/admin-dev/index.php?controller=AdminQuickAccesses&token=939527f4f36cf24944b5671d813027d9\">
      <i class=\"material-icons\">settings</i>
      Zarządzaj Szybkiem dostępem
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/admin-dev/index.php?controller=AdminSearch&amp;token=2f188c56db343e4107ff7e974789cb5f\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\"";
        // line 178
        echo " placeholder=\"Szukaj (np.: indeks produktu, nazwa klienta...)\" aria-label=\"Wyszukiwarka\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Wszędzie
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Wszędzie\" href=\"#\" data-value=\"0\" data-placeholder=\"Czego szukasz?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Wszędzie</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Katalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Nazwa produktu, odniesienie itp.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Katalog</a>
        <a class=\"dropdown-item\" data-item=\"Klienci Wg nazwy\" href=\"#\" data-value=\"2\" data-placeholder=\"Nazwa\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Klienci Wg nazwy</a>
        <a class=\"dropdown-item\" data-item=\"Klienci wg adresu IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Klienci wg adresu IP</a>
        <a class=\"dropdown-item\" data-item=\"Zamówienia\" href=\"#\" data-value=\"3\" data-placeholder=\"ID zamówienia\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Zamówienia</a>
        <a class=\"dropdown-item\" data-item=\"Faktury\" href=\"#\" data-value=\"4\" data-placeholder=\"Numer faktury\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Faktury</a>
        <a class=\"dropdown-item\" data-item=\"Koszyki\" href=\"#\" data-value=\"5\" data-placeholder=\"ID Koszyka\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Koszyki</a>
        <a class=\"dropdown-item\" data-item=\"Moduły\" href=\"#\" data-value=\"7\" data-placeholder=\"Nazwa modułu\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Moduły</a>
    ";
        // line 193
        echo "  </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">WYSZUKIWANIE</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Anuluj</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Szybki dostęp</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://wojkom.local/admin-dev/index.php/sell/catalog/categories/new?token=11b1c6d518000cf7577bef3554a37c54\"
             data-item=\"Nowa kategoria\"
    >Nowa kategoria</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://wojkom.local/admin-dev/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=a27bc286b43c267ab5c58a6a6b96a25c\"
             data-item=\"Nowy kupon\"
    >Nowy kupon</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://wojkom.local/admin-dev/index.php/sell/catalog/products-v2/create?token=11b1c6d518000cf7577bef3554a37c54\"
             data-item=\"Nowy produkt\"
    >Nowy produkt</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://wojkom.local/admin-dev/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=20e8e289acaf49c72f58c08b39205f89\"
             data-item=\"Ocena katalogu\"
    >Ocena katalogu</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://wojkom.local/admin-dev/index.php/improve/modules/manage?token=11b1c6d518000cf7577bef3554a37c54\"
             data-item=\"Zainstalowane moduły\"
    >Zainstalowane moduły</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://wojkom.local/admin-dev/index.php/sell/orders?token=11b1c6d518000cf7577bef3554a37c54\"
             data-item=\"Zamówienia\"
    >Zamówienia</a>
    <div class=\"dropdown-divider\"></div>
   ";
        // line 236
        echo "   <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"19\"
      data-icon=\"icon-AdminParentMeta\"
      data-method=\"add\"
      data-url=\"index.php/configure/shop/seo-urls\"
      data-post-link=\"http://wojkom.local/admin-dev/index.php?controller=AdminQuickAccesses&token=939527f4f36cf24944b5671d813027d9\"
      data-prompt-text=\"Proszę podać nazwę tego skrótu:\"
      data-link=\"SEO &amp; URL - Lista\"
    >
      <i class=\"material-icons\">add_circle</i>
      Dodaj aktualną stronę do Szybkiego dostępu
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://wojkom.local/admin-dev/index.php?controller=AdminQuickAccesses&token=939527f4f36cf24944b5671d813027d9\">
    <i class=\"material-icons\">settings</i>
    Zarządzaj Szybkiem dostępem
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

              <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
          <a class=\"link shop-state\"
             id=\"debug-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class=&quot;text-left&quot;><strong>Twój sklep jest w trybie debugowania.</strong></p><p class=&quot;text-left&quot;>Wyświetlane są wszystkie błędy i komunikaty PHP. Gdy nie jest już potrzebny, &lt;strong&gt;wyłącz&lt;/strong&gt; ten tryb.</p>\"
             href=\"/admin-dev/index.php/configure/advanced/performance/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>Tryb debugowania</span>
          </a>
        </div>
      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://wojkom.local/\" target= \"_blank\">
      <i class=\"material-icons\">visibility<";
        // line 279
        echo "/i>
      <span>Zobacz sklep</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Zamówienia<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Klienci<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Wiadomości<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notifica";
        // line 334
        echo "tion\">
              Obecnie brak nowych zamówień :(<br>
              Czy sprawdziłeś <strong><a href=\"http://wojkom.local/admin-dev/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=46121319ac50860aaae504c80761e267\">porzucone koszyki</a></strong>?<br>Może znajdziesz tam swoje następne zamówienie!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Obecnie brak nowych klientów :(<br>
              Czy jesteś aktywny w mediach społecznościowych?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Obecnie brak nowych wiadomości.<br>
              Wydaje się, wszyscy Twoi klienci są zadowoleni :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      od <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - zarejestrowany <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-ic";
        // line 378
        echo "ons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://wojkom.local/img/pr/default.jpg\" alt=\"Daniel\" /></span>
        <span class=\"employee_profile\">Witaj ponownie Daniel</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/admin-dev/index.php/configure/advanced/employees/1/edit?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\">
      <i class=\"material-icons\">edit</i>
      <span>Twój profil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

    
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://wojkom.local/admin-dev/index.php?controller=AdminLogin&amp;logout=1&amp;token=01de0729d07ee08147dd373364ef4c53\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Wyloguj się</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/admin-dev/index.php/configure/advanced/employees/toggle-navigation?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
    <div class=\"logo-container\">
      <div class=\"d-flex align-items-center\">
        <a id=\"header_logo\" class=\"logo float-left\" href=\"http://wojkom.local/admin-dev/index.php?controller=AdminDashboard&amp;token=bf3c44575cbf9bc01ba31afcaeb26e80\"></a>
        <span id=\"shop_ve";
        // line 425
        echo "rsion\" class=\"header-version\">8.1.0</span>
      </div>
      <div class=\"logo-container__close js-mobile-menu\">
        <i class=\"material-icons close-btn\">close</i>
      </div>
    </div>

    <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://wojkom.local/admin-dev/index.php?controller=AdminDashboard&amp;token=bf3c44575cbf9bc01ba31afcaeb26e80\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Pulpit</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sprzedaż</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/admin-dev/index.php/sell/orders/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Zamówienia
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class";
        // line 470
        echo "=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/admin-dev/index.php/sell/orders/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Zamówienia
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/admin-dev/index.php/sell/orders/invoices/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Faktury
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/admin-dev/index.php/sell/orders/credit-slips/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Druki kredytowe
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/admin-dev/index.php/sell/orders/delivery-slips/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Druk wysyłki
                                </a>
                              </li>

                                                                                  
                              
                                                       ";
        // line 501
        echo "     
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://wojkom.local/admin-dev/index.php?controller=AdminCarts&amp;token=46121319ac50860aaae504c80761e267\" class=\"link\"> Koszyki zakupowe
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/admin-dev/index.php/sell/catalog/products?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Katalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/admin-dev/index.php/sell/catalog/products?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Produkty
                                </a>
                              </li>

                                                                                  
                        ";
        // line 533
        echo "      
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/admin-dev/index.php/sell/catalog/categories?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Kategorie
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/admin-dev/index.php/sell/catalog/monitoring/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Monitorowanie
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://wojkom.local/admin-dev/index.php?controller=AdminAttributesGroups&amp;token=9302fc589f426d55b088fa7c28e33927\" class=\"link\"> Atrybuty &amp; Cechy
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/admin-dev/index.php/sell/catalog/brands/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Marki &amp; Dostawcy
                                </a>
                         ";
        // line 562
        echo "     </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/admin-dev/index.php/sell/attachments/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Pliki
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://wojkom.local/admin-dev/index.php?controller=AdminCartRules&amp;token=a27bc286b43c267ab5c58a6a6b96a25c\" class=\"link\"> Rabaty
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/admin-dev/index.php/sell/stocks/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Magazyn
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/admin-dev/index.php/sell/customers/?_toke";
        // line 595
        echo "n=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Klienci
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/admin-dev/index.php/sell/customers/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Klienci
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/admin-dev/index.php/sell/addresses/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Adresy
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=";
        // line 627
        echo "\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://wojkom.local/admin-dev/index.php?controller=AdminCustomerThreads&amp;token=c26f1b43bb6da1a92120b57bb5733874\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Obsługa klienta
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://wojkom.local/admin-dev/index.php?controller=AdminCustomerThreads&amp;token=c26f1b43bb6da1a92120b57bb5733874\" class=\"link\"> Obsługa klienta
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/admin-dev/index.php/sell/customer-service/order-messages/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Wiadomości zamówienia
                                </a>
                              </li>

                                                                                  
                              
                                                            
  ";
        // line 657
        echo "                            <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://wojkom.local/admin-dev/index.php?controller=AdminReturn&amp;token=97a77c9c89b6cf7ac3e71c98ff215b9f\" class=\"link\"> Zwroty produktów
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"http://wojkom.local/admin-dev/index.php?controller=AdminStats&amp;token=20e8e289acaf49c72f58c08b39205f89\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statystyki
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Ulepszenia</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/admin-dev/index.php/improve/modules/manage?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVO";
        // line 694
        echo "BtOZO99dc0\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Moduły
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/admin-dev/index.php/improve/modules/manage?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Menedżer modułów
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/admin-dev/index.php/improve/design/themes/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Wygląd
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
   ";
        // line 726
        echo "                                                         </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"125\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/admin-dev/index.php/improve/design/themes/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Szablony
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/admin-dev/index.php/improve/design/mail_theme/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Szablon maila
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/admin-dev/index.php/improve/design/cms-pages/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Strony
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-Admi";
        // line 756
        echo "nModulesPositions\">
                                <a href=\"/admin-dev/index.php/improve/design/modules/positions/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Pozycje
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://wojkom.local/admin-dev/index.php?controller=AdminImages&amp;token=b9fcabc23bc02f658fe3bc3bd3ef7c49\" class=\"link\"> Zdjęcia
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/admin-dev/index.php/modules/link-widget/list?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Lista linków
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://wojkom.local/admin-dev/index.php?controller=AdminCarriers&amp;token=2bccbb622a5295ef113e1effa447f1f3\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Wysyłka
                      <";
        // line 788
        echo "/span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://wojkom.local/admin-dev/index.php?controller=AdminCarriers&amp;token=2bccbb622a5295ef113e1effa447f1f3\" class=\"link\"> Przewoźnicy
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/admin-dev/index.php/improve/shipping/preferences/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Preferencje
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/admin-dev/index.php/improve/payment/payment_methods?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\">
                      <i class=\"material-icons mi-payme";
        // line 818
        echo "nt\">payment</i>
                      <span>
                      Płatność
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/admin-dev/index.php/improve/payment/payment_methods?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Płatności
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/admin-dev/index.php/improve/payment/preferences?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Preferencje
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/admin-dev/index.php/improve/international/localization/?_token=PgsQM7";
        // line 850
        echo "kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      Międzynarodowy
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/admin-dev/index.php/improve/international/localization/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Lokalizacja
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/admin-dev/index.php/improve/international/zones/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Położenie
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/admin-dev/index.php/improve";
        // line 880
        echo "/international/taxes/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Podatki
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/admin-dev/index.php/improve/international/translations/settings?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Tłumaczenia
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Konfiguruj</span>
            </li>

                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/admin-dev/index.php/configure/shop/preferences/preferences?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Preferencje
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
  ";
        // line 917
        echo "                                          </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/admin-dev/index.php/configure/shop/preferences/preferences?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Ogólny
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/admin-dev/index.php/configure/shop/order-preferences/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Zamówienia
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/admin-dev/index.php/configure/shop/product-preferences/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Produkty
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPref";
        // line 946
        echo "erences\">
                                <a href=\"/admin-dev/index.php/configure/shop/customer-preferences/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Klienci
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/admin-dev/index.php/configure/shop/contacts/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Kontakt
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/admin-dev/index.php/configure/shop/seo-urls/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Ruch
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://wojkom.local/admin-dev/index.php?controller=AdminSearchConf&amp;token=59458ae688d2406ec73279e1ec07dfd2\" class=\"link\"> Szukaj
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                             ";
        // line 977
        echo " 
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/admin-dev/index.php/configure/advanced/system-information/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Zaawansowane
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/admin-dev/index.php/configure/advanced/system-information/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Informacja
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/admin-dev/index.php/configure/advanced/performance/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Wydajność
                                </a>
                              </li>

                       ";
        // line 1008
        echo "                                                           
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/admin-dev/index.php/configure/advanced/administration/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Administracja
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/admin-dev/index.php/configure/advanced/emails/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/admin-dev/index.php/configure/advanced/import/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Importuj
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/admin-dev/index.php/configure/advanced/employees/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Zespół
                ";
        // line 1037
        echo "                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/admin-dev/index.php/configure/advanced/sql-requests/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Baza danych
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/admin-dev/index.php/configure/advanced/logs/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Logi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/admin-dev/index.php/configure/advanced/webservice-keys/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> API
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-l";
        // line 1067
        echo "eveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/admin-dev/index.php/configure/advanced/feature-flags/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Nowe i eksperymentalne funkcje
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/admin-dev/index.php/configure/advanced/security/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Security
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Ruch</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/admin-dev/index.php/configure/shop/seo-urls/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" aria-current=\"page\">SEO &amp; URL</a>
            </li>
                  </ol>
      </nav>
    
        <div class=\"title-row \">
      
          <h1 class=\"title\">
            SEO &amp; URL          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/admin-dev/index.php/configure/shop/";
        // line 1117
        echo "seo-urls/new?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\"                  title=\"Set up a new page\"                                  >
                  <i class=\"material-icons\">add_circle_outline</i>                  Set up a new page
                </a>
                                      
            
              
                <a class=\"toolbar-button btn-sidebar d-inline-block d-md-none\" href=\"#\"
                   title=\"Pomoc\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin-dev/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fpl%252Fdoc%252FAdminMeta%253Fversion%253D8.1.0%2526country%253Dpl/Pomoc?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\"
                   id=\"product_form_open_help_mobile\"
                >
                  <i class=\"material-icons\">help_outline</i>
                </a>
                <a class=\"btn btn-outline-secondary btn-help btn-sidebar d-none d-md-inline-block\" href=\"#\"
                   title=\"Pomoc\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin-dev/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fpl%252Fdoc%252FAdminMeta%253Fversion%253D8.1.0%2526country%253Dpl/Pomoc?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\"
                   id=\"product_form_open_help\"
                >
                  Pomoc
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                    ";
        // line 1151
        echo "                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              <li class=\"nav-item\">
                    <a href=\"/admin-dev/index.php/configure/shop/seo-urls/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" id=\"subtab-AdminMeta\" class=\"nav-link tab active current\" data-submenu=\"87\">
                      SEO & URL
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/admin-dev/index.php/configure/shop/search-engines/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" id=\"subtab-AdminSearchEngines\" class=\"nav-link tab \" data-submenu=\"88\">
                      Wyszukiwarki
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                              ";
        // line 1167
        echo "                                                                                                                                                                                                                                                                                                      </ul>
    </div>
  
      <div class=\"btn-floating\">
      <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
        <i class=\"material-icons\">add</i>
      </button>
      <div class=\"btn-floating-container collapse\">
        <div class=\"btn-floating-menu\">
          
                                    <a
                class=\"btn btn-floating-item   pointer\"                id=\"page-header-desc-floating-configuration-add\"
                href=\"/admin-dev/index.php/configure/shop/seo-urls/new?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\"                title=\"Set up a new page\"              >
                Set up a new page
                <i class=\"material-icons\">add_circle_outline</i>              </a>
                      
                                    <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
                 title=\"Pomoc\"
                 data-toggle=\"sidebar\"
                 data-target=\"#right-sidebar\"
                 data-url=\"/admin-dev/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fpl%252Fdoc%252FAdminMeta%253Fversion%253D8.1.0%2526country%253Dpl/Pomoc?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\"
              >
                Pomoc
              </a>
                              </div>
      </div>
    </div>
    
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1208
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>O nie!</h1>
  <p class=\"mt-3\">
    Wersja mobilna tej strony nie jest jeszcze dostępna.
  </p>
  <p class=\"mt-2\">
    Prosimy korzystać z komputera stacjonarnego, aby uzyskać dostęp do tej strony, dopóki nie zostanie zoptymalizowana pod kątem urządzeń mobilnych.
  </p>
  <p class=\"mt-2\">
    Dziękujemy.
  </p>
  <a href=\"http://wojkom.local/admin-dev/index.php?controller=AdminDashboard&amp;token=bf3c44575cbf9bc01ba31afcaeb26e80\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Wstecz
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1242
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 101
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1208
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_right"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_right"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1242
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__1365e57bb3cdb90756571e02278e9eef";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1491 => 1242,  1422 => 1208,  1387 => 101,  1372 => 1242,  1332 => 1208,  1289 => 1167,  1271 => 1151,  1235 => 1117,  1183 => 1067,  1151 => 1037,  1120 => 1008,  1087 => 977,  1054 => 946,  1023 => 917,  984 => 880,  952 => 850,  918 => 818,  886 => 788,  852 => 756,  820 => 726,  786 => 694,  747 => 657,  715 => 627,  681 => 595,  646 => 562,  615 => 533,  581 => 501,  548 => 470,  501 => 425,  452 => 378,  406 => 334,  349 => 279,  304 => 236,  259 => 193,  242 => 178,  200 => 138,  158 => 101,  124 => 69,  96 => 43,  52 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ '<!DOCTYPE html>
<html lang=\"pl\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>SEO & URL • wojkom</title>

  <script type=\"text/javascript\">
    var help_class_name = \\'AdminMeta\\';
    var iso_user = \\'pl\\';
    var lang_is_rtl = \\'0\\';
    var full_language_code = \\'pl\\';
    var full_cldr_language_code = \\'pl-PL\\';
    var country_iso_code = \\'PL\\';
    var _PS_VERSION_ = \\'8.1.0\\';
    var roundMode = 2;
    var youEditFieldFor = \\'\\';
        var new_order_msg = \\'Złożono nowe zamówienie w Twoim sklepie.\\';
    var order_number_msg = \\'Numer zamówienia: \\';
    var total_msg = \\'Razem: \\';
    var from_msg = \\'Od: \\';
    var see_order_msg = \\'Zobacz to zamówienie\\';
    var new_customer_msg = \\'Nowy klient zarejestrował się w Twoim sklepie.\\';
    var customer_name_msg = \\'Nazwa klienta: \\';
    var new_msg = \\'Nowa wiadomość pojawiła się w Twoim sklepie.\\';
    var see_msg = \\'Przeczytaj tą wiadomość\\';
    var token = \\'c4d7610dd37ee885fed69dfc59509f0d\\';
    var currentIndex = \\'index.php?controller=AdminMeta\\';
    var employee_token = \\'d5f34063f76f16d0f223876d341f781d\\';
    var choose_language_translate = \\'Wybierz język:\\';
    var default_language = \\'1\\';
    var admin_modules_link = \\'/admin-dev/index.php/improve/modules/manage?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\\';
    var admin_notification_get_link = \\'/admin-dev/index.php/common/notifications?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\\';
    var admin_notification_push_link = adminNotificationPushLink = \\'/admin-dev/index.php/common/notifications/ack?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\\';
    var update_success_msg = \\'Aktualizacja powiodła się\\';
    var search_product_msg = \\'Szukaj produktu\\';
  </script' | raw }}{{ '>



<link
      rel=\"preload\"
      href=\"/admin-dev/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/admin-dev/themes/new-theme/public/create_product_default_theme.css?v=8.1.0\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin-dev/themes/new-theme/public/theme.css?v=8.1.0\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin-dev/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\\\/admin-dev\\\\/\";
var baseDir = \"\\\\/\";
var changeFormLanguageUrl = \"\\\\/admin-dev\\\\/index.php\\\\/configure\\\\/advanced\\\\/employees\\\\/change-form-language?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\";
var currency = {\"iso_code\":\"PLN\",\"sign\":\"z\\\\u0142\",\"name\":\"Z\\\\u0142oty polski\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"currencyCode\":\"PLN\",\"currencySymbol\":\"z\\\\u0142\",\"numberSymbols\":[\",\",\"\\\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\\\u00a0\\\\u00a4\",\"negativePattern\":\"-#,##0.00\\\\u00a0\\\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\"\\\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":true};
var show_new_customers = \"1\";
var sh' | raw }}{{ 'ow_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/admin-dev/themes/new-theme/public/main.bundle.js?v=8.1.0\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=8.1.0\"></script>
<script type=\"text/javascript\" src=\"/admin-dev/themes/new-theme/public/cldr.bundle.js?v=8.1.0\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=8.1.0\"></script>
<script type=\"text/javascript\" src=\"/admin-dev/themes/new-theme/public/create_product.bundle.js?v=8.1.0\"></script>
<script type=\"text/javascript\" src=\"/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin-dev/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: \\'#DF0067\\',
      textColor: \\'#FFFFFF\\',
      notificationGetUrl: \\'/admin-dev/index.php/common/notifications?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\\',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


' | raw }}{% block stylesheets %}{% endblock %}{% block extra_stylesheets %}{% endblock %}</head>{{ '

<body
  class=\"lang-pl adminmeta developer-mode\"
  data-base-url=\"/admin-dev/index.php\"  data-token=\"PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://wojkom.local/admin-dev/index.php?controller=AdminDashboard&amp;token=bf3c44575cbf9bc01ba31afcaeb26e80\"></a>
      <span id=\"shop_version\">8.1.0</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Szybki dostęp
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://wojkom.local/admin-dev/index.php/sell/catalog/categories/new?token=11b1c6d518000cf7577bef3554a37c54\"
                 data-item=\"Nowa kategoria\"
      >Nowa kategoria</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://wojkom.local/admin-dev/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=a27bc286b43c267ab5c58a6a6b96a25c\"
                 data-item=\"Nowy kupon\"
      >Nowy kupon</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"http://wojkom.local/admin-dev/index.php/sell/catalog/products-v2/create?token=11b1c6d518000cf7577bef3554a37c54\"
                 data-item=\"Nowy produkt\"
      >Nowy produkt</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://wojkom.local/admin-dev/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=20e8e289acaf49c72f58c08b39205f89\"
                 data-item=\"Ocena katalogu\"
      >Ocena katalogu</a>
          <a class=\"dropdown-item quick-row' | raw }}{{ '-link \"
         href=\"http://wojkom.local/admin-dev/index.php/improve/modules/manage?token=11b1c6d518000cf7577bef3554a37c54\"
                 data-item=\"Zainstalowane moduły\"
      >Zainstalowane moduły</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://wojkom.local/admin-dev/index.php/sell/orders?token=11b1c6d518000cf7577bef3554a37c54\"
                 data-item=\"Zamówienia\"
      >Zamówienia</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"51\"
        data-icon=\"icon-AdminParentMeta\"
        data-method=\"add\"
        data-url=\"index.php/configure/shop/seo-urls\"
        data-post-link=\"http://wojkom.local/admin-dev/index.php?controller=AdminQuickAccesses&token=939527f4f36cf24944b5671d813027d9\"
        data-prompt-text=\"Proszę podać nazwę tego skrótu:\"
        data-link=\"SEO &amp; URL - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Dodaj aktualną stronę do Szybkiego dostępu
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://wojkom.local/admin-dev/index.php?controller=AdminQuickAccesses&token=939527f4f36cf24944b5671d813027d9\">
      <i class=\"material-icons\">settings</i>
      Zarządzaj Szybkiem dostępem
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/admin-dev/index.php?controller=AdminSearch&amp;token=2f188c56db343e4107ff7e974789cb5f\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\"' | raw }}{{ ' placeholder=\"Szukaj (np.: indeks produktu, nazwa klienta...)\" aria-label=\"Wyszukiwarka\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Wszędzie
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Wszędzie\" href=\"#\" data-value=\"0\" data-placeholder=\"Czego szukasz?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Wszędzie</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Katalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Nazwa produktu, odniesienie itp.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Katalog</a>
        <a class=\"dropdown-item\" data-item=\"Klienci Wg nazwy\" href=\"#\" data-value=\"2\" data-placeholder=\"Nazwa\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Klienci Wg nazwy</a>
        <a class=\"dropdown-item\" data-item=\"Klienci wg adresu IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Klienci wg adresu IP</a>
        <a class=\"dropdown-item\" data-item=\"Zamówienia\" href=\"#\" data-value=\"3\" data-placeholder=\"ID zamówienia\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Zamówienia</a>
        <a class=\"dropdown-item\" data-item=\"Faktury\" href=\"#\" data-value=\"4\" data-placeholder=\"Numer faktury\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Faktury</a>
        <a class=\"dropdown-item\" data-item=\"Koszyki\" href=\"#\" data-value=\"5\" data-placeholder=\"ID Koszyka\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Koszyki</a>
        <a class=\"dropdown-item\" data-item=\"Moduły\" href=\"#\" data-value=\"7\" data-placeholder=\"Nazwa modułu\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Moduły</a>
    ' | raw }}{{ '  </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">WYSZUKIWANIE</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(function(){
    \$(\\'#bo_query\\').one(\\'click\\', function() {
    \$(this).closest(\\'form\\').removeClass(\\'collapsed\\');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Anuluj</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Szybki dostęp</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://wojkom.local/admin-dev/index.php/sell/catalog/categories/new?token=11b1c6d518000cf7577bef3554a37c54\"
             data-item=\"Nowa kategoria\"
    >Nowa kategoria</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://wojkom.local/admin-dev/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=a27bc286b43c267ab5c58a6a6b96a25c\"
             data-item=\"Nowy kupon\"
    >Nowy kupon</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://wojkom.local/admin-dev/index.php/sell/catalog/products-v2/create?token=11b1c6d518000cf7577bef3554a37c54\"
             data-item=\"Nowy produkt\"
    >Nowy produkt</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://wojkom.local/admin-dev/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=20e8e289acaf49c72f58c08b39205f89\"
             data-item=\"Ocena katalogu\"
    >Ocena katalogu</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://wojkom.local/admin-dev/index.php/improve/modules/manage?token=11b1c6d518000cf7577bef3554a37c54\"
             data-item=\"Zainstalowane moduły\"
    >Zainstalowane moduły</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://wojkom.local/admin-dev/index.php/sell/orders?token=11b1c6d518000cf7577bef3554a37c54\"
             data-item=\"Zamówienia\"
    >Zamówienia</a>
    <div class=\"dropdown-divider\"></div>
   ' | raw }}{{ '   <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"19\"
      data-icon=\"icon-AdminParentMeta\"
      data-method=\"add\"
      data-url=\"index.php/configure/shop/seo-urls\"
      data-post-link=\"http://wojkom.local/admin-dev/index.php?controller=AdminQuickAccesses&token=939527f4f36cf24944b5671d813027d9\"
      data-prompt-text=\"Proszę podać nazwę tego skrótu:\"
      data-link=\"SEO &amp; URL - Lista\"
    >
      <i class=\"material-icons\">add_circle</i>
      Dodaj aktualną stronę do Szybkiego dostępu
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://wojkom.local/admin-dev/index.php?controller=AdminQuickAccesses&token=939527f4f36cf24944b5671d813027d9\">
    <i class=\"material-icons\">settings</i>
    Zarządzaj Szybkiem dostępem
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

              <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
          <a class=\"link shop-state\"
             id=\"debug-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class=&quot;text-left&quot;><strong>Twój sklep jest w trybie debugowania.</strong></p><p class=&quot;text-left&quot;>Wyświetlane są wszystkie błędy i komunikaty PHP. Gdy nie jest już potrzebny, &lt;strong&gt;wyłącz&lt;/strong&gt; ten tryb.</p>\"
             href=\"/admin-dev/index.php/configure/advanced/performance/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>Tryb debugowania</span>
          </a>
        </div>
      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://wojkom.local/\" target= \"_blank\">
      <i class=\"material-icons\">visibility<' | raw }}{{ '/i>
      <span>Zobacz sklep</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Zamówienia<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Klienci<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Wiadomości<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notifica' | raw }}{{ 'tion\">
              Obecnie brak nowych zamówień :(<br>
              Czy sprawdziłeś <strong><a href=\"http://wojkom.local/admin-dev/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=46121319ac50860aaae504c80761e267\">porzucone koszyki</a></strong>?<br>Może znajdziesz tam swoje następne zamówienie!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Obecnie brak nowych klientów :(<br>
              Czy jesteś aktywny w mediach społecznościowych?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Obecnie brak nowych wiadomości.<br>
              Wydaje się, wszyscy Twoi klienci są zadowoleni :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href=\\'order_url\\'>
      #_id_order_ -
      od <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href=\\'customer_url\\'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - zarejestrowany <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href=\\'message_url\\'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-ic' | raw }}{{ 'ons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://wojkom.local/img/pr/default.jpg\" alt=\"Daniel\" /></span>
        <span class=\"employee_profile\">Witaj ponownie Daniel</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/admin-dev/index.php/configure/advanced/employees/1/edit?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\">
      <i class=\"material-icons\">edit</i>
      <span>Twój profil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

    
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://wojkom.local/admin-dev/index.php?controller=AdminLogin&amp;logout=1&amp;token=01de0729d07ee08147dd373364ef4c53\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Wyloguj się</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/admin-dev/index.php/configure/advanced/employees/toggle-navigation?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
    <div class=\"logo-container\">
      <div class=\"d-flex align-items-center\">
        <a id=\"header_logo\" class=\"logo float-left\" href=\"http://wojkom.local/admin-dev/index.php?controller=AdminDashboard&amp;token=bf3c44575cbf9bc01ba31afcaeb26e80\"></a>
        <span id=\"shop_ve' | raw }}{{ 'rsion\" class=\"header-version\">8.1.0</span>
      </div>
      <div class=\"logo-container__close js-mobile-menu\">
        <i class=\"material-icons close-btn\">close</i>
      </div>
    </div>

    <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://wojkom.local/admin-dev/index.php?controller=AdminDashboard&amp;token=bf3c44575cbf9bc01ba31afcaeb26e80\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Pulpit</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sprzedaż</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/admin-dev/index.php/sell/orders/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Zamówienia
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class' | raw }}{{ '=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/admin-dev/index.php/sell/orders/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Zamówienia
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/admin-dev/index.php/sell/orders/invoices/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Faktury
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/admin-dev/index.php/sell/orders/credit-slips/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Druki kredytowe
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/admin-dev/index.php/sell/orders/delivery-slips/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Druk wysyłki
                                </a>
                              </li>

                                                                                  
                              
                                                       ' | raw }}{{ '     
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://wojkom.local/admin-dev/index.php?controller=AdminCarts&amp;token=46121319ac50860aaae504c80761e267\" class=\"link\"> Koszyki zakupowe
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/admin-dev/index.php/sell/catalog/products?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Katalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/admin-dev/index.php/sell/catalog/products?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Produkty
                                </a>
                              </li>

                                                                                  
                        ' | raw }}{{ '      
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/admin-dev/index.php/sell/catalog/categories?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Kategorie
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/admin-dev/index.php/sell/catalog/monitoring/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Monitorowanie
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://wojkom.local/admin-dev/index.php?controller=AdminAttributesGroups&amp;token=9302fc589f426d55b088fa7c28e33927\" class=\"link\"> Atrybuty &amp; Cechy
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/admin-dev/index.php/sell/catalog/brands/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Marki &amp; Dostawcy
                                </a>
                         ' | raw }}{{ '     </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/admin-dev/index.php/sell/attachments/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Pliki
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://wojkom.local/admin-dev/index.php?controller=AdminCartRules&amp;token=a27bc286b43c267ab5c58a6a6b96a25c\" class=\"link\"> Rabaty
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/admin-dev/index.php/sell/stocks/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Magazyn
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/admin-dev/index.php/sell/customers/?_toke' | raw }}{{ 'n=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Klienci
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/admin-dev/index.php/sell/customers/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Klienci
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/admin-dev/index.php/sell/addresses/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Adresy
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=' | raw }}{{ '\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://wojkom.local/admin-dev/index.php?controller=AdminCustomerThreads&amp;token=c26f1b43bb6da1a92120b57bb5733874\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Obsługa klienta
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://wojkom.local/admin-dev/index.php?controller=AdminCustomerThreads&amp;token=c26f1b43bb6da1a92120b57bb5733874\" class=\"link\"> Obsługa klienta
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/admin-dev/index.php/sell/customer-service/order-messages/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Wiadomości zamówienia
                                </a>
                              </li>

                                                                                  
                              
                                                            
  ' | raw }}{{ '                            <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://wojkom.local/admin-dev/index.php?controller=AdminReturn&amp;token=97a77c9c89b6cf7ac3e71c98ff215b9f\" class=\"link\"> Zwroty produktów
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"http://wojkom.local/admin-dev/index.php?controller=AdminStats&amp;token=20e8e289acaf49c72f58c08b39205f89\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statystyki
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Ulepszenia</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/admin-dev/index.php/improve/modules/manage?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVO' | raw }}{{ 'BtOZO99dc0\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Moduły
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/admin-dev/index.php/improve/modules/manage?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Menedżer modułów
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/admin-dev/index.php/improve/design/themes/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Wygląd
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
   ' | raw }}{{ '                                                         </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"125\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/admin-dev/index.php/improve/design/themes/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Szablony
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/admin-dev/index.php/improve/design/mail_theme/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Szablon maila
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/admin-dev/index.php/improve/design/cms-pages/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Strony
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-Admi' | raw }}{{ 'nModulesPositions\">
                                <a href=\"/admin-dev/index.php/improve/design/modules/positions/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Pozycje
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://wojkom.local/admin-dev/index.php?controller=AdminImages&amp;token=b9fcabc23bc02f658fe3bc3bd3ef7c49\" class=\"link\"> Zdjęcia
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/admin-dev/index.php/modules/link-widget/list?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Lista linków
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://wojkom.local/admin-dev/index.php?controller=AdminCarriers&amp;token=2bccbb622a5295ef113e1effa447f1f3\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Wysyłka
                      <' | raw }}{{ '/span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://wojkom.local/admin-dev/index.php?controller=AdminCarriers&amp;token=2bccbb622a5295ef113e1effa447f1f3\" class=\"link\"> Przewoźnicy
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/admin-dev/index.php/improve/shipping/preferences/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Preferencje
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/admin-dev/index.php/improve/payment/payment_methods?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\">
                      <i class=\"material-icons mi-payme' | raw }}{{ 'nt\">payment</i>
                      <span>
                      Płatność
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/admin-dev/index.php/improve/payment/payment_methods?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Płatności
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/admin-dev/index.php/improve/payment/preferences?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Preferencje
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/admin-dev/index.php/improve/international/localization/?_token=PgsQM7' | raw }}{{ 'kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      Międzynarodowy
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/admin-dev/index.php/improve/international/localization/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Lokalizacja
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/admin-dev/index.php/improve/international/zones/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Położenie
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/admin-dev/index.php/improve' | raw }}{{ '/international/taxes/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Podatki
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/admin-dev/index.php/improve/international/translations/settings?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Tłumaczenia
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Konfiguruj</span>
            </li>

                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/admin-dev/index.php/configure/shop/preferences/preferences?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Preferencje
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
  ' | raw }}{{ '                                          </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/admin-dev/index.php/configure/shop/preferences/preferences?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Ogólny
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/admin-dev/index.php/configure/shop/order-preferences/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Zamówienia
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/admin-dev/index.php/configure/shop/product-preferences/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Produkty
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPref' | raw }}{{ 'erences\">
                                <a href=\"/admin-dev/index.php/configure/shop/customer-preferences/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Klienci
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/admin-dev/index.php/configure/shop/contacts/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Kontakt
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/admin-dev/index.php/configure/shop/seo-urls/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Ruch
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://wojkom.local/admin-dev/index.php?controller=AdminSearchConf&amp;token=59458ae688d2406ec73279e1ec07dfd2\" class=\"link\"> Szukaj
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                             ' | raw }}{{ ' 
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/admin-dev/index.php/configure/advanced/system-information/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Zaawansowane
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/admin-dev/index.php/configure/advanced/system-information/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Informacja
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/admin-dev/index.php/configure/advanced/performance/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Wydajność
                                </a>
                              </li>

                       ' | raw }}{{ '                                                           
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/admin-dev/index.php/configure/advanced/administration/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Administracja
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/admin-dev/index.php/configure/advanced/emails/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/admin-dev/index.php/configure/advanced/import/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Importuj
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/admin-dev/index.php/configure/advanced/employees/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Zespół
                ' | raw }}{{ '                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/admin-dev/index.php/configure/advanced/sql-requests/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Baza danych
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/admin-dev/index.php/configure/advanced/logs/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Logi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/admin-dev/index.php/configure/advanced/webservice-keys/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> API
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-l' | raw }}{{ 'eveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/admin-dev/index.php/configure/advanced/feature-flags/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Nowe i eksperymentalne funkcje
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/admin-dev/index.php/configure/advanced/security/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" class=\"link\"> Security
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Ruch</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/admin-dev/index.php/configure/shop/seo-urls/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" aria-current=\"page\">SEO &amp; URL</a>
            </li>
                  </ol>
      </nav>
    
        <div class=\"title-row \">
      
          <h1 class=\"title\">
            SEO &amp; URL          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/admin-dev/index.php/configure/shop/' | raw }}{{ 'seo-urls/new?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\"                  title=\"Set up a new page\"                                  >
                  <i class=\"material-icons\">add_circle_outline</i>                  Set up a new page
                </a>
                                      
            
              
                <a class=\"toolbar-button btn-sidebar d-inline-block d-md-none\" href=\"#\"
                   title=\"Pomoc\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin-dev/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fpl%252Fdoc%252FAdminMeta%253Fversion%253D8.1.0%2526country%253Dpl/Pomoc?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\"
                   id=\"product_form_open_help_mobile\"
                >
                  <i class=\"material-icons\">help_outline</i>
                </a>
                <a class=\"btn btn-outline-secondary btn-help btn-sidebar d-none d-md-inline-block\" href=\"#\"
                   title=\"Pomoc\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin-dev/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fpl%252Fdoc%252FAdminMeta%253Fversion%253D8.1.0%2526country%253Dpl/Pomoc?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\"
                   id=\"product_form_open_help\"
                >
                  Pomoc
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                    ' | raw }}{{ '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              <li class=\"nav-item\">
                    <a href=\"/admin-dev/index.php/configure/shop/seo-urls/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" id=\"subtab-AdminMeta\" class=\"nav-link tab active current\" data-submenu=\"87\">
                      SEO & URL
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/admin-dev/index.php/configure/shop/search-engines/?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\" id=\"subtab-AdminSearchEngines\" class=\"nav-link tab \" data-submenu=\"88\">
                      Wyszukiwarki
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                              ' | raw }}{{ '                                                                                                                                                                                                                                                                                                      </ul>
    </div>
  
      <div class=\"btn-floating\">
      <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
        <i class=\"material-icons\">add</i>
      </button>
      <div class=\"btn-floating-container collapse\">
        <div class=\"btn-floating-menu\">
          
                                    <a
                class=\"btn btn-floating-item   pointer\"                id=\"page-header-desc-floating-configuration-add\"
                href=\"/admin-dev/index.php/configure/shop/seo-urls/new?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\"                title=\"Set up a new page\"              >
                Set up a new page
                <i class=\"material-icons\">add_circle_outline</i>              </a>
                      
                                    <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
                 title=\"Pomoc\"
                 data-toggle=\"sidebar\"
                 data-target=\"#right-sidebar\"
                 data-url=\"/admin-dev/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fpl%252Fdoc%252FAdminMeta%253Fversion%253D8.1.0%2526country%253Dpl/Pomoc?_token=PgsQM7kz5thTnWF4tZWaRCVf8EcwKnYVOBtOZO99dc0\"
              >
                Pomoc
              </a>
                              </div>
      </div>
    </div>
    
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ' | raw }}{% block content_header %}{% endblock %}{% block content %}{% endblock %}{% block content_footer %}{% endblock %}{% block sidebar_right %}{% endblock %}{{ '

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>O nie!</h1>
  <p class=\"mt-3\">
    Wersja mobilna tej strony nie jest jeszcze dostępna.
  </p>
  <p class=\"mt-2\">
    Prosimy korzystać z komputera stacjonarnego, aby uzyskać dostęp do tej strony, dopóki nie zostanie zoptymalizowana pod kątem urządzeń mobilnych.
  </p>
  <p class=\"mt-2\">
    Dziękujemy.
  </p>
  <a href=\"http://wojkom.local/admin-dev/index.php?controller=AdminDashboard&amp;token=bf3c44575cbf9bc01ba31afcaeb26e80\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Wstecz
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
' | raw }}{% block javascripts %}{% endblock %}{% block extra_javascripts %}{% endblock %}{% block translate_javascripts %}{% endblock %}</body>{{ '
</html>' | raw }}", "__string_template__1365e57bb3cdb90756571e02278e9eef", "");
    }
}
