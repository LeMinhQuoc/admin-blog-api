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

/* @KunstmaanAdminList/FilterType/booleanFilter.html.twig */
class __TwigTemplate_82b5f2045d3a94b42f8cc21e19a117f50dad7a6cf64ba9ed9138c181b44e2756 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdminList/FilterType/booleanFilter.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdminList/FilterType/booleanFilter.html.twig"));

        // line 1
        echo "<div class=\"form-group\">
    <select name=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["nameprefix"]) || array_key_exists("nameprefix", $context) ? $context["nameprefix"] : (function () { throw new RuntimeError('Variable "nameprefix" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "value";
        echo twig_escape_filter($this->env, (isset($context["namesuffix"]) || array_key_exists("namesuffix", $context) ? $context["namesuffix"] : (function () { throw new RuntimeError('Variable "namesuffix" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "\" class=\"form-control\">
        <option value=\"true\" ";
        // line 3
        if ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "value", [], "any", true, true, false, 3) && (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 3, $this->source); })()), "value", [], "any", false, false, false, 3) == "true"))) {
            echo " selected=\"selected\" ";
        }
        echo ">
            ";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filter.true"), "html", null, true);
        echo "
        </option>
        <option value=\"false\" ";
        // line 6
        if ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "value", [], "any", true, true, false, 6) && (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 6, $this->source); })()), "value", [], "any", false, false, false, 6) == "false"))) {
            echo " selected=\"selected\" ";
        }
        echo ">
            ";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filter.false"), "html", null, true);
        echo "
        </option>
    </select>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanAdminList/FilterType/booleanFilter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 7,  63 => 6,  58 => 4,  52 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"form-group\">
    <select name=\"{{ nameprefix }}value{{ namesuffix }}\" class=\"form-control\">
        <option value=\"true\" {% if data.value is defined and data.value == \"true\" %} selected=\"selected\" {% endif %}>
            {{ 'filter.true' | trans }}
        </option>
        <option value=\"false\" {% if data.value is defined and data.value == \"false\" %} selected=\"selected\" {% endif %}>
            {{ 'filter.false' | trans }}
        </option>
    </select>
</div>
", "@KunstmaanAdminList/FilterType/booleanFilter.html.twig", "/Users/macbook/Documents/quoc/blog-admin/vendor/kunstmaan/adminlist-bundle/Resources/views/FilterType/booleanFilter.html.twig");
    }
}
