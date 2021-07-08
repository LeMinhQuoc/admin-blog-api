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

/* @KunstmaanMedia/Form/formWidgets.html.twig */
class __TwigTemplate_f2a300bfdc64580934cc73a15a241f4c00e2fa988a5dfe5bd7bdfd2e01ec1142 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'iconfont_widget' => [$this, 'block_iconfont_widget'],
            'media_widget' => [$this, 'block_media_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanMedia/Form/formWidgets.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanMedia/Form/formWidgets.html.twig"));

        // line 1
        $this->displayBlock('iconfont_widget', $context, $blocks);
        // line 48
        echo "

";
        // line 50
        $this->displayBlock('media_widget', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_iconfont_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "iconfont_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "iconfont_widget"));

        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "        <!-- Icon Chooser -->
        <div id=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "_widget\" class=\"icon-chooser media-chooser ";
        if (twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "ent", [], "any", true, true, false, 4)) {
            echo "media-chooser--choosen";
        }
        echo " js-icon-chooser\" data-css-link=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["loader_object"]) || array_key_exists("loader_object", $context) ? $context["loader_object"] : (function () { throw new RuntimeError('Variable "loader_object" does not exist.', 4, $this->source); })()), "cssLink", [], "any", false, false, false, 4), "html", null, true);
        echo "\" data-widget-id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "\">
            <input type=\"hidden\" name=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("value", $context)) ? (_twig_default_filter((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 5, $this->source); })()), "")) : ("")), "html", null, true);
        echo "\" class=\"js-icon-chooser__input\"/>

            <!-- Icon Chooser Preview -->
            <div class=\"media-chooser__preview\">
                <figure class=\"thumbnail\">
                    <div class=\"icon-chooser__preview js-icon-chooser__preview ";
        // line 10
        echo twig_escape_filter($this->env, ((array_key_exists("value", $context)) ? (_twig_default_filter((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 10, $this->source); })()), "")) : ("")), "html", null, true);
        echo "\"></div>
                </figure>

                <!-- Icon Chooser delete button -->
                <button type=\"button\" class=\"btn media-chooser__preview__del-btn js-icon-chooser__close\">
                    <i class=\"fa fa-trash-o\"></i>
                </button>
            </div>

            <!-- Icon Chooser choose button -->
            <button type=\"button\" class=\"btn btn-default btn--raise-on-hover media-chooser__choose-btn js-icon-chooser__choose\" data-toggle=\"modal\" data-target=\"#";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "_iconChooserModal\" data-link=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanMediaBundle_icon_font_chooser", ["loader" => (isset($context["loader"]) || array_key_exists("loader", $context) ? $context["loader"] : (function () { throw new RuntimeError('Variable "loader" does not exist.', 20, $this->source); })()), "loader_data" => (isset($context["loader_data"]) || array_key_exists("loader_data", $context) ? $context["loader_data"] : (function () { throw new RuntimeError('Variable "loader_data" does not exist.', 20, $this->source); })())]), "html", null, true);
        echo "\">
                <i class=\"fa fa-image btn__icon media-chooser__choose-btn__icon\"></i>
                ";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("media.widget.choose"), "html", null, true);
        echo "
            </button>
        </div>

        <!-- Icon Chooser Modal -->
        <div class=\"js-ajax-modal modal fade\" id=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "_iconChooserModal\" role=\"dialog\" aria-labelledby=\"iconhooserModal\" aria-hidden=\"true\" data-loaded=\"false\" data-widget-id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "\">
            <div class=\"modal-dialog modal-lg\">
                <div class=\"modal-content\">

                    <!-- Header -->
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">
                            <i class=\"fa fa-times\"></i>
                        </button>
                        <h3 class=\"modal-title\">
                            ";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("media.widget.icon_chooser"), "html", null, true);
        echo "
                        </h3>
                    </div>

                    <!-- Body -->
                    <div class=\"js-ajax-modal-body modal-body ajax-modal__body\"></div>
                </div>
            </div>
        </div>
    ";
        $___internal_0d29d1ec80bdfdfe22dc53d625eda5d8a77e37f34e7b39458160bf72b6de82ab_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 2
        echo twig_spaceless($___internal_0d29d1ec80bdfdfe22dc53d625eda5d8a77e37f34e7b39458160bf72b6de82ab_);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 50
    public function block_media_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "media_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "media_widget"));

        // line 51
        ob_start();
        // line 52
        echo "    <div id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 52, $this->source); })()), "html", null, true);
        echo "-widget\" class=\"media-chooser ";
        if (twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "ent", [], "any", true, true, false, 52)) {
            echo "media-chooser--choosen";
        }
        echo "\">
        <!-- Hidden input -->
        <input id=\"";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 54, $this->source); })()), "html", null, true);
        echo "\" type=\"hidden\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 54, $this->source); })()), "html", null, true);
        echo "\" value=\"";
        if (twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "id", [], "any", true, true, false, 54)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 54, $this->source); })()), "id", [], "any", false, false, false, 54), "html", null, true);
        }
        echo "\">

        <!-- Preview -->
        <div class=\"media-chooser__preview\">
            <figure class=\"thumbnail\">
                ";
        // line 59
        if (twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "ent", [], "any", true, true, false, 59)) {
            // line 60
            echo "                    ";
            $context["media"] = twig_get_attribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 60, $this->source); })()), "ent", [], "any", false, false, false, 60);
            // line 61
            echo "                    ";
            $context["handler"] = twig_get_attribute($this->env, $this->source, (isset($context["mediamanager"]) || array_key_exists("mediamanager", $context) ? $context["mediamanager"] : (function () { throw new RuntimeError('Variable "mediamanager" does not exist.', 61, $this->source); })()), "getHandler", [0 => (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 61, $this->source); })())], "method", false, false, false, 61);
            // line 62
            echo "                    ";
            $context["imageurl"] = twig_get_attribute($this->env, $this->source, (isset($context["handler"]) || array_key_exists("handler", $context) ? $context["handler"] : (function () { throw new RuntimeError('Variable "handler" does not exist.', 62, $this->source); })()), "getImageUrl", [0 => (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 62, $this->source); })()), 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "request", [], "any", false, false, false, 62), "basePath", [], "any", false, false, false, 62)], "method", false, false, false, 62);
            // line 63
            echo "                    ";
            if (( !twig_test_empty((isset($context["imageurl"]) || array_key_exists("imageurl", $context) ? $context["imageurl"] : (function () { throw new RuntimeError('Variable "imageurl" does not exist.', 63, $this->source); })())) && (twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 63, $this->source); })()), "location", [], "any", false, false, false, 63) == "local"))) {
                // line 64
                echo "                        ";
                if (((twig_last($this->env, twig_split_filter($this->env, twig_lower_filter($this->env, (isset($context["imageurl"]) || array_key_exists("imageurl", $context) ? $context["imageurl"] : (function () { throw new RuntimeError('Variable "imageurl" does not exist.', 64, $this->source); })())), ".")) == "svg") || twig_in_filter("image/svg", twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 64, $this->source); })()), "contentType", [], "any", false, false, false, 64)))) {
                    // line 65
                    echo "                            ";
                    $context["imageurlretina"] = (isset($context["imageurl"]) || array_key_exists("imageurl", $context) ? $context["imageurl"] : (function () { throw new RuntimeError('Variable "imageurl" does not exist.', 65, $this->source); })());
                    // line 66
                    echo "                        ";
                } else {
                    // line 67
                    echo "                            ";
                    $context["imageurlretina"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter((isset($context["imageurl"]) || array_key_exists("imageurl", $context) ? $context["imageurl"] : (function () { throw new RuntimeError('Variable "imageurl" does not exist.', 67, $this->source); })()), "media_list_thumbnail_retina"));
                    // line 68
                    echo "                            ";
                    $context["imageurl"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter((isset($context["imageurl"]) || array_key_exists("imageurl", $context) ? $context["imageurl"] : (function () { throw new RuntimeError('Variable "imageurl" does not exist.', 68, $this->source); })()), "media_list_thumbnail"));
                    // line 69
                    echo "                        ";
                }
                // line 70
                echo "                    ";
            }
            // line 71
            echo "                    ";
            if ((isset($context["imageurl"]) || array_key_exists("imageurl", $context) ? $context["imageurl"] : (function () { throw new RuntimeError('Variable "imageurl" does not exist.', 71, $this->source); })())) {
                // line 72
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, (isset($context["imageurl"]) || array_key_exists("imageurl", $context) ? $context["imageurl"] : (function () { throw new RuntimeError('Variable "imageurl" does not exist.', 72, $this->source); })()), "html", null, true);
                echo "\" srcset=\"";
                echo twig_escape_filter($this->env, (isset($context["imageurl"]) || array_key_exists("imageurl", $context) ? $context["imageurl"] : (function () { throw new RuntimeError('Variable "imageurl" does not exist.', 72, $this->source); })()), "html", null, true);
                echo " 1x";
                ((array_key_exists("imageurlretina", $context)) ? (print (twig_escape_filter($this->env, ((", " . (isset($context["imageurlretina"]) || array_key_exists("imageurlretina", $context) ? $context["imageurlretina"] : (function () { throw new RuntimeError('Variable "imageurlretina" does not exist.', 72, $this->source); })())) . " 2x"), "html", null, true))) : (print ("")));
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 72, $this->source); })()), "name", [], "any", false, false, false, 72), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 72, $this->source); })()), "html", null, true);
                echo "__preview__img\" class=\"thumbnail-img media-chooser__preview__img\">
                        <figcaption id=\"";
                // line 73
                echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 73, $this->source); })()), "html", null, true);
                echo "__preview__title\" class=\"media-chooser__preview__title\">
                            ";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 74, $this->source); })()), "name", [], "any", false, false, false, 74), "html", null, true);
                echo "
                        </figcaption>
                    ";
            } else {
                // line 77
                echo "                        <i class=\"fa fa-file-o media-thumbnail__icon\"></i>
                        <figcaption id=\"";
                // line 78
                echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 78, $this->source); })()), "html", null, true);
                echo "__preview__title\" class=\"media-chooser__preview__title\">
                            ";
                // line 79
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 79, $this->source); })()), "name", [], "any", false, false, false, 79), "html", null, true);
                echo "
                        </figcaption>
                    ";
            }
            // line 82
            echo "                ";
        } else {
            // line 83
            echo "                    <img id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 83, $this->source); })()), "html", null, true);
            echo "__preview__img\" class=\"thumbnail-img media-chooser__preview__img\">
                    <figcaption id=\"";
            // line 84
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 84, $this->source); })()), "html", null, true);
            echo "__preview__title\" class=\"media-chooser__preview__title\"></figcaption>
                ";
        }
        // line 86
        echo "            </figure>

            <button type=\"button\" id=\"";
        // line 88
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 88, $this->source); })()), "html", null, true);
        echo "__preview__del-btn\" class=\"js-media-chooser-del-preview-btn btn media-chooser__preview__del-btn\" data-linked-id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 88, $this->source); })()), "html", null, true);
        echo "\">
                <i class=\"fa fa-trash\"></i>
            </button>
        </div>


        <!-- Select Button -->
        <button type=\"button\" class=\"btn btn-default btn--raise-on-hover media-chooser__choose-btn\" data-toggle=\"modal\" data-target=\"#";
        // line 95
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 95, $this->source); })()), "html", null, true);
        echo "-mediaChooserModal\" data-link=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["chooser"]) || array_key_exists("chooser", $context) ? $context["chooser"] : (function () { throw new RuntimeError('Variable "chooser" does not exist.', 95, $this->source); })()), ["type" => (isset($context["mediatype"]) || array_key_exists("mediatype", $context) ? $context["mediatype"] : (function () { throw new RuntimeError('Variable "mediatype" does not exist.', 95, $this->source); })())]), "html", null, true);
        echo "\">
            <i class=\"fa fa-image btn__icon media-chooser__choose-btn__icon\"></i>
            ";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("media.widget.choose"), "html", null, true);
        echo "
        </button>
    </div>


    <!-- Media Chooser Modal -->
    <div class=\"js-ajax-modal modal fade\" id=\"";
        // line 103
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 103, $this->source); })()), "html", null, true);
        echo "-mediaChooserModal\" role=\"dialog\" aria-labelledby=\"mediaChooserModal\" aria-hidden=\"true\" data-loaded=\"false\" data-linked-input-id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 103, $this->source); })()), "html", null, true);
        echo "\" data-media-chooser=\"true\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">

                <!-- Header -->
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">
                        <i class=\"fa fa-times\"></i>
                    </button>
                    <h3 class=\"modal-title\">
                        ";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("media.widget.media_chooser"), "html", null, true);
        echo "
                    </h3>
                </div>

                <!-- Body -->
                <div class=\"js-ajax-modal-body modal-body ajax-modal__body\"></div>
            </div>
        </div>
    </div>
