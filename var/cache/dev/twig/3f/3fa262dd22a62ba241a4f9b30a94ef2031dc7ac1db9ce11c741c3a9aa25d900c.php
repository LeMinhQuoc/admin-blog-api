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

/* @KunstmaanMedia/Folder/show.html.twig */
class __TwigTemplate_b0657c92d65dbfc5acff7bdeabc47c08d553b7dcd03bcfcd5890e80ccb4aace7 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'sidebar' => [$this, 'block_sidebar'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'header' => [$this, 'block_header'],
            'page_header_addition' => [$this, 'block_page_header_addition'],
            'extra_actions_header' => [$this, 'block_extra_actions_header'],
            'content' => [$this, 'block_content'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanMedia/Folder/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanMedia/Folder/show.html.twig"));

        $this->parent = $this->loadTemplate("@KunstmaanAdminList/Default/list.html.twig", "@KunstmaanMedia/Folder/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    ";
        $context["lowestTopChild"] = twig_get_attribute($this->env, $this->source, (isset($context["foldermanager"]) || array_key_exists("foldermanager", $context) ? $context["foldermanager"] : (function () { throw new RuntimeError('Variable "foldermanager" does not exist.', 5, $this->source); })()), "getRootFolderFor", [0 => (isset($context["folder"]) || array_key_exists("folder", $context) ? $context["folder"] : (function () { throw new RuntimeError('Variable "folder" does not exist.', 5, $this->source); })())], "method", false, false, false, 5);
        // line 6
        echo "    ";
        if ((isset($context["lowestTopChild"]) || array_key_exists("lowestTopChild", $context) ? $context["lowestTopChild"] : (function () { throw new RuntimeError('Variable "lowestTopChild" does not exist.', 6, $this->source); })())) {
            // line 7
            echo "        ";
            $context["navigationChildren"] = twig_get_attribute($this->env, $this->source, (isset($context["foldermanager"]) || array_key_exists("foldermanager", $context) ? $context["foldermanager"] : (function () { throw new RuntimeError('Variable "foldermanager" does not exist.', 7, $this->source); })()), "getFolderHierarchy", [0 => (isset($context["lowestTopChild"]) || array_key_exists("lowestTopChild", $context) ? $context["lowestTopChild"] : (function () { throw new RuntimeError('Variable "lowestTopChild" does not exist.', 7, $this->source); })())], "method", false, false, false, 7);
            // line 8
            echo "    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 14
        echo "
    <!-- Search -->
    <button type=\"button\" class=\"js-toggle-btn toggle-button btn app__sidebar__search-toggle-btn\" data-target=\"#sidebar-search-toggle\">
        <i class=\"fa fa-search\"></i>
    </button>

    <div id=\"sidebar-search-toggle\" class=\"toggle-item\">
        <div class=\"toggle-item__content\">
            <div class=\"app__sidebar__search-toggle-item\">
                <input type=\"text\" placeholder=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search"), "html", null, true);
        echo "\" id=\"app__sidebar__search\" class=\"form-control\">
                <hr>
            </div>
        </div>
    </div>

    <!-- Tree -->
    <nav role=\"navigation\" id=\"app__sidebar__navigation\" class=\"app__sidebar__module app__sidebar__navigation\" data-reorder-url=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanMediaBundle_folder_reorder");
        echo "\">
        <ul>
            ";
        // line 32
        $context["parentIds"] = twig_get_attribute($this->env, $this->source, (isset($context["foldermanager"]) || array_key_exists("foldermanager", $context) ? $context["foldermanager"] : (function () { throw new RuntimeError('Variable "foldermanager" does not exist.', 32, $this->source); })()), "getParentIds", [0 => (isset($context["folder"]) || array_key_exists("folder", $context) ? $context["folder"] : (function () { throw new RuntimeError('Variable "folder" does not exist.', 32, $this->source); })())], "method", false, false, false, 32);
        // line 33
        echo "            ";
        $context["rootFolder"] = twig_get_attribute($this->env, $this->source, (isset($context["foldermanager"]) || array_key_exists("foldermanager", $context) ? $context["foldermanager"] : (function () { throw new RuntimeError('Variable "foldermanager" does not exist.', 33, $this->source); })()), "getRootFolderFor", [0 => (isset($context["folder"]) || array_key_exists("folder", $context) ? $context["folder"] : (function () { throw new RuntimeError('Variable "folder" does not exist.', 33, $this->source); })())], "method", false, false, false, 33);
        // line 34
        echo "            ";
        $context["folders"] = twig_get_attribute($this->env, $this->source, (isset($context["foldermanager"]) || array_key_exists("foldermanager", $context) ? $context["foldermanager"] : (function () { throw new RuntimeError('Variable "foldermanager" does not exist.', 34, $this->source); })()), "getFolderHierarchy", [0 => (isset($context["rootFolder"]) || array_key_exists("rootFolder", $context) ? $context["rootFolder"] : (function () { throw new RuntimeError('Variable "rootFolder" does not exist.', 34, $this->source); })())], "method", false, false, false, 34);
        // line 35
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["folders"]) || array_key_exists("folders", $context) ? $context["folders"] : (function () { throw new RuntimeError('Variable "folders" does not exist.', 35, $this->source); })()));
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
            // line 36
            echo "                ";
            $this->loadTemplate("@KunstmaanMedia/Folder/foldertreeview.html.twig", "@KunstmaanMedia/Folder/show.html.twig", 36)->display($context);
            // line 37
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
        // line 38
        echo "        </ul>
    </nav>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 44
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 45
        echo "    ";
        $this->loadTemplate("@KunstmaanMedia/Folder/breadcrumbs.html.twig", "@KunstmaanMedia/Folder/show.html.twig", 45)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 50
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 51
        echo "    <h1 class=\"app__content__header__title\">
        ";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["folder"]) || array_key_exists("folder", $context) ? $context["folder"] : (function () { throw new RuntimeError('Variable "folder" does not exist.', 52, $this->source); })()), "name", [], "any", false, false, false, 52), "html", null, true);
        echo " ";
        $this->displayBlock('page_header_addition', $context, $blocks);
        // line 53
        echo "    </h1>
    ";
        // line 54
        $this->displayBlock('extra_actions_header', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 52
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

    // line 54
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

    // line 59
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 60
        echo "    <!-- Sub-actions -->
    <div class=\"page-sub-actions page-sub-actions--has-buttons\">
        <div class=\"btn-group\">
            <a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanMediaBundle_folder_show", ["folderId" => twig_get_attribute($this->env, $this->source, (isset($context["folder"]) || array_key_exists("folder", $context) ? $context["folder"] : (function () { throw new RuntimeError('Variable "folder" does not exist.', 63, $this->source); })()), "id", [], "any", false, false, false, 63), "viewMode" => "thumb-view"]), "html", null, true);
        echo "\" class=\"btn btn-default btn--raise-on-hover";
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "session", [], "any", false, false, false, 63), "get", [0 => "media-list-view"], "method", false, false, false, 63)) {
            echo " active";
        }
        echo "\">
                <i class=\"fa fa-image btn__icon\"></i>
            </a>
            <a href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanMediaBundle_folder_show", ["folderId" => twig_get_attribute($this->env, $this->source, (isset($context["folder"]) || array_key_exists("folder", $context) ? $context["folder"] : (function () { throw new RuntimeError('Variable "folder" does not exist.', 66, $this->source); })()), "id", [], "any", false, false, false, 66), "viewMode" => "list-view"]), "html", null, true);
        echo "\" class=\"btn btn-default btn--raise-on-hover";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "session", [], "any", false, false, false, 66), "get", [0 => "media-list-view"], "method", false, false, false, 66)) {
            echo " active";
        }
        echo "\">
                <i class=\"fa fa-list btn__icon\"></i>
            </a>
        </div>
    </div>

    <!-- Main-actions -->
    <div class=\"page-main-actions ";
        // line 73
        echo "\">
        <div class=\"btn-group\">
            ";
        // line 75
        $this->displayBlock('actions', $context, $blocks);
        // line 112
        echo "        </div>
    </div>


    <!-- Scroll-actions -->
    <div class=\"page-main-actions page-main-actions--top\" id=\"page-main-actions-top\">
        <div class=\"btn-group\">
            ";
        // line 119
        $this->displayBlock("actions", $context, $blocks);
        echo "
            <button type=\"button\" class=\"js-scroll-to-top btn btn-default btn--raise-on-hover\">
                <i class=\"fa fa-caret-up\"></i>
            </button>
        </div>
    </div>


    <!-- Main Tabs -->
    <ul class=\"nav nav-tabs page-main-tabs js-auto-collapse-tabs\">
        <li class=\"active\">
            <a href=\"#imagegallery\" data-toggle=\"tab\">
                ";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("media.folder.contenttab.title"), "html", null, true);
        echo "
            </a>
        </li>
        <li>
            <a href=\"#properties\" data-toggle=\"tab\">
                ";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("media.folder.propertiestab.title"), "html", null, true);
        echo "
            </a>
        </li>
        <li class=\"tab__more dropdown\">
            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                ";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.button.dropdown.more"), "html", null, true);
        echo " <span class=\"caret\"></span>
            </a>
            <ul class=\"dropdown-menu dropdown-menu-right\" id=\"collapsed\"></ul>
        </li>
    </ul>

    <div class=\"tab-content\">

        <!-- TAB - Files -->
        <div class=\"tab-pane active\" id=\"imagegallery\">

            <!-- Subfolders Map list -->
            <nav class=\"list-group list-group--no-top-border\" role=\"navigation\">

                ";
        // line 155
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["folder"]) || array_key_exists("folder", $context) ? $context["folder"] : (function () { throw new RuntimeError('Variable "folder" does not exist.', 155, $this->source); })()), "children", [], "any", false, false, false, 155));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 156
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanMediaBundle_folder_show", ["folderId" => twig_get_attribute($this->env, $this->source, $context["child"], "id", [], "any", false, false, false, 156)]), "html", null, true);
            echo "\" class=\"list-group-item\" data-folder-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "id", [], "any", false, false, false, 156), "html", null, true);
            echo "\">
                        ";
            // line 157
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 157), "html", null, true);
            echo "
                    </a>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 160
            echo "                    <p class=\"list-group-item text--muted\">
                        ";
            // line 161
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("media.folder.sub.no"), "html", null, true);
            echo "
                    </p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
        echo "            </nav>


            <!-- Files -->
            <section id=\"dnd-container\" class=\"dnd-container\">
                <div id=\"dnd-area\" class=\"dnd-area\" data-drop-url=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanMediaBundle_media_drop_upload", ["folderId" => twig_get_attribute($this->env, $this->source, (isset($context["folder"]) || array_key_exists("folder", $context) ? $context["folder"] : (function () { throw new RuntimeError('Variable "folder" does not exist.', 169, $this->source); })()), "id", [], "any", false, false, false, 169)]), "html", null, true);
        echo "\" data-current-url=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanMediaBundle_folder_show", ["folderId" => twig_get_attribute($this->env, $this->source, (isset($context["folder"]) || array_key_exists("folder", $context) ? $context["folder"] : (function () { throw new RuntimeError('Variable "folder" does not exist.', 169, $this->source); })()), "id", [], "any", false, false, false, 169)]), "html", null, true);
        echo "\">
                    <div class=\"dnd-area__drop-alert\">
                        <figure class=\"dnd-area__drop-alert__figure\">
                            <img src=\"/bundles/kunstmaanadmin/default-theme/img/dnd/dnd_img.svg\" alt=\"dnd\" class=\"dnd-area__drop-alert__figure__img\">
                            <figcaption class=\"dnd-area__drop-alert__figure__caption\">
                                <h4 class=\"dnd-area__drop-alert__figure__caption__header\">
                                    ";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("media.media.dnd.alert.title"), "html", null, true);
        echo "
                                </h4>
                                <p class=\"dnd-area__drop-alert__figure__caption__text\">
                                    ";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("media.media.dnd.alert.text"), "html", null, true);
        echo "
                                </p>
                            </figcaption>
                        </figure>
                    </div>
                </div>

                <ul id=\"dnd-area__upload-status\" class=\"list-group dnd-area__upload-status\"></ul>

                ";
        // line 187
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 187, $this->source); })()), "session", [], "any", false, false, false, 187), "get", [0 => "media-list-view"], "method", false, false, false, 187)) {
            // line 188
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 188, $this->source); })()), "count", [], "any", false, false, false, 188) > 0)) {
                // line 189
                echo "                        ";
                $this->displayParentBlock("content", $context, $blocks);
                echo "
                    ";
            } else {
                // line 191
                echo "                        ";
                $this->displayParentBlock("content", $context, $blocks);
                echo "
                        <p class=\"text--muted\">
                            ";
                // line 193
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("media.media.no"), "html", null, true);
                echo "
                        </p>
                        <p id=\"dnd-area-link\" class=\"text--muted\">
                            <strong>";
                // line 196
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("media.media.dnd.tip"), "html", null, true);
                echo "</strong> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("media.media.dnd.tiptext"), "html", null, true);
                echo "
                        </p>
                    ";
            }
            // line 199
            echo "                ";
        } else {
            // line 200
            echo "                    ";
            echo $this->extensions['Kunstmaan\AdminListBundle\Twig\AdminListTwigExtension']->renderThumbWidget($this->env, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 200, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 200, $this->source); })()), "getIndexUrl", [], "method", false, false, false, 200), "path", [], "array", false, false, false, 200), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 200, $this->source); })()), "getIndexUrl", [], "method", false, false, false, 200), "params", [], "array", false, false, false, 200));
            echo "
                    <div class=\"row pull-left\">
                        <div class=\"col-xs-12\">
                            <div class=\"btn-group btn-group-md\" role=\"group\">
                                <button type=\"button\" class=\"btn btn-primary btn--raise-on-hover dropdown-toggle\" data-toggle=\"dropdown\">
                                    ";
            // line 205
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("media.folder.sortby"), "html", null, true);
            echo " <i class=\"fa fa-caret-down\"></i>
                                </button>
                                <ul class=\"dropdown-menu\" role=\"menu\">
                                    ";
            // line 208
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 208, $this->source); })()), "configurator", [], "any", false, false, false, 208), "fields", [], "any", false, false, false, 208));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 209
                echo "                                        <li>
                                            <a href=\"";
                // line 210
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 210, $this->source); })()), "request", [], "any", false, false, false, 210), "attributes", [], "any", false, false, false, 210), "get", [0 => "_route"], "method", false, false, false, 210), twig_array_merge(twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 210, $this->source); })()), "request", [], "any", false, false, false, 210), "attributes", [], "any", false, false, false, 210), "get", [0 => "_route_params"], "method", false, false, false, 210), ["orderBy" => twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 210)]), ["orderDirection" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 210, $this->source); })()), "request", [], "any", false, false, false, 210), "get", [0 => "orderDirection"], "method", false, false, false, 210) != "DESC")) ? ("DESC") : ("ASC"))])), "html", null, true);
                echo "\">
                                                ";
                // line 211
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["field"], "header", [], "any", false, false, false, 211)), "html", null, true);
                echo "
                                            </a>
                                        </li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 215
            echo "                                </ul>
                            </div>
                            <div class=\"btn-group\" role=\"group\">
                                ";
            // line 218
            $this->loadTemplate("@KunstmaanAdminList/AdminListTwigExtension/limit.html.twig", "@KunstmaanMedia/Folder/show.html.twig", 218)->display($context);
            // line 219
            echo "                            </div>
                        </div>
                    </div>

                    ";
            // line 223
            if ((twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 223, $this->source); })()), "count", [], "any", false, false, false, 223) > 0)) {
                // line 224
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 224, $this->source); })()), "pagerfanta", [], "any", false, false, false, 224), "haveToPaginate", [], "method", false, false, false, 224)) {
                    // line 225
                    echo "                            ";
                    echo $this->extensions['WhiteOctober\PagerfantaBundle\Twig\PagerfantaExtension']->renderPagerfanta(twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 225, $this->source); })()), "pagerfanta", [], "any", false, false, false, 225), "twitter_bootstrap_translated");
                    echo "
                        ";
                } else {
                    // line 227
                    echo "                            <div class=\"row row--padded\"></div>
                        ";
                }
                // line 229
                echo "                        <div class=\"row\">
                            ";
                // line 230
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 230, $this->source); })()), "items", [], "any", false, false, false, 230));
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
                foreach ($context['_seq'] as $context["_key"] => $context["media"]) {
                    // line 231
                    echo "                                ";
                    $context["handler"] = twig_get_attribute($this->env, $this->source, (isset($context["mediamanager"]) || array_key_exists("mediamanager", $context) ? $context["mediamanager"] : (function () { throw new RuntimeError('Variable "mediamanager" does not exist.', 231, $this->source); })()), "getHandler", [0 => $context["media"]], "method", false, false, false, 231);
                    // line 232
                    echo "                                ";
                    $context["imageurl"] = twig_get_attribute($this->env, $this->source, (isset($context["handler"]) || array_key_exists("handler", $context) ? $context["handler"] : (function () { throw new RuntimeError('Variable "handler" does not exist.', 232, $this->source); })()), "getImageUrl", [0 => $context["media"], 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 232, $this->source); })()), "request", [], "any", false, false, false, 232), "basePath", [], "any", false, false, false, 232)], "method", false, false, false, 232);
                    // line 233
                    echo "                                ";
                    if (( !twig_test_empty((isset($context["imageurl"]) || array_key_exists("imageurl", $context) ? $context["imageurl"] : (function () { throw new RuntimeError('Variable "imageurl" does not exist.', 233, $this->source); })())) && (twig_get_attribute($this->env, $this->source, $context["media"], "location", [], "any", false, false, false, 233) == "local"))) {
                        // line 234
                        echo "                                    ";
                        if (((twig_last($this->env, twig_split_filter($this->env, twig_lower_filter($this->env, (isset($context["imageurl"]) || array_key_exists("imageurl", $context) ? $context["imageurl"] : (function () { throw new RuntimeError('Variable "imageurl" does not exist.', 234, $this->source); })())), ".")) == "svg") || twig_in_filter("image/svg", twig_get_attribute($this->env, $this->source, $context["media"], "contentType", [], "any", false, false, false, 234)))) {
                            // line 235
                            echo "                                        ";
                            $context["imageurlretina"] = (isset($context["imageurl"]) || array_key_exists("imageurl", $context) ? $context["imageurl"] : (function () { throw new RuntimeError('Variable "imageurl" does not exist.', 235, $this->source); })());
                            // line 236
                            echo "                                    ";
                        } else {
                            // line 237
                            echo "                                        ";
                            $context["imageurlretina"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter((isset($context["imageurl"]) || array_key_exists("imageurl", $context) ? $context["imageurl"] : (function () { throw new RuntimeError('Variable "imageurl" does not exist.', 237, $this->source); })()), "media_list_thumbnail_retina"));
                            // line 238
                            echo "                                        ";
                            $context["imageurl"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter((isset($context["imageurl"]) || array_key_exists("imageurl", $context) ? $context["imageurl"] : (function () { throw new RuntimeError('Variable "imageurl" does not exist.', 238, $this->source); })()), "media_list_thumbnail"));
                            // line 239
                            echo "                                    ";
                        }
                        // line 240
                        echo "                                ";
                    }
                    // line 241
                    echo "
                                <div class=\"js-can-have-dnd col-sm-6 col-md-4 col-lg-3\">
                                    <a class=\"thumbnail media-thumbnail\" href=\"";
                    // line 243
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanMediaBundle_media_show", ["mediaId" => twig_get_attribute($this->env, $this->source, $context["media"], "id", [], "any", false, false, false, 243)]), "html", null, true);
                    echo "\" data-media-id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["media"], "id", [], "any", false, false, false, 243), "html", null, true);
                    echo "\">
                                        <figure>
                                            ";
                    // line 245
                    if ((isset($context["imageurl"]) || array_key_exists("imageurl", $context) ? $context["imageurl"] : (function () { throw new RuntimeError('Variable "imageurl" does not exist.', 245, $this->source); })())) {
                        // line 246
                        echo "                                                <img src=\"";
                        echo twig_escape_filter($this->env, (isset($context["imageurl"]) || array_key_exists("imageurl", $context) ? $context["imageurl"] : (function () { throw new RuntimeError('Variable "imageurl" does not exist.', 246, $this->source); })()), "html", null, true);
                        echo "\" srcset=\"";
                        echo twig_escape_filter($this->env, (isset($context["imageurl"]) || array_key_exists("imageurl", $context) ? $context["imageurl"] : (function () { throw new RuntimeError('Variable "imageurl" does not exist.', 246, $this->source); })()), "html", null, true);
                        echo " 1x ";
                        ((array_key_exists("imageurlretina", $context)) ? (print (twig_escape_filter($this->env, ((", " . (isset($context["imageurlretina"]) || array_key_exists("imageurlretina", $context) ? $context["imageurlretina"] : (function () { throw new RuntimeError('Variable "imageurlretina" does not exist.', 246, $this->source); })())) . " 2x"), "html", null, true))) : (print ("")));
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["media"], "name", [], "any", false, false, false, 246), "html", null, true);
                        echo "\" class=\"media-thumbnail__img\">
                                            ";
                    } else {
                        // line 248
                        echo "                                                <i class=\"fa fa-file media-thumbnail__icon\"></i>
                                            ";
                    }
                    // line 250
                    echo "                                            <figcaption class=\"media-thumbnail__caption\">
                                                ";
                    // line 251
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["media"], "name", [], "any", false, false, false, 251), "html", null, true);
                    echo "<br>
                                                ";
                    // line 252
                    if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["media"], "metadata", [], "any", false, true, false, 252), "original_width", [], "any", true, true, false, 252) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["media"], "metadata", [], "any", false, true, false, 252), "original_height", [], "any", true, true, false, 252)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["media"], "metadata", [], "any", false, false, false, 252), "original_width", [], "any", false, false, false, 252))) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["media"], "metadata", [], "any", false, false, false, 252), "original_height", [], "any", false, false, false, 252)))) {
                        // line 253
                        echo "                                                    ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["media"], "metadata", [], "any", false, false, false, 253), "original_width", [], "any", false, false, false, 253), "html", null, true);
                        echo "px x ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["media"], "metadata", [], "any", false, false, false, 253), "original_height", [], "any", false, false, false, 253), "html", null, true);
                        echo "px
                                                ";
                    }
                    // line 255
                    echo "                                            </figcaption>
                                        </figure>
                                        <span class=\"media-thumbnail__helper\">
                                            Click to edit
                                        </span>
                                    </a>

                                    <div class=\"media-thumbnail-action media-thumbnail-action__move\">
                                        <input type=\"checkbox\" data-media-id=\"";
                    // line 263
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["media"], "id", [], "any", false, false, false, 263), "html", null, true);
                    echo "\" id=\"bulk-move-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["media"], "id", [], "any", false, false, false, 263), "html", null, true);
                    echo "\" name=\"bulk-move-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["media"], "id", [], "any", false, false, false, 263), "html", null, true);
                    echo "\" class=\"media-thumbnail-bulk-move-btn js-bulk-move-media\">
                                        <label class=\"btn\" for=\"bulk-move-";
                    // line 264
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["media"], "id", [], "any", false, false, false, 264), "html", null, true);
                    echo "\"></label>
                                    </div>
                                    <span class=\"media-thumbnail-bulk-move-helper\">
                                        Bulk move
                                    </span>

                                    <div class=\"media-thumbnail-action media-thumbnail-action__delete\">
                                        <button data-target=\"#sure-modal-";
                    // line 271
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["media"], "id", [], "any", false, false, false, 271), "html", null, true);
                    echo "\" data-toggle=\"modal\" class=\"btn media-thumbnail-del-btn\">
                                            <i class=\"fa fa-trash\"></i>
                                        </button>
                                    </div>
                                    <span class=\"media-thumbnail-del-helper\">
                                        Delete
                                    </span>
                                    <!-- Modals -->
                                    ";
                    // line 279
                    $this->loadTemplate("@KunstmaanMedia/Media/delete-modal.html.twig", "@KunstmaanMedia/Folder/show.html.twig", 279)->display($context);
                    // line 280
                    echo "                                </div>

                                ";
                    // line 283
                    echo "                                ";
                    if ((0 == twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 283) % 2)) {
                        // line 284
                        echo "                                    <div class=\"clearfix visible-sm-block\"></div>
                                ";
                    }
                    // line 286
                    echo "                                ";
                    if ((0 == twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 286) % 3)) {
                        // line 287
                        echo "                                    <div class=\"clearfix visible-md-block\"></div>
                                ";
                    }
                    // line 289
                    echo "                                ";
                    if ((0 == twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 289) % 4)) {
                        // line 290
                        echo "                                    <div class=\"clearfix visible-lg-block\"></div>
                                ";
                    }
                    // line 292
                    echo "                            ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['media'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 293
                echo "                        </div>
                        ";
                // line 294
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 294, $this->source); })()), "pagerfanta", [], "any", false, false, false, 294), "haveToPaginate", [], "method", false, false, false, 294)) {
                    // line 295
                    echo "                            ";
                    echo $this->extensions['WhiteOctober\PagerfantaBundle\Twig\PagerfantaExtension']->renderPagerfanta(twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 295, $this->source); })()), "pagerfanta", [], "any", false, false, false, 295), "twitter_bootstrap_translated");
                    echo "
                        ";
                }
                // line 297
                echo "                        <p id=\"dnd-area-link\" class=\"text--muted\">
                            <strong>";
                // line 298
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("media.media.dnd.tip"), "html", null, true);
                echo "</strong> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("media.media.dnd.tiptext"), "html", null, true);
                echo "
                        </p>
                    ";
            } else {
                // line 301
                echo "                        <p class=\"text--muted\">
                            ";
                // line 302
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("media.media.no"), "html", null, true);
                echo "
                        </p>
                        <p id=\"dnd-area-link\" class=\"text--muted\">
                            <strong>";
                // line 305
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("media.media.dnd.tip"), "html", null, true);
                echo "</strong> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("media.media.dnd.tiptext"), "html", null, true);
                echo "
                        </p>
                    ";
            }
            // line 308
            echo "                ";
        }
        // line 309
        echo "            </section>
        </div>


        <!-- TAB - Properties -->
        <div class=\"tab-pane\" id=\"properties\">

            ";
        // line 316
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["editform"]) || array_key_exists("editform", $context) ? $context["editform"] : (function () { throw new RuntimeError('Variable "editform" does not exist.', 316, $this->source); })()), [0 => "@KunstmaanAdmin/Form/fields.html.twig"], true);
        // line 317
        echo "            ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["editform"]) || array_key_exists("editform", $context) ? $context["editform"] : (function () { throw new RuntimeError('Variable "editform" does not exist.', 317, $this->source); })()), 'form_start', ["method" => "POST", "action" => ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanMediaBundle_folder_show", ["folderId" => twig_get_attribute($this->env, $this->source, (isset($context["folder"]) || array_key_exists("folder", $context) ? $context["folder"] : (function () { throw new RuntimeError('Variable "folder" does not exist.', 317, $this->source); })()), "id", [], "any", false, false, false, 317)]) . "#properties")]);
        echo "
            <fieldset class=\"panel panel-default form-properties\">
                <div class=\"panel-body\">
                    ";
        // line 320
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["editform"]) || array_key_exists("editform", $context) ? $context["editform"] : (function () { throw new RuntimeError('Variable "editform" does not exist.', 320, $this->source); })()), 'widget');
        echo "

                    <div class=\"form-actions form-actions--padded\">
                        <button class=\"btn btn-primary btn--raise-on-hover\" type=\"submit\">
                            ";
        // line 324
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("media.folder.save"), "html", null, true);
        echo "
                        </button>
                        <button class=\"btn btn-default btn--raise-on-hover\" onclick=\"window.location = '";
        // line 326
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanMediaBundle_folder_show", ["folderId" => twig_get_attribute($this->env, $this->source, (isset($context["folder"]) || array_key_exists("folder", $context) ? $context["folder"] : (function () { throw new RuntimeError('Variable "folder" does not exist.', 326, $this->source); })()), "id", [], "any", false, false, false, 326)]), "html", null, true);
        echo "'\" type=\"reset\">
                            ";
        // line 327
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.cancel"), "html", null, true);
        echo "
                        </button>
                    </div>
                </div>
            </fieldset>
            ";
        // line 332
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["editform"]) || array_key_exists("editform", $context) ? $context["editform"] : (function () { throw new RuntimeError('Variable "editform" does not exist.', 332, $this->source); })()), 'form_end');
        echo "
        </div>
    </div>


    <!-- Modals -->
    ";
        // line 338
        $this->loadTemplate("@KunstmaanMedia/Folder/addsub-modal.html.twig", "@KunstmaanMedia/Folder/show.html.twig", 338)->display($context);
        // line 339
        echo "    ";
        $this->loadTemplate("@KunstmaanMedia/Folder/delete-modal.html.twig", "@KunstmaanMedia/Folder/show.html.twig", 339)->display($context);
        // line 340
        echo "    ";
        $this->loadTemplate("@KunstmaanMedia/Folder/empty-modal.html.twig", "@KunstmaanMedia/Folder/show.html.twig", 340)->display($context);
        // line 341
        echo "    ";
        $this->loadTemplate("@KunstmaanMedia/Folder/bulk-move-modal.html.twig", "@KunstmaanMedia/Folder/show.html.twig", 341)->display($context);
        // line 342
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 75
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actions"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actions"));

        // line 76
        echo "                <div class=\"btn-group\" role=\"group\">
                    <button type=\"button\" class=\"btn btn-primary btn--raise-on-hover dropdown-toggle\" data-toggle=\"dropdown\">
                        ";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("media.media.add.action"), "html", null, true);
        echo " <i class=\"fa fa-caret-down\"></i>
                    </button>
                    <ul class=\"dropdown-menu\" role=\"menu\">
                        ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["mediamanager"]) || array_key_exists("mediamanager", $context) ? $context["mediamanager"] : (function () { throw new RuntimeError('Variable "mediamanager" does not exist.', 81, $this->source); })()), "getFolderAddActions", [], "method", false, false, false, 81));
        foreach ($context['_seq'] as $context["_key"] => $context["addaction"]) {
            // line 82
            echo "                            <li>
                                <a href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanMediaBundle_media_create", ["folderId" => twig_get_attribute($this->env, $this->source, (isset($context["folder"]) || array_key_exists("folder", $context) ? $context["folder"] : (function () { throw new RuntimeError('Variable "folder" does not exist.', 83, $this->source); })()), "id", [], "any", false, false, false, 83), "type" => twig_get_attribute($this->env, $this->source, $context["addaction"], "type", [], "any", false, false, false, 83)]), "html", null, true);
            echo "\">
                                    ";
            // line 84
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["addaction"], "name", [], "any", false, false, false, 84)), "html", null, true);
            echo "
                                </a>
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['addaction'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "                        <li>
                            <a href=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanMediaBundle_media_bulk_upload", ["folderId" => twig_get_attribute($this->env, $this->source, (isset($context["folder"]) || array_key_exists("folder", $context) ? $context["folder"] : (function () { throw new RuntimeError('Variable "folder" does not exist.', 89, $this->source); })()), "id", [], "any", false, false, false, 89)]), "html", null, true);
        echo "\">
                                ";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("media.bulkupload.bulkupload"), "html", null, true);
        echo "
                            </a>
                        </li>
                    </ul>
                </div>
                <button class=\"btn btn-default btn--raise-on-hover\" data-target=\"#addsub-modal\" data-toggle=\"modal\" type=\"button\">
                    <span class=\"large-screen\">";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("media.folder.addsub.action"), "html", null, true);
        echo "</span>
                    <span class=\"small-screen\">";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("media.folder.addsub.action_short"), "html", null, true);
        echo " <i class=\"fa fa-plus-circle btn__icon-folder\"></i></span>
                </button>
                <button class=\"btn btn-default btn--raise-on-hover\" data-target=\"#delete-modal\" data-toggle=\"modal\" type=\"button\">
                    <span class=\"large-screen\">";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("media.folder.delete.action"), "html", null, true);
        echo "</span>
                    <span class=\"small-screen\">";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("media.folder.delete.action_short"), "html", null, true);
        echo " <i class=\"fa fa-minus-circle btn__icon-folder\"></i></span>
                </button>
                <button class=\"btn btn-default btn--raise-on-hover\" data-target=\"#empty-modal\" data-toggle=\"modal\" type=\"button\">
                    <span class=\"large-screen\">";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("media.folder.empty.action"), "html", null, true);
        echo "</span>
                    <span class=\"small-screen\">";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("media.folder.empty.action_short"), "html", null, true);
        echo " <i class=\"fa fa-trash btn__icon-folder\"></i></span>
                </button>
                <button class=\"btn btn-default btn--raise-on-hover\" data-target=\"#bulk-move-modal\" data-toggle=\"modal\" type=\"button\">
                    <span class=\"large-screen\">";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("media.folder.bulk_move.action"), "html", null, true);
        echo "</span>
                    <span class=\"small-screen\">";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("media.folder.bulk_move.action_short"), "html", null, true);
        echo " <i class=\"fa fa-arrow-circle-right btn__icon-folder\"></i></span>
                </button>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 345
    public function block_js_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js_footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js_footer"));

        // line 346
        echo "    <!-- JS -->
    ";
        // line 347
        $this->loadTemplate("@KunstmaanMedia/Folder/show.html.twig", "@KunstmaanMedia/Folder/show.html.twig", 347, "1295638896")->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanMedia/Folder/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  955 => 347,  952 => 346,  942 => 345,  929 => 109,  925 => 108,  919 => 105,  915 => 104,  909 => 101,  905 => 100,  899 => 97,  895 => 96,  886 => 90,  882 => 89,  879 => 88,  869 => 84,  865 => 83,  862 => 82,  858 => 81,  852 => 78,  848 => 76,  838 => 75,  827 => 342,  824 => 341,  821 => 340,  818 => 339,  816 => 338,  807 => 332,  799 => 327,  795 => 326,  790 => 324,  783 => 320,  776 => 317,  774 => 316,  765 => 309,  762 => 308,  754 => 305,  748 => 302,  745 => 301,  737 => 298,  734 => 297,  728 => 295,  726 => 294,  723 => 293,  709 => 292,  705 => 290,  702 => 289,  698 => 287,  695 => 286,  691 => 284,  688 => 283,  684 => 280,  682 => 279,  671 => 271,  661 => 264,  653 => 263,  643 => 255,  635 => 253,  633 => 252,  629 => 251,  626 => 250,  622 => 248,  610 => 246,  608 => 245,  601 => 243,  597 => 241,  594 => 240,  591 => 239,  588 => 238,  585 => 237,  582 => 236,  579 => 235,  576 => 234,  573 => 233,  570 => 232,  567 => 231,  550 => 230,  547 => 229,  543 => 227,  537 => 225,  534 => 224,  532 => 223,  526 => 219,  524 => 218,  519 => 215,  509 => 211,  505 => 210,  502 => 209,  498 => 208,  492 => 205,  483 => 200,  480 => 199,  472 => 196,  466 => 193,  460 => 191,  454 => 189,  451 => 188,  449 => 187,  437 => 178,  431 => 175,  420 => 169,  413 => 164,  404 => 161,  401 => 160,  393 => 157,  386 => 156,  381 => 155,  364 => 141,  356 => 136,  348 => 131,  333 => 119,  324 => 112,  322 => 75,  318 => 73,  304 => 66,  294 => 63,  289 => 60,  279 => 59,  261 => 54,  243 => 52,  233 => 54,  230 => 53,  226 => 52,  223 => 51,  213 => 50,  202 => 45,  192 => 44,  180 => 38,  166 => 37,  163 => 36,  145 => 35,  142 => 34,  139 => 33,  137 => 32,  132 => 30,  122 => 23,  111 => 14,  101 => 13,  88 => 9,  85 => 8,  82 => 7,  79 => 6,  76 => 5,  66 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@KunstmaanAdminList/Default/list.html.twig' %}


