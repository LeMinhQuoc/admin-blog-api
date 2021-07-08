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

/* @KunstmaanMedia/Media/RemoteAudio/preview.html.twig */
class __TwigTemplate_4d0a17506b74c3273b5446d9812fa8e575f14e5bda82d08c0c8c820f18760813 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanMedia/Media/RemoteAudio/preview.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanMedia/Media/RemoteAudio/preview.html.twig"));

        // line 1
        $context["handler"] = twig_get_attribute($this->env, $this->source, (isset($context["mediamanager"]) || array_key_exists("mediamanager", $context) ? $context["mediamanager"] : (function () { throw new RuntimeError('Variable "mediamanager" does not exist.', 1, $this->source); })()), "getHandler", [0 => (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 1, $this->source); })())], "method", false, false, false, 1);
        // line 2
        $context["helper"] = twig_get_attribute($this->env, $this->source, (isset($context["handler"]) || array_key_exists("handler", $context) ? $context["handler"] : (function () { throw new RuntimeError('Variable "handler" does not exist.', 2, $this->source); })()), "getFormHelper", [0 => (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 2, $this->source); })())], "method", false, false, false, 2);
        // line 3
        echo "
";
        // line 4
        if ((twig_get_attribute($this->env, $this->source, ($context["helper"] ?? null), "type", [], "any", true, true, false, 4) && (twig_get_attribute($this->env, $this->source, (isset($context["helper"]) || array_key_exists("helper", $context) ? $context["helper"] : (function () { throw new RuntimeError('Variable "helper" does not exist.', 4, $this->source); })()), "type", [], "any", false, false, false, 4) == "soundcloud"))) {
            // line 5
            echo "    <div class=\"embed-responsive embed-responsive-16by9\">
        <iframe width=\"560\" height=\"315\" scrolling=\"no\" frameborder=\"no\" src=\"https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["helper"]) || array_key_exists("helper", $context) ? $context["helper"] : (function () { throw new RuntimeError('Variable "helper" does not exist.', 6, $this->source); })()), "code", [], "any", false, false, false, 6), "html", null, true);
            echo "&amp;auto_play=false&amp;hide_related=false&amp;visual=true\" class=\"embed-responsive-item\"></iframe>
    </div>
";
        } elseif (twig_in_filter("audio", twig_get_attribute($this->env, $this->source,         // line 8
(isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 8, $this->source); })()), "contentType", [], "any", false, false, false, 8))) {
            // line 9
            echo "    <audio controls>
        <source src=\"";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 10, $this->source); })()), "url", [], "any", false, false, false, 10), "html", null, true);
            echo "\" />
    </audio>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanMedia/Media/RemoteAudio/preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 10,  62 => 9,  60 => 8,  55 => 6,  52 => 5,  50 => 4,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set handler = mediamanager.getHandler(media) %}
{% set helper = handler.getFormHelper(media) %}

{% if helper.type is defined and helper.type == 'soundcloud' %}
    <div class=\"embed-responsive embed-responsive-16by9\">
        <iframe width=\"560\" height=\"315\" scrolling=\"no\" frameborder=\"no\" src=\"https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/{{ helper.code }}&amp;auto_play=false&amp;hide_related=false&amp;visual=true\" class=\"embed-responsive-item\"></iframe>
    </div>
{% elseif 'audio' in media.contentType %}
    <audio controls>
        <source src=\"{{ media.url }}\" />
    </audio>
{% endif %}
", "@KunstmaanMedia/Media/RemoteAudio/preview.html.twig", "/Users/macbook/Documents/quoc/blog-admin/vendor/kunstmaan/media-bundle/Resources/views/Media/RemoteAudio/preview.html.twig");
    }
}
