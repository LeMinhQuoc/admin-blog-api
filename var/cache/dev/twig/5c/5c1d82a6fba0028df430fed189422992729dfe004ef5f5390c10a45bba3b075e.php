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

/* @KunstmaanAdminList/FilterType/stringFilter.html.twig */
class __TwigTemplate_a5c2b6fee197a1b77f1d598768b6cacde0633e9cfa72befe2014b1438ace8941 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdminList/FilterType/stringFilter.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdminList/FilterType/stringFilter.html.twig"));

        // line 1
        echo "<div class=\"form-group\">
    <select name=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["nameprefix"]) || array_key_exists("nameprefix", $context) ? $context["nameprefix"] : (function () { throw new RuntimeError('Variable "nameprefix" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "comparator";
        echo twig_escape_filter($this->env, (isset($context["namesuffix"]) || array_key_exists("namesuffix", $context) ? $context["namesuffix"] : (function () { throw new RuntimeError('Variable "namesuffix" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "\" class=\"form-control\">
        <option value=\"contains\" ";
        // line 3
        if ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "comparator", [], "any", true, true, false, 3) && (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 3, $this->source); })()), "comparator", [], "any", false, false, false, 3) == "contains"))) {
            echo " selected=\"selected\" ";
        }
        echo " >
            ";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filter.contains"), "html", null, true);
        echo "
        </option>
        <option value=\"doesnotcontain\" ";
        // line 6
        if ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "comparator", [], "any", true, true, false, 6) && (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 6, $this->source); })()), "comparator", [], "any", false, false, false, 6) == "doesnotcontain"))) {
            echo " selected=\"selected\" ";
        }
        echo " >
            ";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filter.doesnotcontain"), "html", null, true);
        echo "
        </option>
        <option value=\"equals\" ";
        // line 9
        if ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "comparator", [], "any", true, true, false, 9) && (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 9, $this->source); })()), "comparator", [], "any", false, false, false, 9) == "equals"))) {
            echo " selected=\"selected\" ";
        }
        echo " >
            ";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filter.equals"), "html", null, true);
        echo "
        </option>
        <option value=\"notequals\" ";
        // line 12
        if ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "comparator", [], "any", true, true, false, 12) && (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 12, $this->source); })()), "comparator", [], "any", false, false, false, 12) == "notequals"))) {
            echo " selected=\"selected\" ";
        }
        echo " >
            ";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filter.notequals"), "html", null, true);
        echo "
        </option>
        <option value=\"startswith\" ";
        // line 15
        if ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "comparator", [], "any", true, true, false, 15) && (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 15, $this->source); })()), "comparator", [], "any", false, false, false, 15) == "startswith"))) {
            echo " selected=\"selected\" ";
        }
        echo " >
            ";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filter.startswith"), "html", null, true);
        echo "
        </option>
        <option value=\"endswith\" ";
        // line 18
        if ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "comparator", [], "any", true, true, false, 18) && (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 18, $this->source); })()), "comparator", [], "any", false, false, false, 18) == "endswith"))) {
            echo " selected=\"selected\" ";
        }
        echo " >
            ";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filter.endswith"), "html", null, true);
        echo "
        </option>
        <option value=\"empty\" ";
        // line 21
        if ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "comparator", [], "any", true, true, false, 21) && (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 21, $this->source); })()), "comparator", [], "any", false, false, false, 21) == "empty"))) {
            echo " selected=\"selected\" ";
        }
        echo " >
            ";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filter.empty"), "html", null, true);
        echo "
        </option>
    </select>
</div>

<div class=\"form-group\">
    <input
        type=\"";
        // line 29
        if (( !twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "comparator", [], "any", true, true, false, 29) || (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 29, $this->source); })()), "comparator", [], "any", false, false, false, 29) != "empty"))) {
            echo "text";
        } else {
            echo "hidden";
        }
        echo "\"
        name=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["nameprefix"]) || array_key_exists("nameprefix", $context) ? $context["nameprefix"] : (function () { throw new RuntimeError('Variable "nameprefix" does not exist.', 30, $this->source); })()), "html", null, true);
        echo "value";
        echo twig_escape_filter($this->env, (isset($context["namesuffix"]) || array_key_exists("namesuffix", $context) ? $context["namesuffix"] : (function () { throw new RuntimeError('Variable "namesuffix" does not exist.', 30, $this->source); })()), "html", null, true);
        echo "\"
        ";
        // line 31
        if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "value", [], "any", true, true, false, 31)) {
            echo "value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 31, $this->source); })()), "value", [], "any", false, false, false, 31), "html", null, true);
            echo "\"";
        }
        // line 32
        echo "        class=\"form-control\"
    >
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanAdminList/FilterType/stringFilter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 32,  148 => 31,  142 => 30,  134 => 29,  124 => 22,  118 => 21,  113 => 19,  107 => 18,  102 => 16,  96 => 15,  91 => 13,  85 => 12,  80 => 10,  74 => 9,  69 => 7,  63 => 6,  58 => 4,  52 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"form-group\">
    <select name=\"{{ nameprefix }}comparator{{ namesuffix }}\" class=\"form-control\">
        <option value=\"contains\" {% if data.comparator is defined and data.comparator == \"contains\" %} selected=\"selected\" {% endif %} >
            {{ 'filter.contains' | trans }}
        </option>
        <option value=\"doesnotcontain\" {% if data.comparator is defined and data.comparator == \"doesnotcontain\" %} selected=\"selected\" {% endif %} >
            {{ 'filter.doesnotcontain' | trans }}
        </option>
        <option value=\"equals\" {% if data.comparator is defined and data.comparator == \"equals\" %} selected=\"selected\" {% endif %} >
            {{ 'filter.equals' | trans }}
        </option>
        <option value=\"notequals\" {% if data.comparator is defined and data.comparator == \"notequals\" %} selected=\"selected\" {% endif %} >
            {{ 'filter.notequals' | trans }}
        </option>
        <option value=\"startswith\" {% if data.comparator is defined and data.comparator == \"startswith\" %} selected=\"selected\" {% endif %} >
            {{ 'filter.startswith' | trans }}
        </option>
        <option value=\"endswith\" {% if data.comparator is defined and data.comparator == \"endswith\" %} selected=\"selected\" {% endif %} >
            {{ 'filter.endswith' | trans }}
        </option>
        <option value=\"empty\" {% if data.comparator is defined and data.comparator == \"empty\" %} selected=\"selected\" {% endif %} >
            {{ 'filter.empty' | trans }}
        </option>
    </select>
</div>

<div class=\"form-group\">
    <input
        type=\"{% if data.comparator is not defined or data.comparator != \"empty\" %}text{% else %}hidden{% endif %}\"
        name=\"{{ nameprefix }}value{{ namesuffix }}\"
        {% if data.value is defined %}value=\"{{ data.value }}\"{% endif %}
        class=\"form-control\"
    >
</div>
", "@KunstmaanAdminList/FilterType/stringFilter.html.twig", "/Users/macbook/Documents/quoc/blog-admin/vendor/kunstmaan/adminlist-bundle/Resources/views/FilterType/stringFilter.html.twig");
    }
}
