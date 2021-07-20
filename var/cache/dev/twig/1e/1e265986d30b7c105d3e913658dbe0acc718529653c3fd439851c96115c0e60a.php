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

/* @KunstmaanAdmin/TabsTwigExtension/widget.html.twig */
class __TwigTemplate_3640326596d74ec09e6fb40198b320387547b7b26ef1418b1dce2a62d0f55cdc extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdmin/TabsTwigExtension/widget.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdmin/TabsTwigExtension/widget.html.twig"));

        // line 1
        $context["formView"] = twig_get_attribute($this->env, $this->source, (isset($context["tabPane"]) || array_key_exists("tabPane", $context) ? $context["tabPane"] : (function () { throw new RuntimeError('Variable "tabPane" does not exist.', 1, $this->source); })()), "formView", [], "any", false, false, false, 1);
        // line 2
        $context["activeTab"] = twig_get_attribute($this->env, $this->source, (isset($context["tabPane"]) || array_key_exists("tabPane", $context) ? $context["tabPane"] : (function () { throw new RuntimeError('Variable "tabPane" does not exist.', 2, $this->source); })()), "activeTab", [], "any", false, false, false, 2);
        // line 3
        echo "
";
        // line 4
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 4, $this->source); })()), [0 => "@KunstmaanAdmin/Form/fields.html.twig"], true);
        // line 5
        echo "
<ul class=\"nav nav-tabs page-main-tabs js-auto-collapse-tabs\">
";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["tabPane"]) || array_key_exists("tabPane", $context) ? $context["tabPane"] : (function () { throw new RuntimeError('Variable "tabPane" does not exist.', 7, $this->source); })()), "tabs", [], "any", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 8
            echo "    ";
            $context["tabIdentifier"] = twig_get_attribute($this->env, $this->source, $context["tab"], "identifier", [], "any", false, false, false, 8);
            // line 9
            echo "    ";
            $context["formErrors"] = twig_get_attribute($this->env, $this->source, $context["tab"], "getFormErrors", [0 => (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 9, $this->source); })())], "method", false, false, false, 9);
            // line 10
            echo "
    <li ";
            // line 11
            if (((isset($context["activeTab"]) || array_key_exists("activeTab", $context) ? $context["activeTab"] : (function () { throw new RuntimeError('Variable "activeTab" does not exist.', 11, $this->source); })()) == (isset($context["tabIdentifier"]) || array_key_exists("tabIdentifier", $context) ? $context["tabIdentifier"] : (function () { throw new RuntimeError('Variable "tabIdentifier" does not exist.', 11, $this->source); })()))) {
                echo " class=\"active\" ";
            }
            echo ">
        <a href=\"#";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["tabIdentifier"]) || array_key_exists("tabIdentifier", $context) ? $context["tabIdentifier"] : (function () { throw new RuntimeError('Variable "tabIdentifier" does not exist.', 12, $this->source); })()), "html", null, true);
            echo "\" data-toggle=\"tab\">
            ";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["tab"], "title", [], "any", false, false, false, 13)), "html", null, true);
            echo "
            ";
            // line 14
            if ((twig_length_filter($this->env, (isset($context["formErrors"]) || array_key_exists("formErrors", $context) ? $context["formErrors"] : (function () { throw new RuntimeError('Variable "formErrors" does not exist.', 14, $this->source); })())) > 0)) {
                // line 15
                echo "                <span class=\"error-label\">
                    ";
                // line 16
                echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["formErrors"]) || array_key_exists("formErrors", $context) ? $context["formErrors"] : (function () { throw new RuntimeError('Variable "formErrors" does not exist.', 16, $this->source); })())), "html", null, true);
                echo "
                </span>
            ";
            }
            // line 19
            echo "        </a>
    </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    <li class=\"tab__more dropdown\">
        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
            ";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.button.dropdown.more"), "html", null, true);
        echo " <span class=\"caret\"></span>
        </a>
        <ul class=\"dropdown-menu dropdown-menu-right\" id=\"collapsed\"></ul>
    </li>
</ul>

