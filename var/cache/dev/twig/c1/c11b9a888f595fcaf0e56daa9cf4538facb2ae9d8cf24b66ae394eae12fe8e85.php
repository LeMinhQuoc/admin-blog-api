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

/* @KunstmaanAdmin/AdminPanel/_admin_panel_action.html.twig */
class __TwigTemplate_fef795b6e2f23289af4c32a59fe897c42205cfe052858be8b8613aba767eafd8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdmin/AdminPanel/_admin_panel_action.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdmin/AdminPanel/_admin_panel_action.html.twig"));

        // line 1
        $context["params"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "getUrl", [], "method", false, true, false, 1), "params", [], "array", true, true, false, 1)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "getUrl", [], "method", false, true, false, 1), "params", [], "array", false, false, false, 1), [])) : ([]));
        // line 2
        $context["attributes"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "getUrl", [], "method", false, true, false, 2), "attrs", [], "array", true, true, false, 2)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "getUrl", [], "method", false, true, false, 2), "attrs", [], "array", false, false, false, 2), null)) : (null));
        // line 3
        echo "<li>
    <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 4, $this->source); })()), "getUrl", [], "method", false, false, false, 4), "path", [], "array", false, false, false, 4), (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 4, $this->source); })())), "html", null, true);
        echo "\" ";
        if ( !twig_test_empty((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 4, $this->source); })()))) {
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 4, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        echo ">
    ";
        // line 5
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 5, $this->source); })()), "getIcon", [], "method", false, false, false, 5))) {
            // line 6
            echo "        <i class=\"fa fa-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 6, $this->source); })()), "getIcon", [], "method", false, false, false, 6), "html", null, true);
            echo "\"></i>
    ";
        }
        // line 8
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 8, $this->source); })()), "getLabel", [], "method", false, false, false, 8))) {
            // line 9
            echo "        &nbsp;
        ";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 10, $this->source); })()), "getLabel", [], "method", false, false, false, 10), "html", null, true);
            echo "
    ";
        }
        // line 12
        echo "    </a>
</li>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanAdmin/AdminPanel/_admin_panel_action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 12,  82 => 10,  79 => 9,  76 => 8,  70 => 6,  68 => 5,  50 => 4,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set params = action.getUrl()[(\"params\")]|default([]) %}
{% set attributes = action.getUrl()[(\"attrs\")]|default(null) %}
<li>
    <a href=\"{{ path(action.getUrl()[(\"path\")], params) }}\" {% if attributes is not empty %}{% for key,value in attributes %}{{ key }}=\"{{ value }}\" {% endfor %}{% endif %}>
    {% if action.getIcon() is not null %}
        <i class=\"fa fa-{{ action.getIcon() }}\"></i>
    {% endif %}
    {% if (action.getLabel()) is not empty %}
        &nbsp;
        {{ action.getLabel() }}
    {% endif %}
    </a>
</li>
", "@KunstmaanAdmin/AdminPanel/_admin_panel_action.html.twig", "/Users/macbook/Documents/quoc/blog-admin/vendor/kunstmaan/admin-bundle/Resources/views/AdminPanel/_admin_panel_action.html.twig");
    }
}
