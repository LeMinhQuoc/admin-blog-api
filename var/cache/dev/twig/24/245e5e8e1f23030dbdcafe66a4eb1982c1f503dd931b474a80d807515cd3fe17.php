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

/* @KunstmaanAdmin/Toolbar/toolbar_item.html.twig */
class __TwigTemplate_c180ff984104bfb61e5ba88b6b89c3ed51ff0a512eeec4d2dd40284982086ee8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdmin/Toolbar/toolbar_item.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdmin/Toolbar/toolbar_item.html.twig"));

        // line 1
        echo "<div class=\"sf-toolbar-block kuma-toolbar-block sf-toolbar-status-";
        echo twig_escape_filter($this->env, ((array_key_exists("status", $context)) ? (_twig_default_filter((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 1, $this->source); })()), "normal")) : ("normal")), "html", null, true);
        echo "\">
    ";
        // line 2
        if ((array_key_exists("link", $context) && (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 2, $this->source); })()))) {
            // line 3
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 3, $this->source); })()), "html", null, true);
            echo "\">
    ";
        }
        // line 5
        echo "    <div class=\"sf-toolbar-icon\">";
        echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 5, $this->source); })()), "")) : ("")), "html", null, true);
        echo "</div>
    ";
        // line 6
        if ((array_key_exists("link", $context) && (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 6, $this->source); })()))) {
            // line 7
            echo "        </a>
    ";
        }
        // line 9
        echo "    <div class=\"sf-toolbar-info\"";
        if ((array_key_exists("overflow", $context) && (isset($context["overflow"]) || array_key_exists("overflow", $context) ? $context["overflow"] : (function () { throw new RuntimeError('Variable "overflow" does not exist.', 9, $this->source); })()))) {
            echo " style=\"overflow: auto;\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter((isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 9, $this->source); })()), "")) : ("")), "html", null, true);
        echo "</div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanAdmin/Toolbar/toolbar_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 9,  63 => 7,  61 => 6,  56 => 5,  50 => 3,  48 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"sf-toolbar-block kuma-toolbar-block sf-toolbar-status-{{ status|default('normal') }}\">
    {% if link is defined and link %}
        <a href=\"{{ link }}\">
    {% endif %}
    <div class=\"sf-toolbar-icon\">{{ icon|default('') }}</div>
    {% if link is defined and link %}
        </a>
    {% endif %}
    <div class=\"sf-toolbar-info\"{% if overflow is defined and overflow %} style=\"overflow: auto;\"{% endif %}>{{ text|default('') }}</div>
</div>
", "@KunstmaanAdmin/Toolbar/toolbar_item.html.twig", "/Users/macbook/Documents/quoc/blog-admin/vendor/kunstmaan/admin-bundle/Resources/views/Toolbar/toolbar_item.html.twig");
    }
}
