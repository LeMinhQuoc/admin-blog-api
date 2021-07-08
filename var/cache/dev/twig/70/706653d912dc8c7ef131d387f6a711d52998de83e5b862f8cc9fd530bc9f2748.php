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

/* @KunstmaanMedia/Chooser/chooserShowFolder.html.twig */
class __TwigTemplate_da5bb2f232f10962651d1b741b06b6762a117e6d73f76178181a0c5353cb8c7e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'appHeader' => [$this, 'block_appHeader'],
            'sidebar' => [$this, 'block_sidebar'],
            'header' => [$this, 'block_header'],
            'extra_actions_header' => [$this, 'block_extra_actions_header'],
            'content' => [$this, 'block_content'],
            'actions' => [$this, 'block_actions'],
            'footer' => [$this, 'block_footer'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanMedia/Chooser/chooserShowFolder.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanMedia/Chooser/chooserShowFolder.html.twig"));

        // line 3
        $context["urlParams"] = ["type" => (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 3, $this->source); })())];
        // line 4
        if ((isset($context["cKEditorFuncNum"]) || array_key_exists("cKEditorFuncNum", $context) ? $context["cKEditorFuncNum"] : (function () { throw new RuntimeError('Variable "cKEditorFuncNum" does not exist.', 4, $this->source); })())) {
            // line 5
            $context["urlParams"] = twig_array_merge((isset($context["urlParams"]) || array_key_exists("urlParams", $context) ? $context["urlParams"] : (function () { throw new RuntimeError('Variable "urlParams" does not exist.', 5, $this->source); })()), ["CKEditorFuncNum" => (isset($context["cKEditorFuncNum"]) || array_key_exists("cKEditorFuncNum", $context) ? $context["cKEditorFuncNum"] : (function () { throw new RuntimeError('Variable "cKEditorFuncNum" does not exist.', 5, $this->source); })())]);
        }
        // line 7
        if ((isset($context["linkChooser"]) || array_key_exists("linkChooser", $context) ? $context["linkChooser"] : (function () { throw new RuntimeError('Variable "linkChooser" does not exist.', 7, $this->source); })())) {
            // line 8
            $context["urlParams"] = twig_array_merge((isset($context["urlParams"]) || array_key_exists("urlParams", $context) ? $context["urlParams"] : (function () { throw new RuntimeError('Variable "urlParams" does not exist.', 8, $this->source); })()), ["linkChooser" => (isset($context["linkChooser"]) || array_key_exists("linkChooser", $context) ? $context["linkChooser"] : (function () { throw new RuntimeError('Variable "linkChooser" does not exist.', 8, $this->source); })())]);
        }
        // line 1
        $this->parent = $this->loadTemplate("@KunstmaanAdminList/Default/list.html.twig", "@KunstmaanMedia/Chooser/chooserShowFolder.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    ";
        $context["lowestTopChild"] = twig_get_attribute($this->env, $this->source, (isset($context["foldermanager"]) || array_key_exists("foldermanager", $context) ? $context["foldermanager"] : (function () { throw new RuntimeError('Variable "foldermanager" does not exist.', 13, $this->source); })()), "getRootFolderFor", [0 => (isset($context["folder"]) || array_key_exists("folder", $context) ? $context["folder"] : (function () { throw new RuntimeError('Variable "folder" does not exist.', 13, $this->source); })())], "method", false, false, false, 13);
        // line 14
        echo "    ";
        if ((isset($context["lowestTopChild"]) || array_key_exists("lowestTopChild", $context) ? $context["lowestTopChild"] : (function () { throw new RuntimeError('Variable "lowestTopChild" does not exist.', 14, $this->source); })())) {
            // line 15
            echo "        ";
            $context["navigationChildren"] = twig_get_attribute($this->env, $this->source, (isset($context["foldermanager"]) || array_key_exists("foldermanager", $context) ? $context["foldermanager"] : (function () { throw new RuntimeError('Variable "foldermanager" does not exist.', 15, $this->source); })()), "getFolderHierarchy", [0 => (isset($context["lowestTopChild"]) || array_key_exists("lowestTopChild", $context) ? $context["lowestTopChild"] : (function () { throw new RuntimeError('Variable "lowestTopChild" does not exist.', 15, $this->source); })())], "method", false, false, false, 15);
            // line 16
            echo "    ";
        }
        // line 17
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 21
        echo "    ";
        $this->loadTemplate("@KunstmaanMedia/Chooser/breadcrumbs.html.twig", "@KunstmaanMedia/Chooser/chooserShowFolder.html.twig", 21)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 24
    public function block_appHeader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "appHeader"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "appHeader"));

        // line 25
        echo "    <header role=\"banner\">

        <!-- App Header -->
        <nav role=\"navigation\" class=\"navbar navbar-inverse navbar-fixed-top\">
            <div class=\"container-fluid\">

                <!-- Header -->
                <div class=\"navbar-header\">

                    <!--Header - Toggle -->
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#main-nav-bar\">
                        <span class=\"sr-only\">Toggle</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

                <!-- Navigation -->
                <div class=\"collapse navbar-collapse\" id=\"main-nav-bar\">

                    <!-- Navigation - Left -->
                    <ul class=\"nav navbar-nav\">
                        ";
        // line 48
        if ((array_key_exists("linkChooserLink", $context) && (isset($context["linkChooserLink"]) || array_key_exists("linkChooserLink", $context) ? $context["linkChooserLink"] : (function () { throw new RuntimeError('Variable "linkChooserLink" does not exist.', 48, $this->source); })()))) {
            // line 49
            echo "                            <li>
                                <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, (isset($context["linkChooserLink"]) || array_key_exists("linkChooserLink", $context) ? $context["linkChooserLink"] : (function () { throw new RuntimeError('Variable "linkChooserLink" does not exist.', 50, $this->source); })()), "html", null, true);
            echo "\">
                                    Pages
                                </a>
                            </li>
                            <li class=\"active\">
                                <a href=\"javascript:void(0)\">
                                    Media
                                </a>
                            </li>
                        ";
        }
        // line 60
        echo "                    </ul>

                    <!-- Navigation - Right -->
                    <ul class=\"nav navbar-nav navbar-right\">
                        ";
        // line 64
        $context["route"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "request", [], "any", false, false, false, 64), "attributes", [], "any", false, false, false, 64), "get", [0 => "_route"], "method", false, false, false, 64);
        // line 65
        echo "                        ";
        echo $this->extensions['Kunstmaan\AdminBundle\Twig\LocaleSwitcherTwigExtension']->renderWidget($this->env, $this->extensions['Kunstmaan\AdminBundle\Twig\LocaleSwitcherTwigExtension']->getBackendLocales(), (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 65, $this->source); })()));
        echo "
                    </ul>
                </div>
            </div>
        </nav>
    </header>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 74
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 75
        echo "    <!-- Search -->
    <button type=\"button\" class=\"js-toggle-btn toggle-button btn app__sidebar__search-toggle-btn\" data-target=\"#sidebar-search-toggle\">
        <i class=\"fa fa-search\"></i>
    </button>

    <div id=\"sidebar-search-toggle\" class=\"toggle-item\">
        <div class=\"toggle-item__content\">
            <div class=\"app__sidebar__search-toggle-item\">
                <input type=\"text\" placeholder=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search"), "html", null, true);
        echo "\" id=\"app__sidebar__search\" class=\"form-control\">
                <hr>
            </div>
        </div>
    </div>

    <!-- Tree -->
    <nav role=\"navigation\" id=\"app__sidebar__navigation\" class=\"app__sidebar__module app__sidebar__navigation\">
        <ul>
            ";
        // line 92
        $context["parentIds"] = twig_get_attribute($this->env, $this->source, (isset($context["foldermanager"]) || array_key_exists("foldermanager", $context) ? $context["foldermanager"] : (function () { throw new RuntimeError('Variable "foldermanager" does not exist.', 92, $this->source); })()), "getParentIds", [0 => (isset($context["folder"]) || array_key_exists("folder", $context) ? $context["folder"] : (function () { throw new RuntimeError('Variable "folder" does not exist.', 92, $this->source); })())], "method", false, false, false, 92);
        // line 93
        echo "            ";
        $context["rootFolder"] = twig_get_attribute($this->env, $this->source, (isset($context["foldermanager"]) || array_key_exists("foldermanager", $context) ? $context["foldermanager"] : (function () { throw new RuntimeError('Variable "foldermanager" does not exist.', 93, $this->source); })()), "getRootFolderFor", [0 => (isset($context["folder"]) || array_key_exists("folder", $context) ? $context["folder"] : (function () { throw new RuntimeError('Variable "folder" does not exist.', 93, $this->source); })())], "method", false, false, false, 93);
        // line 94
        echo "            ";
        $context["folders"] = twig_get_attribute($this->env, $this->source, (isset($context["foldermanager"]) || array_key_exists("foldermanager", $context) ? $context["foldermanager"] : (function () { throw new RuntimeError('Variable "foldermanager" does not exist.', 94, $this->source); })()), "getFolderHierarchy", [0 => (isset($context["rootFolder"]) || array_key_exists("rootFolder", $context) ? $context["rootFolder"] : (function () { throw new RuntimeError('Variable "rootFolder" does not exist.', 94, $this->source); })())], "method", false, false, false, 94);
        // line 95
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["folders"]) || array_key_exists("folders", $context) ? $context["folders"] : (function () { throw new RuntimeError('Variable "folders" does not exist.', 95, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["mediaFolder"]) {
            // line 96
            echo "                ";
            $this->loadTemplate("@KunstmaanMedia/Chooser/chooserShowRecTreeView.html.twig", "@KunstmaanMedia/Chooser/chooserShowFolder.html.twig", 96)->display($context);
            // line 97
            echo "            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mediaFolder'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "        </ul>
    </nav>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 103
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 104
        echo "    <h1 class=\"app__content__header__title\">
        ";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["folder"]) || array_key_exists("folder", $context) ? $context["folder"] : (function () { throw new RuntimeError('Variable "folder" does not exist.', 105, $this->source); })()), "name", [], "any", false, false, false, 105)), "html", null, true);
        echo "
    </h1>
    ";
        // line 107
        $this->displayBlock('extra_actions_header', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_extra_actions_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_actions_header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_actions_header"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 111
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 112
        echo "
    <!-- Sub-actions -->
    <div class=\"page-sub-actions page-sub-actions--has-buttons\">
        <div class=\"btn-group\">
            <a href=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanMediaBundle_chooser_show_folder", twig_array_merge((isset($context["urlParams"]) || array_key_exists("urlParams", $context) ? $context["urlParams"] : (function () { throw new RuntimeError('Variable "urlParams" does not exist.', 116, $this->source); })()), ["folderId" => twig_get_attribute($this->env, $this->source, (isset($context["folder"]) || array_key_exists("folder", $context) ? $context["folder"] : (function () { throw new RuntimeError('Variable "folder" does not exist.', 116, $this->source); })()), "id", [], "any", false, false, false, 116), "viewMode" => "thumb-view"])), "html", null, true);
        echo "\" class=\"btn btn-default btn--raise-on-hover";
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 116, $this->source); })()), "session", [], "any", false, false, false, 116), "get", [0 => "media-list-view"], "method", false, false, false, 116)) {
            echo " active";
        }
        echo "\">
                <i class=\"fa fa-image btn__icon\"></i>
            </a>
            <a href=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanMediaBundle_chooser_show_folder", twig_array_merge((isset($context["urlParams"]) || array_key_exists("urlParams", $context) ? $context["urlParams"] : (function () { throw new RuntimeError('Variable "urlParams" does not exist.', 119, $this->source); })()), ["folderId" => twig_get_attribute($this->env, $this->source, (isset($context["folder"]) || array_key_exists("folder", $context) ? $context["folder"] : (function () { throw new RuntimeError('Variable "folder" does not exist.', 119, $this->source); })()), "id", [], "any", false, false, false, 119), "viewMode" => "list-view"])), "html", null, true);
        echo "\" class=\"btn btn-default btn--raise-on-hover";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 119, $this->source); })()), "session", [], "any", false, false, false, 119), "get", [0 => "media-list-view"], "method", false, false, false, 119)) {
            echo " active";
        }
        echo "\">
                <i class=\"fa fa-list btn__icon\"></i>
            </a>
        </div>
    </div>


    <!-- Main-actions -->
    <div class=\"page-main-actions page-main-actions--no-tabs js-auto-collapse-buttons\">
        <div class=\"btn-group\">
            ";
        // line 129
        $this->displayBlock('actions', $context, $blocks);
        // line 153
        echo "        </div>
    </div>


    <!-- Scroll-actions -->
    <div class=\"page-main-actions page-main-actions--top\" id=\"page-main-actions-top\">
        <div class=\"btn-group\">
            ";
        // line 160
        $this->displayBlock("actions", $context, $blocks);
        echo "
            <button type=\"button\" class=\"js-scroll-to-top btn btn-default\">
                <i class=\"fa fa-caret-up\"></i>
            </button>
        </div>
    </div>


    <!-- Subfolders Map list -->
    <nav class=\"list-group\" role=\"navigation\">
        ";
        // line 170
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["folder"]) || array_key_exists("folder", $context) ? $context["folder"] : (function () { throw new RuntimeError('Variable "folder" does not exist.', 170, $this->source); })()), "children", [], "any", false, false, false, 170));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 171
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanMediaBundle_chooser_show_folder", twig_array_merge((isset($context["urlParams"]) || array_key_exists("urlParams", $context) ? $context["urlParams"] : (function () { throw new RuntimeError('Variable "urlParams" does not exist.', 171, $this->source); })()), ["folderId" => twig_get_attribute($this->env, $this->source, $context["child"], "id", [], "any", false, false, false, 171)])), "html", null, true);
            echo "\" class=\"list-group-item\">
                ";
            // line 172
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 172)), "html", null, true);
            echo "
            </a>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 175
            echo "            <p class=\"list-group-item text--muted\">
                ";
            // line 176
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("media.folder.sub.no"), "html", null, true);
            echo "
            </p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        echo "    </nav>


    <!-- Files -->
    <section class=\"thumbnail-wrapper\" data-replace-url=\"";
        // line 183
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanNodeBundle_urlchooser_replace");
        echo "\">
        ";
        // line 184
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 184, $this->source); })()), "session", [], "any", false, false, false, 184), "get", [0 => "media-list-view"], "method", false, false, false, 184)) {
            // line 185
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 185, $this->source); })()), "count", [], "any", false, false, false, 185) > 0)) {
                // line 186
                echo "                ";
                $this->displayParentBlock("content", $context, $blocks);
                echo "
            ";
            } else {
                // line 188
                echo "                <p class=\"text--muted\">
                    ";
                // line 189
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("media.media.no"), "html", null, true);
                echo "
                </p>
            ";
            }
            // line 192
            echo "        ";
        } else {
            // line 193
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 193, $this->source); })()), "count", [], "any", false, false, false, 193) > 0)) {
                // line 194
                echo "                <div class=\"row\">
                    ";
                // line 195
                $context["counter"] = 1;
                // line 196
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["folder"]) || array_key_exists("folder", $context) ? $context["folder"] : (function () { throw new RuntimeError('Variable "folder" does not exist.', 196, $this->source); })()), "media", [], "any", false, false, false, 196));
                foreach ($context['_seq'] as $context["_key"] => $context["media"]) {
                    // line 197
                    echo "                        ";
                    if (( !(isset($context["handler"]) || array_key_exists("handler", $context) ? $context["handler"] : (function () { throw new RuntimeError('Variable "handler" does not exist.', 197, $this->source); })()) || twig_get_attribute($this->env, $this->source, (isset($context["handler"]) || array_key_exists("handler", $context) ? $context["handler"] : (function () { throw new RuntimeError('Variable "handler" does not exist.', 197, $this->source); })()), "canHandle", [0 => $context["media"]], "method", false, false, false, 197))) {
                        // line 198
                        echo "                            ";
                        $context["usedHandler"] = twig_get_attribute($this->env, $this->source, (isset($context["mediamanager"]) || array_key_exists("mediamanager", $context) ? $context["mediamanager"] : (function () { throw new RuntimeError('Variable "mediamanager" does not exist.', 198, $this->source); })()), "getHandler", [0 => $context["media"]], "method", false, false, false, 198);
                        // line 199
                        echo "                            ";
                        $context["imageurl"] = twig_get_attribute($this->env, $this->source, (isset($context["usedHandler"]) || array_key_exists("usedHandler", $context) ? $context["usedHandler"] : (function () { throw new RuntimeError('Variable "usedHandler" does not exist.', 199, $this->source); })()), "getImageUrl", [0 => $context["media"], 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 199, $this->source); })()), "request", [], "any", false, false, false, 199), "basePath", [], "any", false, false, false, 199)], "method", false, false, false, 199);
                        // line 200
                        echo "                            ";
                        if (( !twig_test_empty((isset($context["imageurl"]) || array_key_exists("imageurl", $context) ? $context["imageurl"] : (function () { throw new RuntimeError('Variable "imageurl" does not exist.', 200, $this->source); })())) && (twig_get_attribute($this->env, $this->source, $context["media"], "location", [], "any", false, false, false, 200) == "local"))) {
                            // line 201
                            echo "                                ";
                            if (((twig_last($this->env, twig_split_filter($this->env, twig_lower_filter($this->env, (isset($context["imageurl"]) || array_key_exists("imageurl", $context) ? $context["imageurl"] : (function () { throw new RuntimeError('Variable "imageurl" does not exist.', 201, $this->source); })())), ".")) == "svg") || twig_in_filter("image/svg", twig_get_attribute($this->env, $this->source, $context["media"], "contentType", [], "any", false, false, false, 201)))) {
                                // line 202
                                echo "                                    ";
                                $context["imageurlretina"] = (isset($context["imageurl"]) || array_key_exists("imageurl", $context) ? $context["imageurl"] : (function () { throw new RuntimeError('Variable "imageurl" does not exist.', 202, $this->source); })());
                                // line 203
                                echo "                                ";
                            } else {
                                // line 204
                                echo "                                    ";
                                $context["imageurlretina"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter((isset($context["imageurl"]) || array_key_exists("imageurl", $context) ? $context["imageurl"] : (function () { throw new RuntimeError('Variable "imageurl" does not exist.', 204, $this->source); })()), "media_list_thumbnail_retina"));
                                // line 205
                                echo "                                    ";
                                $context["imageurl"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter((isset($context["imageurl"]) || array_key_exists("imageurl", $context) ? $context["imageurl"] : (function () { throw new RuntimeError('Variable "imageurl" does not exist.', 205, $this->source); })()), "media_list_thumbnail"));
                                // line 206
                                echo "                                ";
                            }
                            // line 207
                            echo "                            ";
                        }
                        // line 208
                        echo "
                            ";
                        // line 209
                        $context["path"] = sprintf("[%s]", ("M" . twig_get_attribute($this->env, $this->source, $context["media"], "id", [], "any", false, false, false, 209)));
                        // line 210
                        echo "
                            <div class=\"col-sm-6 col-md-4 col-lg-3\">
                                <a href=\"javascript:void(0)\" class=\"js-url-chooser-media-select thumbnail media-thumbnail\" data-thumb-path=\"";
                        // line 212
                        echo twig_escape_filter($this->env, (isset($context["imageurl"]) || array_key_exists("imageurl", $context) ? $context["imageurl"] : (function () { throw new RuntimeError('Variable "imageurl" does not exist.', 212, $this->source); })()), "html", null, true);
                        echo "\" data-path=\"";
                        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["media"], "url", [], "any", false, false, false, 212) . "?token=") . (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 212, $this->source); })())), "html", null, true);
                        echo "\" data-title=\"";
                        echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["media"], "name", [], "any", false, false, false, 212), "js"), "html", null, true);
                        echo "\" data-id=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["media"], "id", [], "any", false, false, false, 212), "html", null, true);
                        echo "\" data-cke=\"";
                        if ((isset($context["cKEditorFuncNum"]) || array_key_exists("cKEditorFuncNum", $context) ? $context["cKEditorFuncNum"] : (function () { throw new RuntimeError('Variable "cKEditorFuncNum" does not exist.', 212, $this->source); })())) {
                            echo "true";
                        } else {
                            echo "false";
                        }
                        echo "\">
                                    <figure>
                                        ";
                        // line 214
                        if ((isset($context["imageurl"]) || array_key_exists("imageurl", $context) ? $context["imageurl"] : (function () { throw new RuntimeError('Variable "imageurl" does not exist.', 214, $this->source); })())) {
                            // line 215
                            echo "                                            <img src=\"";
                            echo twig_escape_filter($this->env, (isset($context["imageurl"]) || array_key_exists("imageurl", $context) ? $context["imageurl"] : (function () { throw new RuntimeError('Variable "imageurl" does not exist.', 215, $this->source); })()), "html", null, true);
                            echo "\" srcset=\"";
                            echo twig_escape_filter($this->env, (isset($context["imageurl"]) || array_key_exists("imageurl", $context) ? $context["imageurl"] : (function () { throw new RuntimeError('Variable "imageurl" does not exist.', 215, $this->source); })()), "html", null, true);
                            echo " 1x, ";
                            ((array_key_exists("imageurlretina", $context)) ? (print (twig_escape_filter($this->env, ((", " . (isset($context["imageurlretina"]) || array_key_exists("imageurlretina", $context) ? $context["imageurlretina"] : (function () { throw new RuntimeError('Variable "imageurlretina" does not exist.', 215, $this->source); })())) . " 2x"), "html", null, true))) : (print ("")));
                            echo "\" alt=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["media"], "name", [], "any", false, false, false, 215), "html", null, true);
                            echo "\" class=\"media-thumbnail__img\">
                                        ";
                        } else {
                            // line 217
                            echo "                                            <i class=\"fa fa-file media-thumbnail__icon\"></i>
                                        ";
                        }
                        // line 219
                        echo "                                        <figcaption class=\"media-thumbnail__caption\">
                                            ";
                        // line 220
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["media"], "name", [], "any", false, false, false, 220), "html", null, true);
                        echo "<br>
                                            ";
                        // line 221
                        if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["media"], "metadata", [], "any", false, true, false, 221), "original_width", [], "any", true, true, false, 221) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["media"], "metadata", [], "any", false, true, false, 221), "original_height", [], "any", true, true, false, 221)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["media"], "metadata", [], "any", false, false, false, 221), "original_width", [], "any", false, false, false, 221))) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["media"], "metadata", [], "any", false, false, false, 221), "original_height", [], "any", false, false, false, 221)))) {
                            // line 222
                            echo "                                                ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["media"], "metadata", [], "any", false, false, false, 222), "original_width", [], "any", false, false, false, 222), "html", null, true);
                            echo "px x ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["media"], "metadata", [], "any", false, false, false, 222), "original_height", [], "any", false, false, false, 222), "html", null, true);
                            echo "px
                                            ";
                        }
                        // line 224
                        echo "                                        </figcaption>
                                    </figure>
                                    <span class=\"media-thumbnail__helper\">
                                        Click to select
                                    </span>
                                </a>
                            </div>

                            ";
                        // line 233
                        echo "                            ";
                        if ((0 == (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 233, $this->source); })()) % 2)) {
                            // line 234
                            echo "                                <div class=\"clearfix visible-sm-block\"></div>
                            ";
                        }
                        // line 236
                        echo "                            ";
                        if ((0 == (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 236, $this->source); })()) % 3)) {
                            // line 237
                            echo "                                <div class=\"clearfix visible-md-block\"></div>
                            ";
                        }
                        // line 239
                        echo "                            ";
                        if ((0 == (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 239, $this->source); })()) % 4)) {
                            // line 240
                            echo "                                <div class=\"clearfix visible-lg-block\"></div>
                            ";
                        }
                        // line 242
                        echo "
                            ";
                        // line 243
                        $context["counter"] = ((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 243, $this->source); })()) + 1);
                        // line 244
                        echo "                        ";
                    }
                    // line 245
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['media'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 246
                echo "                </div>
            ";
            } else {
                // line 248
                echo "                <p class=\"text--muted\">
                    ";
                // line 249
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("media.media.no"), "html", null, true);
                echo "
                </p>
            ";
            }
            // line 252
            echo "        ";
        }
        // line 253
        echo "    </section>


    <!-- Modals -->
    ";
        // line 257
        $context["urlParams"] = twig_array_merge((isset($context["urlParams"]) || array_key_exists("urlParams", $context) ? $context["urlParams"] : (function () { throw new RuntimeError('Variable "urlParams" does not exist.', 257, $this->source); })()), ["folderId" => twig_get_attribute($this->env, $this->source, (isset($context["folder"]) || array_key_exists("folder", $context) ? $context["folder"] : (function () { throw new RuntimeError('Variable "folder" does not exist.', 257, $this->source); })()), "id", [], "any", false, false, false, 257)]);
        // line 258
        echo "    ";
        $this->loadTemplate("@KunstmaanMedia/Media/addType-modal.html.twig", "@KunstmaanMedia/Chooser/chooserShowFolder.html.twig", 258)->display($context);
        // line 259
        echo "    ";
        $this->loadTemplate("@KunstmaanMedia/Folder/addsub-modal.html.twig", "@KunstmaanMedia/Chooser/chooserShowFolder.html.twig", 259)->display($context);
        // line 260
        echo "    ";
        $this->loadTemplate("@KunstmaanMedia/Folder/delete-modal.html.twig", "@KunstmaanMedia/Chooser/chooserShowFolder.html.twig", 260)->display($context);
        // line 261
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 129
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actions"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actions"));

        // line 130
        echo "                <div class=\"btn-group\">
                    <button type=\"button\" class=\"btn btn-primary btn--raise-on-hover dropdown-toggle\" data-toggle=\"dropdown\">
                        ";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("media.media.add.action"), "html", null, true);
        echo " <i class=\"fa fa-caret-down\"></i>
                    </button>
                    <ul class=\"dropdown-menu dropdown-menu-right\" role=\"menu\">
                        ";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["mediamanager"]) || array_key_exists("mediamanager", $context) ? $context["mediamanager"] : (function () { throw new RuntimeError('Variable "mediamanager" does not exist.', 135, $this->source); })()), "getFolderAddActions", [], "method", false, false, false, 135));
        foreach ($context['_seq'] as $context["_key"] => $context["addaction"]) {
            // line 136
            echo "                            <li>
                                <a href=\"javascript:void(0)\" data-toggle=\"modal\" data-target=\"#add";
            // line 137
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["addaction"], "type", [], "any", false, false, false, 137), "html", null, true);
            echo "-modal\">
                                    ";
            // line 138
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["addaction"], "name", [], "any", false, false, false, 138)), "html", null, true);
            echo "
                                </a>
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['addaction'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "                    </ul>
                </div>
                <button class=\"btn btn-default btn--raise-on-hover\" data-target=\"#addsub-modal\" data-toggle=\"modal\" type=\"button\">
                    <span class=\"large-screen\">";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("media.folder.addsub.action"), "html", null, true);
        echo "</span>
                    <span class=\"small-screen\">";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("media.folder.addsub.action_short"), "html", null, true);
        echo " <i class=\"fa fa-plus-circle btn__icon-folder\"></i></span>
                </button>
                <button class=\"btn btn-default btn--raise-on-hover\" data-target=\"#delete-modal\" data-toggle=\"modal\" type=\"button\">
                    <span class=\"large-screen\">";
        // line 149
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("media.folder.delete.action"), "html", null, true);
        echo "</span>
                    <span class=\"small-screen\">";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("media.folder.delete.action_short"), "html", null, true);
        echo " <i class=\"fa fa-minus-circle btn__icon-folder\"></i></span>
                </button>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 264
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanMedia/Chooser/chooserShowFolder.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  745 => 264,  732 => 150,  728 => 149,  722 => 146,  718 => 145,  713 => 142,  703 => 138,  699 => 137,  696 => 136,  692 => 135,  686 => 132,  682 => 130,  672 => 129,  661 => 261,  658 => 260,  655 => 259,  652 => 258,  650 => 257,  644 => 253,  641 => 252,  635 => 249,  632 => 248,  628 => 246,  622 => 245,  619 => 244,  617 => 243,  614 => 242,  610 => 240,  607 => 239,  603 => 237,  600 => 236,  596 => 234,  593 => 233,  583 => 224,  575 => 222,  573 => 221,  569 => 220,  566 => 219,  562 => 217,  550 => 215,  548 => 214,  531 => 212,  527 => 210,  525 => 209,  522 => 208,  519 => 207,  516 => 206,  513 => 205,  510 => 204,  507 => 203,  504 => 202,  501 => 201,  498 => 200,  495 => 199,  492 => 198,  489 => 197,  484 => 196,  482 => 195,  479 => 194,  476 => 193,  473 => 192,  467 => 189,  464 => 188,  458 => 186,  455 => 185,  453 => 184,  449 => 183,  443 => 179,  434 => 176,  431 => 175,  423 => 172,  418 => 171,  413 => 170,  400 => 160,  391 => 153,  389 => 129,  372 => 119,  362 => 116,  356 => 112,  346 => 111,  319 => 107,  314 => 105,  311 => 104,  301 => 103,  289 => 98,  275 => 97,  272 => 96,  254 => 95,  251 => 94,  248 => 93,  246 => 92,  234 => 83,  224 => 75,  214 => 74,  196 => 65,  194 => 64,  188 => 60,  175 => 50,  172 => 49,  170 => 48,  145 => 25,  135 => 24,  124 => 21,  114 => 20,  101 => 17,  98 => 16,  95 => 15,  92 => 14,  89 => 13,  79 => 12,  68 => 1,  65 => 8,  63 => 7,  60 => 5,  58 => 4,  56 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@KunstmaanAdminList/Default/list.html.twig' %}

