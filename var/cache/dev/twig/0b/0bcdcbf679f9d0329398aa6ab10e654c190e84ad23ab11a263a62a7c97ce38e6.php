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

/* @KunstmaanAdminList/FilterType/enumerationFilter.html.twig */
class __TwigTemplate_e6dcb0668c6b1e1128020588b686c2e52a4a9e5d60986b10cc0e0accafd891c7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdminList/FilterType/enumerationFilter.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdminList/FilterType/enumerationFilter.html.twig"));

        // line 1
        echo "<div class=\"form-group\">
    <select name=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["nameprefix"]) || array_key_exists("nameprefix", $context) ? $context["nameprefix"] : (function () { throw new RuntimeError('Variable "nameprefix" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "comparator";
        echo twig_escape_filter($this->env, (isset($context["namesuffix"]) || array_key_exists("namesuffix", $context) ? $context["namesuffix"] : (function () { throw new RuntimeError('Variable "namesuffix" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "\" class=\"form-control\">
        <option value=\"in\" ";
        // line 3
        if ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "comparator", [], "any", true, true, false, 3) && (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 3, $this->source); })()), "comparator", [], "any", false, false, false, 3) == "in"))) {
            echo " selected=\"selected\" ";
        }
        echo " >
            ";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filter.in"), "html", null, true);
        echo "
        </option>
        <option value=\"notin\" ";
        // line 6
        if ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "comparator", [], "any", true, true, false, 6) && (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 6, $this->source); })()), "comparator", [], "any", false, false, false, 6) == "notin"))) {
            echo " selected=\"selected\" ";
        }
        echo " >
            ";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filter.notin"), "html", null, true);
        echo "
        </option>
    </select>
</div>

<div class=\"form-group\">
    <select name=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["nameprefix"]) || array_key_exists("nameprefix", $context) ? $context["nameprefix"] : (function () { throw new RuntimeError('Variable "nameprefix" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "value";
        echo twig_escape_filter($this->env, (isset($context["namesuffix"]) || array_key_exists("namesuffix", $context) ? $context["namesuffix"] : (function () { throw new RuntimeError('Variable "namesuffix" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "[]\" multiple class=\"form-control js-advanced-select\">
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["option"]) {
            // line 15
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "value", [], "any", true, true, false, 15) && twig_in_filter($context["key"], twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 15, $this->source); })()), "value", [], "any", false, false, false, 15)))) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["option"]), "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    </select>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanAdminList/FilterType/enumerationFilter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 17,  88 => 15,  84 => 14,  78 => 13,  69 => 7,  63 => 6,  58 => 4,  52 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"form-group\">
    <select name=\"{{ nameprefix }}comparator{{ namesuffix }}\" class=\"form-control\">
        <option value=\"in\" {% if data.comparator is defined and data.comparator == \"in\" %} selected=\"selected\" {% endif %} >
            {{ 'filter.in' | trans }}
        </option>
        <option value=\"notin\" {% if data.comparator is defined and data.comparator == \"notin\" %} selected=\"selected\" {% endif %} >
            {{ 'filter.notin' | trans }}
        </option>
    </select>
</div>

<div class=\"form-group\">
    <select name=\"{{ nameprefix }}value{{ namesuffix }}[]\" multiple class=\"form-control js-advanced-select\">
        {% for key,option in options %}
            <option value=\"{{ key }}\"{% if data.value is defined and key in data.value %} selected{% endif %}>{{ option|trans }}</option>
        {% endfor %}
    </select>
</div>
", "@KunstmaanAdminList/FilterType/enumerationFilter.html.twig", "/Users/macbook/Documents/quoc/blog-admin/vendor/kunstmaan/adminlist-bundle/Resources/views/FilterType/enumerationFilter.html.twig");
    }
}