<div class=\"tab-content\">
    <input type=\"hidden\" name=\"currenttab\" id=\"currenttab\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["activeTab"]) || array_key_exists("activeTab", $context) ? $context["activeTab"] : (function () { throw new RuntimeError('Variable "activeTab" does not exist.', 31, $this->source); })()), "html", null, true);
        echo "\">

    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["tabPane"]) || array_key_exists("tabPane", $context) ? $context["tabPane"] : (function () { throw new RuntimeError('Variable "tabPane" does not exist.', 33, $this->source); })()), "tabs", [], "any", false, false, false, 33));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 34
            echo "        ";
            $context["tabIdentifier"] = twig_get_attribute($this->env, $this->source, $context["tab"], "identifier", [], "any", false, false, false, 34);
            // line 35
            echo "
        <div class=\"tab-pane";
            // line 36
            if (((isset($context["activeTab"]) || array_key_exists("activeTab", $context) ? $context["activeTab"] : (function () { throw new RuntimeError('Variable "activeTab" does not exist.', 36, $this->source); })()) == (isset($context["tabIdentifier"]) || array_key_exists("tabIdentifier", $context) ? $context["tabIdentifier"] : (function () { throw new RuntimeError('Variable "tabIdentifier" does not exist.', 36, $this->source); })()))) {
                echo " active";
            }
            echo "\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["tabIdentifier"]) || array_key_exists("tabIdentifier", $context) ? $context["tabIdentifier"] : (function () { throw new RuntimeError('Variable "tabIdentifier" does not exist.', 36, $this->source); })()), "html", null, true);
            echo "\">
            ";
            // line 37
            $this->loadTemplate(twig_get_attribute($this->env, $this->source, $context["tab"], "template", [], "any", false, false, false, 37), "@KunstmaanAdmin/TabsTwigExtension/widget.html.twig", 37)->display(twig_array_merge($context, ["tab" => $context["tab"], "formView" => (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 37, $this->source); })())]));
            // line 38
            echo "        </div>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "</div>

";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 42, $this->source); })()), 'rest');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanAdmin/TabsTwigExtension/widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 42,  169 => 40,  154 => 38,  152 => 37,  144 => 36,  141 => 35,  138 => 34,  121 => 33,  116 => 31,  106 => 24,  102 => 22,  94 => 19,  88 => 16,  85 => 15,  83 => 14,  79 => 13,  75 => 12,  69 => 11,  66 => 10,  63 => 9,  60 => 8,  56 => 7,  52 => 5,  50 => 4,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set formView = tabPane.formView %}
{% set activeTab = tabPane.activeTab %}

{% form_theme formView '@KunstmaanAdmin/Form/fields.html.twig' %}

<ul class=\"nav nav-tabs page-main-tabs js-auto-collapse-tabs\">
{% for tab in tabPane.tabs %}
    {% set tabIdentifier = tab.identifier %}
    {% set formErrors = tab.getFormErrors(formView) %}

    <li {% if activeTab == tabIdentifier %} class=\"active\" {% endif %}>
        <a href=\"#{{ tabIdentifier }}\" data-toggle=\"tab\">
            {{ tab.title|trans }}
            {% if formErrors|length > 0 %}
                <span class=\"error-label\">
                    {{formErrors|length}}
                </span>
            {% endif %}
        </a>
    </li>
{%  endfor %}
    <li class=\"tab__more dropdown\">
        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
            {{ 'form.button.dropdown.more' | trans }} <span class=\"caret\"></span>
        </a>
        <ul class=\"dropdown-menu dropdown-menu-right\" id=\"collapsed\"></ul>
    </li>
</ul>

<div class=\"tab-content\">
    <input type=\"hidden\" name=\"currenttab\" id=\"currenttab\" value=\"{{ activeTab }}\">

    {% for tab in tabPane.tabs %}
        {% set tabIdentifier = tab.identifier %}

        <div class=\"tab-pane{% if activeTab == tabIdentifier %} active{% endif %}\" id=\"{{ tabIdentifier }}\">
            {% include tab.template with {'tab' : tab, 'formView': formView} %}
        </div>
    {% endfor %}
</div>

{{ form_rest(formView) }}
", "@KunstmaanAdmin/TabsTwigExtension/widget.html.twig", "/Users/macbook/Documents/quoc/admin-blog-api-/vendor/kunstmaan/admin-bundle/Resources/views/TabsTwigExtension/widget.html.twig");
    }
}
