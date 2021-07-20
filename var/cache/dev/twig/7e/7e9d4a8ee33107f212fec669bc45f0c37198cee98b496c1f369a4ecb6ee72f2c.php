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

/* PageParts/VideoPagePart/view.html.twig */
class __TwigTemplate_bc183eb12cbea4ea9fd1b5341000e04291108a2954d7c68b760bcb3239b266bb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PageParts/VideoPagePart/view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PageParts/VideoPagePart/view.html.twig"));

        // line 1
        $macros["buildImage"] = $this->macros["buildImage"] = $this;
        // line 2
        echo "
";
        // line 23
        echo "

";
        // line 25
        if ((twig_get_attribute($this->env, $this->source, ($context["resource"] ?? null), "video", [], "any", true, true, false, 25) && twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 25, $this->source); })()), "video", [], "any", false, false, false, 25))) {
            // line 26
            echo "    <div class=\"video-pp\">
        ";
            // line 27
            $context["videoImage"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/img/general/video-pp--default.svg");
            // line 28
            echo "        ";
            $context["imageType"] = "jpg";
            // line 29
            echo "        ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 29, $this->source); })()), "thumbnail", [], "any", false, false, false, 29))) {
                // line 30
                echo "            ";
                $context["videoImage"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 30, $this->source); })()), "thumbnail", [], "any", false, false, false, 30), "url", [], "any", false, false, false, 30), "optim"));
                // line 31
                echo "            ";
                $context["imageType"] = twig_last($this->env, twig_split_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 31, $this->source); })()), "thumbnail", [], "any", false, false, false, 31), "originalFilename", [], "any", false, false, false, 31)), "."));
                // line 32
                echo "        ";
            }
            // line 33
            echo "
        ";
            // line 34
            $context["handler"] = twig_get_attribute($this->env, $this->source, (isset($context["mediamanager"]) || array_key_exists("mediamanager", $context) ? $context["mediamanager"] : (function () { throw new RuntimeError('Variable "mediamanager" does not exist.', 34, $this->source); })()), "getHandler", [0 => twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 34, $this->source); })()), "video", [], "any", false, false, false, 34)], "method", false, false, false, 34);
            // line 35
            echo "        ";
            $context["helper"] = twig_get_attribute($this->env, $this->source, (isset($context["handler"]) || array_key_exists("handler", $context) ? $context["handler"] : (function () { throw new RuntimeError('Variable "handler" does not exist.', 35, $this->source); })()), "getFormHelper", [0 => twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 35, $this->source); })()), "video", [], "any", false, false, false, 35)], "method", false, false, false, 35);
            // line 36
            echo "
        ";
            // line 37
            if ((twig_get_attribute($this->env, $this->source, (isset($context["helper"]) || array_key_exists("helper", $context) ? $context["helper"] : (function () { throw new RuntimeError('Variable "helper" does not exist.', 37, $this->source); })()), "type", [], "any", false, false, false, 37) == "youtube")) {
                // line 38
                echo "            ";
                $context["videoEmbedUrl"] = ("//www.youtube.com/embed/" . twig_get_attribute($this->env, $this->source, (isset($context["helper"]) || array_key_exists("helper", $context) ? $context["helper"] : (function () { throw new RuntimeError('Variable "helper" does not exist.', 38, $this->source); })()), "code", [], "any", false, false, false, 38));
                // line 39
                echo "        ";
            } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["helper"]) || array_key_exists("helper", $context) ? $context["helper"] : (function () { throw new RuntimeError('Variable "helper" does not exist.', 39, $this->source); })()), "type", [], "any", false, false, false, 39) == "vimeo")) {
                // line 40
                echo "            ";
                $context["videoEmbedUrl"] = ("//player.vimeo.com/video/" . twig_get_attribute($this->env, $this->source, (isset($context["helper"]) || array_key_exists("helper", $context) ? $context["helper"] : (function () { throw new RuntimeError('Variable "helper" does not exist.', 40, $this->source); })()), "code", [], "any", false, false, false, 40));
                // line 41
                echo "        ";
            } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["helper"]) || array_key_exists("helper", $context) ? $context["helper"] : (function () { throw new RuntimeError('Variable "helper" does not exist.', 41, $this->source); })()), "type", [], "any", false, false, false, 41) == "dailymotion")) {
                // line 42
                echo "            ";
                $context["videoEmbedUrl"] = ("//www.dailymotion.com/embed/video/" . twig_get_attribute($this->env, $this->source, (isset($context["helper"]) || array_key_exists("helper", $context) ? $context["helper"] : (function () { throw new RuntimeError('Variable "helper" does not exist.', 42, $this->source); })()), "code", [], "any", false, false, false, 42));
                // line 43
                echo "        ";
            }
            // line 44
            echo "
        <div class=\"videolink\">
            <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, (isset($context["videoEmbedUrl"]) || array_key_exists("videoEmbedUrl", $context) ? $context["videoEmbedUrl"] : (function () { throw new RuntimeError('Variable "videoEmbedUrl" does not exist.', 46, $this->source); })()), "html", null, true);
            echo "\" target=\"_blank\" rel=\"noopener\" class=\"js-videolink-play-link videolink__video-link\" data-video-provider=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["helper"]) || array_key_exists("helper", $context) ? $context["helper"] : (function () { throw new RuntimeError('Variable "helper" does not exist.', 46, $this->source); })()), "type", [], "any", false, false, false, 46), "html", null, true);
            echo "\" data-video-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["helper"]) || array_key_exists("helper", $context) ? $context["helper"] : (function () { throw new RuntimeError('Variable "helper" does not exist.', 46, $this->source); })()), "code", [], "any", false, false, false, 46), "html", null, true);
            echo "\" data-make-fluid=\"true\">
                <i class=\"videolink__video-link__icon icon icon--play\"></i>
                ";
            // line 48
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 48, $this->source); })()), "thumbnail", [], "any", false, false, false, 48))) {
                // line 49
                echo "                    ";
                echo twig_call_macro($macros["buildImage"], "macro_setFilters", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 49, $this->source); })()), "thumbnail", [], "any", false, false, false, 49), "url", [], "any", false, false, false, 49), twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 49, $this->source); })()), "caption", [], "any", false, false, false, 49), (isset($context["imageType"]) || array_key_exists("imageType", $context) ? $context["imageType"] : (function () { throw new RuntimeError('Variable "imageType" does not exist.', 49, $this->source); })())], 49, $context, $this->getSourceContext());
                echo "
                ";
            } else {
                // line 51
                echo "                    <img class=\"video-pp__link__img\" src=\"";
                echo twig_escape_filter($this->env, (("http://i.ytimg.com/vi/" . twig_get_attribute($this->env, $this->source, (isset($context["helper"]) || array_key_exists("helper", $context) ? $context["helper"] : (function () { throw new RuntimeError('Variable "helper" does not exist.', 51, $this->source); })()), "code", [], "any", false, false, false, 51)) . "/maxresdefault.jpg"), "html", null, true);
                echo "\" alt=\"\">
                ";
            }
            // line 53
            echo "            </a>
            <div class=\"js-videolink-container videolink__video-container\"></div>
        </div>

        ";
            // line 57
            if (twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 57, $this->source); })()), "caption", [], "any", false, false, false, 57)) {
                // line 58
                echo "            <div class=\"video-pp__caption\">
                <p class=\"video-pp__caption__text\">";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 59, $this->source); })()), "caption", [], "any", false, false, false, 59), "html", null, true);
                echo "</p>
            </div>
        ";
            }
            // line 62
            echo "    </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function macro_setFilters($__image__ = null, $__altText__ = null, $__type__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "image" => $__image__,
            "altText" => $__altText__,
            "type" => $__type__,
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
                echo "        <img class=\"video-pp__link__img\" src=\"";
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
                $context["srcSet"] = ((((((((isset($context["imgUrl_small"]) || array_key_exists("imgUrl_small", $context) ? $context["imgUrl_small"] : (function () { throw new RuntimeError('Variable "imgUrl_small" does not exist.', 15, $this->source); })()) . " 400w,") . (isset($context["imgUrl_medium"]) || array_key_exists("imgUrl_medium", $context) ? $context["imgUrl_medium"] : (function () { throw new RuntimeError('Variable "imgUrl_medium" does not exist.', 15, $this->source); })())) . " 600w,") . (isset($context["imgUrl_big"]) || array_key_exists("imgUrl_big", $context) ? $context["imgUrl_big"] : (function () { throw new RuntimeError('Variable "imgUrl_big" does not exist.', 15, $this->source); })())) . " 1200w,") . (isset($context["imgUrl_huge"]) || array_key_exists("imgUrl_huge", $context) ? $context["imgUrl_huge"] : (function () { throw new RuntimeError('Variable "imgUrl_huge" does not exist.', 15, $this->source); })())) . " 2400w");
                // line 16
                echo "
        <img class=\"video-pp__link__img\" srcset=\"";
                // line 17
                echo twig_escape_filter($this->env, (isset($context["srcSet"]) || array_key_exists("srcSet", $context) ? $context["srcSet"] : (function () { throw new RuntimeError('Variable "srcSet" does not exist.', 17, $this->source); })()), "html", null, true);
                echo "\"";
                if ((isset($context["altText"]) || array_key_exists("altText", $context) ? $context["altText"] : (function () { throw new RuntimeError('Variable "altText" does not exist.', 17, $this->source); })())) {
                    echo " sizes=\"100vw\" alt=\"";
                    echo twig_escape_filter($this->env, (isset($context["altText"]) || array_key_exists("altText", $context) ? $context["altText"] : (function () { throw new RuntimeError('Variable "altText" does not exist.', 17, $this->source); })()), "html", null, true);
                    echo "\"";
                }
                echo "/>
        <noscript>
            <img class=\"video-pp__link__img\" src=\"";
                // line 19
                echo twig_escape_filter($this->env, (isset($context["imgUrl_big"]) || array_key_exists("imgUrl_big", $context) ? $context["imgUrl_big"] : (function () { throw new RuntimeError('Variable "imgUrl_big" does not exist.', 19, $this->source); })()), "html", null, true);
                echo "\"";
                if ((isset($context["altText"]) || array_key_exists("altText", $context) ? $context["altText"] : (function () { throw new RuntimeError('Variable "altText" does not exist.', 19, $this->source); })())) {
                    echo " alt=\"";
                    echo twig_escape_filter($this->env, (isset($context["altText"]) || array_key_exists("altText", $context) ? $context["altText"] : (function () { throw new RuntimeError('Variable "altText" does not exist.', 19, $this->source); })()), "html", null, true);
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
        return "PageParts/VideoPagePart/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 19,  225 => 17,  222 => 16,  219 => 15,  216 => 14,  213 => 13,  210 => 12,  207 => 11,  195 => 9,  192 => 8,  190 => 7,  187 => 6,  185 => 5,  182 => 4,  161 => 3,  149 => 62,  143 => 59,  140 => 58,  138 => 57,  132 => 53,  126 => 51,  120 => 49,  118 => 48,  109 => 46,  105 => 44,  102 => 43,  99 => 42,  96 => 41,  93 => 40,  90 => 39,  87 => 38,  85 => 37,  82 => 36,  79 => 35,  77 => 34,  74 => 33,  71 => 32,  68 => 31,  65 => 30,  62 => 29,  59 => 28,  57 => 27,  54 => 26,  52 => 25,  48 => 23,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import _self as buildImage %}

{% macro setFilters(image, altText, type) %}

    {% set imgUrl = '' %}

    {% if type in ['svg', 'gif'] %}
        {% set imgUrl = absolute_url(asset(image)) %}
        <img class=\"video-pp__link__img\" src=\"{{ imgUrl }}\"{% if altText %} alt=\"{{ altText }}\"{% endif %} />
    {% else %}
        {% set imgUrl_huge =    asset(image | imagine_filter('image_huge_' ~ type)) %}
        {% set imgUrl_big =     asset(image | imagine_filter('image_big_' ~ type)) %}
        {% set imgUrl_medium =  asset(image | imagine_filter('image_medium_' ~ type)) %}
        {% set imgUrl_small =   asset(image | imagine_filter('image_small_' ~ type)) %}
        {% set srcSet = imgUrl_small ~ ' 400w,' ~ imgUrl_medium ~ ' 600w,' ~ imgUrl_big ~ ' 1200w,' ~ imgUrl_huge ~ ' 2400w'%}

        <img class=\"video-pp__link__img\" srcset=\"{{ srcSet }}\"{% if altText %} sizes=\"100vw\" alt=\"{{ altText }}\"{% endif %}/>
        <noscript>
            <img class=\"video-pp__link__img\" src=\"{{ imgUrl_big }}\"{% if altText %} alt=\"{{ altText }}\"{% endif %} />
        </noscript>
    {% endif %}
{% endmacro %}


{% if resource.video is defined and resource.video %}
    <div class=\"video-pp\">
        {% set videoImage = asset('frontend/img/general/video-pp--default.svg') %}
        {% set imageType = 'jpg' %}
        {% if resource.thumbnail is not empty %}
            {% set videoImage = asset(resource.thumbnail.url|imagine_filter('optim')) %}
            {% set imageType = resource.thumbnail.originalFilename|lower|split('.')|last %}
        {% endif %}

        {% set handler = mediamanager.getHandler(resource.video) %}
        {% set helper = handler.getFormHelper(resource.video) %}

        {% if helper.type == 'youtube' %}
            {% set videoEmbedUrl = \"//www.youtube.com/embed/\" ~ helper.code %}
        {% elseif helper.type == 'vimeo' %}
            {% set videoEmbedUrl = \"//player.vimeo.com/video/\" ~ helper.code %}
        {% elseif helper.type == 'dailymotion' %}
            {% set videoEmbedUrl = \"//www.dailymotion.com/embed/video/\" ~ helper.code %}
        {% endif %}

        <div class=\"videolink\">
            <a href=\"{{ videoEmbedUrl }}\" target=\"_blank\" rel=\"noopener\" class=\"js-videolink-play-link videolink__video-link\" data-video-provider=\"{{ helper.type }}\" data-video-id=\"{{ helper.code }}\" data-make-fluid=\"true\">
                <i class=\"videolink__video-link__icon icon icon--play\"></i>
                {% if resource.thumbnail is not empty %}
                    {{ buildImage.setFilters(resource.thumbnail.url, resource.caption, imageType) }}
                {% else %}
                    <img class=\"video-pp__link__img\" src=\"{{ 'http://i.ytimg.com/vi/' ~ helper.code ~ '/maxresdefault.jpg' }}\" alt=\"\">
                {% endif %}
            </a>
            <div class=\"js-videolink-container videolink__video-container\"></div>
        </div>

        {% if resource.caption %}
            <div class=\"video-pp__caption\">
                <p class=\"video-pp__caption__text\">{{ resource.caption }}</p>
            </div>
        {% endif %}
    </div>
{% endif %}
", "PageParts/VideoPagePart/view.html.twig", "/Users/macbook/Documents/quoc/admin-blog-api-/templates/PageParts/VideoPagePart/view.html.twig");
    }
}