{% block body %}
    {% set lowestTopChild = foldermanager.getRootFolderFor(folder) %}
    {% if lowestTopChild %}
        {% set navigationChildren = foldermanager.getFolderHierarchy(lowestTopChild) %}
    {% endif %}
    {{ parent() }}
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
    <nav role=\"navigation\" id=\"app__sidebar__navigation\" class=\"app__sidebar__module app__sidebar__navigation\" data-reorder-url=\"{{ path('KunstmaanMediaBundle_folder_reorder') }}\">
        <ul>
            {% set parentIds = foldermanager.getParentIds(folder) %}
            {% set rootFolder = foldermanager.getRootFolderFor(folder) %}
            {% set folders = foldermanager.getFolderHierarchy(rootFolder) %}
            {% for mediaFolder in folders %}
                {% include '@KunstmaanMedia/Folder/foldertreeview.html.twig' %}
            {% endfor %}
        </ul>
    </nav>
{% endblock %}



{% block breadcrumb %}
    {% include '@KunstmaanMedia/Folder/breadcrumbs.html.twig' %}
{% endblock %}



{% block header %}
    <h1 class=\"app__content__header__title\">
        {{ folder.name }} {% block page_header_addition %}{% endblock %}
    </h1>
    {% block extra_actions_header %}{% endblock %}
{% endblock %}