{% set urlParams = {'type': type} %}
{% if cKEditorFuncNum %}
    {% set urlParams = urlParams|merge({'CKEditorFuncNum': cKEditorFuncNum}) %}
{% endif %}
{% if linkChooser %}
    {% set urlParams = urlParams|merge({'linkChooser': linkChooser}) %}
{% endif %}


{% block body %}
    {% set lowestTopChild = foldermanager.getRootFolderFor(folder) %}
    {% if lowestTopChild %}
        {% set navigationChildren = foldermanager.getFolderHierarchy(lowestTopChild) %}
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block breadcrumb %}
    {% include '@KunstmaanMedia/Chooser/breadcrumbs.html.twig' %}
{% endblock %}

{% block appHeader %}
    <header role=\"banner\">

        <!-- App Header -->
        <nav role=\"navigation\" class=\"navbar navbar-inverse navbar-fixed-top\">
            <div class=\"container-fluid\">

                <!-- Header -->
                <div class=\"navbar-header\">

                    <!--Header - Toggle -->
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#main-nav-bar\">
                        <span class=\"sr-only\">Toggle</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

                <!-- Navigation -->
                <div class=\"collapse navbar-collapse\" id=\"main-nav-bar\">

                    <!-- Navigation - Left -->
                    <ul class=\"nav navbar-nav\">
                        {% if linkChooserLink is defined and linkChooserLink %}
                            <li>
                                <a href=\"{{ linkChooserLink }}\">
                                    Pages
                                </a>
                            </li>
                            <li class=\"active\">
                                <a href=\"javascript:void(0)\">
                                    Media
                                </a>
                            </li>
                        {% endif %}
                    </ul>

                    <!-- Navigation - Right -->
                    <ul class=\"nav navbar-nav navbar-right\">
                        {% set route = app.request.attributes.get('_route') %}
                        {{ localeswitcher_widget(get_backend_locales(), route) }}
                    </ul>
                </div>
            </div>
        </nav>
    </header>
{% endblock %}


