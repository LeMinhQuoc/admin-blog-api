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

/* @KunstmaanTranslator/Translator/list.html.twig */
class __TwigTemplate_34dc0ebd70df881a7c19a0539205a18f24919ad6727f4491071a272a5cd3e8e8 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'extracss' => [$this, 'block_extracss'],
            'header' => [$this, 'block_header'],
            'page_header_addition' => [$this, 'block_page_header_addition'],
            'extra_actions_header' => [$this, 'block_extra_actions_header'],
            'actions' => [$this, 'block_actions'],
            'js_footer' => [$this, 'block_js_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@KunstmaanAdminList/Default/list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanTranslator/Translator/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanTranslator/Translator/list.html.twig"));

        $this->parent = $this->loadTemplate("@KunstmaanAdminList/Default/list.html.twig", "@KunstmaanTranslator/Translator/list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_extracss($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extracss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extracss"));

        // line 5
        echo "    ";
        $this->displayParentBlock("extracss", $context, $blocks);
        echo "

    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/kunstmaantranslator/css/style.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 12
        echo "    <header class=\"app__content__header\">
        <div class=\"row\">
            ";
        // line 14
        if (twig_get_attribute($this->env, $this->source, (isset($context["adminmenu"]) || array_key_exists("adminmenu", $context) ? $context["adminmenu"] : (function () { throw new RuntimeError('Variable "adminmenu" does not exist.', 14, $this->source); })()), "current", [], "any", false, false, false, 14)) {
            // line 15
            echo "                <div class=\"col-sm-6 col-md-4\">
                    <h1 class=\"app__content__header__title\">
                        ";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["adminmenu"]) || array_key_exists("adminmenu", $context) ? $context["adminmenu"] : (function () { throw new RuntimeError('Variable "adminmenu" does not exist.', 17, $this->source); })()), "current", [], "any", false, false, false, 17), "label", [], "any", false, false, false, 17)), "html", null, true);
            echo " ";
            $this->displayBlock('page_header_addition', $context, $blocks);
            // line 18
            echo "                    </h1>
                </div>
            ";
        }
        // line 21
        echo "
            ";
        // line 22
        $this->displayBlock('extra_actions_header', $context, $blocks);
        // line 97
        echo "        </div>
    </header>

    ";
        // line 100
        $this->loadTemplate("@KunstmaanTranslator/Modals/_modals.html.twig", "@KunstmaanTranslator/Translator/list.html.twig", 100)->display($context);
        // line 101
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_page_header_addition($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_header_addition"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_header_addition"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_extra_actions_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_actions_header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_actions_header"));

        // line 23
        echo "                <!-- Main-actions -->
                <div class=\"col-sm-6 col-md-8\">
                    <div class=\"js-auto-collapse-buttons page-main-actions page-main-actions--no-tabs page-main-actions--inside-extra-actions-header\">
                        <div class=\"btn-group\">
                            ";
        // line 27
        $this->displayBlock('actions', $context, $blocks);
        // line 83
        echo "                        </div>
                    </div>

                    <!-- Scroll-actions -->
                    <div class=\"page-main-actions page-main-actions--top\" id=\"page-main-actions-top\">
                        <div class=\"btn-group\">
                            ";
        // line 89
        $this->displayBlock("actions", $context, $blocks);
        echo "
                            <button type=\"button\" class=\"js-scroll-to-top btn btn-default btn--raise-on-hover\">
                                <i class=\"fa fa-caret-up\"></i>
                            </button>
                        </div>
                    </div>
                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 27
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actions"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actions"));

        // line 28
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 28, $this->source); })()), "canAdd", [], "method", false, false, false, 28)) {
            // line 29
            echo "                                    ";
            $context["adminaddlist"] = twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 29, $this->source); })()), "getAddUrlFor", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 29, $this->source); })()), "getIndexUrl", [], "method", false, false, false, 29), "params", [], "array", false, false, false, 29)], "method", false, false, false, 29);
            // line 30
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["adminaddlist"]) || array_key_exists("adminaddlist", $context) ? $context["adminaddlist"] : (function () { throw new RuntimeError('Variable "adminaddlist" does not exist.', 30, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["add"]) {
                // line 31
                echo "                                        <a class=\"btn btn-primary btn--raise-on-hover\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, $context["add"], "path", [], "array", false, false, false, 31), twig_get_attribute($this->env, $this->source, $context["add"], "params", [], "array", false, false, false, 31)), "html", null, true);
                echo "\">
                                            ";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.translator.add"), "html", null, true);
                echo "
                                        </a>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['add'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "                                ";
        }
        // line 36
        echo "
                                <a class=\"btn btn-default btn--raise-on-hover\" href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanTranslatorBundle_command_clear_cache");
        echo "\">
                                    ";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.translator.refresh_live"), "html", null, true);
        echo "
                                </a>

                                <div class=\"btn-group\">
                                    <button type=\"button\" class=\"btn btn-default btn--raise-on-hover dropdown-toggle\" data-toggle=\"dropdown\">
                                        ";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.translator.actions"), "html", null, true);
        echo "
                                        <i class=\"fa fa-caret-down btn__icon\"></i>
                                    </button>
                                    <ul class=\"dropdown-menu dropdown-menu-right\">
                                        <li>
                                            <a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanTranslatorBundle_command_import");
        echo "\">
                                                ";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.translator.import_translations"), "html", null, true);
        echo "
                                            </a>
                                        </li>
                                        <li>
                                            <a data-toggle=\"modal\" data-target=\"#import-force-modal\">
                                                ";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.translator.import_translations_forced"), "html", null, true);
        echo "
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanTranslatorBundle_settings_translations_upload");
        echo "\">
                                                ";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.translator.import_file"), "html", null, true);
        echo "
                                            </a>
                                        </li>
                                        ";
        // line 62
        if (twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 62, $this->source); })()), "canExport", [], "method", false, false, false, 62)) {
            // line 63
            echo "                                            ";
            $context["exportparams"] = twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 63, $this->source); })()), "filterbuilder", [], "any", false, false, false, 63), "currentparameters", [], "any", false, false, false, 63), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 63, $this->source); })()), "getExportUrl", [], "method", false, false, false, 63), "params", [], "array", false, false, false, 63));
            // line 64
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->extensions['Kunstmaan\AdminListBundle\Twig\AdminListTwigExtension']->getSupportedExtensions());
            foreach ($context['_seq'] as $context["name"] => $context["ext"]) {
                // line 65
                echo "                                                ";
                $context["exportparams"] = twig_array_merge((isset($context["exportparams"]) || array_key_exists("exportparams", $context) ? $context["exportparams"] : (function () { throw new RuntimeError('Variable "exportparams" does not exist.', 65, $this->source); })()), ["_format" => $context["ext"]]);
                // line 66
                echo "                                                ";
                if ((twig_lower_filter($this->env, $context["name"]) == "csv")) {
                    // line 67
                    echo "                                                    ";
                    $context["icon"] = "fa-file-code";
                    // line 68
                    echo "                                                ";
                } elseif ((twig_lower_filter($this->env, $context["name"]) == "excel")) {
                    // line 69
                    echo "                                                    ";
                    $context["icon"] = "fa-file-excel";
                    // line 70
                    echo "                                                ";
                } else {
                    // line 71
                    echo "                                                    ";
                    $context["icon"] = "fa-file";
                    // line 72
                    echo "                                                ";
                }
                // line 73
                echo "                                                <li>
                                                    <a href=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 74, $this->source); })()), "getExportUrl", [], "method", false, false, false, 74), "path", [], "array", false, false, false, 74), (isset($context["exportparams"]) || array_key_exists("exportparams", $context) ? $context["exportparams"] : (function () { throw new RuntimeError('Variable "exportparams" does not exist.', 74, $this->source); })())), "html", null, true);
                echo "\">
                                                        <i class=\"fa ";
                // line 75
                echo twig_escape_filter($this->env, (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 75, $this->source); })()), "html", null, true);
                echo " btn__icon\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.translator.export_translations"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "
                                                    </a>
                                                </li>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['ext'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "                                        ";
        }
        // line 80
        echo "                                    </ul>
                                </div>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 104
    public function block_js_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js_footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js_footer"));

        // line 105
        echo "    <!-- JS -->
    ";
        // line 106
        $this->loadTemplate("@KunstmaanTranslator/Translator/list.html.twig", "@KunstmaanTranslator/Translator/list.html.twig", 106, "339249192")->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanTranslator/Translator/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  378 => 106,  375 => 105,  365 => 104,  353 => 80,  350 => 79,  336 => 75,  332 => 74,  329 => 73,  326 => 72,  323 => 71,  320 => 70,  317 => 69,  314 => 68,  311 => 67,  308 => 66,  305 => 65,  300 => 64,  297 => 63,  295 => 62,  289 => 59,  285 => 58,  278 => 54,  270 => 49,  266 => 48,  258 => 43,  250 => 38,  246 => 37,  243 => 36,  240 => 35,  231 => 32,  226 => 31,  221 => 30,  218 => 29,  215 => 28,  205 => 27,  187 => 89,  179 => 83,  177 => 27,  171 => 23,  161 => 22,  143 => 17,  132 => 101,  130 => 100,  125 => 97,  123 => 22,  120 => 21,  115 => 18,  111 => 17,  107 => 15,  105 => 14,  101 => 12,  91 => 11,  79 => 7,  73 => 5,  63 => 4,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@KunstmaanAdminList/Default/list.html.twig' %}


