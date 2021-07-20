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

/* @KunstmaanMedia/Media/Image/show.html.twig */
class __TwigTemplate_3d519cc789a771f63e4f7ba9fd44580231e216722a7a7ae9c2a90ed5c67e2879 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'extraactions' => [$this, 'block_extraactions'],
            'preview' => [$this, 'block_preview'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@KunstmaanMedia/Media/File/show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanMedia/Media/Image/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanMedia/Media/Image/show.html.twig"));

        $this->parent = $this->loadTemplate("@KunstmaanMedia/Media/File/show.html.twig", "@KunstmaanMedia/Media/Image/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_extraactions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extraactions"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extraactions"));

        // line 4
        echo "
    ";
        // line 5
        if ((twig_get_attribute($this->env, $this->source, (isset($context["handler"]) || array_key_exists("handler", $context) ? $context["handler"] : (function () { throw new RuntimeError('Variable "handler" does not exist.', 5, $this->source); })()), "aviaryApiKey", [], "any", false, false, false, 5) &&  !(is_string($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, (isset($context["handler"]) || array_key_exists("handler", $context) ? $context["handler"] : (function () { throw new RuntimeError('Variable "handler" does not exist.', 5, $this->source); })()), "aviaryApiKey", [], "any", false, false, false, 5)) && is_string($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = "Register") && ('' === $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 || 0 === strpos($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144))))) {
            // line 6
            echo "        <button type=\"button\" class=\"btn btn-primary btn--raise-on-hover\" onclick=\"return launchEditor('editimage', '";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 6, $this->source); })()), "url", [], "any", false, false, false, 6))), "html", null, true);
            echo "');\" >
            ";
            // line 7
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("media.media.edit.action"), "html", null, true);
            echo "
        </button>

        ";
            // line 10
            $this->loadTemplate("@KunstmaanMedia/Media/Image/aviary.html.twig", "@KunstmaanMedia/Media/Image/show.html.twig", 10)->display($context);
            // line 11
            echo "    ";
        }
        // line 12
        echo "
    <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 13, $this->source); })()), "url", [], "any", false, false, false, 13)), "html", null, true);
        echo "\" target=\"_blank\" class=\"btn btn-default btn--raise-on-hover\">
        ";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("media.media.download.action"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_preview($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "preview"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "preview"));

        // line 19
        echo "    ";
        $context["imageurl"] = twig_get_attribute($this->env, $this->source, (isset($context["handler"]) || array_key_exists("handler", $context) ? $context["handler"] : (function () { throw new RuntimeError('Variable "handler" does not exist.', 19, $this->source); })()), "getImageUrl", [0 => (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 19, $this->source); })()), 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "request", [], "any", false, false, false, 19), "basePath", [], "any", false, false, false, 19)], "method", false, false, false, 19);
        // line 20
        echo "    ";
        if (( !twig_test_empty((isset($context["imageurl"]) || array_key_exists("imageurl", $context) ? $context["imageurl"] : (function () { throw new RuntimeError('Variable "imageurl" does not exist.', 20, $this->source); })())) && (twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 20, $this->source); })()), "location", [], "any", false, false, false, 20) == "local"))) {
            // line 21
            echo "        ";
            if (((twig_last($this->env, twig_split_filter($this->env, twig_lower_filter($this->env, (isset($context["imageurl"]) || array_key_exists("imageurl", $context) ? $context["imageurl"] : (function () { throw new RuntimeError('Variable "imageurl" does not exist.', 21, $this->source); })())), ".")) == "svg") || twig_in_filter("image/svg", twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 21, $this->source); })()), "contentType", [], "any", false, false, false, 21)))) {
                // line 22
                echo "            ";
                $context["imageurl"] = (isset($context["imageurl"]) || array_key_exists("imageurl", $context) ? $context["imageurl"] : (function () { throw new RuntimeError('Variable "imageurl" does not exist.', 22, $this->source); })());
                // line 23
                echo "        ";
            } else {
                // line 24
                echo "            ";
                $context["imageurl"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter((isset($context["imageurl"]) || array_key_exists("imageurl", $context) ? $context["imageurl"] : (function () { throw new RuntimeError('Variable "imageurl" does not exist.', 24, $this->source); })()), "media_detail_thumbnail"));
                // line 25
                echo "        ";
            }
            // line 26
            echo "    ";
        }
        // line 27
        echo "    <img id=\"editimage\" class=\"img-thumbnail\" src=\"";
        echo twig_escape_filter($this->env, (isset($context["imageurl"]) || array_key_exists("imageurl", $context) ? $context["imageurl"] : (function () { throw new RuntimeError('Variable "imageurl" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 27, $this->source); })()), "name", [], "any", false, false, false, 27), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanMedia/Media/Image/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 27,  141 => 26,  138 => 25,  135 => 24,  132 => 23,  129 => 22,  126 => 21,  123 => 20,  120 => 19,  110 => 18,  97 => 14,  93 => 13,  90 => 12,  87 => 11,  85 => 10,  79 => 7,  74 => 6,  72 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@KunstmaanMedia/Media/File/show.html.twig' %}

{% block extraactions %}

    {% if handler.aviaryApiKey and not (handler.aviaryApiKey starts with 'Register') %}
        <button type=\"button\" class=\"btn btn-primary btn--raise-on-hover\" onclick=\"return launchEditor('editimage', '{{ absolute_url(asset(media.url)) }}');\" >
            {{ 'media.media.edit.action' | trans }}
        </button>

        {% include '@KunstmaanMedia/Media/Image/aviary.html.twig' %}
    {% endif %}

    <a href=\"{{ asset(media.url) }}\" target=\"_blank\" class=\"btn btn-default btn--raise-on-hover\">
        {{ 'media.media.download.action'|trans }}
    </a>
{% endblock %}

{% block preview %}
    {% set imageurl = handler.getImageUrl(media, app.request.basePath) %}
    {% if imageurl is not empty and media.location == 'local' %}
        {% if imageurl|lower|split('.')|last == 'svg' or 'image/svg' in media.contentType %}
            {% set imageurl = imageurl %}
        {% else %}
            {% set imageurl = asset(imageurl | imagine_filter('media_detail_thumbnail')) %}
        {% endif %}
    {% endif %}
    <img id=\"editimage\" class=\"img-thumbnail\" src=\"{{ imageurl }}\" alt=\"{{ media.name }}\">
{% endblock %}
", "@KunstmaanMedia/Media/Image/show.html.twig", "/Users/macbook/Documents/quoc/admin-blog-api-/vendor/kunstmaan/media-bundle/Resources/views/Media/Image/show.html.twig");
    }
}
