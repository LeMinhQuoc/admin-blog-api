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

/* @KunstmaanAdminList/Default/list.html.twig */
class __TwigTemplate_954d398d3cf9e21d083a4b0264ccf14a7bffeb8aee7a94ada52fb23bab9bea32 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'admin_page_title' => [$this, 'block_admin_page_title'],
            'page_header_addition' => [$this, 'block_page_header_addition'],
            'extra_actions_header' => [$this, 'block_extra_actions_header'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@KunstmaanAdmin/Default/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdminList/Default/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdminList/Default/list.html.twig"));

        $this->parent = $this->loadTemplate("@KunstmaanAdmin/Default/layout.html.twig", "@KunstmaanAdminList/Default/list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_admin_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "admin_page_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "admin_page_title"));

        // line 4
        echo "    <div class=\"col-sm-6 col-md-8\">
        <h1 class=\"app__content__header__title\">
            ";
        // line 6
        if (twig_get_attribute($this->env, $this->source, (isset($context["adminmenu"]) || array_key_exists("adminmenu", $context) ? $context["adminmenu"] : (function () { throw new RuntimeError('Variable "adminmenu" does not exist.', 6, $this->source); })()), "current", [], "any", false, false, false, 6)) {
            // line 7
            echo "                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["adminmenu"]) || array_key_exists("adminmenu", $context) ? $context["adminmenu"] : (function () { throw new RuntimeError('Variable "adminmenu" does not exist.', 7, $this->source); })()), "current", [], "any", false, false, false, 7), "label", [], "any", false, false, false, 7)), "html", null, true);
            echo " ";
            $this->displayBlock('page_header_addition', $context, $blocks);
            // line 8
            echo "            ";
        } else {
            // line 9
            echo "                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 9, $this->source); })()), "configurator", [], "any", false, false, false, 9), "getEntityName", [], "method", false, false, false, 9), "html", null, true);
            echo "
            ";
        }
        // line 11
        echo "        </h1>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
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

    // line 15
    public function block_extra_actions_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_actions_header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_actions_header"));

        // line 16
        echo "    ";
        if (((twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 16, $this->source); })()), "canAdd", [], "method", false, false, false, 16) || twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 16, $this->source); })()), "canExport", [], "method", false, false, false, 16)) || twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 16, $this->source); })()), "hasListActions", [], "method", false, false, false, 16))) {
            // line 17
            echo "        <div class=\"col-sm-6 col-md-4\">
            <div class=\"app__content__header__extra-actions\">
                <div class=\"btn-group\">
                    ";
            // line 20
            if (twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 20, $this->source); })()), "canAdd", [], "method", false, false, false, 20)) {
                // line 21
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["adminlist"] ?? null), "getIndexUrl", [], "method", false, true, false, 21), "params", [], "array", true, true, false, 21)) {
                    // line 22
                    echo "                            ";
                    $context["adminaddlist"] = twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 22, $this->source); })()), "getAddUrlFor", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 22, $this->source); })()), "getIndexUrl", [], "method", false, false, false, 22), "params", [], "array", false, false, false, 22)], "method", false, false, false, 22);
                    // line 23
                    echo "                        ";
                } else {
                    // line 24
                    echo "                            ";
                    $context["adminaddlist"] = twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 24, $this->source); })()), "getAddUrlFor", [0 => twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 24, $this->source); })()), "getIndexUrl", [], "method", false, false, false, 24)], "method", false, false, false, 24);
                    // line 25
                    echo "                        ";
                }
                // line 26
                echo "
                        ";
                // line 27
                if ((twig_length_filter($this->env, (isset($context["adminaddlist"]) || array_key_exists("adminaddlist", $context) ? $context["adminaddlist"] : (function () { throw new RuntimeError('Variable "adminaddlist" does not exist.', 27, $this->source); })())) > 1)) {
                    // line 28
                    echo "                            <a class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                ";
                    // line 29
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.add"), "html", null, true);
                    echo "
                                <i class=\"fa fa-caret-down btn__icon\"></i>
                            </a>
                            <ul class=\"dropdown-menu dropdown-menu-right\">
                                ";
                    // line 33
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["adminaddlist"]) || array_key_exists("adminaddlist", $context) ? $context["adminaddlist"] : (function () { throw new RuntimeError('Variable "adminaddlist" does not exist.', 33, $this->source); })()));
                    foreach ($context['_seq'] as $context["key"] => $context["add"]) {
                        // line 34
                        echo "                                    <li>
                                        <a href=\"";
                        // line 35
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, $context["add"], "path", [], "array", false, false, false, 35), twig_get_attribute($this->env, $this->source, $context["add"], "params", [], "array", false, false, false, 35)), "html", null, true);
                        echo "\">
                                            ";
                        // line 36
                        echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                        echo "
                                        </a>
                                    </li>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['add'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 40
                    echo "                            </ul>
                        ";
                } else {
                    // line 42
                    echo "                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["adminaddlist"]) || array_key_exists("adminaddlist", $context) ? $context["adminaddlist"] : (function () { throw new RuntimeError('Variable "adminaddlist" does not exist.', 42, $this->source); })()));
                    foreach ($context['_seq'] as $context["key"] => $context["add"]) {
                        // line 43
                        echo "                                <a class=\"btn btn-primary btn--raise-on-hover\" href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, $context["add"], "path", [], "array", false, false, false, 43), twig_get_attribute($this->env, $this->source, $context["add"], "params", [], "array", false, false, false, 43)), "html", null, true);
                        echo "\">
                                    ";
                        // line 44
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.add.%subject%", ["%subject%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["key"])]), "html", null, true);
                        echo "
                                </a>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['add'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 47
                    echo "                        ";
                }
                // line 48
                echo "                    ";
            }
            // line 49
            echo "                </div>

                ";
            // line 51
            if (twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 51, $this->source); })()), "canExport", [], "method", false, false, false, 51)) {
                // line 52
                echo "                    <div class=\"btn-group dropdown\">
                        <a class=\"btn btn-default btn--raise-on-hover dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                            ";
                // line 54
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_admin_list.form.export_to"), "html", null, true);
                echo "
                            <i class=\"fa fa-caret-down btn__icon\"></i>
                        </a>

                        <ul class=\"dropdown-menu dropdown-menu-right\">
                            ";
                // line 59
                $context["exportparams"] = twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 59, $this->source); })()), "filterbuilder", [], "any", false, false, false, 59), "currentparameters", [], "any", false, false, false, 59), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 59, $this->source); })()), "getExportUrl", [], "method", false, false, false, 59), "params", [], "array", false, false, false, 59));
                // line 60
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->extensions['Kunstmaan\AdminListBundle\Twig\AdminListTwigExtension']->getSupportedExtensions());
                foreach ($context['_seq'] as $context["name"] => $context["ext"]) {
                    // line 61
                    echo "                                ";
                    $context["exportparams"] = twig_array_merge((isset($context["exportparams"]) || array_key_exists("exportparams", $context) ? $context["exportparams"] : (function () { throw new RuntimeError('Variable "exportparams" does not exist.', 61, $this->source); })()), ["_format" => $context["ext"]]);
                    // line 62
                    echo "                                ";
                    if ((twig_lower_filter($this->env, $context["name"]) == "csv")) {
                        // line 63
                        echo "                                    ";
                        $context["icon"] = "fa-file-code";
                        // line 64
                        echo "                                ";
                    } elseif ((twig_lower_filter($this->env, $context["name"]) == "excel")) {
                        // line 65
                        echo "                                    ";
                        $context["icon"] = "fa-file-excel";
                        // line 66
                        echo "                                ";
                    } else {
                        // line 67
                        echo "                                    ";
                        $context["icon"] = "fa-file";
                        // line 68
                        echo "                                ";
                    }
                    // line 69
                    echo "                                <li>
                                    <a href=\"";
                    // line 70
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 70, $this->source); })()), "getExportUrl", [], "method", false, false, false, 70), "path", [], "array", false, false, false, 70), (isset($context["exportparams"]) || array_key_exists("exportparams", $context) ? $context["exportparams"] : (function () { throw new RuntimeError('Variable "exportparams" does not exist.', 70, $this->source); })())), "html", null, true);
                    echo "\">
                                        <i class=\"fa ";
                    // line 71
                    echo twig_escape_filter($this->env, (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 71, $this->source); })()), "html", null, true);
                    echo " btn__icon\"></i> ";
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "
                                    </a>
                                </li>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['name'], $context['ext'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 75
                echo "                        </ul>
                    </div>
                ";
            }
            // line 78
            echo "
                ";
            // line 79
            if (twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 79, $this->source); })()), "hasListActions", [], "method", false, false, false, 79)) {
                // line 80
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 80, $this->source); })()), "getListActions", [], "method", false, false, false, 80));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 81
                    echo "                        ";
                    if ( !(null === twig_get_attribute($this->env, $this->source, $context["action"], "template", [], "any", false, false, false, 81))) {
                        // line 82
                        echo "                            ";
                        $this->loadTemplate(twig_get_attribute($this->env, $this->source, $context["action"], "template", [], "any", false, false, false, 82), "@KunstmaanAdminList/Default/list.html.twig", 82)->display(twig_array_merge($context, ["action" => $context["action"]]));
                        // line 83
                        echo "                        ";
                    } else {
                        // line 84
                        echo "                            <div class=\"btn-group\">
                                <a href=\"";
                        // line 85
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["action"], "getUrl", [], "method", false, false, false, 85), "path", [], "array", false, false, false, 85), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["action"], "getUrl", [], "method", false, false, false, 85), "params", [], "array", false, false, false, 85)), "html", null, true);
                        echo "\" class=\"btn\">
                                    ";
                        // line 86
                        if ( !(null === twig_get_attribute($this->env, $this->source, $context["action"], "getIcon", [], "method", false, false, false, 86))) {
                            // line 87
                            echo "                                        <i class=\"fa fa-";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "getIcon", [], "method", false, false, false, 87), "html", null, true);
                            echo "\"></i>
                                        ";
                            // line 88
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["action"], "getLabel", [], "method", false, false, false, 88)), "html", null, true);
                            echo "
                                    ";
                        } else {
                            // line 90
                            echo "                                        ";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["action"], "getLabel", [], "method", false, false, false, 90)), "html", null, true);
                            echo "
                                    ";
                        }
                        // line 92
                        echo "                                </a>
                            </div>
                        ";
                    }
                    // line 95
                    echo "                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 96
                echo "                ";
            }
            // line 97
            echo "            </div>
        </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 102
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 103
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["adminlist"] ?? null), "getIndexUrl", [], "method", false, true, false, 103), "params", [], "array", true, true, false, 103)) {
            // line 104
            echo "        ";
            echo $this->extensions['Kunstmaan\AdminListBundle\Twig\AdminListTwigExtension']->renderWidget($this->env, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 104, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 104, $this->source); })()), "getIndexUrl", [], "method", false, false, false, 104), "path", [], "array", false, false, false, 104), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 104, $this->source); })()), "getIndexUrl", [], "method", false, false, false, 104), "params", [], "array", false, false, false, 104));
            echo "
    ";
        } else {
            // line 106
            echo "        ";
            echo $this->extensions['Kunstmaan\AdminListBundle\Twig\AdminListTwigExtension']->renderWidget($this->env, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 106, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 106, $this->source); })()), "getIndexUrl", [], "method", false, false, false, 106), "path", [], "array", false, false, false, 106), twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 106, $this->source); })()), "getIndexUrl", [], "method", false, false, false, 106));
            echo "
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanAdminList/Default/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  405 => 106,  399 => 104,  396 => 103,  386 => 102,  373 => 97,  370 => 96,  356 => 95,  351 => 92,  345 => 90,  340 => 88,  335 => 87,  333 => 86,  329 => 85,  326 => 84,  323 => 83,  320 => 82,  317 => 81,  299 => 80,  297 => 79,  294 => 78,  289 => 75,  277 => 71,  273 => 70,  270 => 69,  267 => 68,  264 => 67,  261 => 66,  258 => 65,  255 => 64,  252 => 63,  249 => 62,  246 => 61,  241 => 60,  239 => 59,  231 => 54,  227 => 52,  225 => 51,  221 => 49,  218 => 48,  215 => 47,  206 => 44,  201 => 43,  196 => 42,  192 => 40,  182 => 36,  178 => 35,  175 => 34,  171 => 33,  164 => 29,  161 => 28,  159 => 27,  156 => 26,  153 => 25,  150 => 24,  147 => 23,  144 => 22,  141 => 21,  139 => 20,  134 => 17,  131 => 16,  121 => 15,  103 => 7,  91 => 11,  85 => 9,  82 => 8,  77 => 7,  75 => 6,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@KunstmaanAdmin/Default/layout.html.twig' %}

