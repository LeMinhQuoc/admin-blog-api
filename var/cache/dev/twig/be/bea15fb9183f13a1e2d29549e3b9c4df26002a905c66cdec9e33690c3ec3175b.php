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

/* @KunstmaanMenu/menu-item.html.twig */
class __TwigTemplate_bc00a39b13a817537e02cd254c9b840addaee44c8191fd1e5857327df40d4d98 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanMenu/menu-item.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanMenu/menu-item.html.twig"));

        // line 1
        echo "<a href=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "\" class=\"";
        if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "linkClass", [], "array", true, true, false, 1)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 1, $this->source); })()), "linkClass", [], "array", false, false, false, 1), "html", null, true);
        }
        if (((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 1, $this->source); })()) && twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "activeClass", [], "array", true, true, false, 1))) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 1, $this->source); })()), "activeClass", [], "array", false, false, false, 1), "html", null, true);
        }
        if (((isset($context["hasActiveChild"]) || array_key_exists("hasActiveChild", $context) ? $context["hasActiveChild"] : (function () { throw new RuntimeError('Variable "hasActiveChild" does not exist.', 1, $this->source); })()) && twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "activeClass", [], "array", true, true, false, 1))) {
            echo " child-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 1, $this->source); })()), "activeClass", [], "array", false, false, false, 1), "html", null, true);
        }
        echo "\" ";
        if ((twig_get_attribute($this->env, $this->source, ($context["menuItem"] ?? null), "newWindow", [], "array", true, true, false, 1) && twig_get_attribute($this->env, $this->source, (isset($context["menuItem"]) || array_key_exists("menuItem", $context) ? $context["menuItem"] : (function () { throw new RuntimeError('Variable "menuItem" does not exist.', 1, $this->source); })()), "newWindow", [], "array", false, false, false, 1))) {
            echo "target=\"_blank\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "</a>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanMenu/menu-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<a href=\"{{ url }}\" class=\"{% if options['linkClass'] is defined %}{{ options['linkClass'] }}{% endif %}{% if active and options['activeClass'] is defined %} {{ options['activeClass'] }}{% endif %}{% if hasActiveChild and options['activeClass'] is defined %} child-{{ options['activeClass'] }}{% endif %}\" {% if menuItem['newWindow'] is defined and menuItem['newWindow']%}target=\"_blank\"{% endif %}>{{ title }}</a>
", "@KunstmaanMenu/menu-item.html.twig", "/Users/macbook/Documents/quoc/blog-admin/vendor/kunstmaan/menu-bundle/Resources/views/menu-item.html.twig");
    }
}