{% block extracss %}
    {{ parent() }}

    <link rel=\"stylesheet\" href=\"{{ asset('bundles/kunstmaantranslator/css/style.css') }}\">
{% endblock %}


{% block header %}
    <header class=\"app__content__header\">
        <div class=\"row\">
            {% if adminmenu.current %}
                <div class=\"col-sm-6 col-md-4\">
                    <h1 class=\"app__content__header__title\">
                        {{ adminmenu.current.label | trans }} {% block page_header_addition %}{% endblock %}
                    </h1>
                </div>
            {% endif %}

            {% block extra_actions_header %}
                <!-- Main-actions -->
                <div class=\"col-sm-6 col-md-8\">
                    <div class=\"js-auto-collapse-buttons page-main-actions page-main-actions--no-tabs page-main-actions--inside-extra-actions-header\">
                        <div class=\"btn-group\">
                            {% block actions %}
                                {% if adminlist.canAdd() %}
                                    {% set adminaddlist = adminlist.getAddUrlFor(adminlist.getIndexUrl()['params']) %}
                                    {% for key,add in adminaddlist %}
                                        <a class=\"btn btn-primary btn--raise-on-hover\" href=\"{{ path(add[\"path\"], add[(\"params\")]) }}\">
                                            {{ 'settings.translator.add' | trans }}
                                        </a>
                                    {% endfor %}
                                {% endif %}

                                <a class=\"btn btn-default btn--raise-on-hover\" href=\"{{ path('KunstmaanTranslatorBundle_command_clear_cache') }}\">
                                    {{ 'settings.translator.refresh_live' | trans }}
                                </a>

                                <div class=\"btn-group\">
                                    <button type=\"button\" class=\"btn btn-default btn--raise-on-hover dropdown-toggle\" data-toggle=\"dropdown\">
                                        {{ 'settings.translator.actions' | trans }}
                                        <i class=\"fa fa-caret-down btn__icon\"></i>
                                    </button>
                                    <ul class=\"dropdown-menu dropdown-menu-right\">
                                        <li>
                                            <a href=\"{{ path('KunstmaanTranslatorBundle_command_import') }}\">
                                                {{ 'settings.translator.import_translations' | trans }}
                                            </a>
                                        </li>
                                        <li>
                                            <a data-toggle=\"modal\" data-target=\"#import-force-modal\">
                                                {{ 'settings.translator.import_translations_forced' | trans }}
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"{{ path('KunstmaanTranslatorBundle_settings_translations_upload') }}\">
                                                {{ 'settings.translator.import_file' | trans }}
                                            </a>
                                        </li>
                                        {% if adminlist.canExport() %}
                                            {% set exportparams = adminlist.filterbuilder.currentparameters|merge(adminlist.getExportUrl()[(\"params\")]) %}
                                            {% for name, ext in supported_export_extensions() %}
                                                {% set exportparams = exportparams|merge({\"_format\": ext}) %}
                                                {% if (name | lower == 'csv') %}
                                                    {% set icon = 'fa-file-code' %}
                                                {% elseif (name | lower == 'excel') %}
                                                    {% set icon = 'fa-file-excel' %}
                                                {% else %}
                                                    {% set icon = 'fa-file' %}
                                                {% endif %}
                                                <li>
                                                    <a href=\"{{ path(adminlist.getExportUrl()[\"path\"], exportparams) }}\">
                                                        <i class=\"fa {{ icon }} btn__icon\"></i> {{ 'settings.translator.export_translations'|trans }} {{ name }}
                                                    </a>
                                                </li>
                                            {% endfor %}
                                        {% endif %}
                                    </ul>
                                </div>
                            {% endblock %}
                        </div>
                    </div>

                    <!-- Scroll-actions -->
                    <div class=\"page-main-actions page-main-actions--top\" id=\"page-main-actions-top\">
                        <div class=\"btn-group\">
                            {{ block('actions') }}
                            <button type=\"button\" class=\"js-scroll-to-top btn btn-default btn--raise-on-hover\">
                                <i class=\"fa fa-caret-up\"></i>
                            </button>
                        </div>
                    </div>
                </div>
            {% endblock %}
        </div>
    </header>

    {% include '@KunstmaanTranslator/Modals/_modals.html.twig' %}

{% endblock %}

{% block js_footer %}
    <!-- JS -->
    {% embed \"@KunstmaanAdmin/Default/_js_footer.html.twig\" %}
        {% block extra_async_javascripts %}
            {{ parent() }}
            '{{ asset('bundles/kunstmaantranslator/js/translator-bundle.min.js') }}',
        {% endblock %}
    {% endembed %}
{% endblock %}
", "@KunstmaanTranslator/Translator/list.html.twig", "/Users/macbook/Documents/quoc/admin-blog-api-/vendor/kunstmaan/translator-bundle/Resources/views/Translator/list.html.twig");
    }
}


/* @KunstmaanTranslator/Translator/list.html.twig */
class __TwigTemplate_34dc0ebd70df881a7c19a0539205a18f24919ad6727f4491071a272a5cd3e8e8___339249192 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'extra_async_javascripts' => [$this, 'block_extra_async_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@KunstmaanAdmin/Default/_js_footer.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanTranslator/Translator/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanTranslator/Translator/list.html.twig"));

        $this->parent = $this->loadTemplate("@KunstmaanAdmin/Default/_js_footer.html.twig", "@KunstmaanTranslator/Translator/list.html.twig", 106);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 107
    public function block_extra_async_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_async_javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_async_javascripts"));

        // line 108
        echo "            ";
        $this->displayParentBlock("extra_async_javascripts", $context, $blocks);
        echo "
            '";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/kunstmaantranslator/js/translator-bundle.min.js"), "html", null, true);
        echo "',
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanTranslator/Translator/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  578 => 109,  573 => 108,  563 => 107,  378 => 106,  375 => 105,  365 => 104,  353 => 80,  350 => 79,  336 => 75,  332 => 74,  329 => 73,  326 => 72,  323 => 71,  320 => 70,  317 => 69,  314 => 68,  311 => 67,  308 => 66,  305 => 65,  300 => 64,  297 => 63,  295 => 62,  289 => 59,  285 => 58,  278 => 54,  270 => 49,  266 => 48,  258 => 43,  250 => 38,  246 => 37,  243 => 36,  240 => 35,  231 => 32,  226 => 31,  221 => 30,  218 => 29,  215 => 28,  205 => 27,  187 => 89,  179 => 83,  177 => 27,  171 => 23,  161 => 22,  143 => 17,  132 => 101,  130 => 100,  125 => 97,  123 => 22,  120 => 21,  115 => 18,  111 => 17,  107 => 15,  105 => 14,  101 => 12,  91 => 11,  79 => 7,  73 => 5,  63 => 4,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@KunstmaanAdminList/Default/list.html.twig' %}


{% block extracss %}
    {{ parent() }}

    <link rel=\"stylesheet\" href=\"{{ asset('bundles/kunstmaantranslator/css/style.css') }}\">
{% endblock %}


{% block header %}
    <header class=\"app__content__header\">
        <div class=\"row\">
            {% if adminmenu.current %}
                <div class=\"col-sm-6 col-md-4\">
                    <h1 class=\"app__content__header__title\">
                        {{ adminmenu.current.label | trans }} {% block page_header_addition %}{% endblock %}
                    </h1>
                </div>
            {% endif %}

            {% block extra_actions_header %}
                <!-- Main-actions -->
                <div class=\"col-sm-6 col-md-8\">
                    <div class=\"js-auto-collapse-buttons page-main-actions page-main-actions--no-tabs page-main-actions--inside-extra-actions-header\">
                        <div class=\"btn-group\">
                            {% block actions %}
                                {% if adminlist.canAdd() %}
                                    {% set adminaddlist = adminlist.getAddUrlFor(adminlist.getIndexUrl()['params']) %}
                                    {% for key,add in adminaddlist %}
                                        <a class=\"btn btn-primary btn--raise-on-hover\" href=\"{{ path(add[\"path\"], add[(\"params\")]) }}\">
                                            {{ 'settings.translator.add' | trans }}
                                        </a>
                                    {% endfor %}
                                {% endif %}

                                <a class=\"btn btn-default btn--raise-on-hover\" href=\"{{ path('KunstmaanTranslatorBundle_command_clear_cache') }}\">
                                    {{ 'settings.translator.refresh_live' | trans }}
                                </a>

                                <div class=\"btn-group\">
                                    <button type=\"button\" class=\"btn btn-default btn--raise-on-hover dropdown-toggle\" data-toggle=\"dropdown\">
                                        {{ 'settings.translator.actions' | trans }}
                                        <i class=\"fa fa-caret-down btn__icon\"></i>
                                    </button>
                                    <ul class=\"dropdown-menu dropdown-menu-right\">
                                        <li>
                                            <a href=\"{{ path('KunstmaanTranslatorBundle_command_import') }}\">
                                                {{ 'settings.translator.import_translations' | trans }}
                                            </a>
                                        </li>
                                        <li>
                                            <a data-toggle=\"modal\" data-target=\"#import-force-modal\">
                                                {{ 'settings.translator.import_translations_forced' | trans }}
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"{{ path('KunstmaanTranslatorBundle_settings_translations_upload') }}\">
                                                {{ 'settings.translator.import_file' | trans }}
                                            </a>
                                        </li>
                                        {% if adminlist.canExport() %}
                                            {% set exportparams = adminlist.filterbuilder.currentparameters|merge(adminlist.getExportUrl()[(\"params\")]) %}
                                            {% for name, ext in supported_export_extensions() %}
                                                {% set exportparams = exportparams|merge({\"_format\": ext}) %}
                                                {% if (name | lower == 'csv') %}
                                                    {% set icon = 'fa-file-code' %}
                                                {% elseif (name | lower == 'excel') %}
                                                    {% set icon = 'fa-file-excel' %}
                                                {% else %}
                                                    {% set icon = 'fa-file' %}
                                                {% endif %}
                                                <li>
                                                    <a href=\"{{ path(adminlist.getExportUrl()[\"path\"], exportparams) }}\">
                                                        <i class=\"fa {{ icon }} btn__icon\"></i> {{ 'settings.translator.export_translations'|trans }} {{ name }}
                                                    </a>
                                                </li>
                                            {% endfor %}
                                        {% endif %}
                                    </ul>
                                </div>
                            {% endblock %}
                        </div>
                    </div>

                    <!-- Scroll-actions -->
                    <div class=\"page-main-actions page-main-actions--top\" id=\"page-main-actions-top\">
                        <div class=\"btn-group\">
                            {{ block('actions') }}
                            <button type=\"button\" class=\"js-scroll-to-top btn btn-default btn--raise-on-hover\">
                                <i class=\"fa fa-caret-up\"></i>
                            </button>
                        </div>
                    </div>
                </div>
            {% endblock %}
        </div>
    </header>

    {% include '@KunstmaanTranslator/Modals/_modals.html.twig' %}

{% endblock %}

{% block js_footer %}
    <!-- JS -->
    {% embed \"@KunstmaanAdmin/Default/_js_footer.html.twig\" %}
        {% block extra_async_javascripts %}
            {{ parent() }}
            '{{ asset('bundles/kunstmaantranslator/js/translator-bundle.min.js') }}',
        {% endblock %}
    {% endembed %}
{% endblock %}
", "@KunstmaanTranslator/Translator/list.html.twig", "/Users/macbook/Documents/quoc/admin-blog-api-/vendor/kunstmaan/translator-bundle/Resources/views/Translator/list.html.twig");
    }
}