{% block content %}
    <!-- Sub-actions -->
    <div class=\"page-sub-actions page-sub-actions--has-buttons\">
        <div class=\"btn-group\">
            <a href=\"{{ path('KunstmaanMediaBundle_folder_show', { 'folderId': folder.id, viewMode: 'thumb-view'}) }}\" class=\"btn btn-default btn--raise-on-hover{% if not app.session.get('media-list-view') %} active{% endif %}\">
                <i class=\"fa fa-image btn__icon\"></i>
            </a>
            <a href=\"{{ path('KunstmaanMediaBundle_folder_show', { 'folderId': folder.id, viewMode: 'list-view'}) }}\" class=\"btn btn-default btn--raise-on-hover{% if app.session.get('media-list-view') %} active{% endif %}\">
                <i class=\"fa fa-list btn__icon\"></i>
            </a>
        </div>
    </div>

    <!-- Main-actions -->
    <div class=\"page-main-actions {#js-auto-collapse-buttons#}\">
        <div class=\"btn-group\">
            {% block actions %}
                <div class=\"btn-group\" role=\"group\">
                    <button type=\"button\" class=\"btn btn-primary btn--raise-on-hover dropdown-toggle\" data-toggle=\"dropdown\">
                        {{ 'media.media.add.action'|trans }} <i class=\"fa fa-caret-down\"></i>
                    </button>
                    <ul class=\"dropdown-menu\" role=\"menu\">
                        {% for addaction in mediamanager.getFolderAddActions() %}
                            <li>
                                <a href=\"{{ path('KunstmaanMediaBundle_media_create', { 'folderId' : folder.id, 'type': addaction.type }) }}\">
                                    {{ addaction.name |trans }}
                                </a>
                            </li>
                        {% endfor %}
                        <li>
                            <a href=\"{{ path('KunstmaanMediaBundle_media_bulk_upload', { 'folderId' : folder.id }) }}\">
                                {{ 'media.bulkupload.bulkupload' |trans }}
                            </a>
                        </li>
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
                <button class=\"btn btn-default btn--raise-on-hover\" data-target=\"#empty-modal\" data-toggle=\"modal\" type=\"button\">
                    <span class=\"large-screen\">{{ 'media.folder.empty.action' |trans }}</span>
                    <span class=\"small-screen\">{{ 'media.folder.empty.action_short' |trans }} <i class=\"fa fa-trash btn__icon-folder\"></i></span>
                </button>
                <button class=\"btn btn-default btn--raise-on-hover\" data-target=\"#bulk-move-modal\" data-toggle=\"modal\" type=\"button\">
                    <span class=\"large-screen\">{{ 'media.folder.bulk_move.action' |trans }}</span>
                    <span class=\"small-screen\">{{ 'media.folder.bulk_move.action_short' |trans }} <i class=\"fa fa-arrow-circle-right btn__icon-folder\"></i></span>
                </button>
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


    <!-- Main Tabs -->
    <ul class=\"nav nav-tabs page-main-tabs js-auto-collapse-tabs\">
        <li class=\"active\">
            <a href=\"#imagegallery\" data-toggle=\"tab\">
                {{ 'media.folder.contenttab.title' | trans }}
            </a>
        </li>
        <li>
            <a href=\"#properties\" data-toggle=\"tab\">
                {{ 'media.folder.propertiestab.title' | trans }}
            </a>
        </li>
        <li class=\"tab__more dropdown\">
            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                {{ 'form.button.dropdown.more' | trans }} <span class=\"caret\"></span>
            </a>
            <ul class=\"dropdown-menu dropdown-menu-right\" id=\"collapsed\"></ul>
        </li>
    </ul>

    <div class=\"tab-content\">

        <!-- TAB - Files -->
        <div class=\"tab-pane active\" id=\"imagegallery\">

            <!-- Subfolders Map list -->
            <nav class=\"list-group list-group--no-top-border\" role=\"navigation\">

                {% for child in folder.children %}
                    <a href=\"{{ path('KunstmaanMediaBundle_folder_show', { 'folderId' :child.id }) }}\" class=\"list-group-item\" data-folder-id=\"{{ child.id }}\">
                        {{ child.name }}
                    </a>
                {% else %}
                    <p class=\"list-group-item text--muted\">
                        {{ 'media.folder.sub.no' |trans }}
                    </p>
                {% endfor %}
            </nav>


            <!-- Files -->
            <section id=\"dnd-container\" class=\"dnd-container\">
                <div id=\"dnd-area\" class=\"dnd-area\" data-drop-url=\"{{ path('KunstmaanMediaBundle_media_drop_upload', { 'folderId' : folder.id } ) }}\" data-current-url=\"{{ path('KunstmaanMediaBundle_folder_show', { 'folderId' :folder.id }) }}\">
                    <div class=\"dnd-area__drop-alert\">
                        <figure class=\"dnd-area__drop-alert__figure\">
                            <img src=\"/bundles/kunstmaanadmin/default-theme/img/dnd/dnd_img.svg\" alt=\"dnd\" class=\"dnd-area__drop-alert__figure__img\">
                            <figcaption class=\"dnd-area__drop-alert__figure__caption\">
                                <h4 class=\"dnd-area__drop-alert__figure__caption__header\">
                                    {{ 'media.media.dnd.alert.title' |trans }}
                                </h4>
                                <p class=\"dnd-area__drop-alert__figure__caption__text\">
                                    {{ 'media.media.dnd.alert.text' |trans }}
                                </p>
                            </figcaption>
                        </figure>
                    </div>
                </div>

                <ul id=\"dnd-area__upload-status\" class=\"list-group dnd-area__upload-status\"></ul>

                {% if app.session.get('media-list-view') %}
                    {% if adminlist.count > 0 %}
                        {{ parent() }}
                    {% else %}
                        {{ parent() }}
                        <p class=\"text--muted\">
                            {{ 'media.media.no' |trans }}
                        </p>
                        <p id=\"dnd-area-link\" class=\"text--muted\">
                            <strong>{{ 'media.media.dnd.tip' |trans }}</strong> {{ 'media.media.dnd.tiptext' |trans }}
                        </p>
                    {% endif %}
                {% else %}
                    {{ adminthumb_widget(adminlist, adminlist.getIndexUrl()[\"path\"], adminlist.getIndexUrl()['params']) }}
                    <div class=\"row pull-left\">
                        <div class=\"col-xs-12\">
                            <div class=\"btn-group btn-group-md\" role=\"group\">
                                <button type=\"button\" class=\"btn btn-primary btn--raise-on-hover dropdown-toggle\" data-toggle=\"dropdown\">
                                    {{ 'media.folder.sortby' | trans }} <i class=\"fa fa-caret-down\"></i>
                                </button>
                                <ul class=\"dropdown-menu\" role=\"menu\">
                                    {% for field in adminlist.configurator.fields %}
                                        <li>
                                            <a href=\"{{ path(app.request.attributes.get('_route'),app.request.attributes.get('_route_params')|merge({'orderBy': field.name})|merge({'orderDirection': app.request.get('orderDirection') != 'DESC' ? 'DESC': 'ASC'})) }}\">
                                                {{ field.header | trans }}
                                            </a>
                                        </li>
                                    {% endfor %}
                                </ul>
                            </div>
                            <div class=\"btn-group\" role=\"group\">
                                {% include '@KunstmaanAdminList/AdminListTwigExtension/limit.html.twig' %}
                            </div>
                        </div>
                    </div>

                    {% if adminlist.count > 0 %}
                        {% if adminlist.pagerfanta.haveToPaginate() %}
                            {{ pagerfanta(adminlist.pagerfanta, 'twitter_bootstrap_translated') }}
                        {% else %}
                            <div class=\"row row--padded\"></div>
                        {% endif %}
                        <div class=\"row\">
                            {% for media in adminlist.items %}
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

                                <div class=\"js-can-have-dnd col-sm-6 col-md-4 col-lg-3\">
                                    <a class=\"thumbnail media-thumbnail\" href=\"{{ path('KunstmaanMediaBundle_media_show',  { 'mediaId' : media.id }) }}\" data-media-id=\"{{ media.id }}\">
                                        <figure>
                                            {% if imageurl %}
                                                <img src=\"{{ imageurl }}\" srcset=\"{{ imageurl }} 1x {{ imageurlretina is defined ? ', ' ~ imageurlretina ~ \" 2x\" }}\" alt=\"{{ media.name }}\" class=\"media-thumbnail__img\">
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
                                            Click to edit
                                        </span>
                                    </a>

                                    <div class=\"media-thumbnail-action media-thumbnail-action__move\">
                                        <input type=\"checkbox\" data-media-id=\"{{ media.id }}\" id=\"bulk-move-{{ media.id }}\" name=\"bulk-move-{{ media.id }}\" class=\"media-thumbnail-bulk-move-btn js-bulk-move-media\">
                                        <label class=\"btn\" for=\"bulk-move-{{ media.id }}\"></label>
                                    </div>
                                    <span class=\"media-thumbnail-bulk-move-helper\">
                                        Bulk move
                                    </span>

                                    <div class=\"media-thumbnail-action media-thumbnail-action__delete\">
                                        <button data-target=\"#sure-modal-{{ media.id }}\" data-toggle=\"modal\" class=\"btn media-thumbnail-del-btn\">
                                            <i class=\"fa fa-trash\"></i>
                                        </button>
                                    </div>
                                    <span class=\"media-thumbnail-del-helper\">
                                        Delete
                                    </span>
                                    <!-- Modals -->
                                    {% include '@KunstmaanMedia/Media/delete-modal.html.twig' %}
                                </div>

                                {# Clearfixes #}
                                {% if loop.index is divisible by(2) %}
                                    <div class=\"clearfix visible-sm-block\"></div>
                                {% endif %}
                                {% if loop.index is divisible by(3) %}
                                    <div class=\"clearfix visible-md-block\"></div>
                                {% endif %}
                                {% if loop.index is divisible by(4) %}
                                    <div class=\"clearfix visible-lg-block\"></div>
                                {% endif %}
                            {% endfor %}
                        </div>
                        {% if adminlist.pagerfanta.haveToPaginate() %}
                            {{ pagerfanta(adminlist.pagerfanta, 'twitter_bootstrap_translated') }}
                        {% endif %}
                        <p id=\"dnd-area-link\" class=\"text--muted\">
                            <strong>{{ 'media.media.dnd.tip' |trans }}</strong> {{ 'media.media.dnd.tiptext' |trans }}
                        </p>
                    {% else %}
                        <p class=\"text--muted\">
                            {{ 'media.media.no' |trans }}
                        </p>
                        <p id=\"dnd-area-link\" class=\"text--muted\">
                            <strong>{{ 'media.media.dnd.tip' |trans }}</strong> {{ 'media.media.dnd.tiptext' |trans }}
                        </p>
                    {% endif %}
                {% endif %}
            </section>
        </div>


        <!-- TAB - Properties -->
        <div class=\"tab-pane\" id=\"properties\">

            {% form_theme editform '@KunstmaanAdmin/Form/fields.html.twig' %}
            {{ form_start(editform, {'method': 'POST', 'action': path('KunstmaanMediaBundle_folder_show', { 'folderId' : folder.id }) ~ '#properties'}) }}
            <fieldset class=\"panel panel-default form-properties\">
                <div class=\"panel-body\">
                    {{ form_widget(editform) }}

                    <div class=\"form-actions form-actions--padded\">
                        <button class=\"btn btn-primary btn--raise-on-hover\" type=\"submit\">
                            {{ 'media.folder.save' |trans }}
                        </button>
                        <button class=\"btn btn-default btn--raise-on-hover\" onclick=\"window.location = '{{ path('KunstmaanMediaBundle_folder_show', { 'folderId' : folder.id } ) }}'\" type=\"reset\">
                            {{ 'form.cancel' |trans }}
                        </button>
                    </div>
                </div>
            </fieldset>
            {{ form_end(editform) }}
        </div>
    </div>


    <!-- Modals -->
    {% include '@KunstmaanMedia/Folder/addsub-modal.html.twig' %}
    {% include '@KunstmaanMedia/Folder/delete-modal.html.twig' %}
    {% include '@KunstmaanMedia/Folder/empty-modal.html.twig' %}
    {% include '@KunstmaanMedia/Folder/bulk-move-modal.html.twig' %}

{% endblock %}

{% block js_footer %}
    <!-- JS -->
    {% embed \"@KunstmaanAdmin/Default/_js_footer.html.twig\" %}
        {% block extra_async_javascripts %}
            {{ parent() }}
            '{{ asset('bundles/kunstmaanmedia/js/media-bundle.min.js') }}',
        {% endblock %}
    {% endembed %}
{% endblock %}
", "@KunstmaanMedia/Folder/show.html.twig", "/Users/macbook/Documents/quoc/admin-blog-api-/vendor/kunstmaan/media-bundle/Resources/views/Folder/show.html.twig");
    }
}


/* @KunstmaanMedia/Folder/show.html.twig */
class __TwigTemplate_b0657c92d65dbfc5acff7bdeabc47c08d553b7dcd03bcfcd5890e80ccb4aace7___1295638896 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanMedia/Folder/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanMedia/Folder/show.html.twig"));

        $this->parent = $this->loadTemplate("@KunstmaanAdmin/Default/_js_footer.html.twig", "@KunstmaanMedia/Folder/show.html.twig", 347);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 348
    public function block_extra_async_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_async_javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_async_javascripts"));

        // line 349
        echo "            ";
        $this->displayParentBlock("extra_async_javascripts", $context, $blocks);
        echo "
            '";
        // line 350
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/kunstmaanmedia/js/media-bundle.min.js"), "html", null, true);
        echo "',
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanMedia/Folder/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1396 => 350,  1391 => 349,  1381 => 348,  955 => 347,  952 => 346,  942 => 345,  929 => 109,  925 => 108,  919 => 105,  915 => 104,  909 => 101,  905 => 100,  899 => 97,  895 => 96,  886 => 90,  882 => 89,  879 => 88,  869 => 84,  865 => 83,  862 => 82,  858 => 81,  852 => 78,  848 => 76,  838 => 75,  827 => 342,  824 => 341,  821 => 340,  818 => 339,  816 => 338,  807 => 332,  799 => 327,  795 => 326,  790 => 324,  783 => 320,  776 => 317,  774 => 316,  765 => 309,  762 => 308,  754 => 305,  748 => 302,  745 => 301,  737 => 298,  734 => 297,  728 => 295,  726 => 294,  723 => 293,  709 => 292,  705 => 290,  702 => 289,  698 => 287,  695 => 286,  691 => 284,  688 => 283,  684 => 280,  682 => 279,  671 => 271,  661 => 264,  653 => 263,  643 => 255,  635 => 253,  633 => 252,  629 => 251,  626 => 250,  622 => 248,  610 => 246,  608 => 245,  601 => 243,  597 => 241,  594 => 240,  591 => 239,  588 => 238,  585 => 237,  582 => 236,  579 => 235,  576 => 234,  573 => 233,  570 => 232,  567 => 231,  550 => 230,  547 => 229,  543 => 227,  537 => 225,  534 => 224,  532 => 223,  526 => 219,  524 => 218,  519 => 215,  509 => 211,  505 => 210,  502 => 209,  498 => 208,  492 => 205,  483 => 200,  480 => 199,  472 => 196,  466 => 193,  460 => 191,  454 => 189,  451 => 188,  449 => 187,  437 => 178,  431 => 175,  420 => 169,  413 => 164,  404 => 161,  401 => 160,  393 => 157,  386 => 156,  381 => 155,  364 => 141,  356 => 136,  348 => 131,  333 => 119,  324 => 112,  322 => 75,  318 => 73,  304 => 66,  294 => 63,  289 => 60,  279 => 59,  261 => 54,  243 => 52,  233 => 54,  230 => 53,  226 => 52,  223 => 51,  213 => 50,  202 => 45,  192 => 44,  180 => 38,  166 => 37,  163 => 36,  145 => 35,  142 => 34,  139 => 33,  137 => 32,  132 => 30,  122 => 23,  111 => 14,  101 => 13,  88 => 9,  85 => 8,  82 => 7,  79 => 6,  76 => 5,  66 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@KunstmaanAdminList/Default/list.html.twig' %}


{% block body %}
    {% set lowestTopChild = foldermanager.getRootFolderFor(folder) %}
    {% if lowestTopChild %}
        {% set navigationChildren = foldermanager.getFolderHierarchy(lowestTopChild) %}
    {% endif %}
    {{ parent() }}
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
    <nav role=\"navigation\" id=\"app__sidebar__navigation\" class=\"app__sidebar__module app__sidebar__navigation\" data-reorder-url=\"{{ path('KunstmaanMediaBundle_folder_reorder') }}\">
        <ul>
            {% set parentIds = foldermanager.getParentIds(folder) %}
            {% set rootFolder = foldermanager.getRootFolderFor(folder) %}
            {% set folders = foldermanager.getFolderHierarchy(rootFolder) %}
            {% for mediaFolder in folders %}
                {% include '@KunstmaanMedia/Folder/foldertreeview.html.twig' %}
            {% endfor %}
        </ul>
    </nav>
{% endblock %}



{% block breadcrumb %}
    {% include '@KunstmaanMedia/Folder/breadcrumbs.html.twig' %}
{% endblock %}



{% block header %}
    <h1 class=\"app__content__header__title\">
        {{ folder.name }} {% block page_header_addition %}{% endblock %}
    </h1>
    {% block extra_actions_header %}{% endblock %}
{% endblock %}



{% block content %}
    <!-- Sub-actions -->
    <div class=\"page-sub-actions page-sub-actions--has-buttons\">
        <div class=\"btn-group\">
            <a href=\"{{ path('KunstmaanMediaBundle_folder_show', { 'folderId': folder.id, viewMode: 'thumb-view'}) }}\" class=\"btn btn-default btn--raise-on-hover{% if not app.session.get('media-list-view') %} active{% endif %}\">
                <i class=\"fa fa-image btn__icon\"></i>
            </a>
            <a href=\"{{ path('KunstmaanMediaBundle_folder_show', { 'folderId': folder.id, viewMode: 'list-view'}) }}\" class=\"btn btn-default btn--raise-on-hover{% if app.session.get('media-list-view') %} active{% endif %}\">
                <i class=\"fa fa-list btn__icon\"></i>
            </a>
        </div>
    </div>

    <!-- Main-actions -->
    <div class=\"page-main-actions {#js-auto-collapse-buttons#}\">
        <div class=\"btn-group\">
            {% block actions %}
                <div class=\"btn-group\" role=\"group\">
                    <button type=\"button\" class=\"btn btn-primary btn--raise-on-hover dropdown-toggle\" data-toggle=\"dropdown\">
                        {{ 'media.media.add.action'|trans }} <i class=\"fa fa-caret-down\"></i>
                    </button>
                    <ul class=\"dropdown-menu\" role=\"menu\">
                        {% for addaction in mediamanager.getFolderAddActions() %}
                            <li>
                                <a href=\"{{ path('KunstmaanMediaBundle_media_create', { 'folderId' : folder.id, 'type': addaction.type }) }}\">
                                    {{ addaction.name |trans }}
                                </a>
                            </li>
                        {% endfor %}
                        <li>
                            <a href=\"{{ path('KunstmaanMediaBundle_media_bulk_upload', { 'folderId' : folder.id }) }}\">
                                {{ 'media.bulkupload.bulkupload' |trans }}
                            </a>
                        </li>
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
                <button class=\"btn btn-default btn--raise-on-hover\" data-target=\"#empty-modal\" data-toggle=\"modal\" type=\"button\">
                    <span class=\"large-screen\">{{ 'media.folder.empty.action' |trans }}</span>
                    <span class=\"small-screen\">{{ 'media.folder.empty.action_short' |trans }} <i class=\"fa fa-trash btn__icon-folder\"></i></span>
                </button>
                <button class=\"btn btn-default btn--raise-on-hover\" data-target=\"#bulk-move-modal\" data-toggle=\"modal\" type=\"button\">
                    <span class=\"large-screen\">{{ 'media.folder.bulk_move.action' |trans }}</span>
                    <span class=\"small-screen\">{{ 'media.folder.bulk_move.action_short' |trans }} <i class=\"fa fa-arrow-circle-right btn__icon-folder\"></i></span>
                </button>
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


    <!-- Main Tabs -->
    <ul class=\"nav nav-tabs page-main-tabs js-auto-collapse-tabs\">
        <li class=\"active\">
            <a href=\"#imagegallery\" data-toggle=\"tab\">
                {{ 'media.folder.contenttab.title' | trans }}
            </a>
        </li>
        <li>
            <a href=\"#properties\" data-toggle=\"tab\">
                {{ 'media.folder.propertiestab.title' | trans }}
            </a>
        </li>
        <li class=\"tab__more dropdown\">
            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                {{ 'form.button.dropdown.more' | trans }} <span class=\"caret\"></span>
            </a>
            <ul class=\"dropdown-menu dropdown-menu-right\" id=\"collapsed\"></ul>
        </li>
    </ul>

    <div class=\"tab-content\">

        <!-- TAB - Files -->
        <div class=\"tab-pane active\" id=\"imagegallery\">

            <!-- Subfolders Map list -->
            <nav class=\"list-group list-group--no-top-border\" role=\"navigation\">

                {% for child in folder.children %}
                    <a href=\"{{ path('KunstmaanMediaBundle_folder_show', { 'folderId' :child.id }) }}\" class=\"list-group-item\" data-folder-id=\"{{ child.id }}\">
                        {{ child.name }}
                    </a>
                {% else %}
                    <p class=\"list-group-item text--muted\">
                        {{ 'media.folder.sub.no' |trans }}
                    </p>
                {% endfor %}
            </nav>


            <!-- Files -->
            <section id=\"dnd-container\" class=\"dnd-container\">
                <div id=\"dnd-area\" class=\"dnd-area\" data-drop-url=\"{{ path('KunstmaanMediaBundle_media_drop_upload', { 'folderId' : folder.id } ) }}\" data-current-url=\"{{ path('KunstmaanMediaBundle_folder_show', { 'folderId' :folder.id }) }}\">
                    <div class=\"dnd-area__drop-alert\">
                        <figure class=\"dnd-area__drop-alert__figure\">
                            <img src=\"/bundles/kunstmaanadmin/default-theme/img/dnd/dnd_img.svg\" alt=\"dnd\" class=\"dnd-area__drop-alert__figure__img\">
                            <figcaption class=\"dnd-area__drop-alert__figure__caption\">
                                <h4 class=\"dnd-area__drop-alert__figure__caption__header\">
                                    {{ 'media.media.dnd.alert.title' |trans }}
                                </h4>
                                <p class=\"dnd-area__drop-alert__figure__caption__text\">
                                    {{ 'media.media.dnd.alert.text' |trans }}
                                </p>
                            </figcaption>
                        </figure>
                    </div>
                </div>

                <ul id=\"dnd-area__upload-status\" class=\"list-group dnd-area__upload-status\"></ul>

                {% if app.session.get('media-list-view') %}
                    {% if adminlist.count > 0 %}
                        {{ parent() }}
                    {% else %}
                        {{ parent() }}
                        <p class=\"text--muted\">
                            {{ 'media.media.no' |trans }}
                        </p>
                        <p id=\"dnd-area-link\" class=\"text--muted\">
                            <strong>{{ 'media.media.dnd.tip' |trans }}</strong> {{ 'media.media.dnd.tiptext' |trans }}
                        </p>
                    {% endif %}
                {% else %}
                    {{ adminthumb_widget(adminlist, adminlist.getIndexUrl()[\"path\"], adminlist.getIndexUrl()['params']) }}
                    <div class=\"row pull-left\">
                        <div class=\"col-xs-12\">
                            <div class=\"btn-group btn-group-md\" role=\"group\">
                                <button type=\"button\" class=\"btn btn-primary btn--raise-on-hover dropdown-toggle\" data-toggle=\"dropdown\">
                                    {{ 'media.folder.sortby' | trans }} <i class=\"fa fa-caret-down\"></i>
                                </button>
                                <ul class=\"dropdown-menu\" role=\"menu\">
                                    {% for field in adminlist.configurator.fields %}
                                        <li>
                                            <a href=\"{{ path(app.request.attributes.get('_route'),app.request.attributes.get('_route_params')|merge({'orderBy': field.name})|merge({'orderDirection': app.request.get('orderDirection') != 'DESC' ? 'DESC': 'ASC'})) }}\">
                                                {{ field.header | trans }}
                                            </a>
                                        </li>
                                    {% endfor %}
                                </ul>
                            </div>
                            <div class=\"btn-group\" role=\"group\">
                                {% include '@KunstmaanAdminList/AdminListTwigExtension/limit.html.twig' %}
                            </div>
                        </div>
                    </div>

                    {% if adminlist.count > 0 %}
                        {% if adminlist.pagerfanta.haveToPaginate() %}
                            {{ pagerfanta(adminlist.pagerfanta, 'twitter_bootstrap_translated') }}
                        {% else %}
                            <div class=\"row row--padded\"></div>
                        {% endif %}
                        <div class=\"row\">
                            {% for media in adminlist.items %}
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

                                <div class=\"js-can-have-dnd col-sm-6 col-md-4 col-lg-3\">
                                    <a class=\"thumbnail media-thumbnail\" href=\"{{ path('KunstmaanMediaBundle_media_show',  { 'mediaId' : media.id }) }}\" data-media-id=\"{{ media.id }}\">
                                        <figure>
                                            {% if imageurl %}
                                                <img src=\"{{ imageurl }}\" srcset=\"{{ imageurl }} 1x {{ imageurlretina is defined ? ', ' ~ imageurlretina ~ \" 2x\" }}\" alt=\"{{ media.name }}\" class=\"media-thumbnail__img\">
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
                                            Click to edit
                                        </span>
                                    </a>

                                    <div class=\"media-thumbnail-action media-thumbnail-action__move\">
                                        <input type=\"checkbox\" data-media-id=\"{{ media.id }}\" id=\"bulk-move-{{ media.id }}\" name=\"bulk-move-{{ media.id }}\" class=\"media-thumbnail-bulk-move-btn js-bulk-move-media\">
                                        <label class=\"btn\" for=\"bulk-move-{{ media.id }}\"></label>
                                    </div>
                                    <span class=\"media-thumbnail-bulk-move-helper\">
                                        Bulk move
                                    </span>

                                    <div class=\"media-thumbnail-action media-thumbnail-action__delete\">
                                        <button data-target=\"#sure-modal-{{ media.id }}\" data-toggle=\"modal\" class=\"btn media-thumbnail-del-btn\">
                                            <i class=\"fa fa-trash\"></i>
                                        </button>
                                    </div>
                                    <span class=\"media-thumbnail-del-helper\">
                                        Delete
                                    </span>
                                    <!-- Modals -->
                                    {% include '@KunstmaanMedia/Media/delete-modal.html.twig' %}
                                </div>

                                {# Clearfixes #}
                                {% if loop.index is divisible by(2) %}
                                    <div class=\"clearfix visible-sm-block\"></div>
                                {% endif %}
                                {% if loop.index is divisible by(3) %}
                                    <div class=\"clearfix visible-md-block\"></div>
                                {% endif %}
                                {% if loop.index is divisible by(4) %}
                                    <div class=\"clearfix visible-lg-block\"></div>
                                {% endif %}
                            {% endfor %}
                        </div>
                        {% if adminlist.pagerfanta.haveToPaginate() %}
                            {{ pagerfanta(adminlist.pagerfanta, 'twitter_bootstrap_translated') }}
                        {% endif %}
                        <p id=\"dnd-area-link\" class=\"text--muted\">
                            <strong>{{ 'media.media.dnd.tip' |trans }}</strong> {{ 'media.media.dnd.tiptext' |trans }}
                        </p>
                    {% else %}
                        <p class=\"text--muted\">
                            {{ 'media.media.no' |trans }}
                        </p>
                        <p id=\"dnd-area-link\" class=\"text--muted\">
                            <strong>{{ 'media.media.dnd.tip' |trans }}</strong> {{ 'media.media.dnd.tiptext' |trans }}
                        </p>
                    {% endif %}
                {% endif %}
            </section>
        </div>


        <!-- TAB - Properties -->
        <div class=\"tab-pane\" id=\"properties\">

            {% form_theme editform '@KunstmaanAdmin/Form/fields.html.twig' %}
            {{ form_start(editform, {'method': 'POST', 'action': path('KunstmaanMediaBundle_folder_show', { 'folderId' : folder.id }) ~ '#properties'}) }}
            <fieldset class=\"panel panel-default form-properties\">
                <div class=\"panel-body\">
                    {{ form_widget(editform) }}

                    <div class=\"form-actions form-actions--padded\">
                        <button class=\"btn btn-primary btn--raise-on-hover\" type=\"submit\">
                            {{ 'media.folder.save' |trans }}
                        </button>
                        <button class=\"btn btn-default btn--raise-on-hover\" onclick=\"window.location = '{{ path('KunstmaanMediaBundle_folder_show', { 'folderId' : folder.id } ) }}'\" type=\"reset\">
                            {{ 'form.cancel' |trans }}
                        </button>
                    </div>
                </div>
            </fieldset>
            {{ form_end(editform) }}
        </div>
    </div>


    <!-- Modals -->
    {% include '@KunstmaanMedia/Folder/addsub-modal.html.twig' %}
    {% include '@KunstmaanMedia/Folder/delete-modal.html.twig' %}
    {% include '@KunstmaanMedia/Folder/empty-modal.html.twig' %}
    {% include '@KunstmaanMedia/Folder/bulk-move-modal.html.twig' %}

{% endblock %}

{% block js_footer %}
    <!-- JS -->
    {% embed \"@KunstmaanAdmin/Default/_js_footer.html.twig\" %}
        {% block extra_async_javascripts %}
            {{ parent() }}
            '{{ asset('bundles/kunstmaanmedia/js/media-bundle.min.js') }}',
        {% endblock %}
    {% endembed %}
{% endblock %}
", "@KunstmaanMedia/Folder/show.html.twig", "/Users/macbook/Documents/quoc/admin-blog-api-/vendor/kunstmaan/media-bundle/Resources/views/Folder/show.html.twig");
    }
}