{% block sidebar %}
    <!-- Search -->
    <button type=\"button\" class=\"js-toggle-btn toggle-button btn app__sidebar__search-toggle-btn\" data-target=\"#sidebar-search-toggle\">
        <i class=\"fa fa-search\"></i>
    </button>

    <div id=\"sidebar-search-toggle\" class=\"toggle-item\">
        <div class=\"toggle-item__content\">
            <div class=\"app__sidebar__search-toggle-item\">
                <input type=\"text\" placeholder=\"{{ 'Search' | trans }}\" id=\"app__sidebar__search\" class=\"form-control\">
                <hr>
            </div>
        </div>
    </div>

    <!-- Tree -->
    <nav role=\"navigation\" id=\"app__sidebar__navigation\" class=\"app__sidebar__module app__sidebar__navigation\">
        <ul>
            {% set parentIds = foldermanager.getParentIds(folder) %}
            {% set rootFolder = foldermanager.getRootFolderFor(folder) %}
            {% set folders = foldermanager.getFolderHierarchy(rootFolder) %}
            {% for mediaFolder in folders %}
                {% include '@KunstmaanMedia/Chooser/chooserShowRecTreeView.html.twig' %}
            {% endfor %}
        </ul>
    </nav>
{% endblock %}


{% block header %}
    <h1 class=\"app__content__header__title\">
        {{ folder.name | trans }}
    </h1>
    {% block extra_actions_header %}{% endblock %}
{% endblock %}


