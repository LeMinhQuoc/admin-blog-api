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

/* @KunstmaanAdminList/FilterType/dateFilter.html.twig */
class __TwigTemplate_ad3baab80a2daade43f7e301572ac3c7697b5b95b342934b5aa52d937308daef extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdminList/FilterType/dateFilter.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdminList/FilterType/dateFilter.html.twig"));

        // line 1
        echo "<div class=\"form-group\">
    <select name=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["nameprefix"]) || array_key_exists("nameprefix", $context) ? $context["nameprefix"] : (function () { throw new RuntimeError('Variable "nameprefix" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "comparator";
        echo twig_escape_filter($this->env, (isset($context["namesuffix"]) || array_key_exists("namesuffix", $context) ? $context["namesuffix"] : (function () { throw new RuntimeError('Variable "namesuffix" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "\" class=\"form-control\">
        <option value=\"before\" ";
        // line 3
        if ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "comparator", [], "any", true, true, false, 3) && (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 3, $this->source); })()), "comparator", [], "any", false, false, false, 3) == "before"))) {
            echo " selected=\"selected\" ";
        }
        echo ">
            ";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filter.before"), "html", null, true);
        echo "
        </option>
        <option value=\"after\" ";
        // line 6
        if ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "comparator", [], "any", true, true, false, 6) && (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 6, $this->source); })()), "comparator", [], "any", false, false, false, 6) == "after"))) {
            echo " selected=\"selected\" ";
        }
        echo ">
            ";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filter.after"), "html", null, true);
        echo "
        </option>
    </select>
</div>

<div class=\"form-group js-datepicker date\">
    <div class='input-group date' id='datetimepicker1'>
        <input
            type=\"text\"
            class=\"form-control form_datepicker";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["nameprefix"]) || array_key_exists("nameprefix", $context) ? $context["nameprefix"] : (function () { throw new RuntimeError('Variable "nameprefix" does not exist.', 16, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["namesuffix"]) || array_key_exists("namesuffix", $context) ? $context["namesuffix"] : (function () { throw new RuntimeError('Variable "namesuffix" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "\"
            name=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["nameprefix"]) || array_key_exists("nameprefix", $context) ? $context["nameprefix"] : (function () { throw new RuntimeError('Variable "nameprefix" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "value";
        echo twig_escape_filter($this->env, (isset($context["namesuffix"]) || array_key_exists("namesuffix", $context) ? $context["namesuffix"] : (function () { throw new RuntimeError('Variable "namesuffix" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "\"
            data-date-format=\"DD/MM/YYYY\"
            ";
        // line 19
        if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "value", [], "any", true, true, false, 19)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 19, $this->source); })()), "value", [], "any", false, false, false, 19), "html", null, true);
            echo "\"";
        }
        // line 20
        echo "            ";
        if (array_key_exists("datePicker_startDate", $context)) {
            echo " data-startDate=\"";
            echo twig_escape_filter($this->env, (isset($context["datePicker_startDate"]) || array_key_exists("datePicker_startDate", $context) ? $context["datePicker_startDate"] : (function () { throw new RuntimeError('Variable "datePicker_startDate" does not exist.', 20, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 21
        echo "        >
        <span class=\"input-group-addon\">
            <span class=\"fa fa-calendar\"></span>
        </span>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanAdminList/FilterType/dateFilter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 21,  99 => 20,  93 => 19,  86 => 17,  81 => 16,  69 => 7,  63 => 6,  58 => 4,  52 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"form-group\">
    <select name=\"{{ nameprefix }}comparator{{ namesuffix }}\" class=\"form-control\">
        <option value=\"before\" {% if data.comparator is defined and data.comparator == \"before\" %} selected=\"selected\" {% endif %}>
            {{ 'filter.before' | trans }}
        </option>
        <option value=\"after\" {% if data.comparator is defined and data.comparator == \"after\" %} selected=\"selected\" {% endif %}>
            {{ 'filter.after' | trans }}
        </option>
    </select>
</div>

<div class=\"form-group js-datepicker date\">
    <div class='input-group date' id='datetimepicker1'>
        <input
            type=\"text\"
            class=\"form-control form_datepicker{{ nameprefix }}{{ namesuffix }}\"
            name=\"{{ nameprefix }}value{{ namesuffix }}\"
            data-date-format=\"DD/MM/YYYY\"
            {% if data.value is defined %} value=\"{{ data.value }}\"{% endif %}
            {% if datePicker_startDate is defined %} data-startDate=\"{{ datePicker_startDate }}\"{% endif %}
        >
        <span class=\"input-group-addon\">
            <span class=\"fa fa-calendar\"></span>
        </span>
    </div>
</div>
", "@KunstmaanAdminList/FilterType/dateFilter.html.twig", "/Users/macbook/Documents/quoc/blog-admin/vendor/kunstmaan/adminlist-bundle/Resources/views/FilterType/dateFilter.html.twig");
    }
}