{% block admin_page_title %}
    <div class=\"col-sm-6 col-md-8\">
        <h1 class=\"app__content__header__title\">
            {% if adminmenu.current %}
                {{ adminmenu.current.label | trans }} {% block page_header_addition %}{% endblock %}
            {% else %}
                {{ adminlist.configurator.getEntityName() }}
            {% endif %}
        </h1>
    </div>
{% endblock %}

{% block extra_actions_header %}
    {% if adminlist.canAdd() or adminlist.canExport() or adminlist.hasListActions() %}
        <div class=\"col-sm-6 col-md-4\">
            <div class=\"app__content__header__extra-actions\">
                <div class=\"btn-group\">
                    {% if adminlist.canAdd() %}
                        {% if adminlist.getIndexUrl()['params'] is defined %}
                            {% set adminaddlist = adminlist.getAddUrlFor(adminlist.getIndexUrl()['params']) %}
                        {% else %}
                            {% set adminaddlist = adminlist.getAddUrlFor(adminlist.getIndexUrl()) %}
                        {% endif %}

                        {% if adminaddlist|length > 1 %}
                            <a class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                {{ 'form.add' | trans }}
                                <i class=\"fa fa-caret-down btn__icon\"></i>
                            </a>
                            <ul class=\"dropdown-menu dropdown-menu-right\">
                                {% for key,add in adminaddlist %}
                                    <li>
                                        <a href=\"{{ path(add[\"path\"], add[(\"params\")]) }}\">
                                            {{ key }}
                                        </a>
                                    </li>
                                {% endfor %}
                            </ul>
                        {% else %}
                            {% for key,add in adminaddlist %}
                                <a class=\"btn btn-primary btn--raise-on-hover\" href=\"{{ path(add[\"path\"], add[(\"params\")]) }}\">
                                    {{ 'form.add.%subject%' | trans({ '%subject%': key|trans }) }}
                                </a>
                            {% endfor %}
                        {% endif %}
                    {% endif %}
                </div>

                {% if adminlist.canExport() %}
                    <div class=\"btn-group dropdown\">
                        <a class=\"btn btn-default btn--raise-on-hover dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                            {{ 'kuma_admin_list.form.export_to' | trans }}
                            <i class=\"fa fa-caret-down btn__icon\"></i>
                        </a>

                        <ul class=\"dropdown-menu dropdown-menu-right\">
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
                                        <i class=\"fa {{ icon }} btn__icon\"></i> {{ name }}
                                    </a>
                                </li>
                            {% endfor %}
                        </ul>
                    </div>
                {% endif %}

                {% if adminlist.hasListActions() %}
                    {% for action in adminlist.getListActions() %}
                        {% if action.template is not null %}
                            {% include action.template with {'action': action} %}
                        {% else %}
                            <div class=\"btn-group\">
                                <a href=\"{{ path(action.getUrl()[\"path\"], action.getUrl()[(\"params\")] ) }}\" class=\"btn\">
                                    {% if action.getIcon() is not null %}
                                        <i class=\"fa fa-{{ action.getIcon() }}\"></i>
                                        {{ action.getLabel()|trans }}
                                    {% else %}
                                        {{ action.getLabel()|trans }}
                                    {% endif %}
                                </a>
                            </div>
                        {% endif %}
                    {% endfor %}
                {% endif %}
            </div>
        </div>
    {% endif %}
{% endblock %}

{% block content %}
    {% if adminlist.getIndexUrl()['params'] is defined %}
        {{ adminlist_widget(adminlist, adminlist.getIndexUrl()[\"path\"], adminlist.getIndexUrl()['params']) }}
    {% else %}
        {{ adminlist_widget(adminlist, adminlist.getIndexUrl()[\"path\"], adminlist.getIndexUrl()) }}
    {% endif %}
{% endblock %}
", "@KunstmaanAdminList/Default/list.html.twig", "/Users/macbook/Documents/quoc/admin-blog-api-/vendor/kunstmaan/adminlist-bundle/Resources/views/Default/list.html.twig");
    }
}