{% block content %}

    <!-- Sub-actions -->
    <div class=\"page-sub-actions page-sub-actions--has-buttons\">
        <div class=\"btn-group\">
            <a href=\"{{ path('KunstmaanMediaBundle_chooser_show_folder', urlParams|merge({'folderId': folder.id, viewMode: 'thumb-view'})) }}\" class=\"btn btn-default btn--raise-on-hover{% if not app.session.get('media-list-view') %} active{% endif %}\">
                <i class=\"fa fa-image btn__icon\"></i>
            </a>
            <a href=\"{{ path('KunstmaanMediaBundle_chooser_show_folder', urlParams|merge({'folderId': folder.id, viewMode: 'list-view'})) }}\" class=\"btn btn-default btn--raise-on-hover{% if app.session.get('media-list-view') %} active{% endif %}\">
                <i class=\"fa fa-list btn__icon\"></i>
            </a>
        </div>
    </div>


    <!-- Main-actions -->
    <div class=\"page-main-actions page-main-actions--no-tabs js-auto-collapse-buttons\">
        <div class=\"btn-group\">
            {% block actions %}
                <div class=\"btn-group\">
                    <button type=\"button\" class=\"btn btn-primary btn--raise-on-hover dropdown-toggle\" data-toggle=\"dropdown\">
                        {{ 'media.media.add.action' | trans }} <i class=\"fa fa-caret-down\"></i>
                    </button>
                    <ul class=\"dropdown-menu dropdown-menu-right\" role=\"menu\">
                        {% for addaction in mediamanager.getFolderAddActions() %}
                            <li>
                                <a href=\"javascript:void(0)\" data-toggle=\"modal\" data-target=\"#add{{ addaction.type }}-modal\">
                                    {{ addaction.name |trans }}
                                </a>
                            </li>
                        {% endfor %}
                    </ul>
                </div>
                <button class=\"btn btn-default btn--raise-on-hover\" data-target=\"#addsub-modal\" data-toggle=\"modal\" type=\"button\">
                    <span class=\"large-screen\">{{ 'media.folder.addsub.action' |trans }}</span>
                    <span class=\"small-screen\">{{ 'media.folder.addsub.action_short' |trans }} <i class=\"fa fa-plus-circle btn__icon-folder\"></i></span>
                </button>
                <button class=\"btn btn-default btn--raise-on-hover\" data-target=\"#delete-modal\" data-toggle=\"modal\" type=\"button\">
                    <span class=\"large-screen\">{{ 'media.folder.delete.action' |trans }}</span>
                    <span class=\"small-screen\">{{ 'media.folder.delete.action_short' |trans }} <i class=\"fa fa-minus-circle btn__icon-folder\"></i></span>
                </button>
            {% endblock %}
        </div>
    </div>


    <!-- Scroll-actions -->
    <div class=\"page-main-actions page-main-actions--top\" id=\"page-main-actions-top\">
        <div class=\"btn-group\">
            {{ block('actions') }}
            <button type=\"button\" class=\"js-scroll-to-top btn btn-default\">
                <i class=\"fa fa-caret-up\"></i>
            </button>
        </div>
    </div>


    <!-- Subfolders Map list -->
    <nav class=\"list-group\" role=\"navigation\">
        {% for child in folder.children %}
            <a href=\"{{ path('KunstmaanMediaBundle_chooser_show_folder', urlParams|merge({'folderId': child.id})) }}\" class=\"list-group-item\">
                {{ child.name | trans }}
            </a>
        {% else %}
            <p class=\"list-group-item text--muted\">
                {{ 'media.folder.sub.no' |trans }}
            </p>
        {% endfor %}
    </nav>


    <!-- Files -->
    <section class=\"thumbnail-wrapper\" data-replace-url=\"{{ path(\"KunstmaanNodeBundle_urlchooser_replace\") }}\">
        {% if app.session.get('media-list-view') %}
            {% if adminlist.count > 0 %}
                {{ parent() }}
            {% else %}
                <p class=\"text--muted\">
                    {{ 'media.media.no' |trans }}
                </p>
            {% endif %}
        {% else %}
            {% if adminlist.count > 0 %}
                <div class=\"row\">
                    {% set counter = 1 %}
                    {% for media in folder.media %}
                        {% if not handler or handler.canHandle(media) %}
                            {% set usedHandler = mediamanager.getHandler(media) %}
                            {% set imageurl =  usedHandler.getImageUrl(media, app.request.basePath) %}
                            {% if imageurl is not empty and media.location == 'local' %}
                                {% if imageurl|lower|split('.')|last == 'svg' or 'image/svg' in media.contentType %}
                                    {% set imageurlretina = imageurl %}
                                {% else %}
                                    {% set imageurlretina = asset(imageurl | imagine_filter('media_list_thumbnail_retina')) %}
                                    {% set imageurl = asset(imageurl | imagine_filter('media_list_thumbnail')) %}
                                {% endif %}
                            {% endif %}

                            {% set path = \"[%s]\" | format(\"M\" ~ media.id) %}

                            <div class=\"col-sm-6 col-md-4 col-lg-3\">
                                <a href=\"javascript:void(0)\" class=\"js-url-chooser-media-select thumbnail media-thumbnail\" data-thumb-path=\"{{ imageurl }}\" data-path=\"{{ media.url ~ '?token=' ~ path }}\" data-title=\"{{ media.name|escape('js') }}\" data-id=\"{{ media.id }}\" data-cke=\"{% if cKEditorFuncNum %}true{% else %}false{% endif %}\">
                                    <figure>
                                        {% if imageurl %}
                                            <img src=\"{{ imageurl }}\" srcset=\"{{ imageurl }} 1x, {{ imageurlretina is defined ? ', ' ~ imageurlretina ~ \" 2x\" }}\" alt=\"{{ media.name }}\" class=\"media-thumbnail__img\">
                                        {% else %}
                                            <i class=\"fa fa-file media-thumbnail__icon\"></i>
                                        {% endif %}
                                        <figcaption class=\"media-thumbnail__caption\">
                                            {{ media.name }}<br>
                                            {% if media.metadata.original_width is defined and media.metadata.original_height is defined and media.metadata.original_width is not empty and media.metadata.original_height is not empty %}
                                                {{ media.metadata.original_width }}px x {{ media.metadata.original_height }}px
                                            {% endif %}
                                        </figcaption>
                                    </figure>
                                    <span class=\"media-thumbnail__helper\">
                                        Click to select
                                    </span>
                                </a>
                            </div>

                            {# Clearfixes #}
                            {% if counter is divisible by(2) %}
                                <div class=\"clearfix visible-sm-block\"></div>
                            {% endif %}
                            {% if counter is divisible by(3) %}
                                <div class=\"clearfix visible-md-block\"></div>
                            {% endif %}
                            {% if counter is divisible by(4) %}
                                <div class=\"clearfix visible-lg-block\"></div>
                            {% endif %}

                            {% set counter = counter+1 %}
                        {% endif %}
                    {% endfor %}
                </div>
            {% else %}
                <p class=\"text--muted\">
                    {{ 'media.media.no' |trans }}
                </p>
            {% endif %}
        {% endif %}
    </section>


    <!-- Modals -->
    {% set urlParams = urlParams|merge({'folderId': folder.id}) %}
    {% include '@KunstmaanMedia/Media/addType-modal.html.twig' %}
    {% include '@KunstmaanMedia/Folder/addsub-modal.html.twig' %}
    {% include '@KunstmaanMedia/Folder/delete-modal.html.twig' %}

{% endblock %}

{% block footer %}{% endblock %}
", "@KunstmaanMedia/Chooser/chooserShowFolder.html.twig", "/Users/macbook/Documents/quoc/blog-admin/vendor/kunstmaan/media-bundle/Resources/views/Chooser/chooserShowFolder.html.twig");
    }
}
