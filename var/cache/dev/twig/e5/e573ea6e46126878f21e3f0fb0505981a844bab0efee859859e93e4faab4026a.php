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

/* @KunstmaanAdminList/Page/list-title.html.twig */
class __TwigTemplate_1a6e2fb58d4678fe6945f2df7bba108be5472d05de91b57dc8383ba7dd3096da extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdminList/Page/list-title.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdminList/Page/list-title.html.twig"));

        // line 1
        $context["curLang"] = (twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 1, $this->source); })()), "lang", [], "any", false, false, false, 1) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "request", [], "any", false, false, false, 1), "locale", [], "any", false, false, false, 1));
        // line 2
        if (twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 2, $this->source); })()), "canEdit", [0 => (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 2, $this->source); })())], "method", false, false, false, 2)) {
            // line 3
            echo "    <span class=\"actions\"><a ";
            if ( !(isset($context["curLang"]) || array_key_exists("curLang", $context) ? $context["curLang"] : (function () { throw new RuntimeError('Variable "curLang" does not exist.', 3, $this->source); })())) {
                echo "style=\"color: #888\"";
            }
            echo " href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 3, $this->source); })()), "getEditUrlFor", [0 => (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 3, $this->source); })())], "method", false, false, false, 3), "path", [], "array", false, false, false, 3), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 3, $this->source); })()), "getEditUrlFor", [0 => (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 3, $this->source); })())], "method", false, false, false, 3), "params", [], "array", false, false, false, 3)), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 3, $this->source); })()), "getStringValue", [0 => (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 3, $this->source); })()), 1 => (isset($context["columnName"]) || array_key_exists("columnName", $context) ? $context["columnName"] : (function () { throw new RuntimeError('Variable "columnName" does not exist.', 3, $this->source); })())], "method", false, false, false, 3), "html", null, true);
            if ( !(isset($context["curLang"]) || array_key_exists("curLang", $context) ? $context["curLang"] : (function () { throw new RuntimeError('Variable "curLang" does not exist.', 3, $this->source); })())) {
                echo " (untranslated)";
            }
            echo "</a></span>
";
        } else {
            // line 5
            echo "    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 5, $this->source); })()), "getStringValue", [0 => (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 5, $this->source); })()), 1 => (isset($context["columnName"]) || array_key_exists("columnName", $context) ? $context["columnName"] : (function () { throw new RuntimeError('Variable "columnName" does not exist.', 5, $this->source); })())], "method", false, false, false, 5), "html", null, true);
            if ( !(isset($context["curLang"]) || array_key_exists("curLang", $context) ? $context["curLang"] : (function () { throw new RuntimeError('Variable "curLang" does not exist.', 5, $this->source); })())) {
                echo " (untranslated)";
            }
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanAdminList/Page/list-title.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 5,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set curLang = (row.lang == app.request.locale) %}
{% if adminlist.canEdit(row) %}
    <span class=\"actions\"><a {% if not curLang %}style=\"color: #888\"{% endif %} href=\"{{ path(adminlist.getEditUrlFor(row)[\"path\"], adminlist.getEditUrlFor(row)[(\"params\")] ) }}\">{{ adminlist.getStringValue(row, columnName) }}{% if not curLang %} (untranslated){% endif %}</a></span>
{% else %}
    {{ adminlist.getStringValue(row, columnName) }}{% if not curLang %} (untranslated){% endif %}
{% endif %}
", "@KunstmaanAdminList/Page/list-title.html.twig", "/Users/macbook/Documents/quoc/admin-blog-api-/vendor/kunstmaan/adminlist-bundle/Resources/views/Page/list-title.html.twig");
    }
}
