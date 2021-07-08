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

/* @KunstmaanMedia/AdminList/ItemAction/select.html.twig */
class __TwigTemplate_f54b8da2929387f95c5d1ad970699bf13a62676e8edd7fabe76e235edac8fe66 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanMedia/AdminList/ItemAction/select.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanMedia/AdminList/ItemAction/select.html.twig"));

        // line 1
        $context["mediaHandler"] = twig_get_attribute($this->env, $this->source, (isset($context["mediamanager"]) || array_key_exists("mediamanager", $context) ? $context["mediamanager"] : (function () { throw new RuntimeError('Variable "mediamanager" does not exist.', 1, $this->source); })()), "getHandler", [0 => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 1, $this->source); })())], "method", false, false, false, 1);
        // line 2
        $context["thumbnailurl"] = twig_get_attribute($this->env, $this->source, (isset($context["mediaHandler"]) || array_key_exists("mediaHandler", $context) ? $context["mediaHandler"] : (function () { throw new RuntimeError('Variable "mediaHandler" does not exist.', 2, $this->source); })()), "getImageUrl", [0 => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 2, $this->source); })()), 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "request", [], "any", false, false, false, 2), "basePath", [], "any", false, false, false, 2)], "method", false, false, false, 2);
        // line 3
        echo "
";
        // line 4
        $context["cke"] = (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "request", [], "any", false, false, false, 4) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "request", [], "any", false, false, false, 4), "get", [0 => "CKEditorFuncNum"], "method", false, false, false, 4));
        // line 5
        echo "<a data-thumb-path=\"";
        echo twig_escape_filter($this->env, (isset($context["thumbnailurl"]) || array_key_exists("thumbnailurl", $context) ? $context["thumbnailurl"] : (function () { throw new RuntimeError('Variable "thumbnailurl" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "\" data-path=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 5, $this->source); })()), "url", [], "any", false, false, false, 5), "html", null, true);
        echo "\" data-title=\"";
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5), "js"), "html", null, true);
        echo "\" data-id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5), "html", null, true);
        echo "\" href=\"javascript:void(0)\" class=\"js-url-chooser-media-select\" data-cke=\"";
        if ((isset($context["cke"]) || array_key_exists("cke", $context) ? $context["cke"] : (function () { throw new RuntimeError('Variable "cke" does not exist.', 5, $this->source); })())) {
            echo "true";
        } else {
            echo "false";
        }
        echo "\">
    Select
</a>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanMedia/AdminList/ItemAction/select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 5,  50 => 4,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set mediaHandler = mediamanager.getHandler(item) %}
{% set thumbnailurl =  mediaHandler.getImageUrl(item, app.request.basePath) %}

{% set cke = (app.request and app.request.get('CKEditorFuncNum')) %}
<a data-thumb-path=\"{{ thumbnailurl }}\" data-path=\"{{ item.url }}\" data-title=\"{{ item.name|escape('js') }}\" data-id=\"{{ item.id }}\" href=\"javascript:void(0)\" class=\"js-url-chooser-media-select\" data-cke=\"{% if cke %}true{% else %}false{% endif %}\">
    Select
</a>
", "@KunstmaanMedia/AdminList/ItemAction/select.html.twig", "/Users/macbook/Documents/quoc/blog-admin/vendor/kunstmaan/media-bundle/Resources/views/AdminList/ItemAction/select.html.twig");
    }
}
