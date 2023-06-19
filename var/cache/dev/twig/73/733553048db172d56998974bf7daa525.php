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

/* @PrestaShop/Admin/Sell/Catalog/Categories/Blocks/form.html.twig */
class __TwigTemplate_94dcdb344737330c8d9af120a36b5b91 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'category_form_block' => [$this, 'block_category_form_block'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/form.html.twig"));

        // line 25
        echo "
";
        // line 26
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["categoryForm"]) || array_key_exists("categoryForm", $context) ? $context["categoryForm"] : (function () { throw new RuntimeError('Variable "categoryForm" does not exist.', 26, $this->source); })()), [0 => "@PrestaShop/Admin/Sell/Catalog/Categories/FormTheme/category.html.twig"], true);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('category_form_block', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_category_form_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "category_form_block"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "category_form_block"));

        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["categoryForm"]) || array_key_exists("categoryForm", $context) ? $context["categoryForm"] : (function () { throw new RuntimeError('Variable "categoryForm" does not exist.', 29, $this->source); })()), 'form_start', ["attr" => ["data-id" => ((array_key_exists("categoryId", $context)) ? (_twig_default_filter((isset($context["categoryId"]) || array_key_exists("categoryId", $context) ? $context["categoryId"] : (function () { throw new RuntimeError('Variable "categoryId" does not exist.', 29, $this->source); })()), 0)) : (0))]]);
        echo "
<div class=\"card\">
  <h3 class=\"card-header\">
    ";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Category", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-body\">
    <div class=\"form-wrapper\">
      ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["categoryForm"]) || array_key_exists("categoryForm", $context) ? $context["categoryForm"] : (function () { throw new RuntimeError('Variable "categoryForm" does not exist.', 36, $this->source); })()), 'widget');
        echo "
      <div class=\"form-group row\">
        <label class=\"form-control-label\"></label>
        <div class=\"col-sm\">
          <div class=\"alert alert-info\">
            <p class=\"mb-1\">
              <strong>";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You now have three default customer groups.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "</strong>
            </p>

            <p>";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%group_name% - All people without a valid customer account.", ["%group_name%" => (("<strong>" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defaultGroups"]) || array_key_exists("defaultGroups", $context) ? $context["defaultGroups"] : (function () { throw new RuntimeError('Variable "defaultGroups" does not exist.', 45, $this->source); })()), "visitorsGroup", [], "any", false, false, false, 45), "name", [], "any", false, false, false, 45)) . "</strong>")], "Admin.Catalog.Feature");
        echo "</p>
            <p>";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%group_name% - Customer who placed an order with the guest checkout.", ["%group_name%" => (("<strong>" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defaultGroups"]) || array_key_exists("defaultGroups", $context) ? $context["defaultGroups"] : (function () { throw new RuntimeError('Variable "defaultGroups" does not exist.', 46, $this->source); })()), "guestsGroup", [], "any", false, false, false, 46), "name", [], "any", false, false, false, 46)) . "</strong>")], "Admin.Catalog.Feature");
        echo "</p>
            <p>";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%group_name% - All people who have created an account on this site.", ["%group_name%" => (("<strong>" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defaultGroups"]) || array_key_exists("defaultGroups", $context) ? $context["defaultGroups"] : (function () { throw new RuntimeError('Variable "defaultGroups" does not exist.', 47, $this->source); })()), "customersGroup", [], "any", false, false, false, 47), "name", [], "any", false, false, false, 47)) . "</strong>")], "Admin.Catalog.Feature");
        echo "</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class=\"card-footer\">
    <a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categories_index");
        echo "\" class=\"btn btn-outline-secondary\">
      ";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
    </a>
    <button class=\"btn btn-primary float-right\" id=\"save-button\">";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
  </div>
</div>
";
        // line 60
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["categoryForm"]) || array_key_exists("categoryForm", $context) ? $context["categoryForm"] : (function () { throw new RuntimeError('Variable "categoryForm" does not exist.', 60, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 60,  126 => 57,  121 => 55,  117 => 54,  107 => 47,  103 => 46,  99 => 45,  93 => 42,  84 => 36,  77 => 32,  71 => 29,  52 => 28,  49 => 27,  47 => 26,  44 => 25,);
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

{% form_theme categoryForm '@PrestaShop/Admin/Sell/Catalog/Categories/FormTheme/category.html.twig' %}

{% block category_form_block %}
{{ form_start(categoryForm, {'attr': {'data-id': categoryId|default(0)}}) }}
<div class=\"card\">
  <h3 class=\"card-header\">
    {{ 'Category'|trans({}, 'Admin.Catalog.Feature') }}
  </h3>
  <div class=\"card-body\">
    <div class=\"form-wrapper\">
      {{ form_widget(categoryForm) }}
      <div class=\"form-group row\">
        <label class=\"form-control-label\"></label>
        <div class=\"col-sm\">
          <div class=\"alert alert-info\">
            <p class=\"mb-1\">
              <strong>{{ 'You now have three default customer groups.'|trans({}, 'Admin.Catalog.Help') }}</strong>
            </p>

            <p>{{ '%group_name% - All people without a valid customer account.'|trans({'%group_name%': '<strong>' ~ defaultGroups.visitorsGroup.name ~ '</strong>'}, 'Admin.Catalog.Feature')|raw }}</p>
            <p>{{ '%group_name% - Customer who placed an order with the guest checkout.'|trans({'%group_name%': '<strong>' ~ defaultGroups.guestsGroup.name ~ '</strong>'}, 'Admin.Catalog.Feature')|raw }}</p>
            <p>{{ '%group_name% - All people who have created an account on this site.'|trans({'%group_name%': '<strong>' ~ defaultGroups.customersGroup.name ~ '</strong>'}, 'Admin.Catalog.Feature')|raw }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class=\"card-footer\">
    <a href=\"{{ path('admin_categories_index') }}\" class=\"btn btn-outline-secondary\">
      {{ 'Cancel'|trans({}, 'Admin.Actions') }}
    </a>
    <button class=\"btn btn-primary float-right\" id=\"save-button\">{{ 'Save'|trans({}, 'Admin.Actions') }}</button>
  </div>
</div>
{{ form_end(categoryForm) }}
{% endblock %}
", "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/form.html.twig", "/home/vagrant/code/prestashop8/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Categories/Blocks/form.html.twig");
    }
}
