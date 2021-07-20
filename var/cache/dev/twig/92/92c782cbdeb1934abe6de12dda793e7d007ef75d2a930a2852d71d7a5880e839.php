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

/* @KunstmaanAdminList/FilterType/numberFilter.html.twig */
class __TwigTemplate_15b9411b9020741357266369079edeaf0b0c8d042d48643156a435476fdda187 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdminList/FilterType/numberFilter.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdminList/FilterType/numberFilter.html.twig"));

        // line 1
        echo "<div class=\"form-group\">
    <select name=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["nameprefix"]) || array_key_exists("nameprefix", $context) ? $context["nameprefix"] : (function () { throw new RuntimeError('Variable "nameprefix" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "comparator";
        echo twig_escape_filter($this->env, (isset($context["namesuffix"]) || array_key_exists("namesuffix", $context) ? $context["namesuffix"] : (function () { throw new RuntimeError('Variable "namesuffix" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, (isset($context["nameprefix"]) || array_key_exists("nameprefix", $context) ? $context["nameprefix"] : (function () { throw new RuntimeError('Variable "nameprefix" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "comparator";
        echo twig_escape_filter($this->env, (isset($context["namesuffix"]) || array_key_exists("namesuffix", $context) ? $context["namesuffix"] : (function () { throw new RuntimeError('Variable "namesuffix" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "\" class=\"form-control\">
        <option value=\"eq\" ";
        // line 3
        if ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "comparator", [], "any", true, true, false, 3) && (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 3, $this->source); })()), "comparator", [], "any", false, false, false, 3) == "eq"))) {
            echo " selected=\"selected\" ";
        }
        echo " >
            ";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filter.eq"), "html", null, true);
        echo "
        </option>
        <option value=\"neq\" ";
        // line 6
        if ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "comparator", [], "any", true, true, false, 6) && (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 6, $this->source); })()), "comparator", [], "any", false, false, false, 6) == "neq"))) {
            echo " selected=\"selected\" ";
        }
        echo " >
            ";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filter.neq"), "html", null, true);
        echo "
        </option>
        <option value=\"lt\" ";
        // line 9
        if ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "comparator", [], "any", true, true, false, 9) && (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 9, $this->source); })()), "comparator", [], "any", false, false, false, 9) == "lt"))) {
            echo " selected=\"selected\" ";
        }
        echo " >
            ";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filter.lt"), "html", null, true);
        echo "
        </option>
        <option value=\"lte\" ";
        // line 12
        if ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "comparator", [], "any", true, true, false, 12) && (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 12, $this->source); })()), "comparator", [], "any", false, false, false, 12) == "lte"))) {
            echo " selected=\"selected\" ";
        }
        echo " >
            ";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filter.lte"), "html", null, true);
        echo "
        </option>
        <option value=\"gt\" ";
        // line 15
        if ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "comparator", [], "any", true, true, false, 15) && (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 15, $this->source); })()), "comparator", [], "any", false, false, false, 15) == "gt"))) {
            echo " selected=\"selected\" ";
        }
        echo " >
            ";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filter.gt"), "html", null, true);
        echo "
        </option>
        <option value=\"gte\" ";
        // line 18
        if ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "comparator", [], "any", true, true, false, 18) && (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 18, $this->source); })()), "comparator", [], "any", false, false, false, 18) == "gte"))) {
            echo " selected=\"selected\" ";
        }
        echo " >
            ";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filter.gte"), "html", null, true);
        echo "
        </option>
        <option value=\"isnull\" ";
        // line 21
        if ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "comparator", [], "any", true, true, false, 21) && (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 21, $this->source); })()), "comparator", [], "any", false, false, false, 21) == "isnull"))) {
            echo " selected=\"selected\" ";
        }
        echo " >
            ";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filter.isnull"), "html", null, true);
        echo "
        </option>
        <option value=\"isnotnull\" ";
        // line 24
        if ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "comparator", [], "any", true, true, false, 24) && (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 24, $this->source); })()), "comparator", [], "any", false, false, false, 24) == "isnotnull"))) {
            echo " selected=\"selected\" ";
        }
        echo " >
            ";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filter.isnotnull"), "html", null, true);
        echo "
        </option>
    </select>