";
        $___internal_6067658a2f334e8fdba419d80823fd0c4335193123a89794b8cbc08f1ebb8876_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 51
        echo twig_spaceless($___internal_6067658a2f334e8fdba419d80823fd0c4335193123a89794b8cbc08f1ebb8876_);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanMedia/Form/formWidgets.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  348 => 51,  335 => 113,  320 => 103,  311 => 97,  304 => 95,  292 => 88,  288 => 86,  283 => 84,  278 => 83,  275 => 82,  269 => 79,  265 => 78,  262 => 77,  256 => 74,  252 => 73,  239 => 72,  236 => 71,  233 => 70,  230 => 69,  227 => 68,  224 => 67,  221 => 66,  218 => 65,  215 => 64,  212 => 63,  209 => 62,  206 => 61,  203 => 60,  201 => 59,  187 => 54,  177 => 52,  175 => 51,  165 => 50,  155 => 2,  142 => 37,  127 => 27,  119 => 22,  112 => 20,  99 => 10,  89 => 5,  77 => 4,  74 => 3,  71 => 2,  61 => 1,  51 => 50,  47 => 48,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block iconfont_widget %}
    {% apply spaceless %}
        <!-- Icon Chooser -->
        <div id=\"{{ id }}_widget\" class=\"icon-chooser media-chooser {% if(value.ent is defined) %}media-chooser--choosen{% endif %} js-icon-chooser\" data-css-link=\"{{ loader_object.cssLink }}\" data-widget-id=\"{{id}}\">
            <input type=\"hidden\" name=\"{{ full_name }}\" value=\"{{ value|default('') }}\" class=\"js-icon-chooser__input\"/>

            <!-- Icon Chooser Preview -->
            <div class=\"media-chooser__preview\">
                <figure class=\"thumbnail\">
                    <div class=\"icon-chooser__preview js-icon-chooser__preview {{ value|default('') }}\"></div>
                </figure>

                <!-- Icon Chooser delete button -->
                <button type=\"button\" class=\"btn media-chooser__preview__del-btn js-icon-chooser__close\">
                    <i class=\"fa fa-trash-o\"></i>
                </button>
            </div>

            <!-- Icon Chooser choose button -->
            <button type=\"button\" class=\"btn btn-default btn--raise-on-hover media-chooser__choose-btn js-icon-chooser__choose\" data-toggle=\"modal\" data-target=\"#{{ id }}_iconChooserModal\" data-link=\"{{ path('KunstmaanMediaBundle_icon_font_chooser', {'loader': loader, 'loader_data': loader_data }) }}\">
                <i class=\"fa fa-image btn__icon media-chooser__choose-btn__icon\"></i>
                {{ 'media.widget.choose' | trans }}
            </button>
        </div>

        <!-- Icon Chooser Modal -->
        <div class=\"js-ajax-modal modal fade\" id=\"{{ id }}_iconChooserModal\" role=\"dialog\" aria-labelledby=\"iconhooserModal\" aria-hidden=\"true\" data-loaded=\"false\" data-widget-id=\"{{ id }}\">
            <div class=\"modal-dialog modal-lg\">
                <div class=\"modal-content\">

                    <!-- Header -->
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">
                            <i class=\"fa fa-times\"></i>
                        </button>
                        <h3 class=\"modal-title\">
                            {{ 'media.widget.icon_chooser' | trans }}
                        </h3>
                    </div>

                    <!-- Body -->
                    <div class=\"js-ajax-modal-body modal-body ajax-modal__body\"></div>
                </div>
            </div>
        </div>
    {% endapply %}
{% endblock iconfont_widget %}


