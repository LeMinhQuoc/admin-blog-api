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

/* @KunstmaanAdminList/AdminListTwigExtension/thumbwidget.html.twig */
class __TwigTemplate_7f74ae09f91c9641ed8be15175db176fccadb7cdb133675884793f20d019400e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdminList/AdminListTwigExtension/thumbwidget.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdminList/AdminListTwigExtension/thumbwidget.html.twig"));

        // line 1
        $context["extraparams"] = twig_array_merge((isset($context["extraparams"]) || array_key_exists("extraparams", $context) ? $context["extraparams"] : (function () { throw new RuntimeError('Variable "extraparams" does not exist.', 1, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 1, $this->source); })()), "currentparameters", [], "any", false, false, false, 1));
        // line 2
        echo "
";
        // line 3
        $this->loadTemplate("@KunstmaanAdminList/AdminListTwigExtension/filters.html.twig", "@KunstmaanAdminList/AdminListTwigExtension/thumbwidget.html.twig", 3)->display($context);
        // line 4
        echo "
";
        // line 5
        if (twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 5, $this->source); })()), "hasBulkActions", [], "any", false, false, false, 5)) {
            // line 6
            echo "    <form action=\"#\" method=\"POST\" name=\"bulkform\" id=\"bulk-form\">
";
        }
        // line 8
        echo "
<!-- Check for actions -->
";
        // line 10
        $context["itemActionsPossible"] = false;
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 11, $this->source); })()), "items", [0 => (isset($context["extraparams"]) || array_key_exists("extraparams", $context) ? $context["extraparams"] : (function () { throw new RuntimeError('Variable "extraparams" does not exist.', 11, $this->source); })())], "method", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 12
            echo "    ";
            if ((((twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 12, $this->source); })()), "canEdit", [0 => $context["item"]], "method", false, false, false, 12) || twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 12, $this->source); })()), "canView", [0 => $context["item"]], "method", false, false, false, 12)) || twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 12, $this->source); })()), "canDelete", [0 => $context["item"]], "method", false, false, false, 12)) || twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 12, $this->source); })()), "hasItemActions", [], "method", false, false, false, 12))) {
                // line 13
                echo "        ";
                $context["itemActionsPossible"] = true;
                // line 14
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanAdminList/AdminListTwigExtension/thumbwidget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 14,  72 => 13,  69 => 12,  65 => 11,  63 => 10,  59 => 8,  55 => 6,  53 => 5,  50 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set extraparams = extraparams|merge(filter.currentparameters) %}

{% include '@KunstmaanAdminList/AdminListTwigExtension/filters.html.twig' %}

{% if adminlist.hasBulkActions %}
    <form action=\"#\" method=\"POST\" name=\"bulkform\" id=\"bulk-form\">
{% endif %}

<!-- Check for actions -->
{% set itemActionsPossible = false %}
{% for item in adminlist.items(extraparams) %}
    {% if (adminlist.canEdit(item) or adminlist.canView(item) or adminlist.canDelete(item) or adminlist.hasItemActions() ) %}
        {% set itemActionsPossible = true %}
    {% endif %}
{% endfor %}
", "@KunstmaanAdminList/AdminListTwigExtension/thumbwidget.html.twig", "/Users/macbook/Documents/quoc/admin-blog-api-/vendor/kunstmaan/adminlist-bundle/Resources/views/AdminListTwigExtension/thumbwidget.html.twig");
    }
}
