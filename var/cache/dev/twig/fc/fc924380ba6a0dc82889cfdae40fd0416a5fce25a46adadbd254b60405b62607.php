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

/* @KunstmaanAdminList/FilterType/dateTimeFilter.html.twig */
class __TwigTemplate_b930e4c8e14a0ef089d8217f4d8411bc9ed723dd59ff7d83ecd2df05db5fd108 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdminList/FilterType/dateTimeFilter.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdminList/FilterType/dateTimeFilter.html.twig"));

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

<div class=\"form-group form-group--datetime\">
    <div class=\"form-group form-group--date js-datepicker \">
        <div class='input-group date' id='datetimepicker1'>
            <input
                type=\"text\"
                class=\"form-control form_datepicker";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["nameprefix"]) || array_key_exists("nameprefix", $context) ? $context["nameprefix"] : (function () { throw new RuntimeError('Variable "nameprefix" does not exist.', 17, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["namesuffix"]) || array_key_exists("namesuffix", $context) ? $context["namesuffix"] : (function () { throw new RuntimeError('Variable "namesuffix" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "\"
                name=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["nameprefix"]) || array_key_exists("nameprefix", $context) ? $context["nameprefix"] : (function () { throw new RuntimeError('Variable "nameprefix" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "value";
        echo twig_escape_filter($this->env, (isset($context["namesuffix"]) || array_key_exists("namesuffix", $context) ? $context["namesuffix"] : (function () { throw new RuntimeError('Variable "namesuffix" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "[date]\"
                data-date-format=\"DD/MM/YYYY\"
                ";
        // line 20
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "value", [], "any", false, true, false, 20), "date", [], "array", true, true, false, 20)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 20, $this->source); })()), "value", [], "any", false, false, false, 20), "date", [], "array", false, false, false, 20), "html", null, true);
            echo "\"";
        }
        // line 21
        echo "                ";
        if (array_key_exists("datePicker_startDate", $context)) {
            echo " data-startDate=\"";
            echo twig_escape_filter($this->env, (isset($context["datePicker_startDate"]) || array_key_exists("datePicker_startDate", $context) ? $context["datePicker_startDate"] : (function () { throw new RuntimeError('Variable "datePicker_startDate" does not exist.', 21, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 22
        echo "            >
            <span class=\"input-group-addon\">
                <span class=\"fa fa-calendar\"></span>
            </span>
        </div>
    </div>

    <div class=\"form-group form-group--time js-datepicker\">
        <div class='input-group date' id='datetimepicker2'>
            <input
                type=\"text\"
                class=\"form-control form_datepicker";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["nameprefix"]) || array_key_exists("nameprefix", $context) ? $context["nameprefix"] : (function () { throw new RuntimeError('Variable "nameprefix" does not exist.', 33, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["namesuffix"]) || array_key_exists("namesuffix", $context) ? $context["namesuffix"] : (function () { throw new RuntimeError('Variable "namesuffix" does not exist.', 33, $this->source); })()), "html", null, true);
        echo "\"
                name=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["nameprefix"]) || array_key_exists("nameprefix", $context) ? $context["nameprefix"] : (function () { throw new RuntimeError('Variable "nameprefix" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "value";
        echo twig_escape_filter($this->env, (isset($context["namesuffix"]) || array_key_exists("namesuffix", $context) ? $context["namesuffix"] : (function () { throw new RuntimeError('Variable "namesuffix" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "[time]\"
                data-date-format=\"HH:mm\"
                ";
        // line 36
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "value", [], "any", false, true, false, 36), "time", [], "array", true, true, false, 36)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 36, $this->source); })()), "value", [], "any", false, false, false, 36), "time", [], "array", false, false, false, 36), "html", null, true);
            echo "\"";
        }
        // line 37
        echo "                ";
        if (array_key_exists("datePicker_startDate", $context)) {
            echo " data-startDate=\"";
            echo twig_escape_filter($this->env, (isset($context["datePicker_startDate"]) || array_key_exists("datePicker_startDate", $context) ? $context["datePicker_startDate"] : (function () { throw new RuntimeError('Variable "datePicker_startDate" does not exist.', 37, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 38
        echo "            >
            <span class=\"input-group-addon\">
                <span class=\"fa fa-clock\"></span>
            </span>
        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanAdminList/FilterType/dateTimeFilter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 38,  138 => 37,  132 => 36,  125 => 34,  120 => 33,  107 => 22,  100 => 21,  94 => 20,  87 => 18,  82 => 17,  69 => 7,  63 => 6,  58 => 4,  52 => 3,  46 => 2,  43 => 1,);
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

<div class=\"form-group form-group--datetime\">
    <div class=\"form-group form-group--date js-datepicker \">
        <div class='input-group date' id='datetimepicker1'>
            <input
                type=\"text\"
                class=\"form-control form_datepicker{{ nameprefix }}{{ namesuffix }}\"
                name=\"{{ nameprefix }}value{{ namesuffix }}[date]\"
                data-date-format=\"DD/MM/YYYY\"
                {% if data.value['date'] is defined %} value=\"{{ data.value['date'] }}\"{% endif %}
                {% if datePicker_startDate is defined %} data-startDate=\"{{ datePicker_startDate }}\"{% endif %}
            >
            <span class=\"input-group-addon\">
                <span class=\"fa fa-calendar\"></span>
            </span>
        </div>
    </div>

    <div class=\"form-group form-group--time js-datepicker\">
        <div class='input-group date' id='datetimepicker2'>
            <input
                type=\"text\"
                class=\"form-control form_datepicker{{ nameprefix }}{{ namesuffix }}\"
                name=\"{{ nameprefix }}value{{ namesuffix }}[time]\"
                data-date-format=\"HH:mm\"
                {% if data.value['time'] is defined %} value=\"{{ data.value['time'] }}\"{% endif %}
                {% if datePicker_startDate is defined %} data-startDate=\"{{ datePicker_startDate }}\"{% endif %}
            >
            <span class=\"input-group-addon\">
                <span class=\"fa fa-clock\"></span>
            </span>
        </div>
    </div>
</div>
", "@KunstmaanAdminList/FilterType/dateTimeFilter.html.twig", "/Users/macbook/Documents/quoc/admin-blog-api-/vendor/kunstmaan/adminlist-bundle/Resources/views/FilterType/dateTimeFilter.html.twig");
    }
}
