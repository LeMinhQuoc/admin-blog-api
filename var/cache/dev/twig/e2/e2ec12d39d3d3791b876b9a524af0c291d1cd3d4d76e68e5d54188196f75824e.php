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

/* PageParts/ButtonPagePart/view.html.twig */
class __TwigTemplate_5a71abbf0cb8129c3e0b5a5673cac6a1c2699559c74a1320271ed13cf9a889a7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PageParts/ButtonPagePart/view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PageParts/ButtonPagePart/view.html.twig"));

        // line 5
        echo "
";
        // line 6
        $macros["css"] = $this->macros["css"] = $this;
        // line 7
        echo "
<p class=\"btn-pp btn-pp--";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 8, $this->source); })()), "position", [], "any", false, false, false, 8), "html", null, true);
        echo "\">
    <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Kunstmaan\NodeBundle\Twig\UrlReplaceTwigExtension']->replaceUrl(twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 9, $this->source); })()), "linkUrl", [], "any", false, false, false, 9)), "html", null, true);
        echo "\" class=\"";
        echo twig_call_macro($macros["css"], "macro_getClasses", [(isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 9, $this->source); })())], 9, $context, $this->getSourceContext());
        echo "\"";
        if (twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 9, $this->source); })()), "linkNewWindow", [], "any", false, false, false, 9)) {
            echo " target=\"_blank\" rel=\"noopener\"";
        }
        echo ">
        ";
        // line 10
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["resource"] ?? null), "linkText", [], "any", true, true, false, 10)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["resource"] ?? null), "linkText", [], "any", false, false, false, 10), $this->extensions['Kunstmaan\NodeBundle\Twig\UrlReplaceTwigExtension']->replaceUrl(twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 10, $this->source); })()), "linkUrl", [], "any", false, false, false, 10)))) : ($this->extensions['Kunstmaan\NodeBundle\Twig\UrlReplaceTwigExtension']->replaceUrl(twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 10, $this->source); })()), "linkUrl", [], "any", false, false, false, 10)))), "html", null, true);
        echo "
    </a>
</p>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function macro_getClasses($__resource__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "resource" => $__resource__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "getClasses"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "getClasses"));

            // line 3
            echo "btn btn--";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 3, $this->source); })()), "type", [], "any", false, false, false, 3), "html", null, true);
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 3, $this->source); })()), "size", [], "any", false, false, false, 3) != "default")) {
                echo "btn--";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 3, $this->source); })()), "size", [], "any", false, false, false, 3), "html", null, true);
            }
            echo " btn--";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 3, $this->source); })()), "position", [], "any", false, false, false, 3), "html", null, true);
            echo "
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "PageParts/ButtonPagePart/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 3,  79 => 2,  65 => 10,  55 => 9,  51 => 8,  48 => 7,  46 => 6,  43 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("{# Build classnames for buttons based on twbs#}
{% macro getClasses(resource) %}
btn btn--{{ resource.type }} {% if resource.size != 'default' %}btn--{{ resource.size }}{% endif %} btn--{{ resource.position }}
{% endmacro %}

{% import _self as css %}

<p class=\"btn-pp btn-pp--{{ resource.position }}\">
    <a href=\"{{ resource.linkUrl | replace_url }}\" class=\"{{ css.getClasses(resource) }}\"{% if resource.linkNewWindow %} target=\"_blank\" rel=\"noopener\"{% endif %}>
        {{ resource.linkText|default(resource.linkUrl|replace_url) }}
    </a>
</p>
", "PageParts/ButtonPagePart/view.html.twig", "/Users/macbook/Documents/quoc/admin-blog-api-/templates/PageParts/ButtonPagePart/view.html.twig");
    }
}
