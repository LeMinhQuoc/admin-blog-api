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

/* PageParts/ImagePagePart/view.html.twig */
class __TwigTemplate_11993cfe5c634c49422f9ddef4f58b55811f89b19e28d61c84aedcf79c19c9f5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PageParts/ImagePagePart/view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PageParts/ImagePagePart/view.html.twig"));

        // line 1
        $macros["buildImage"] = $this->macros["buildImage"] = $this;
        // line 2
        echo "
";
        // line 27
        echo "
";
        // line 28
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 28, $this->source); })()), "media", [], "any", false, false, false, 28))) {
            // line 29
            echo "    ";
            ob_start();
            // line 30
            echo "        ";
            $context["imageType"] = twig_last($this->env, twig_split_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 30, $this->source); })()), "media", [], "any", false, false, false, 30), "originalFilename", [], "any", false, false, false, 30)), "."));
            // line 31
            echo "        ";
            echo twig_call_macro($macros["buildImage"], "macro_setFilters", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 31, $this->source); })()), "media", [], "any", false, false, false, 31), "url", [], "any", false, false, false, 31), twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 31, $this->source); })()), "altText", [], "any", false, false, false, 31), (isset($context["imageType"]) || array_key_exists("imageType", $context) ? $context["imageType"] : (function () { throw new RuntimeError('Variable "imageType" does not exist.', 31, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 31, $this->source); })()), "media", [], "any", false, false, false, 31), "metadata", [], "any", false, false, false, 31), "original_width", [], "any", false, false, false, 31)], 31, $context, $this->getSourceContext());
            echo "
    ";
            $context["image"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 33
            echo "
    ";
            // line 34
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 34, $this->source); })()), "media", [], "any", false, false, false, 34))) {
                // line 35
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "request", [], "any", false, false, false, 35)) {
                    // line 36
                    echo "            <figure class=\"image-pp\">
                ";
                    // line 37
                    $context["imageType"] = twig_last($this->env, twig_split_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 37, $this->source); })()), "media", [], "any", false, false, false, 37), "originalFilename", [], "any", false, false, false, 37)), "."));
                    // line 38
                    echo "
                ";
                    // line 39
                    if ((twig_get_attribute($this->env, $this->source, ($context["resource"] ?? null), "link", [], "any", true, true, false, 39) && (twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 39, $this->source); })()), "link", [], "any", false, false, false, 39) != ""))) {
                        // line 40
                        echo "                    <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Kunstmaan\NodeBundle\Twig\UrlReplaceTwigExtension']->replaceUrl(twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 40, $this->source); })()), "link", [], "any", false, false, false, 40)), "html", null, true);
                        echo "\" ";
                        if (twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 40, $this->source); })()), "openinnewwindow", [], "any", false, false, false, 40)) {
                            echo "target=\"_blank\" rel=\"noopener\"";
                        }
                        echo ">
                        ";
                        // line 41
                        echo twig_escape_filter($this->env, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 41, $this->source); })()), "html", null, true);
                        echo "
                    </a>
                ";
                    } else {
                        // line 44
                        echo "                    ";
                        echo twig_escape_filter($this->env, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 44, $this->source); })()), "html", null, true);
                        echo "
                ";
                    }
                    // line 46
                    echo "
                ";
                    // line 47
                    if (twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 47, $this->source); })()), "caption", [], "any", false, false, false, 47)) {
                        // line 48
                        echo "                    <figcaption>
                        <p>";
                        // line 49
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 49, $this->source); })()), "caption", [], "any", false, false, false, 49), "html", null, true);
                        echo "</p>
                    </figcaption>
                ";
                    }
                    // line 52
                    echo "            </figure>
        ";
                }
                // line 54
                echo "    ";
            }
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function macro_setFilters($__image__ = null, $__altText__ = null, $__type__ = null, $__originalWidth__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "image" => $__image__,
            "altText" => $__altText__,
            "type" => $__type__,
            "originalWidth" => $__originalWidth__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "setFilters"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "setFilters"));

            // line 4
            echo "
    ";
            // line 5
            $context["imgUrl"] = "";
            // line 6
            echo "
    ";
            // line 7
            if (twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 7, $this->source); })()), [0 => "svg", 1 => "gif"])) {
                // line 8
                echo "        ";
                $context["imgUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 8, $this->source); })())));
                // line 9
                echo "        <img src=\"";
                echo twig_escape_filter($this->env, (isset($context["imgUrl"]) || array_key_exists("imgUrl", $context) ? $context["imgUrl"] : (function () { throw new RuntimeError('Variable "imgUrl" does not exist.', 9, $this->source); })()), "html", null, true);
                echo "\"";
                if ((isset($context["altText"]) || array_key_exists("altText", $context) ? $context["altText"] : (function () { throw new RuntimeError('Variable "altText" does not exist.', 9, $this->source); })())) {
                    echo " alt=\"";
                    echo twig_escape_filter($this->env, (isset($context["altText"]) || array_key_exists("altText", $context) ? $context["altText"] : (function () { throw new RuntimeError('Variable "altText" does not exist.', 9, $this->source); })()), "html", null, true);
                    echo "\"";
                }
                echo " />
    ";
            } else {
                // line 11
                echo "        ";
                $context["imgUrl_huge"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter((isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 11, $this->source); })()), ("image_huge_" . (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 11, $this->source); })()))));
                // line 12
                echo "        ";
                $context["imgUrl_big"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter((isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 12, $this->source); })()), ("image_big_" . (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 12, $this->source); })()))));
                // line 13
                echo "        ";
                $context["imgUrl_medium"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter((isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 13, $this->source); })()), ("image_medium_" . (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 13, $this->source); })()))));
                // line 14
                echo "        ";
                $context["imgUrl_small"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter((isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 14, $this->source); })()), ("image_small_" . (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 14, $this->source); })()))));
                // line 15
                echo "        ";
                $context["srcSet"] = ((((((((isset($context["imgUrl_small"]) || array_key_exists("imgUrl_small", $context) ? $context["imgUrl_small"] : (function () { throw new RuntimeError('Variable "imgUrl_small" does not exist.', 15, $this->source); })()) . " 400w, ") . (isset($context["imgUrl_medium"]) || array_key_exists("imgUrl_medium", $context) ? $context["imgUrl_medium"] : (function () { throw new RuntimeError('Variable "imgUrl_medium" does not exist.', 15, $this->source); })())) . " 600w, ") . (isset($context["imgUrl_big"]) || array_key_exists("imgUrl_big", $context) ? $context["imgUrl_big"] : (function () { throw new RuntimeError('Variable "imgUrl_big" does not exist.', 15, $this->source); })())) . " 1200w, ") . (isset($context["imgUrl_huge"]) || array_key_exists("imgUrl_huge", $context) ? $context["imgUrl_huge"] : (function () { throw new RuntimeError('Variable "imgUrl_huge" does not exist.', 15, $this->source); })())) . " 2400w");
                // line 16
                echo "
        ";
                // line 21
                echo "        <img srcset=\"";
                echo twig_escape_filter($this->env, (isset($context["srcSet"]) || array_key_exists("srcSet", $context) ? $context["srcSet"] : (function () { throw new RuntimeError('Variable "srcSet" does not exist.', 21, $this->source); })()), "html", null, true);
                echo "\" sizes=\"100vw\"";
                if ((isset($context["altText"]) || array_key_exists("altText", $context) ? $context["altText"] : (function () { throw new RuntimeError('Variable "altText" does not exist.', 21, $this->source); })())) {
                    echo " alt=\"";
                    echo twig_escape_filter($this->env, (isset($context["altText"]) || array_key_exists("altText", $context) ? $context["altText"] : (function () { throw new RuntimeError('Variable "altText" does not exist.', 21, $this->source); })()), "html", null, true);
                    echo "\"";
                }
                echo " width=\"";
                echo twig_escape_filter($this->env, (isset($context["originalWidth"]) || array_key_exists("originalWidth", $context) ? $context["originalWidth"] : (function () { throw new RuntimeError('Variable "originalWidth" does not exist.', 21, $this->source); })()), "html", null, true);
                echo "\"/>
        <noscript>
            <img src=\"";
                // line 23
                echo twig_escape_filter($this->env, (isset($context["imgUrl_big"]) || array_key_exists("imgUrl_big", $context) ? $context["imgUrl_big"] : (function () { throw new RuntimeError('Variable "imgUrl_big" does not exist.', 23, $this->source); })()), "html", null, true);
                echo "\"";
                if ((isset($context["altText"]) || array_key_exists("altText", $context) ? $context["altText"] : (function () { throw new RuntimeError('Variable "altText" does not exist.', 23, $this->source); })())) {
                    echo " alt=\"";
                    echo twig_escape_filter($this->env, (isset($context["altText"]) || array_key_exists("altText", $context) ? $context["altText"] : (function () { throw new RuntimeError('Variable "altText" does not exist.', 23, $this->source); })()), "html", null, true);
                    echo "\"";
                }
                echo " />
        </noscript>
    ";
            }
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "PageParts/ImagePagePart/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 23,  199 => 21,  196 => 16,  193 => 15,  190 => 14,  187 => 13,  184 => 12,  181 => 11,  169 => 9,  166 => 8,  164 => 7,  161 => 6,  159 => 5,  156 => 4,  134 => 3,  122 => 54,  118 => 52,  112 => 49,  109 => 48,  107 => 47,  104 => 46,  98 => 44,  92 => 41,  83 => 40,  81 => 39,  78 => 38,  76 => 37,  73 => 36,  70 => 35,  68 => 34,  65 => 33,  59 => 31,  56 => 30,  53 => 29,  51 => 28,  48 => 27,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import _self as buildImage %}

