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

/* PageParts/DownloadPagePart/view.html.twig */
class __TwigTemplate_dea6c9a6c200c837402bb751d3e92f74f40f917991d8b67255667a497728626c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PageParts/DownloadPagePart/view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PageParts/DownloadPagePart/view.html.twig"));

        // line 1
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 1, $this->source); })()), "media", [], "any", false, false, false, 1)) && twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", true, true, false, 1))) {
            // line 2
            echo "    ";
            $context["name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 2, $this->source); })()), "media", [], "any", false, false, false, 2), "name", [], "any", false, false, false, 2);
            // line 3
            echo "    ";
            if (twig_test_empty((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 3, $this->source); })()))) {
                // line 4
                echo "        ";
                $context["name"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Download");
                // line 5
                echo "    ";
            }
            // line 6
            echo "
    <p class=\"download-pp\">
        <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 8, $this->source); })()), "media", [], "any", false, false, false, 8), "url", [], "any", false, false, false, 8))), "html", null, true);
            echo "\" target=\"_blank\" class=\"download\">";
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 8, $this->source); })()), "html", null, true);
            echo "</a>
        <span>| ";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 9, $this->source); })()), "media", [], "any", false, false, false, 9), "contentTypeShort", [], "any", false, false, false, 9), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 9, $this->source); })()), "media", [], "any", false, false, false, 9), "getFileSize", [], "method", false, false, false, 9), "html", null, true);
            echo "</span>
    </p>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "PageParts/DownloadPagePart/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 9,  61 => 8,  57 => 6,  54 => 5,  51 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if resource.media is not empty and app.request is defined %}
    {% set name = resource.media.name %}
    {% if name is empty %}
        {% set name = \"Download\"|trans %}
    {% endif %}

    <p class=\"download-pp\">
        <a href=\"{{ absolute_url(asset(resource.media.url)) }}\" target=\"_blank\" class=\"download\">{{ name }}</a>
        <span>| {{ resource.media.contentTypeShort }} {{ resource.media.getFileSize() }}</span>
    </p>
{% endif %}
", "PageParts/DownloadPagePart/view.html.twig", "/Users/macbook/Documents/quoc/admin-blog-api-/templates/PageParts/DownloadPagePart/view.html.twig");
    }
}
