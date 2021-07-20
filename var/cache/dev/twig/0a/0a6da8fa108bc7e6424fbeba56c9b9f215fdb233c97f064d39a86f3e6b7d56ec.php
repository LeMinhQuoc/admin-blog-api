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

/* @KunstmaanMedia/Media/RemoteVideo/preview.html.twig */
class __TwigTemplate_dd4116555847e8204251eebba74b73c59a0ebfb7bb83dd7406ac6abfed12d5b2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanMedia/Media/RemoteVideo/preview.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanMedia/Media/RemoteVideo/preview.html.twig"));

        // line 1
        $context["handler"] = twig_get_attribute($this->env, $this->source, (isset($context["mediamanager"]) || array_key_exists("mediamanager", $context) ? $context["mediamanager"] : (function () { throw new RuntimeError('Variable "mediamanager" does not exist.', 1, $this->source); })()), "getHandler", [0 => (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 1, $this->source); })())], "method", false, false, false, 1);
        // line 2
        $context["helper"] = twig_get_attribute($this->env, $this->source, (isset($context["handler"]) || array_key_exists("handler", $context) ? $context["handler"] : (function () { throw new RuntimeError('Variable "handler" does not exist.', 2, $this->source); })()), "getFormHelper", [0 => (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 2, $this->source); })())], "method", false, false, false, 2);
        // line 3
        if ((twig_get_attribute($this->env, $this->source, (isset($context["helper"]) || array_key_exists("helper", $context) ? $context["helper"] : (function () { throw new RuntimeError('Variable "helper" does not exist.', 3, $this->source); })()), "type", [], "any", false, false, false, 3) == "youtube")) {
            // line 4
            echo "    <div class=\"embed-responsive embed-responsive-16by9\">
        <iframe width=\"560\" height=\"315\" src=\"//www.youtube.com/embed/";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["helper"]) || array_key_exists("helper", $context) ? $context["helper"] : (function () { throw new RuntimeError('Variable "helper" does not exist.', 5, $this->source); })()), "code", [], "any", false, false, false, 5), "html", null, true);
            echo "\" frameborder=\"0\" allowfullscreen class=\"embed-responsive-item\"></iframe>
    </div>
";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 7
(isset($context["helper"]) || array_key_exists("helper", $context) ? $context["helper"] : (function () { throw new RuntimeError('Variable "helper" does not exist.', 7, $this->source); })()), "type", [], "any", false, false, false, 7) == "vimeo")) {
            // line 8
            echo "    <div class=\"embed-responsive embed-responsive-16by9\">
        <iframe src=\"//player.vimeo.com/video/";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["helper"]) || array_key_exists("helper", $context) ? $context["helper"] : (function () { throw new RuntimeError('Variable "helper" does not exist.', 9, $this->source); })()), "code", [], "any", false, false, false, 9), "html", null, true);
            echo "\" width=\"500\" height=\"290\" frameborder=\"0\" class=\"embed-responsive-item\"></iframe>
    </div>
";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 11
(isset($context["helper"]) || array_key_exists("helper", $context) ? $context["helper"] : (function () { throw new RuntimeError('Variable "helper" does not exist.', 11, $this->source); })()), "type", [], "any", false, false, false, 11) == "dailymotion")) {
            // line 12
            echo "    <div class=\"embed-responsive embed-responsive-16by9\">
        <iframe frameborder=\"0\" width=\"480\" height=\"270\" src=\"//www.dailymotion.com/embed/video/";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["helper"]) || array_key_exists("helper", $context) ? $context["helper"] : (function () { throw new RuntimeError('Variable "helper" does not exist.', 13, $this->source); })()), "code", [], "any", false, false, false, 13), "html", null, true);
            echo "\" class=\"embed-responsive-item\"></iframe>
    </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanMedia/Media/RemoteVideo/preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 13,  69 => 12,  67 => 11,  62 => 9,  59 => 8,  57 => 7,  52 => 5,  49 => 4,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set handler = mediamanager.getHandler(media) %}
{% set helper = handler.getFormHelper(media) %}
{% if helper.type == 'youtube' %}
    <div class=\"embed-responsive embed-responsive-16by9\">
        <iframe width=\"560\" height=\"315\" src=\"//www.youtube.com/embed/{{ helper.code }}\" frameborder=\"0\" allowfullscreen class=\"embed-responsive-item\"></iframe>
    </div>
{% elseif helper.type == 'vimeo' %}
    <div class=\"embed-responsive embed-responsive-16by9\">
        <iframe src=\"//player.vimeo.com/video/{{ helper.code }}\" width=\"500\" height=\"290\" frameborder=\"0\" class=\"embed-responsive-item\"></iframe>
    </div>
{% elseif helper.type == 'dailymotion' %}
    <div class=\"embed-responsive embed-responsive-16by9\">
        <iframe frameborder=\"0\" width=\"480\" height=\"270\" src=\"//www.dailymotion.com/embed/video/{{ helper.code }}\" class=\"embed-responsive-item\"></iframe>
    </div>
{% endif %}
", "@KunstmaanMedia/Media/RemoteVideo/preview.html.twig", "/Users/macbook/Documents/quoc/admin-blog-api-/vendor/kunstmaan/media-bundle/Resources/views/Media/RemoteVideo/preview.html.twig");
    }
}
