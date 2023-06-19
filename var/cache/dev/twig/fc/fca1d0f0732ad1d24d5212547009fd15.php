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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Webservice/index.html.twig */
class __TwigTemplate_d26123a6e666aeabab3008cf87606893 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'webservice_list_notifications' => [$this, 'block_webservice_list_notifications'],
            'webservice_api_status' => [$this, 'block_webservice_api_status'],
            'webservice_configuration_form_rest' => [$this, 'block_webservice_configuration_form_rest'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 25
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/Webservice/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/Webservice/index.html.twig"));

        // line 27
        $context["layoutHeaderToolbarBtn"] = ["add" => ["href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_webservice_keys_create"), "desc" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add new webservice key", [], "Admin.Advparameters.Feature"), "icon" => "add_circle_outline"]];
        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Webservice/index.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 35
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 36
        echo "
  ";
        // line 37
        $this->displayBlock('webservice_list_notifications', $context, $blocks);
        // line 46
        echo "
  ";
        // line 47
        $this->displayBlock('webservice_api_status', $context, $blocks);
        // line 76
        echo "
  ";
        // line 77
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", ["grid" => (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 77, $this->source); })())]);
        echo "

  ";
        // line 79
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["webserviceConfigurationForm"]) || array_key_exists("webserviceConfigurationForm", $context) ? $context["webserviceConfigurationForm"] : (function () { throw new RuntimeError('Variable "webserviceConfigurationForm" does not exist.', 79, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_webservice_save_settings"), "attr" => ["class" => "form", "id" => "configuration_form"]]);
        echo "

  ";
        // line 81
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Configure/AdvancedParameters/Webservice/webservice_settings.html.twig");
        echo "

  ";
        // line 83
        $this->displayBlock('webservice_configuration_form_rest', $context, $blocks);
        // line 86
        echo "
  ";
        // line 87
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["webserviceConfigurationForm"]) || array_key_exists("webserviceConfigurationForm", $context) ? $context["webserviceConfigurationForm"] : (function () { throw new RuntimeError('Variable "webserviceConfigurationForm" does not exist.', 87, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 37
    public function block_webservice_list_notifications($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "webservice_list_notifications"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "webservice_list_notifications"));

        // line 38
        echo "    ";
        if ( !twig_test_empty((isset($context["configurationWarnings"]) || array_key_exists("configurationWarnings", $context) ? $context["configurationWarnings"] : (function () { throw new RuntimeError('Variable "configurationWarnings" does not exist.', 38, $this->source); })()))) {
            // line 39
            echo "      <div class=\"alert alert-warning\" role=\"alert\">
        ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["configurationWarnings"]) || array_key_exists("configurationWarnings", $context) ? $context["configurationWarnings"] : (function () { throw new RuntimeError('Variable "configurationWarnings" does not exist.', 40, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["warning"]) {
                // line 41
                echo "          <p class=\"alert-text\">";
                echo twig_escape_filter($this->env, $context["warning"], "html", null, true);
                echo "</p>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['warning'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "      </div>
    ";
        }
        // line 45
        echo "  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 47
    public function block_webservice_api_status($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "webservice_api_status"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "webservice_api_status"));

        // line 48
        echo "    ";
        $context["devdocUrl"] = "https://devdocs.prestashop-project.org/8/webservice/";
        // line 49
        echo "
    ";
        // line 50
        if ((twig_get_attribute($this->env, $this->source, (isset($context["webserviceStatus"]) || array_key_exists("webserviceStatus", $context) ? $context["webserviceStatus"] : (function () { throw new RuntimeError('Variable "webserviceStatus" does not exist.', 50, $this->source); })()), "isEnabled", [], "any", false, false, false, 50) == true)) {
            // line 51
            echo "      <div class=\"card\">
        <h3 class=\"card-header\">
          <i class=\"material-icons\">info_outline</i> ";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Webservice status", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "
        </h3>
        <div class=\"card-body\">
          <p>
            ";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Webservice is enabled. Main entry point is", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "
            <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["webserviceStatus"]) || array_key_exists("webserviceStatus", $context) ? $context["webserviceStatus"] : (function () { throw new RuntimeError('Variable "webserviceStatus" does not exist.', 58, $this->source); })()), "endpoint", [], "any", false, false, false, 58), "html", null, true);
            echo "\" target=\"_blank\">
              ";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["webserviceStatus"]) || array_key_exists("webserviceStatus", $context) ? $context["webserviceStatus"] : (function () { throw new RuntimeError('Variable "webserviceStatus" does not exist.', 59, $this->source); })()), "endpoint", [], "any", false, false, false, 59), "html", null, true);
            echo "
            </a>
          </p>
          ";
            // line 62
            if ((twig_get_attribute($this->env, $this->source, (isset($context["webserviceStatus"]) || array_key_exists("webserviceStatus", $context) ? $context["webserviceStatus"] : (function () { throw new RuntimeError('Variable "webserviceStatus" does not exist.', 62, $this->source); })()), "isFunctional", [], "any", false, false, false, 62) == false)) {
                // line 63
                echo "            <p>
              ";
                // line 64
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("It seems that the webservice endpoint is not functional. If you are using httpd/apache2, you need to enable URL rewriting on your server.", [], "Admin.Advparameters.Feature"), "html", null, true);
                echo "
            </p>
          ";
            }
            // line 67
            echo "          <p>
            ";
            // line 68
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Read the [1]developer documentation[/1].", ["[1]" => (("<a href=\"" .             // line 69
(isset($context["devdocUrl"]) || array_key_exists("devdocUrl", $context) ? $context["devdocUrl"] : (function () { throw new RuntimeError('Variable "devdocUrl" does not exist.', 69, $this->source); })())) . "\" target=\"_blank\">"), "[/1]" => "</a>"], "Admin.Advparameters.Feature");
            // line 70
            echo "
          </p>
        </div>
      </div>
    ";
        }
        // line 75
        echo "  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 83
    public function block_webservice_configuration_form_rest($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "webservice_configuration_form_rest"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "webservice_configuration_form_rest"));

        // line 84
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["webserviceConfigurationForm"]) || array_key_exists("webserviceConfigurationForm", $context) ? $context["webserviceConfigurationForm"] : (function () { throw new RuntimeError('Variable "webserviceConfigurationForm" does not exist.', 84, $this->source); })()), 'rest');
        echo "
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 91
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 92
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/webservice.bundle.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/pagination.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Webservice/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 95,  280 => 94,  274 => 92,  264 => 91,  251 => 84,  241 => 83,  231 => 75,  224 => 70,  222 => 69,  221 => 68,  218 => 67,  212 => 64,  209 => 63,  207 => 62,  201 => 59,  197 => 58,  193 => 57,  186 => 53,  182 => 51,  180 => 50,  177 => 49,  174 => 48,  164 => 47,  154 => 45,  150 => 43,  141 => 41,  137 => 40,  134 => 39,  131 => 38,  121 => 37,  108 => 87,  105 => 86,  103 => 83,  98 => 81,  93 => 79,  88 => 77,  85 => 76,  83 => 47,  80 => 46,  78 => 37,  75 => 36,  65 => 35,  54 => 25,  52 => 27,  39 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("{#**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 *#}
{% extends '@PrestaShop/Admin/layout.html.twig' %}
{% trans_default_domain \"Admin.Advparameters.Feature\" %}
{% set layoutHeaderToolbarBtn = {
  'add': {
    'href': path('admin_webservice_keys_create'),
    'desc': 'Add new webservice key'|trans({}, 'Admin.Advparameters.Feature'),
    'icon': 'add_circle_outline'
  }
} %}

{% block content %}

  {% block webservice_list_notifications %}
    {% if configurationWarnings is not empty  %}
      <div class=\"alert alert-warning\" role=\"alert\">
        {% for warning in configurationWarnings %}
          <p class=\"alert-text\">{{ warning }}</p>
        {% endfor %}
      </div>
    {% endif %}
  {% endblock %}

  {% block webservice_api_status %}
    {% set devdocUrl = 'https://devdocs.prestashop-project.org/8/webservice/' %}

    {% if webserviceStatus.isEnabled == true %}
      <div class=\"card\">
        <h3 class=\"card-header\">
          <i class=\"material-icons\">info_outline</i> {{ 'Webservice status'|trans }}
        </h3>
        <div class=\"card-body\">
          <p>
            {{ 'Webservice is enabled. Main entry point is' |trans }}
            <a href=\"{{ webserviceStatus.endpoint }}\" target=\"_blank\">
              {{ webserviceStatus.endpoint }}
            </a>
          </p>
          {% if webserviceStatus.isFunctional == false %}
            <p>
              {{ 'It seems that the webservice endpoint is not functional. If you are using httpd/apache2, you need to enable URL rewriting on your server.'|trans }}
            </p>
          {% endif %}
          <p>
            {{ \"Read the [1]developer documentation[/1].\"|trans({
              '[1]': '<a href=\"'~devdocUrl~'\" target=\"_blank\">', '[/1]': \"</a>\"
            }, 'Admin.Advparameters.Feature')|raw }}
          </p>
        </div>
      </div>
    {% endif %}
  {% endblock %}

  {{ include('@PrestaShop/Admin/Common/Grid/grid_panel.html.twig', {'grid': grid }) }}

  {{ form_start(webserviceConfigurationForm, {'action': path('admin_webservice_save_settings') ,'attr' : {'class': 'form', 'id': 'configuration_form'} }) }}

  {{ include('@PrestaShop/Admin/Configure/AdvancedParameters/Webservice/webservice_settings.html.twig') }}

  {% block webservice_configuration_form_rest %}
    {{ form_rest(webserviceConfigurationForm) }}
  {% endblock %}

  {{ form_end(webserviceConfigurationForm) }}

{% endblock %}

{% block javascripts %}
  {{ parent() }}

  <script src=\"{{ asset('themes/new-theme/public/webservice.bundle.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/pagination.js') }}\"></script>
{% endblock %}
", "@PrestaShop/Admin/Configure/AdvancedParameters/Webservice/index.html.twig", "/home/vagrant/code/prestashop8/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Webservice/index.html.twig");
    }
}
