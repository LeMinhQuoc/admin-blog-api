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

/* @KunstmaanMedia/Media/RemoteSlide/preview.html.twig */
class __TwigTemplate_1cd8119805bdcd50c34da080a02f79acf8e7386c403f36e374072afd299cc85d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanMedia/Media/RemoteSlide/preview.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanMedia/Media/RemoteSlide/preview.html.twig"));

        // line 1
        $context["handler"] = twig_get_attribute($this->env, $this->source, (isset($context["mediamanager"]) || array_key_exists("mediamanager", $context) ? $context["mediamanager"] : (function () { throw new RuntimeError('Variable "mediamanager" does not exist.', 1, $this->source); })()), "getHandler", [0 => (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 1, $this->source); })())], "method", false, false, false, 1);
        // line 2
        $context["helper"] = twig_get_attribute($this->env, $this->source, (isset($context["handler"]) || array_key_exists("handler", $context) ? $context["handler"] : (function () { throw new RuntimeError('Variable "handler" does not exist.', 2, $this->source); })()), "getFormHelper", [0 => (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 2, $this->source); })())], "method", false, false, false, 2);
        // line 3
        echo "
";
        // line 4
        if ((twig_get_attribute($this->env, $this->source, (isset($context["helper"]) || array_key_exists("helper", $context) ? $context["helper"] : (function () { throw new RuntimeError('Variable "helper" does not exist.', 4, $this->source); })()), "type", [], "any", false, false, false, 4) == "slideshare")) {
            // line 5
            echo "    <div style=\"width:425px\" id=\"__ss_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["helper"]) || array_key_exists("helper", $context) ? $context["helper"] : (function () { throw new RuntimeError('Variable "helper" does not exist.', 5, $this->source); })()), "code", [], "any", false, false, false, 5), "html", null, true);
            echo "\" class=\"embed-responsive embed-responsive-16by9\">
        <iframe src=\"https://www.slideshare.net/slideshow/embed_code/key/";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["helper"]) || array_key_exists("helper", $context) ? $context["helper"] : (function () { throw new RuntimeError('Variable "helper" does not exist.', 6, $this->source); })()), "code", [], "any", false, false, false, 6), "html", null, true);
            echo "\" width=\"425\" height=\"355\" frameborder=\"0\" marginwidth=\"0\" marginheight=\"0\" scrolling=\"no\" class=\"embed-responsive-item\"></iframe>
        <h5>
            ";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 8, $this->source); })()), "name", [], "any", false, false, false, 8), "html", null, true);
            echo "
        </h5>
    </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanMedia/Media/RemoteSlide/preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 8,  57 => 6,  52 => 5,  50 => 4,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set handler = mediamanager.getHandler(media) %}
{% set helper = handler.getFormHelper(media) %}

{% if helper.type == 'slideshare' %}
    <div style=\"width:425px\" id=\"__ss_{{ helper.code }}\" class=\"embed-responsive embed-responsive-16by9\">
        <iframe src=\"https://www.slideshare.net/slideshow/embed_code/key/{{ helper.code }}\" width=\"425\" height=\"355\" frameborder=\"0\" marginwidth=\"0\" marginheight=\"0\" scrolling=\"no\" class=\"embed-responsive-item\"></iframe>
        <h5>
            {{ media.name }}
        </h5>
    </div>
{% endif %}
", "@KunstmaanMedia/Media/RemoteSlide/preview.html.twig", "/Users/macbook/Documents/quoc/admin-blog-api-/vendor/kunstmaan/media-bundle/Resources/views/Media/RemoteSlide/preview.html.twig");
    }
}
