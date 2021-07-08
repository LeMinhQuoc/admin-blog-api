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

/* @KunstmaanNode/Admin/title.html.twig */
class __TwigTemplate_5324487c8e06fd07cfcbf8aca72595132f31d78d48ba364362eae18bb7dc3275 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanNode/Admin/title.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanNode/Admin/title.html.twig"));

        // line 1
        if (twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 1, $this->source); })()), "canEdit", [0 => (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 1, $this->source); })())], "method", false, false, false, 1)) {
            // line 2
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 2, $this->source); })()), "getEditUrlFor", [0 => (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 2, $this->source); })())], "method", false, false, false, 2), "path", [], "array", false, false, false, 2), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 2, $this->source); })()), "getEditUrlFor", [0 => (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 2, $this->source); })())], "method", false, false, false, 2), "params", [], "array", false, false, false, 2)), "html", null, true);
            echo "\" class=\"link--text\">
        ";
            // line 3
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 3, $this->source); })()), "getStringValue", [0 => (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 3, $this->source); })()), 1 => (isset($context["columnName"]) || array_key_exists("columnName", $context) ? $context["columnName"] : (function () { throw new RuntimeError('Variable "columnName" does not exist.', 3, $this->source); })())], "method", false, false, false, 3), "html", null, true);
            echo "
    </a>
";
        } else {
            // line 6
            echo "    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 6, $this->source); })()), "getStringValue", [0 => (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 6, $this->source); })()), 1 => (isset($context["columnName"]) || array_key_exists("columnName", $context) ? $context["columnName"] : (function () { throw new RuntimeError('Variable "columnName" does not exist.', 6, $this->source); })())], "method", false, false, false, 6), "html", null, true);
            echo "
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanNode/Admin/title.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 6,  50 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if adminlist.canEdit(row) %}
    <a href=\"{{ path(adminlist.getEditUrlFor(row)[\"path\"], adminlist.getEditUrlFor(row)[(\"params\")] ) }}\" class=\"link--text\">
        {{adminlist.getStringValue(row, columnName)}}
    </a>
{% else %}
    {{adminlist.getStringValue(row, columnName)}}
{% endif %}
", "@KunstmaanNode/Admin/title.html.twig", "/Users/macbook/Documents/quoc/blog-admin/vendor/kunstmaan/node-bundle/Resources/views/Admin/title.html.twig");
    }
}
