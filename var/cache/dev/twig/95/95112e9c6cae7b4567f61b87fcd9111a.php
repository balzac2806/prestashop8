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

/* @PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/index.html.twig */
class __TwigTemplate_678a4f01fdd84d4ecec5c624be581873 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'sql_manager_info_block' => [$this, 'block_sql_manager_info_block'],
            'sql_manager_warning_block' => [$this, 'block_sql_manager_warning_block'],
            'sql_manager_list_panel' => [$this, 'block_sql_manager_list_panel'],
            'sql_manager_settings_panel' => [$this, 'block_sql_manager_settings_panel'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/index.html.twig"));

        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/index.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 29
        echo "  ";
        $this->displayBlock('sql_manager_info_block', $context, $blocks);
        // line 40
        echo "
  ";
        // line 41
        $this->displayBlock('sql_manager_warning_block', $context, $blocks);
        // line 46
        echo "
  ";
        // line 47
        $this->displayBlock('sql_manager_list_panel', $context, $blocks);
        // line 52
        echo "
  ";
        // line 53
        $this->displayBlock('sql_manager_settings_panel', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 29
    public function block_sql_manager_info_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sql_manager_info_block"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sql_manager_info_block"));

        // line 30
        echo "    <div class=\"alert alert-info\" role=\"alert\">
      <p class=\"alert-text\">";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("How do I create a new SQL query?", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "</p>
      <ul>
        <li>";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Click \"%add_new_label%\".", ["%add_new_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add new SQL query", [], "Admin.Advparameters.Feature")], "Admin.Advparameters.Help"), "html", null, true);
        echo "</li>
        <li>";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Fill in the fields and click \"%save_label%\".", ["%save_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions")], "Admin.Advparameters.Help"), "html", null, true);
        echo "</li>
        <li>";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You can then view the query results by clicking on the \"%view_label%\" action in the dropdown menu", ["%view_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View", [], "Admin.Global")], "Admin.Advparameters.Help"), "html", null, true);
        echo "</li>
        <li>";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You can also export the query results as a CSV file by clicking on the \"%export_label%\" button", ["%export_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Export", [], "Admin.Actions")], "Admin.Advparameters.Help"), "html", null, true);
        echo "</li>
      </ul>
    </div>
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 41
    public function block_sql_manager_warning_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sql_manager_warning_block"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sql_manager_warning_block"));

        // line 42
        echo "    <div class=\"alert alert-warning\" role=\"alert\">
      <p class=\"alert-text\">";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("When saving the query, only the \"SELECT\" SQL statement is allowed.", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "</p>
    </div>
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 47
    public function block_sql_manager_list_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sql_manager_list_panel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sql_manager_list_panel"));

        // line 48
        echo "
    ";
        // line 49
        $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/index.html.twig", 49)->display(twig_array_merge($context, ["grid" => (isset($context["requestSqlGrid"]) || array_key_exists("requestSqlGrid", $context) ? $context["requestSqlGrid"] : (function () { throw new RuntimeError('Variable "requestSqlGrid" does not exist.', 49, $this->source); })())]));
        // line 50
        echo "
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 53
    public function block_sql_manager_settings_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sql_manager_settings_panel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sql_manager_settings_panel"));

        // line 54
        echo "
    ";
        // line 55
        $this->loadTemplate("@PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/Blocks/settings_panel.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/index.html.twig", 55)->display($context);
        // line 56
        echo "
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 60
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 61
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/sql_manager.bundle.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/pagination.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 64,  237 => 63,  231 => 61,  221 => 60,  210 => 56,  208 => 55,  205 => 54,  195 => 53,  184 => 50,  182 => 49,  179 => 48,  169 => 47,  156 => 43,  153 => 42,  143 => 41,  129 => 36,  125 => 35,  121 => 34,  117 => 33,  112 => 31,  109 => 30,  99 => 29,  89 => 53,  86 => 52,  84 => 47,  81 => 46,  79 => 41,  76 => 40,  73 => 29,  63 => 28,  40 => 25,);
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

{% block content %}
  {% block sql_manager_info_block %}
    <div class=\"alert alert-info\" role=\"alert\">
      <p class=\"alert-text\">{{ 'How do I create a new SQL query?'|trans({}, 'Admin.Advparameters.Help') }}</p>
      <ul>
        <li>{{ 'Click \"%add_new_label%\".'|trans({'%add_new_label%': 'Add new SQL query'|trans({}, 'Admin.Advparameters.Feature')}, 'Admin.Advparameters.Help') }}</li>
        <li>{{ 'Fill in the fields and click \"%save_label%\".'|trans({'%save_label%': 'Save'|trans({}, 'Admin.Actions')}, 'Admin.Advparameters.Help') }}</li>
        <li>{{ 'You can then view the query results by clicking on the \"%view_label%\" action in the dropdown menu'|trans({'%view_label%': 'View'|trans({}, 'Admin.Global')}, 'Admin.Advparameters.Help') }}</li>
        <li>{{ 'You can also export the query results as a CSV file by clicking on the \"%export_label%\" button'|trans({'%export_label%': 'Export'|trans({}, 'Admin.Actions')}, 'Admin.Advparameters.Help') }}</li>
      </ul>
    </div>
  {% endblock %}

  {% block sql_manager_warning_block %}
    <div class=\"alert alert-warning\" role=\"alert\">
      <p class=\"alert-text\">{{ 'When saving the query, only the \"SELECT\" SQL statement is allowed.'|trans({}, 'Admin.Advparameters.Notification') }}</p>
    </div>
  {% endblock %}

  {% block sql_manager_list_panel %}

    {% include '@PrestaShop/Admin/Common/Grid/grid_panel.html.twig' with {'grid': requestSqlGrid} %}

  {% endblock %}

  {% block sql_manager_settings_panel %}

    {% include '@PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/Blocks/settings_panel.html.twig' %}

  {% endblock %}
{% endblock %}

{% block javascripts %}
  {{ parent() }}

  <script src=\"{{ asset('themes/new-theme/public/sql_manager.bundle.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/pagination.js') }}\"></script>
{% endblock %}
", "@PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/index.html.twig", "/home/vagrant/code/prestashop8/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/RequestSql/index.html.twig");
    }
}
