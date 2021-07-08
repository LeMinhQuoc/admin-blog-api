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

/* @KunstmaanMedia/Media/show.html.twig */
class __TwigTemplate_45c503da0cfda42aea695f6cc26f2138d0be78507ccbf8fc5e4133778673083a extends \Twig\Template
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
            'content' => [$this, 'block_content'],
            'extraactions' => [$this, 'block_extraactions'],
            'actions' => [$this, 'block_actions'],
            'mediainfo' => [$this, 'block_mediainfo'],
            'preview' => [$this, 'block_preview'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@KunstmaanMedia/Default/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanMedia/Media/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanMedia/Media/show.html.twig"));

        $this->parent = $this->loadTemplate("@KunstmaanMedia/Default/layout.html.twig", "@KunstmaanMedia/Media/show.html.twig", 1);
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

    // line 14
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 15
        echo "    <!-- Search -->
    <button type=\"button\" class=\"js-toggle-btn toggle-button btn app__sidebar__search-toggle-btn\" data-target=\"#sidebar-search-toggle\">
        <i class=\"fa fa-search\"></i>
    </button>
    <div id=\"sidebar-search-toggle\" class=\"toggle-item\">
        <div class=\"toggle-item__content\">
            <div class=\"app__sidebar__search-toggle-item\">
                <input type=\"text\" placeholder=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search"), "html", null, true);
        echo "\" id=\"app__sidebar__search\" class=\"form-control\">
                <hr>
            </div>
        </div>
    </div>

    <!-- Tree -->
    <nav role=\"navigation\" id=\"app__sidebar__navigation\" class=\"app__sidebar__module app__sidebar__navigation\" data-reorder-url=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanMediaBundle_folder_reorder");
        echo "\">
        <ul>
            ";
        // line 31
        $context["parentIds"] = twig_get_attribute($this->env, $this->source, (isset($context["foldermanager"]) || array_key_exists("foldermanager", $context) ? $context["foldermanager"] : (function () { throw new RuntimeError('Variable "foldermanager" does not exist.', 31, $this->source); })()), "getParentIds", [0 => (isset($context["folder"]) || array_key_exists("folder", $context) ? $context["folder"] : (function () { throw new RuntimeError('Variable "folder" does not exist.', 31, $this->source); })())], "method", false, false, false, 31);
        // line 32
        echo "            ";
        $context["rootFolder"] = twig_get_attribute($this->env, $this->source, (isset($context["foldermanager"]) || array_key_exists("foldermanager", $context) ? $context["foldermanager"] : (function () { throw new RuntimeError('Variable "foldermanager" does not exist.', 32, $this->source); })()), "getRootFolderFor", [0 => (isset($context["folder"]) || array_key_exists("folder", $context) ? $context["folder"] : (function () { throw new RuntimeError('Variable "folder" does not exist.', 32, $this->source); })())], "method", false, false, false, 32);
        // line 33
        echo "            ";
        $context["folders"] = twig_get_attribute($this->env, $this->source, (isset($context["foldermanager"]) || array_key_exists("foldermanager", $context) ? $context["foldermanager"] : (function () { throw new RuntimeError('Variable "foldermanager" does not exist.', 33, $this->source); })()), "getFolderHierarchy", [0 => (isset($context["rootFolder"]) || array_key_exists("rootFolder", $context) ? $context["rootFolder"] : (function () { throw new RuntimeError('Variable "rootFolder" does not exist.', 33, $this->source); })())], "method", false, false, false, 33);
        // line 34
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["folders"]) || array_key_exists("folders", $context) ? $context["folders"] : (function () { throw new RuntimeError('Variable "folders" does not exist.', 34, $this->source); })()));
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
            // line 35
            echo "                ";
            $this->loadTemplate("@KunstmaanMedia/Folder/foldertreeview.html.twig", "@KunstmaanMedia/Media/show.html.twig", 35)->display($context);
            // line 36
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
        // line 37
        echo "        </ul>
    </nav>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 43
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 44
        echo "    ";
        $this->loadTemplate("@KunstmaanMedia/Folder/breadcrumbs.html.twig", "@KunstmaanMedia/Media/show.html.twig", 44)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 49
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 50
        echo "    <h1 class=\"app__content__header__title\">
        ";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("media.media.title"), "html", null, true);
        echo "
        <small class=\"app__content__header__title__small\">
            ";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 53, $this->source); })()), "name", [], "any", false, false, false, 53), "html", null, true);
        echo "
        </small>
    </h1>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 60
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 61
        echo "    <!-- Main-actions -->
    <div class=\"page-main-actions js-auto-collapse-buttons\">
        <div class=\"btn-group\" role=\"group\">
            ";
        // line 64
        $this->displayBlock('extraactions', $context, $blocks);
        // line 65
        echo "            ";
        $this->displayBlock('actions', $context, $blocks);
        // line 70
        echo "        </div>
    </div>


    <!-- Scroll-actions -->
    <div class=\"page-main-actions page-main-actions--top\" id=\"page-main-actions-top\">
        <div class=\"btn-group\">
            ";
        // line 77
        $this->displayBlock("extraactions", $context, $blocks);
        echo "
            ";
        // line 78
        $this->displayBlock("actions", $context, $blocks);
        echo "
            <a href=\"#\" class=\"btn btn-default\">
                <i class=\"fa fa-caret-up\"></i>
            </a>
        </div>
    </div>


    <!-- Main Tabs -->
    <ul class=\"nav nav-tabs page-main-tabs js-auto-collapse-tabs\">
        <li class=\"active\">
            <a href=\"#imagegallery\" data-toggle=\"tab\">
                ";
        // line 90
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("media.media.contenttab.title")), "html", null, true);
        echo "
            </a>
        </li>
        <li>
            <a href=\"#properties\" data-toggle=\"tab\">
                ";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("media.media.propertiestab.title"), "html", null, true);
        echo "
            </a>
        </li>
        <li class=\"tab__more dropdown\">
            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                ";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.button.dropdown.more"), "html", null, true);
        echo " <span class=\"caret\"></span>
            </a>
            <ul class=\"dropdown-menu dropdown-menu-right\" id=\"collapsed\"></ul>
        </li>
    </ul>

    <div class=\"tab-content\">

        <!-- TAB - Imagegallery -->
        <div class=\"tab-pane active\" id=\"imagegallery\">

            <div class=\"row row--padded\">
                <div class=\"col-md-6 col-lg-5\">
                    <dl>
                        ";
        // line 114
        $this->displayBlock('mediainfo', $context, $blocks);
        // line 137
        echo "                    </dl>
                </div>

                <div class=\"col-md-6 col-lg-7\">
                    ";
        // line 141
        $this->displayBlock('preview', $context, $blocks);
        // line 142
        echo "                </div>
            </div>
        </div>


        <!-- TAB - Properties -->
        <div class=\"tab-pane\" id=\"properties\">

            ";
        // line 150
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["editform"]) || array_key_exists("editform", $context) ? $context["editform"] : (function () { throw new RuntimeError('Variable "editform" does not exist.', 150, $this->source); })()), [0 => "@KunstmaanAdmin/Form/fields.html.twig"], true);
        // line 151
        echo "            ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["editform"]) || array_key_exists("editform", $context) ? $context["editform"] : (function () { throw new RuntimeError('Variable "editform" does not exist.', 151, $this->source); })()), 'form_start', ["method" => "POST", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanMediaBundle_media_show", ["mediaId" => twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 151, $this->source); })()), "id", [], "any", false, false, false, 151)])]);
        echo "
                <fieldset class=\"panel panel-default form-properties\">
                    <div class=\"panel-body\">

                        ";
        // line 155
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["editform"]) || array_key_exists("editform", $context) ? $context["editform"] : (function () { throw new RuntimeError('Variable "editform" does not exist.', 155, $this->source); })()), 'widget');
        echo "

                        <div class=\"form-actions form-actions--padded\">
                            <button type=\"submit\" class=\"btn btn-primary btn--raise-on-hover\">
                                ";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.save"), "html", null, true);
        echo "
                            </button>
                            <button type=\"reset\" class=\"btn btn-default btn--raise-on-hover\">
                                ";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.cancel"), "html", null, true);
        echo "
                            </button>
                        </div>
                    </div>
                </fieldset>
            ";
        // line 167
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["editform"]) || array_key_exists("editform", $context) ? $context["editform"] : (function () { throw new RuntimeError('Variable "editform" does not exist.', 167, $this->source); })()), 'form_end');
        echo "
        </div>
    </div>


    <!-- Modals -->
    ";
        // line 173
        $this->loadTemplate("@KunstmaanMedia/Media/delete-modal.html.twig", "@KunstmaanMedia/Media/show.html.twig", 173)->display($context);
        // line 174
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 64
    public function block_extraactions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extraactions"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extraactions"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 65
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actions"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actions"));

        // line 66
        echo "                <button data-target=\"#sure-modal-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 66, $this->source); })()), "id", [], "any", false, false, false, 66), "html", null, true);
        echo "\" data-toggle=\"modal\" class=\"btn btn-default btn--raise-on-hover\">
                    ";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.delete"), "html", null, true);
        echo "
                </button>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 114
    public function block_mediainfo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mediainfo"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mediainfo"));

        // line 115
        echo "                            <dt>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("media.media.mediainfo.name"), "html", null, true);
        echo ":</dt>
                            <dd>";
        // line 116
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 116, $this->source); })()), "name", [], "any", false, false, false, 116), "html", null, true);
        echo "</dd>
                            <dt>";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("media.media.mediainfo.contenttype"), "html", null, true);
        echo ":</dt>
                            <dd>";
        // line 118
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 118, $this->source); })()), "contentType", [], "any", false, false, false, 118), "html", null, true);
        echo "</dd>

                            ";
        // line 120
        $context["originalWidth"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "metadata", [], "any", false, true, false, 120), "original_width", [], "any", true, true, false, 120)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "metadata", [], "any", false, true, false, 120), "original_width", [], "any", false, false, false, 120))) : (""));
        // line 121
        echo "                            ";
        if ((isset($context["originalWidth"]) || array_key_exists("originalWidth", $context) ? $context["originalWidth"] : (function () { throw new RuntimeError('Variable "originalWidth" does not exist.', 121, $this->source); })())) {
            // line 122
            echo "                                <dt>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("media.media.mediainfo.width"), "html", null, true);
            echo ":</dt>
                                <dd>";
            // line 123
            echo twig_escape_filter($this->env, (isset($context["originalWidth"]) || array_key_exists("originalWidth", $context) ? $context["originalWidth"] : (function () { throw new RuntimeError('Variable "originalWidth" does not exist.', 123, $this->source); })()), "html", null, true);
            echo "px</dd>
                            ";
        }
        // line 125
        echo "
                            ";
        // line 126
        $context["originalHeight"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "metadata", [], "any", false, true, false, 126), "original_height", [], "any", true, true, false, 126)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "metadata", [], "any", false, true, false, 126), "original_height", [], "any", false, false, false, 126))) : (""));
        // line 127
        echo "                            ";
        if ((isset($context["originalHeight"]) || array_key_exists("originalHeight", $context) ? $context["originalHeight"] : (function () { throw new RuntimeError('Variable "originalHeight" does not exist.', 127, $this->source); })())) {
            // line 128
            echo "                                <dt>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("media.media.mediainfo.height"), "html", null, true);
            echo ":</dt>
                                <dd>";
            // line 129
            echo twig_escape_filter($this->env, (isset($context["originalHeight"]) || array_key_exists("originalHeight", $context) ? $context["originalHeight"] : (function () { throw new RuntimeError('Variable "originalHeight" does not exist.', 129, $this->source); })()), "html", null, true);
            echo "px</dd>
                            ";
        }
        // line 131
        echo "
                            <dt>";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("media.media.mediainfo.createdat"), "html", null, true);
        echo ":</dt>
                            <dd>";
        // line 133
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 133, $this->source); })()), "createdat", [], "any", false, false, false, 133)));
        echo "</dd>
                            <dt>";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("media.media.mediainfo.updatedat"), "html", null, true);
        echo ":</dt>
                            <dd>";
        // line 135
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 135, $this->source); })()), "updatedat", [], "any", false, false, false, 135)));
        echo "</dd>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 141
    public function block_preview($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "preview"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "preview"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanMedia/Media/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  531 => 141,  519 => 135,  515 => 134,  511 => 133,  507 => 132,  504 => 131,  499 => 129,  494 => 128,  491 => 127,  489 => 126,  486 => 125,  481 => 123,  476 => 122,  473 => 121,  471 => 120,  466 => 118,  462 => 117,  458 => 116,  453 => 115,  443 => 114,  430 => 67,  425 => 66,  415 => 65,  397 => 64,  386 => 174,  384 => 173,  375 => 167,  367 => 162,  361 => 159,  354 => 155,  346 => 151,  344 => 150,  334 => 142,  332 => 141,  326 => 137,  324 => 114,  307 => 100,  299 => 95,  291 => 90,  276 => 78,  272 => 77,  263 => 70,  260 => 65,  258 => 64,  253 => 61,  243 => 60,  229 => 53,  224 => 51,  221 => 50,  211 => 49,  200 => 44,  190 => 43,  178 => 37,  164 => 36,  161 => 35,  143 => 34,  140 => 33,  137 => 32,  135 => 31,  130 => 29,  120 => 22,  111 => 15,  101 => 14,  88 => 9,  85 => 8,  82 => 7,  79 => 6,  76 => 5,  66 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@KunstmaanMedia/Default/layout.html.twig' %}


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
        {{ 'media.media.title'|trans }}
        <small class=\"app__content__header__title__small\">
            {{ media.name }}
        </small>
    </h1>
{% endblock %}



{% block content %}
    <!-- Main-actions -->
    <div class=\"page-main-actions js-auto-collapse-buttons\">
        <div class=\"btn-group\" role=\"group\">
            {% block extraactions %}{% endblock %}
            {% block actions %}
                <button data-target=\"#sure-modal-{{ media.id }}\" data-toggle=\"modal\" class=\"btn btn-default btn--raise-on-hover\">
                    {{ 'form.delete'|trans }}
                </button>
            {% endblock %}
        </div>
    </div>


    <!-- Scroll-actions -->
    <div class=\"page-main-actions page-main-actions--top\" id=\"page-main-actions-top\">
        <div class=\"btn-group\">
            {{ block('extraactions') }}
            {{ block('actions') }}
            <a href=\"#\" class=\"btn btn-default\">
                <i class=\"fa fa-caret-up\"></i>
            </a>
        </div>
    </div>


    <!-- Main Tabs -->
    <ul class=\"nav nav-tabs page-main-tabs js-auto-collapse-tabs\">
        <li class=\"active\">
            <a href=\"#imagegallery\" data-toggle=\"tab\">
                {{ 'media.media.contenttab.title'|trans|capitalize }}
            </a>
        </li>
        <li>
            <a href=\"#properties\" data-toggle=\"tab\">
                {{ 'media.media.propertiestab.title' | trans }}
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

        <!-- TAB - Imagegallery -->
        <div class=\"tab-pane active\" id=\"imagegallery\">

            <div class=\"row row--padded\">
                <div class=\"col-md-6 col-lg-5\">
                    <dl>
                        {% block mediainfo %}
                            <dt>{{ 'media.media.mediainfo.name'|trans }}:</dt>
                            <dd>{{ media.name }}</dd>
                            <dt>{{ 'media.media.mediainfo.contenttype'|trans }}:</dt>
                            <dd>{{ media.contentType }}</dd>

                            {% set originalWidth = media.metadata.original_width|default %}
                            {% if originalWidth %}
                                <dt>{{ 'media.media.mediainfo.width'|trans }}:</dt>
                                <dd>{{ originalWidth }}px</dd>
                            {% endif %}

                            {% set originalHeight = media.metadata.original_height|default %}
                            {% if originalHeight %}
                                <dt>{{ 'media.media.mediainfo.height'|trans }}:</dt>
                                <dd>{{ originalHeight }}px</dd>
                            {% endif %}

                            <dt>{{ 'media.media.mediainfo.createdat'|trans }}:</dt>
                            <dd>{{ media.createdat|date|escape }}</dd>
                            <dt>{{ 'media.media.mediainfo.updatedat'|trans }}:</dt>
                            <dd>{{ media.updatedat|date|escape }}</dd>
                        {% endblock %}
                    </dl>
                </div>

                <div class=\"col-md-6 col-lg-7\">
                    {% block preview %}{% endblock %}
                </div>
            </div>
        </div>


        <!-- TAB - Properties -->
        <div class=\"tab-pane\" id=\"properties\">

            {% form_theme editform '@KunstmaanAdmin/Form/fields.html.twig' %}
            {{ form_start(editform, {'method': 'POST', 'action': path('KunstmaanMediaBundle_media_show', { 'mediaId' : media.id }) }) }}
                <fieldset class=\"panel panel-default form-properties\">
                    <div class=\"panel-body\">

                        {{ form_widget(editform) }}

                        <div class=\"form-actions form-actions--padded\">
                            <button type=\"submit\" class=\"btn btn-primary btn--raise-on-hover\">
                                {{ 'form.save' |trans }}
                            </button>
                            <button type=\"reset\" class=\"btn btn-default btn--raise-on-hover\">
                                {{ 'form.cancel' |trans }}
                            </button>
                        </div>
                    </div>
                </fieldset>
            {{ form_end(editform) }}
        </div>
    </div>


    <!-- Modals -->
    {% include '@KunstmaanMedia/Media/delete-modal.html.twig' %}

{% endblock %}
", "@KunstmaanMedia/Media/show.html.twig", "/Users/macbook/Documents/quoc/blog-admin/vendor/kunstmaan/media-bundle/Resources/views/Media/show.html.twig");
    }
}