{% block media_widget %}
{% apply spaceless %}
    <div id=\"{{ id }}-widget\" class=\"media-chooser {% if(value.ent is defined) %}media-chooser--choosen{% endif %}\">
        <!-- Hidden input -->
        <input id=\"{{ id }}\" type=\"hidden\" name=\"{{ full_name }}\" value=\"{% if(value.id is defined) %}{{ value.id }}{% endif %}\">

        <!-- Preview -->
        <div class=\"media-chooser__preview\">
            <figure class=\"thumbnail\">
                {% if(value.ent is defined) %}
                    {% set media = value.ent %}
                    {% set handler = mediamanager.getHandler(media) %}
                    {% set imageurl =  handler.getImageUrl(media, app.request.basePath) %}
                    {% if imageurl is not empty and media.location == 'local' %}
                        {% if imageurl|lower|split('.')|last == 'svg' or 'image/svg' in media.contentType %}
                            {% set imageurlretina = imageurl %}
                        {% else %}
                            {% set imageurlretina = asset(imageurl | imagine_filter('media_list_thumbnail_retina')) %}
                            {% set imageurl = asset(imageurl | imagine_filter('media_list_thumbnail')) %}
                        {% endif %}
                    {% endif %}
                    {% if imageurl %}
                        <img src=\"{{ imageurl }}\" srcset=\"{{ imageurl }} 1x{{ imageurlretina is defined ? ', ' ~ imageurlretina ~ \" 2x\" }}\" alt=\"{{ media.name }}\" id=\"{{ id }}__preview__img\" class=\"thumbnail-img media-chooser__preview__img\">
                        <figcaption id=\"{{ id }}__preview__title\" class=\"media-chooser__preview__title\">
                            {{ media.name }}
                        </figcaption>
                    {% else %}
                        <i class=\"fa fa-file-o media-thumbnail__icon\"></i>
                        <figcaption id=\"{{ id }}__preview__title\" class=\"media-chooser__preview__title\">
                            {{ media.name }}
                        </figcaption>
                    {% endif %}
                {% else %}
                    <img id=\"{{ id }}__preview__img\" class=\"thumbnail-img media-chooser__preview__img\">
                    <figcaption id=\"{{ id }}__preview__title\" class=\"media-chooser__preview__title\"></figcaption>
                {% endif %}
            </figure>

            <button type=\"button\" id=\"{{ id }}__preview__del-btn\" class=\"js-media-chooser-del-preview-btn btn media-chooser__preview__del-btn\" data-linked-id=\"{{ id }}\">
                <i class=\"fa fa-trash\"></i>
            </button>
        </div>


        <!-- Select Button -->
        <button type=\"button\" class=\"btn btn-default btn--raise-on-hover media-chooser__choose-btn\" data-toggle=\"modal\" data-target=\"#{{ id }}-mediaChooserModal\" data-link=\"{{ path(chooser, {'type': mediatype}) }}\">
            <i class=\"fa fa-image btn__icon media-chooser__choose-btn__icon\"></i>
            {{ 'media.widget.choose' | trans }}
        </button>
    </div>


    <!-- Media Chooser Modal -->
    <div class=\"js-ajax-modal modal fade\" id=\"{{ id }}-mediaChooserModal\" role=\"dialog\" aria-labelledby=\"mediaChooserModal\" aria-hidden=\"true\" data-loaded=\"false\" data-linked-input-id=\"{{ id }}\" data-media-chooser=\"true\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">

                <!-- Header -->
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">
                        <i class=\"fa fa-times\"></i>
                    </button>
                    <h3 class=\"modal-title\">
                        {{ 'media.widget.media_chooser' | trans }}
                    </h3>
                </div>

                <!-- Body -->
                <div class=\"js-ajax-modal-body modal-body ajax-modal__body\"></div>
            </div>
        </div>
    </div>
{% endapply %}
{% endblock %}
", "@KunstmaanMedia/Form/formWidgets.html.twig", "/Users/macbook/Documents/quoc/blog-admin/vendor/kunstmaan/media-bundle/Resources/views/Form/formWidgets.html.twig");
    }
}
