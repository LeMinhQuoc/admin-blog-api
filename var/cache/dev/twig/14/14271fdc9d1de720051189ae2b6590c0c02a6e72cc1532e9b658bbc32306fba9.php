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

/* @KunstmaanMenu/AdminList/menu-item-url.html.twig */
class __TwigTemplate_3219f1a6a340cf9dd81c913e534df4aa215b394b1ac21bbdcfbf01a3e83a53db extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanMenu/AdminList/menu-item-url.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanMenu/AdminList/menu-item-url.html.twig"));

        // line 1
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 1, $this->source); })()), "type", [], "any", false, false, false, 1) == "page_link")) {
            // line 2
            echo "    ";
            $context["displayUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_slug", ["url" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 2, $this->source); })()), "nodeTranslation", [], "any", false, false, false, 2), "url", [], "any", false, false, false, 2)]);
        } else {
            // line 4
            echo "    ";
            $context["displayUrl"] = twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 4, $this->source); })()), "url", [], "any", false, false, false, 4);
        }
        // line 6
        echo "
<a href=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["displayUrl"]) || array_key_exists("displayUrl", $context) ? $context["displayUrl"] : (function () { throw new RuntimeError('Variable "displayUrl" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, (isset($context["displayUrl"]) || array_key_exists("displayUrl", $context) ? $context["displayUrl"] : (function () { throw new RuntimeError('Variable "displayUrl" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "</a>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanMenu/AdminList/menu-item-url.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 7,  53 => 6,  49 => 4,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if item.type == 'page_link' %}
    {% set displayUrl = path('_slug', {url: item.nodeTranslation.url}) %}
{% else %}
    {% set displayUrl = item.url %}
{% endif %}

<a href=\"{{ displayUrl }}\" target=\"_blank\">{{ displayUrl }}</a>
", "@KunstmaanMenu/AdminList/menu-item-url.html.twig", "/Users/macbook/Documents/quoc/blog-admin/vendor/kunstmaan/menu-bundle/Resources/views/AdminList/menu-item-url.html.twig");
    }
}
