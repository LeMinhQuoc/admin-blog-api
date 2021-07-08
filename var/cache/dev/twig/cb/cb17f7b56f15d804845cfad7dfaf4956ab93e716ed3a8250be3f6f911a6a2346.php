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

/* @KunstmaanMenu/AdminList/menu-item-title.html.twig */
class __TwigTemplate_4b0e8423f80c1bd99057ed044ff0ce726475f1c627008554de9ba5c281acbe21 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanMenu/AdminList/menu-item-title.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanMenu/AdminList/menu-item-title.html.twig"));

        // line 1
        $context["marginDefinition"] = 60;
        // line 2
        $context["marginLeft"] = (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 2, $this->source); })()), "lvl", [], "any", false, false, false, 2) + 1) * (isset($context["marginDefinition"]) || array_key_exists("marginDefinition", $context) ? $context["marginDefinition"] : (function () { throw new RuntimeError('Variable "marginDefinition" does not exist.', 2, $this->source); })())) - (isset($context["marginDefinition"]) || array_key_exists("marginDefinition", $context) ? $context["marginDefinition"] : (function () { throw new RuntimeError('Variable "marginDefinition" does not exist.', 2, $this->source); })()));
        // line 3
        echo "<div style=\"margin-left: ";
        echo twig_escape_filter($this->env, (isset($context["marginLeft"]) || array_key_exists("marginLeft", $context) ? $context["marginLeft"] : (function () { throw new RuntimeError('Variable "marginLeft" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "px;";
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 3, $this->source); })()), "online", [], "any", false, false, false, 3)) {
            echo "color:#999;";
        }
        echo "\">
    ";
        // line 4
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 4, $this->source); })()), "lvl", [], "any", false, false, false, 4) > 0)) {
            echo "∟ ";
        }
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 4, $this->source); })()), "displayTitle", [], "any", false, false, false, 4), "html", null, true);
        echo "
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanMenu/AdminList/menu-item-title.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 4,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set marginDefinition = 60 %}
{% set marginLeft = ((item.lvl + 1) * marginDefinition) - marginDefinition %}
<div style=\"margin-left: {{ marginLeft }}px;{% if not item.online%}color:#999;{% endif %}\">
    {% if item.lvl > 0 %}∟ {% endif %}{{ item.displayTitle }}
</div>
", "@KunstmaanMenu/AdminList/menu-item-title.html.twig", "/Users/macbook/Documents/quoc/blog-admin/vendor/kunstmaan/menu-bundle/Resources/views/AdminList/menu-item-title.html.twig");
    }
}