</div>

<div class=\"form-group\">
    <input
        type=\"text\"
        name=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["nameprefix"]) || array_key_exists("nameprefix", $context) ? $context["nameprefix"] : (function () { throw new RuntimeError('Variable "nameprefix" does not exist.', 33, $this->source); })()), "html", null, true);
        echo "value";
        echo twig_escape_filter($this->env, (isset($context["namesuffix"]) || array_key_exists("namesuffix", $context) ? $context["namesuffix"] : (function () { throw new RuntimeError('Variable "namesuffix" does not exist.', 33, $this->source); })()), "html", null, true);
        echo "\"
        id=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["nameprefix"]) || array_key_exists("nameprefix", $context) ? $context["nameprefix"] : (function () { throw new RuntimeError('Variable "nameprefix" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "value";
        echo twig_escape_filter($this->env, (isset($context["namesuffix"]) || array_key_exists("namesuffix", $context) ? $context["namesuffix"] : (function () { throw new RuntimeError('Variable "namesuffix" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "\"
        ";
        // line 35
        if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "value", [], "any", true, true, false, 35)) {
            echo "value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 35, $this->source); })()), "value", [], "any", false, false, false, 35), "html", null, true);
            echo "\"";
        }
        // line 36
        echo "        class=\"form-control\"
    >
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanAdminList/FilterType/numberFilter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 36,  162 => 35,  156 => 34,  150 => 33,  139 => 25,  133 => 24,  128 => 22,  122 => 21,  117 => 19,  111 => 18,  106 => 16,  100 => 15,  95 => 13,  89 => 12,  84 => 10,  78 => 9,  73 => 7,  67 => 6,  62 => 4,  56 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"form-group\">
    <select name=\"{{ nameprefix }}comparator{{ namesuffix }}\" id=\"{{ nameprefix }}comparator{{ namesuffix }}\" class=\"form-control\">
        <option value=\"eq\" {% if data.comparator is defined and data.comparator == \"eq\" %} selected=\"selected\" {% endif %} >
            {{ 'filter.eq' | trans }}
        </option>
        <option value=\"neq\" {% if data.comparator is defined and data.comparator == \"neq\" %} selected=\"selected\" {% endif %} >
            {{ 'filter.neq' | trans }}
        </option>
        <option value=\"lt\" {% if data.comparator is defined and data.comparator == \"lt\" %} selected=\"selected\" {% endif %} >
            {{ 'filter.lt' | trans }}
        </option>
        <option value=\"lte\" {% if data.comparator is defined and data.comparator == \"lte\" %} selected=\"selected\" {% endif %} >
            {{ 'filter.lte' | trans }}
        </option>
        <option value=\"gt\" {% if data.comparator is defined and data.comparator == \"gt\" %} selected=\"selected\" {% endif %} >
            {{ 'filter.gt' | trans }}
        </option>
        <option value=\"gte\" {% if data.comparator is defined and data.comparator == \"gte\" %} selected=\"selected\" {% endif %} >
            {{ 'filter.gte' | trans }}
        </option>
        <option value=\"isnull\" {% if data.comparator is defined and data.comparator == \"isnull\" %} selected=\"selected\" {% endif %} >
            {{ 'filter.isnull' | trans }}
        </option>
        <option value=\"isnotnull\" {% if data.comparator is defined and data.comparator == \"isnotnull\" %} selected=\"selected\" {% endif %} >
            {{ 'filter.isnotnull' | trans }}
        </option>
    </select>
</div>

<div class=\"form-group\">
    <input
        type=\"text\"
        name=\"{{ nameprefix }}value{{ namesuffix }}\"
        id=\"{{ nameprefix }}value{{ namesuffix }}\"
        {% if data.value is defined %}value=\"{{ data.value }}\"{% endif %}
        class=\"form-control\"
    >
</div>
", "@KunstmaanAdminList/FilterType/numberFilter.html.twig", "/Users/macbook/Documents/quoc/admin-blog-api-/vendor/kunstmaan/adminlist-bundle/Resources/views/FilterType/numberFilter.html.twig");
    }
}