{% macro setFilters(image, altText, type, originalWidth) %}

    {% set imgUrl = '' %}

    {% if type in ['svg', 'gif'] %}
        {% set imgUrl = absolute_url(asset(image)) %}
        <img src=\"{{ imgUrl }}\"{% if altText %} alt=\"{{ altText }}\"{% endif %} />
    {% else %}
        {% set imgUrl_huge =    asset(image | imagine_filter('image_huge_' ~ type)) %}
        {% set imgUrl_big =     asset(image | imagine_filter('image_big_' ~ type)) %}
        {% set imgUrl_medium =  asset(image | imagine_filter('image_medium_' ~ type)) %}
        {% set imgUrl_small =   asset(image | imagine_filter('image_small_' ~ type)) %}
        {% set srcSet =  imgUrl_small ~ ' 400w, ' ~ imgUrl_medium ~ ' 600w, ' ~ imgUrl_big ~ ' 1200w, ' ~ imgUrl_huge ~ ' 2400w' %}

        {#
            if the container has a max-width, for example 1130px, use:
            sizes=\"(min-width: 1130px) 1130px, 100vw\"
        #}
        <img srcset=\"{{ srcSet }}\" sizes=\"100vw\"{% if altText %} alt=\"{{ altText }}\"{% endif %} width=\"{{ originalWidth }}\"/>
        <noscript>
            <img src=\"{{ imgUrl_big }}\"{% if altText %} alt=\"{{ altText }}\"{% endif %} />
        </noscript>
    {% endif %}
{% endmacro %}

{% if resource.media is not empty %}
    {% set image %}
        {% set imageType = resource.media.originalFilename|lower|split('.')|last %}
        {{ buildImage.setFilters(resource.media.url, resource.altText, imageType, resource.media.metadata.original_width) }}
    {% endset %}

    {% if resource.media is not empty %}
        {% if app.request %}
            <figure class=\"image-pp\">
                {% set imageType = resource.media.originalFilename|lower|split('.')|last %}

                {% if resource.link is defined and resource.link != '' %}
                    <a href=\"{{ resource.link | replace_url }}\" {% if resource.openinnewwindow %}target=\"_blank\" rel=\"noopener\"{% endif %}>
                        {{ image }}
                    </a>
                {% else %}
                    {{ image }}
                {% endif %}

                {% if resource.caption %}
                    <figcaption>
                        <p>{{ resource.caption }}</p>
                    </figcaption>
                {% endif %}
            </figure>
        {% endif %}
    {% endif %}
{% endif %}
", "PageParts/ImagePagePart/view.html.twig", "/Users/macbook/Documents/quoc/admin-blog-api-/templates/PageParts/ImagePagePart/view.html.twig");
    }
}
