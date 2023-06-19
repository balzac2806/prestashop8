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

/* @PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig */
class __TwigTemplate_50f34ae5ec575014f70790390727d0c7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'image' => [$this, 'block_image'],
            'button_container' => [$this, 'block_button_container'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 25
        return "@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card_container.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig"));

        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card_container.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 27
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 28
        echo "  <div class=\"card theme-card\" data-role=\"theme-card-container\">
    <div class=\"active-card-overlay ";
        // line 29
        echo (((isset($context["isActive"]) || array_key_exists("isActive", $context) ? $context["isActive"] : (function () { throw new RuntimeError('Variable "isActive" does not exist.', 29, $this->source); })())) ? ("active") : (""));
        echo "\"></div>

    ";
        // line 31
        $this->displayBlock('image', $context, $blocks);
        // line 33
        echo "
    <div class=\"actions-container ";
        // line 34
        echo (((isset($context["isActive"]) || array_key_exists("isActive", $context) ? $context["isActive"] : (function () { throw new RuntimeError('Variable "isActive" does not exist.', 34, $this->source); })())) ? ("active") : (""));
        echo "\">
      ";
        // line 35
        $this->displayBlock('button_container', $context, $blocks);
        // line 37
        echo "    </div>
  </div>

  <div class=\"text-center theme-card-description\">
    <b class=\"theme-name\">
      ";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["themeDisplayName"]) || array_key_exists("themeDisplayName", $context) ? $context["themeDisplayName"] : (function () { throw new RuntimeError('Variable "themeDisplayName" does not exist.', 42, $this->source); })()), "html", null, true);
        echo "
    </b>
    <span class=\"theme-version\">
      ";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Version", [], "Admin.Global"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["themeVersion"]) || array_key_exists("themeVersion", $context) ? $context["themeVersion"] : (function () { throw new RuntimeError('Variable "themeVersion" does not exist.', 45, $this->source); })()), "html", null, true);
        echo "
    </span>
    <div class=\"theme-author\">
      <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["themeAuthorUrl"]) || array_key_exists("themeAuthorUrl", $context) ? $context["themeAuthorUrl"] : (function () { throw new RuntimeError('Variable "themeAuthorUrl" does not exist.', 48, $this->source); })()), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Designed by %s", ["%s" => (isset($context["themeAuthor"]) || array_key_exists("themeAuthor", $context) ? $context["themeAuthor"] : (function () { throw new RuntimeError('Variable "themeAuthor" does not exist.', 48, $this->source); })())], "Admin.Design.Feature"), "html", null, true);
        echo "</a>
    </div>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 31
    public function block_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "image"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "image"));

        // line 32
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 35
    public function block_button_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_container"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_container"));

        // line 36
        echo "      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 36,  146 => 35,  136 => 32,  126 => 31,  110 => 48,  102 => 45,  96 => 42,  89 => 37,  87 => 35,  83 => 34,  80 => 33,  78 => 31,  73 => 29,  70 => 28,  60 => 27,  37 => 25,);
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
{% extends '@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card_container.html.twig' %}

{% block content %}
  <div class=\"card theme-card\" data-role=\"theme-card-container\">
    <div class=\"active-card-overlay {{ isActive ? 'active' : '' }}\"></div>

    {% block image %}
    {% endblock %}

    <div class=\"actions-container {{ isActive ? 'active' : '' }}\">
      {% block button_container %}
      {% endblock %}
    </div>
  </div>

  <div class=\"text-center theme-card-description\">
    <b class=\"theme-name\">
      {{ themeDisplayName }}
    </b>
    <span class=\"theme-version\">
      {{ 'Version'|trans({}, 'Admin.Global') }} {{ themeVersion }}
    </span>
    <div class=\"theme-author\">
      <a href=\"{{ themeAuthorUrl }}\" target=\"_blank\">{{ 'Designed by %s'|trans({'%s': themeAuthor}, 'Admin.Design.Feature') }}</a>
    </div>
  </div>
{% endblock %}
", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig", "/home/vagrant/code/prestashop8/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig");
    }
}
