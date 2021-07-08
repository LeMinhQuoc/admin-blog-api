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

/* @KunstmaanNode/Form/formWidgets.html.twig */
class __TwigTemplate_771230fef513a00d22367ded5aecaf8dd3f32705773341f17937c57592058429 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'urlchooser_widget' => [$this, 'block_urlchooser_widget'],
            'slug_widget' => [$this, 'block_slug_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanNode/Form/formWidgets.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanNode/Form/formWidgets.html.twig"));

        // line 1
        $this->displayBlock('urlchooser_widget', $context, $blocks);
        // line 75
        echo "
";
        // line 76
        $this->displayBlock('slug_widget', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_urlchooser_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "urlchooser_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "urlchooser_widget"));

        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "        ";
        $context["linkUrl"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "link_url", [], "any", false, false, false, 3), "vars", [], "any", false, false, false, 3);
        // line 4
        echo "
        <div id=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "-urlchooser-widget\" class=\"urlchooser-wrapper\" data-chooser-name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "\">
            <!-- URL Chooser Modal -->
            <div class=\"js-ajax-modal modal fade\" id=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["linkUrl"]) || array_key_exists("linkUrl", $context) ? $context["linkUrl"] : (function () { throw new RuntimeError('Variable "linkUrl" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7), "html", null, true);
        echo "-urlChooserModal\" role=\"dialog\" aria-labelledby=\"urlChooserModal\" aria-hidden=\"true\" data-loaded=\"false\" data-linked-input-id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["linkUrl"]) || array_key_exists("linkUrl", $context) ? $context["linkUrl"] : (function () { throw new RuntimeError('Variable "linkUrl" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7), "html", null, true);
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
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_node.widget.url_chooser"), "html", null, true);
        echo "
                            </h3>
                        </div>

                        <!-- Body -->
                        <div class=\"js-ajax-modal-body modal-body ajax-modal__body\"></div>
                    </div>
                </div>
            </div>

            <div class=\"urlchooser\">
                <div class=\"input-group\">
                    ";
        // line 29
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "link_type", [], "any", true, true, false, 29)) {
            // line 30
            echo "                        ";
            $context["linkType"] = twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "link_type", [], "any", false, false, false, 30);
            // line 31
            echo "                        ";
            $context["label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pagepart.link.internal");
            // line 32
            echo "
                        ";
            // line 33
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["linkType"]) || array_key_exists("linkType", $context) ? $context["linkType"] : (function () { throw new RuntimeError('Variable "linkType" does not exist.', 33, $this->source); })()), "vars", [], "any", false, false, false, 33), "value", [], "any", false, false, false, 33)) {
                // line 34
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["linkType"]) || array_key_exists("linkType", $context) ? $context["linkType"] : (function () { throw new RuntimeError('Variable "linkType" does not exist.', 34, $this->source); })()), "vars", [], "any", false, false, false, 34), "choices", [], "any", false, false, false, 34));
                foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                    // line 35
                    echo "                                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 35) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["linkType"]) || array_key_exists("linkType", $context) ? $context["linkType"] : (function () { throw new RuntimeError('Variable "linkType" does not exist.', 35, $this->source); })()), "vars", [], "any", false, false, false, 35), "value", [], "any", false, false, false, 35))) {
                        // line 36
                        echo "                                    ";
                        $context["label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 36));
                        // line 37
                        echo "                                ";
                    }
                    // line 38
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "                        ";
            }
            // line 40
            echo "
                        <div class=\"input-group-btn\">
                            <button type=\"button\" class=\"btn btn-default urlchooser__link-type\" data-toggle=\"dropdown\" title=\"Select link type\" data-target-id=\"\">
                                ";
            // line 43
            echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 43, $this->source); })()), "html", null, true);
            echo " <span class=\"caret\"></span>
                            </button>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
                                ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["linkType"]) || array_key_exists("linkType", $context) ? $context["linkType"] : (function () { throw new RuntimeError('Variable "linkType" does not exist.', 46, $this->source); })()), "vars", [], "any", false, false, false, 46), "choices", [], "any", false, false, false, 46));
            foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                // line 47
                echo "                                    <li data-name=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["linkType"]) || array_key_exists("linkType", $context) ? $context["linkType"] : (function () { throw new RuntimeError('Variable "linkType" does not exist.', 47, $this->source); })()), "vars", [], "any", false, false, false, 47), "full_name", [], "any", false, false, false, 47), "html", null, true);
                echo "\" data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["linkType"]) || array_key_exists("linkType", $context) ? $context["linkType"] : (function () { throw new RuntimeError('Variable "linkType" does not exist.', 47, $this->source); })()), "vars", [], "any", false, false, false, 47), "id", [], "any", false, false, false, 47), "html", null, true);
                echo "\" class=\"";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["linkType"] ?? null), "vars", [], "any", false, true, false, 47), "attr", [], "any", true, true, false, 47)) {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["linkType"]) || array_key_exists("linkType", $context) ? $context["linkType"] : (function () { throw new RuntimeError('Variable "linkType" does not exist.', 47, $this->source); })()), "vars", [], "any", false, false, false, 47), "attr", [], "any", false, false, false, 47), "class", [], "any", false, false, false, 47), "html", null, true);
                }
                echo "\" data-value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 47), "html", null, true);
                echo "\">
                                        <a href=\"#\">";
                // line 48
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 48)), "html", null, true);
                echo "</a>
                                    </li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                            </ul>
                            <input type=\"hidden\" name=\"";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["linkType"]) || array_key_exists("linkType", $context) ? $context["linkType"] : (function () { throw new RuntimeError('Variable "linkType" does not exist.', 52, $this->source); })()), "vars", [], "any", false, false, false, 52), "full_name", [], "any", false, false, false, 52), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["linkType"]) || array_key_exists("linkType", $context) ? $context["linkType"] : (function () { throw new RuntimeError('Variable "linkType" does not exist.', 52, $this->source); })()), "vars", [], "any", false, false, false, 52), "data", [], "any", false, false, false, 52), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["linkType"]) || array_key_exists("linkType", $context) ? $context["linkType"] : (function () { throw new RuntimeError('Variable "linkType" does not exist.', 52, $this->source); })()), "vars", [], "any", false, false, false, 52), "id", [], "any", false, false, false, 52), "html", null, true);
            echo "\" class=\"form-control\">
                        </div>
                    ";
        }
        // line 55
        echo "                    <div id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["linkUrl"]) || array_key_exists("linkUrl", $context) ? $context["linkUrl"] : (function () { throw new RuntimeError('Variable "linkUrl" does not exist.', 55, $this->source); })()), "id", [], "any", false, false, false, 55), "html", null, true);
        echo "-widget\" class=\"input-group urlchooser-widget ";
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "link_type", [], "any", true, true, false, 55)) {
            echo "urlchooser__link-url";
        }
        echo "\">
                        ";
        // line 56
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["linkUrl"] ?? null), "attr", [], "any", false, true, false, 56), "choose_url", [], "any", true, true, false, 56)) {
            // line 57
            echo "                            <input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["linkUrl"]) || array_key_exists("linkUrl", $context) ? $context["linkUrl"] : (function () { throw new RuntimeError('Variable "linkUrl" does not exist.', 57, $this->source); })()), "full_name", [], "any", false, false, false, 57), "html", null, true);
            echo "\" value=\"";
            ((twig_get_attribute($this->env, $this->source, (isset($context["linkUrl"]) || array_key_exists("linkUrl", $context) ? $context["linkUrl"] : (function () { throw new RuntimeError('Variable "linkUrl" does not exist.', 57, $this->source); })()), "value", [], "any", false, false, false, 57)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["linkUrl"]) || array_key_exists("linkUrl", $context) ? $context["linkUrl"] : (function () { throw new RuntimeError('Variable "linkUrl" does not exist.', 57, $this->source); })()), "value", [], "any", false, false, false, 57), "html", null, true))) : (print ("")));
            echo "\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["linkUrl"]) || array_key_exists("linkUrl", $context) ? $context["linkUrl"] : (function () { throw new RuntimeError('Variable "linkUrl" does not exist.', 57, $this->source); })()), "id", [], "any", false, false, false, 57), "html", null, true);
            echo "\" class=\"form-control ";
            if ((twig_get_attribute($this->env, $this->source, ($context["linkUrl"] ?? null), "attr", [], "any", true, true, false, 57) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["linkUrl"] ?? null), "attr", [], "any", false, true, false, 57), "class", [], "any", true, true, false, 57))) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["linkUrl"]) || array_key_exists("linkUrl", $context) ? $context["linkUrl"] : (function () { throw new RuntimeError('Variable "linkUrl" does not exist.', 57, $this->source); })()), "attr", [], "any", false, false, false, 57), "class", [], "any", false, false, false, 57), "html", null, true);
            }
            echo "\">
                            <input type=\"text\" disabled=\"disabled\" class=\"form-control js-urlchooser-value\" value=\"";
            // line 58
            ((twig_get_attribute($this->env, $this->source, (isset($context["linkUrl"]) || array_key_exists("linkUrl", $context) ? $context["linkUrl"] : (function () { throw new RuntimeError('Variable "linkUrl" does not exist.', 58, $this->source); })()), "value", [], "any", false, false, false, 58)) ? (print (twig_escape_filter($this->env, $this->extensions['Kunstmaan\NodeBundle\Twig\UrlReplaceTwigExtension']->replaceUrl(twig_get_attribute($this->env, $this->source, (isset($context["linkUrl"]) || array_key_exists("linkUrl", $context) ? $context["linkUrl"] : (function () { throw new RuntimeError('Variable "linkUrl" does not exist.', 58, $this->source); })()), "value", [], "any", false, false, false, 58)), "html", null, true))) : (print ("")));
            echo "\">
                            <span class=\"input-group-btn\">
                        <button type=\"button\" class=\"btn btn-default btn--raise-on-hover\" data-toggle=\"modal\" data-target=\"#";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["linkUrl"]) || array_key_exists("linkUrl", $context) ? $context["linkUrl"] : (function () { throw new RuntimeError('Variable "linkUrl" does not exist.', 60, $this->source); })()), "id", [], "any", false, false, false, 60), "html", null, true);
            echo "-urlChooserModal\" data-link=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanNodeBundle_selecturl");
            echo "\">
                            ";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_node.widget.choose"), "html", null, true);
            echo "
                        </button>
                    </span>
                        ";
        } else {
            // line 65
            echo "                            <input type=\"text\" name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["linkUrl"]) || array_key_exists("linkUrl", $context) ? $context["linkUrl"] : (function () { throw new RuntimeError('Variable "linkUrl" does not exist.', 65, $this->source); })()), "full_name", [], "any", false, false, false, 65), "html", null, true);
            echo "\" value=\"";
            ((twig_get_attribute($this->env, $this->source, (isset($context["linkUrl"]) || array_key_exists("linkUrl", $context) ? $context["linkUrl"] : (function () { throw new RuntimeError('Variable "linkUrl" does not exist.', 65, $this->source); })()), "value", [], "any", false, false, false, 65)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["linkUrl"]) || array_key_exists("linkUrl", $context) ? $context["linkUrl"] : (function () { throw new RuntimeError('Variable "linkUrl" does not exist.', 65, $this->source); })()), "value", [], "any", false, false, false, 65), "html", null, true))) : (print ("")));
            echo "\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["linkUrl"]) || array_key_exists("linkUrl", $context) ? $context["linkUrl"] : (function () { throw new RuntimeError('Variable "linkUrl" does not exist.', 65, $this->source); })()), "id", [], "any", false, false, false, 65), "html", null, true);
            echo "\" class=\"form-control ";
            if ((twig_get_attribute($this->env, $this->source, ($context["linkUrl"] ?? null), "attr", [], "any", true, true, false, 65) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["linkUrl"] ?? null), "attr", [], "any", false, true, false, 65), "class", [], "any", true, true, false, 65))) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["linkUrl"]) || array_key_exists("linkUrl", $context) ? $context["linkUrl"] : (function () { throw new RuntimeError('Variable "linkUrl" does not exist.', 65, $this->source); })()), "attr", [], "any", false, false, false, 65), "class", [], "any", false, false, false, 65), "html", null, true);
            }
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, ($context["linkUrl"] ?? null), "attr", [], "any", true, true, false, 65) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["linkUrl"] ?? null), "attr", [], "any", false, true, false, 65), "placeholder", [], "any", true, true, false, 65))) {
                echo " placeholder=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["linkUrl"]) || array_key_exists("linkUrl", $context) ? $context["linkUrl"] : (function () { throw new RuntimeError('Variable "linkUrl" does not exist.', 65, $this->source); })()), "attr", [], "any", false, false, false, 65), "placeholder", [], "any", false, false, false, 65), "html", null, true);
                echo "\"";
            }
            echo ">
                        ";
        }
        // line 67
        echo "                    </div>
                </div>
            </div>

        </div>

    ";
        $___internal_8dc78e44ec35b3f749f79f58c11fa17e2aae7aff4f436581d58cb20bc450dbcb_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 2
        echo twig_spaceless($___internal_8dc78e44ec35b3f749f79f58c11fa17e2aae7aff4f436581d58cb20bc450dbcb_);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 76
    public function block_slug_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "slug_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "slug_widget"));

        // line 77
        echo "    ";
        ob_start();
        // line 78
        echo "        ";
        $context["url"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_slug", ["url" => (        // line 79
(isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new RuntimeError('Variable "prefix" does not exist.', 79, $this->source); })()) . (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 79, $this->source); })()))]);
        // line 81
        echo "
        ";
        // line 82
        if ((twig_first($this->env, (isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new RuntimeError('Variable "prefix" does not exist.', 82, $this->source); })())) != "/")) {
            // line 83
            echo "            ";
            $context["prefix"] = ("/" . (isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new RuntimeError('Variable "prefix" does not exist.', 83, $this->source); })()));
            // line 84
            echo "        ";
        }
        // line 85
        echo "
        <div id=\"";
        // line 86
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 86, $this->source); })()), "html", null, true);
        echo "-slug-chooser\" class=\"js-slug-chooser slug-chooser\" data-url-prefix=\"";
        echo twig_escape_filter($this->env, (isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new RuntimeError('Variable "prefix" does not exist.', 86, $this->source); })()), "html", null, true);
        echo "\" data-reset=\"";
        echo twig_escape_filter($this->env, (isset($context["reset"]) || array_key_exists("reset", $context) ? $context["reset"] : (function () { throw new RuntimeError('Variable "reset" does not exist.', 86, $this->source); })()), "html", null, true);
        echo "\">
            <div>
                <div class=\"input-group slug-chooser\">
                    ";
        // line 89
        if ( !twig_test_empty((isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new RuntimeError('Variable "prefix" does not exist.', 89, $this->source); })()))) {
            // line 90
            echo "                        <span class=\"input-group-addon js-slug-chooser__prefix\" title=\"";
            echo twig_escape_filter($this->env, (isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new RuntimeError('Variable "prefix" does not exist.', 90, $this->source); })()), "html", null, true);
            echo "\">
                            ";
            // line 91
            echo twig_escape_filter($this->env, (isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new RuntimeError('Variable "prefix" does not exist.', 91, $this->source); })()), "html", null, true);
            echo "
                        </span>
                    ";
        }
        // line 94
        echo "                    <input type=\"text\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 94, $this->source); })()), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 94, $this->source); })()), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("value", $context)) ? (_twig_default_filter((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 94, $this->source); })()), "")) : ("")), "html", null, true);
        echo "\" class=\"js-slug-chooser__input form-control\">
                    <span class=\"input-group-btn\">
                        <button type=\"button\" class=\"js-slug-chooser__reset-btn btn btn-default btn--raise-on-hover\" id=\"";
        // line 96
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 96, $this->source); })()), "html", null, true);
        echo "-slug-chooser__resetbtn\">
                            Reset
                        </button>
                    </span>
                </div>
                <div>
                    <small>
                        ";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_node.form.current_url"), "html", null, true);
        echo ": <a href=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 103, $this->source); })()), "html", null, true);
        echo "\" target=\"_blank\">
                            ";
        // line 104
        echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 104, $this->source); })()), "html", null, true);
        echo "
                        </a>
                    </small>
                </div>
                <div>
                    <small class=\"js-slug-chooser__preview\" style=\"display: none;\">
                        ";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_node.form.updated_url"), "html", null, true);
        echo ": <span></span>
                    </small>
                </div>
            </div>
        </div>
    ";
        $___internal_fabcdf9afaf9b7cd37a9bd984d7c6289bb8ba664868c66917ea991a36417eea1_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 77
        echo twig_spaceless($___internal_fabcdf9afaf9b7cd37a9bd984d7c6289bb8ba664868c66917ea991a36417eea1_);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanNode/Form/formWidgets.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  381 => 77,  372 => 110,  363 => 104,  357 => 103,  347 => 96,  337 => 94,  331 => 91,  326 => 90,  324 => 89,  314 => 86,  311 => 85,  308 => 84,  305 => 83,  303 => 82,  300 => 81,  298 => 79,  296 => 78,  293 => 77,  283 => 76,  273 => 2,  264 => 67,  244 => 65,  237 => 61,  231 => 60,  226 => 58,  213 => 57,  211 => 56,  202 => 55,  192 => 52,  189 => 51,  180 => 48,  167 => 47,  163 => 46,  157 => 43,  152 => 40,  149 => 39,  143 => 38,  140 => 37,  137 => 36,  134 => 35,  129 => 34,  127 => 33,  124 => 32,  121 => 31,  118 => 30,  116 => 29,  101 => 17,  86 => 7,  79 => 5,  76 => 4,  73 => 3,  70 => 2,  60 => 1,  50 => 76,  47 => 75,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block urlchooser_widget %}
    {% apply spaceless %}
        {% set linkUrl = form.link_url.vars %}

        <div id=\"{{ id }}-urlchooser-widget\" class=\"urlchooser-wrapper\" data-chooser-name=\"{{ full_name }}\">
            <!-- URL Chooser Modal -->
            <div class=\"js-ajax-modal modal fade\" id=\"{{ linkUrl.id }}-urlChooserModal\" role=\"dialog\" aria-labelledby=\"urlChooserModal\" aria-hidden=\"true\" data-loaded=\"false\" data-linked-input-id=\"{{ linkUrl.id }}\">
                <div class=\"modal-dialog modal-lg\">
                    <div class=\"modal-content\">

                        <!-- Header -->
                        <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">
                                <i class=\"fa fa-times\"></i>
                            </button>
                            <h3 class=\"modal-title\">
                                {{ 'kuma_node.widget.url_chooser' | trans }}
                            </h3>
                        </div>

                        <!-- Body -->
                        <div class=\"js-ajax-modal-body modal-body ajax-modal__body\"></div>
                    </div>
                </div>
            </div>

            <div class=\"urlchooser\">
                <div class=\"input-group\">
                    {% if form.link_type is defined %}
                        {% set linkType = form.link_type %}
                        {% set label = \"pagepart.link.internal\" | trans %}

                        {% if linkType.vars.value %}
                            {% for choice in linkType.vars.choices %}
                                {% if choice.value == linkType.vars.value %}
                                    {% set label = choice.label | trans %}
                                {% endif %}
                            {% endfor %}
                        {% endif %}

                        <div class=\"input-group-btn\">
                            <button type=\"button\" class=\"btn btn-default urlchooser__link-type\" data-toggle=\"dropdown\" title=\"Select link type\" data-target-id=\"\">
                                {{ label }} <span class=\"caret\"></span>
                            </button>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
                                {% for choice in linkType.vars.choices %}
                                    <li data-name=\"{{ linkType.vars.full_name }}\" data-id=\"{{ linkType.vars.id }}\" class=\"{% if linkType.vars.attr is defined %}{{ linkType.vars.attr.class }}{% endif %}\" data-value=\"{{ choice.value }}\">
                                        <a href=\"#\">{{ choice.label | trans }}</a>
                                    </li>
                                {% endfor %}
                            </ul>
                            <input type=\"hidden\" name=\"{{ linkType.vars.full_name }}\" value=\"{{ linkType.vars.data }}\" id=\"{{ linkType.vars.id }}\" class=\"form-control\">
                        </div>
                    {% endif %}
                    <div id=\"{{ linkUrl.id }}-widget\" class=\"input-group urlchooser-widget {% if form.link_type is defined %}urlchooser__link-url{% endif %}\">
                        {% if linkUrl.attr.choose_url is defined %}
                            <input type=\"hidden\" name=\"{{ linkUrl.full_name }}\" value=\"{{ linkUrl.value ? linkUrl.value : '' }}\" id=\"{{ linkUrl.id }}\" class=\"form-control {% if linkUrl.attr is defined and linkUrl.attr.class is defined %}{{ linkUrl.attr.class }}{% endif %}\">
                            <input type=\"text\" disabled=\"disabled\" class=\"form-control js-urlchooser-value\" value=\"{{ linkUrl.value ? linkUrl.value|replace_url : '' }}\">
                            <span class=\"input-group-btn\">
                        <button type=\"button\" class=\"btn btn-default btn--raise-on-hover\" data-toggle=\"modal\" data-target=\"#{{ linkUrl.id }}-urlChooserModal\" data-link=\"{{ path('KunstmaanNodeBundle_selecturl') }}\">
                            {{ 'kuma_node.widget.choose' | trans }}
                        </button>
                    </span>
                        {% else %}
                            <input type=\"text\" name=\"{{ linkUrl.full_name }}\" value=\"{{ linkUrl.value ? linkUrl.value : '' }}\" id=\"{{ linkUrl.id }}\" class=\"form-control {% if linkUrl.attr is defined and linkUrl.attr.class is defined %}{{ linkUrl.attr.class }}{% endif %}\"{% if linkUrl.attr is defined and linkUrl.attr.placeholder is defined %} placeholder=\"{{ linkUrl.attr.placeholder }}\"{% endif %}>
                        {% endif %}
                    </div>
                </div>
            </div>

        </div>

    {% endapply %}
{% endblock urlchooser_widget %}

{% block slug_widget %}
    {% apply spaceless %}
        {% set url = path('_slug', {
            url: prefix ~ value
        }) %}

        {% if prefix|first != '/' %}
            {% set prefix = '/' ~ prefix %}
        {% endif %}

        <div id=\"{{ id }}-slug-chooser\" class=\"js-slug-chooser slug-chooser\" data-url-prefix=\"{{ prefix }}\" data-reset=\"{{ reset }}\">
            <div>
                <div class=\"input-group slug-chooser\">
                    {% if prefix is not empty %}
                        <span class=\"input-group-addon js-slug-chooser__prefix\" title=\"{{ prefix }}\">
                            {{ prefix }}
                        </span>
                    {% endif %}
                    <input type=\"text\" name=\"{{ full_name }}\" id=\"{{ id }}\" value=\"{{ value|default('') }}\" class=\"js-slug-chooser__input form-control\">
                    <span class=\"input-group-btn\">
                        <button type=\"button\" class=\"js-slug-chooser__reset-btn btn btn-default btn--raise-on-hover\" id=\"{{ id }}-slug-chooser__resetbtn\">
                            Reset
                        </button>
                    </span>
                </div>
                <div>
                    <small>
                        {{ 'kuma_node.form.current_url' | trans }}: <a href=\"{{ url }}\" target=\"_blank\">
                            {{ url }}
                        </a>
                    </small>
                </div>
                <div>
                    <small class=\"js-slug-chooser__preview\" style=\"display: none;\">
                        {{ 'kuma_node.form.updated_url' | trans }}: <span></span>
                    </small>
                </div>
            </div>
        </div>
    {% endapply %}
{% endblock slug_widget %}
", "@KunstmaanNode/Form/formWidgets.html.twig", "/Users/macbook/Documents/quoc/blog-admin/vendor/kunstmaan/node-bundle/Resources/views/Form/formWidgets.html.twig");
    }
}
