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

/* @KunstmaanAdmin/Default/layout.html.twig */
class __TwigTemplate_bd96bb728d07c84046d47b59ee67e3ff868f9f586afa54b70d50e9338ca82c29 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'extraclasshtml' => [$this, 'block_extraclasshtml'],
            'title' => [$this, 'block_title'],
            'extracss' => [$this, 'block_extracss'],
            'extraparamsinbody' => [$this, 'block_extraparamsinbody'],
            'extrabodyclasses' => [$this, 'block_extrabodyclasses'],
            'body' => [$this, 'block_body'],
            'appHeader' => [$this, 'block_appHeader'],
            'sidebar' => [$this, 'block_sidebar'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'flashmessages' => [$this, 'block_flashmessages'],
            'messages' => [$this, 'block_messages'],
            'header' => [$this, 'block_header'],
            'admin_page_title' => [$this, 'block_admin_page_title'],
            'page_header_addition' => [$this, 'block_page_header_addition'],
            'extra_actions_header' => [$this, 'block_extra_actions_header'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'js_footer' => [$this, 'block_js_footer'],
            'extrajavascript' => [$this, 'block_extrajavascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdmin/Default/layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdmin/Default/layout.html.twig"));

        // line 1
        $context["adminmenu"] = $this->extensions['Kunstmaan\AdminBundle\Twig\MenuTwigExtension']->getAdminMenu();
        // line 2
        ob_start();
        $this->displayBlock('extraclasshtml', $context, $blocks);
        $context["extraclasshtml"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 3
        echo "
<!DOCTYPE html>
<html class=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["extraclasshtml"]) || array_key_exists("extraclasshtml", $context) ? $context["extraclasshtml"] : (function () { throw new RuntimeError('Variable "extraclasshtml" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "\" lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <meta name=\"robots\" content=\"noindex, nofollow\">

    <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Favicons -->
    ";
        // line 15
        $this->loadTemplate("@KunstmaanAdmin/Default/_favicons.html.twig", "@KunstmaanAdmin/Default/layout.html.twig", 15)->display($context);
        // line 16
        echo "
    <!-- Styles -->
    ";
        // line 18
        $this->loadTemplate("@KunstmaanAdmin/Default/_css.html.twig", "@KunstmaanAdmin/Default/layout.html.twig", 18)->display($context);
        // line 19
        echo "
    <!-- Extra CSS -->
    ";
        // line 21
        $this->displayBlock('extracss', $context, $blocks);
        // line 22
        echo "
    <!-- JS -->
    ";
        // line 24
        $this->loadTemplate("@KunstmaanAdmin/Default/_js_header.html.twig", "@KunstmaanAdmin/Default/layout.html.twig", 24)->display($context);
        // line 25
        echo "
    ";
        // line 26
        if ($this->extensions['Kunstmaan\AdminBundle\Twig\GoogleSignInTwigExtension']->isGoogleSignInEnabled()) {
            // line 27
            echo "        <script src=\"https://apis.google.com/js/platform.js\" async defer></script>
    ";
        }
        // line 29
        echo "</head>

<body ";
        // line 31
        $this->displayBlock('extraparamsinbody', $context, $blocks);
        echo " class=\"app ";
        $this->displayBlock('extrabodyclasses', $context, $blocks);
        echo "\" data-file-browse-url=\"";
        if ((array_key_exists("nodebundleisactive", $context) && (isset($context["nodebundleisactive"]) || array_key_exists("nodebundleisactive", $context) ? $context["nodebundleisactive"] : (function () { throw new RuntimeError('Variable "nodebundleisactive" does not exist.', 31, $this->source); })()))) {
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanNodeBundle_ckselecturl");
        }
        echo "\" data-image-browse-url=\"";
        if (array_key_exists("mediabundleisactive", $context)) {
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanMediaBundle_chooser", ["type" => "image"]);
        }
        echo "\">

<!-- Body block -->
";
        // line 34
        $this->displayBlock('body', $context, $blocks);
        // line 144
        echo "
    ";
        // line 145
        $this->displayBlock('js_footer', $context, $blocks);
        // line 149
        echo "
    <!-- JS - Extra -->
    ";
        // line 151
        $this->displayBlock('extrajavascript', $context, $blocks);
        // line 152
        echo "</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_extraclasshtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extraclasshtml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extraclasshtml"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["websitetitle"]) || array_key_exists("websitetitle", $context) ? $context["websitetitle"] : (function () { throw new RuntimeError('Variable "websitetitle" does not exist.', 12, $this->source); })())), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_extracss($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extracss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extracss"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 31
    public function block_extraparamsinbody($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extraparamsinbody"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extraparamsinbody"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_extrabodyclasses($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrabodyclasses"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrabodyclasses"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 34
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 35
        echo "    <!-- Header -->
    ";
        // line 36
        $this->displayBlock('appHeader', $context, $blocks);
        // line 39
        echo "

    <!-- Nav settings -->
    ";
        // line 42
        if ( !array_key_exists("lowestTopChild", $context)) {
            // line 43
            echo "        ";
            $context["lowestTopChild"] = twig_get_attribute($this->env, $this->source, (isset($context["adminmenu"]) || array_key_exists("adminmenu", $context) ? $context["adminmenu"] : (function () { throw new RuntimeError('Variable "adminmenu" does not exist.', 43, $this->source); })()), "lowestTopChild", [], "any", false, false, false, 43);
            // line 44
            echo "        ";
            if ((isset($context["lowestTopChild"]) || array_key_exists("lowestTopChild", $context) ? $context["lowestTopChild"] : (function () { throw new RuntimeError('Variable "lowestTopChild" does not exist.', 44, $this->source); })())) {
                // line 45
                echo "            ";
                $context["navigationChildren"] = twig_get_attribute($this->env, $this->source, (isset($context["lowestTopChild"]) || array_key_exists("lowestTopChild", $context) ? $context["lowestTopChild"] : (function () { throw new RuntimeError('Variable "lowestTopChild" does not exist.', 45, $this->source); })()), "navigationChildren", [], "any", false, false, false, 45);
                // line 46
                echo "        ";
            }
            // line 47
            echo "    ";
        }
        // line 48
        echo "
    ";
        // line 49
        if (array_key_exists("page", $context)) {
            // line 50
            echo "        ";
            $context["hideSidebar"] = $this->extensions['Kunstmaan\AdminBundle\Twig\SidebarTwigExtension']->hideSidebarInNodeEditAdmin((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 50, $this->source); })()));
            // line 51
            echo "    ";
        } else {
            // line 52
            echo "        ";
            $context["hideSidebar"] = false;
            // line 53
            echo "    ";
        }
        // line 54
        echo "
    <!-- Main Content -->
    <main role=\"main\" id=\"app__main\" class=\"container-fluid app__main";
        // line 56
        if ((( !(isset($context["hideSidebar"]) || array_key_exists("hideSidebar", $context) ? $context["hideSidebar"] : (function () { throw new RuntimeError('Variable "hideSidebar" does not exist.', 56, $this->source); })()) && (isset($context["lowestTopChild"]) || array_key_exists("lowestTopChild", $context) ? $context["lowestTopChild"] : (function () { throw new RuntimeError('Variable "lowestTopChild" does not exist.', 56, $this->source); })())) && (twig_length_filter($this->env, (isset($context["navigationChildren"]) || array_key_exists("navigationChildren", $context) ? $context["navigationChildren"] : (function () { throw new RuntimeError('Variable "navigationChildren" does not exist.', 56, $this->source); })())) > 0))) {
            echo " app__main--has-sidebar";
        } else {
            echo " app__main--no-sidebar";
        }
        echo "\">

        <div class=\"row\">
            ";
        // line 59
        if ((( !(isset($context["hideSidebar"]) || array_key_exists("hideSidebar", $context) ? $context["hideSidebar"] : (function () { throw new RuntimeError('Variable "hideSidebar" does not exist.', 59, $this->source); })()) && (isset($context["lowestTopChild"]) || array_key_exists("lowestTopChild", $context) ? $context["lowestTopChild"] : (function () { throw new RuntimeError('Variable "lowestTopChild" does not exist.', 59, $this->source); })())) && (twig_length_filter($this->env, (isset($context["navigationChildren"]) || array_key_exists("navigationChildren", $context) ? $context["navigationChildren"] : (function () { throw new RuntimeError('Variable "navigationChildren" does not exist.', 59, $this->source); })())) > 0))) {
            // line 60
            echo "
                <!-- App Sidebar -->
                <aside id=\"app__sidebar\" class=\"col-md-3 app__sidebar\">
                    ";
            // line 63
            $this->displayBlock('sidebar', $context, $blocks);
            // line 66
            echo "                </aside>


                <!-- App Content - with sidebar -->
                <div id=\"app__content\" class=\"col-md-9 col-md-offset-3 col--padded app__content\">

                    <!-- App Sidebar Toggle -->
                    <button type=\"button\" id=\"app__sidebar-toggle\" class=\"btn--reset app__sidebar-toggle\" title=\"toggle sidebar\">
                        <span class=\"app__sidebar-toggle__show-icon\">
                            <i class=\"fa fa-caret-right\"></i>
                            <i class=\"fa fa-list-ul\"></i>
                        </span>
                        <span class=\"app__sidebar-toggle__hide-icon\">
                            <i class=\"fa fa-caret-left\"></i>
                            <i class=\"fa fa-list-ul\"></i>
                        </span>
                    </button>
            ";
        } else {
            // line 84
            echo "
                <!-- App Content - full width -->
                <div id=\"app__content\" class=\"col-md-12 col--padded app__content\">
            ";
        }
        // line 88
        echo "
                    <!-- App Content - Breadcrumbs -->
                    ";
        // line 90
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 93
        echo "

                    <!-- App Content - Flash Messages -->
                    ";
        // line 96
        $this->displayBlock('flashmessages', $context, $blocks);
        // line 99
        echo "

                    <!-- App Content - General Messages -->
                    ";
        // line 102
        $this->displayBlock('messages', $context, $blocks);
        // line 103
        echo "

                    <!-- App Content - Header -->
                    ";
        // line 106
        $this->displayBlock('header', $context, $blocks);
        // line 123
        echo "

                    <!-- App Content - Content -->
                    ";
        // line 126
        $this->displayBlock('content', $context, $blocks);
        // line 127
        echo "
                </div>
            </div>
        </div>
    </main>


    <!-- Footer -->
    ";
        // line 135
        $this->displayBlock('footer', $context, $blocks);
        // line 142
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 36
    public function block_appHeader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "appHeader"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "appHeader"));

        // line 37
        echo "        ";
        $this->loadTemplate("@KunstmaanAdmin/Default/app_header.html.twig", "@KunstmaanAdmin/Default/layout.html.twig", 37)->display($context);
        // line 38
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 63
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 64
        echo "                    ";
        $this->loadTemplate("@KunstmaanAdmin/Default/sidebar.html.twig", "@KunstmaanAdmin/Default/layout.html.twig", 64)->display($context);
        // line 65
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 90
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 91
        echo "                        ";
        $this->loadTemplate("@KunstmaanAdmin/Default/breadcrumbs.html.twig", "@KunstmaanAdmin/Default/layout.html.twig", 91)->display($context);
        // line 92
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 96
    public function block_flashmessages($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "flashmessages"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "flashmessages"));

        // line 97
        echo "                        ";
        $this->loadTemplate("@KunstmaanAdmin/Default/flashmessages.html.twig", "@KunstmaanAdmin/Default/layout.html.twig", 97)->display($context);
        // line 98
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 102
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "messages"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "messages"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 106
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 107
        echo "                        <header class=\"app__content__header\">
                            <div class=\"row\">
                                ";
        // line 109
        $this->displayBlock('admin_page_title', $context, $blocks);
        // line 118
        echo "
                                ";
        // line 119
        $this->displayBlock('extra_actions_header', $context, $blocks);
        // line 120
        echo "                            </div>
                        </header>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 109
    public function block_admin_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "admin_page_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "admin_page_title"));

        // line 110
        echo "                                    <div class=\"col-sm-6 col-md-8\">
                                        ";
        // line 111
        if (twig_get_attribute($this->env, $this->source, (isset($context["adminmenu"]) || array_key_exists("adminmenu", $context) ? $context["adminmenu"] : (function () { throw new RuntimeError('Variable "adminmenu" does not exist.', 111, $this->source); })()), "current", [], "any", false, false, false, 111)) {
            // line 112
            echo "                                            <h1 class=\"app__content__header__title\">
                                                ";
            // line 113
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["adminmenu"]) || array_key_exists("adminmenu", $context) ? $context["adminmenu"] : (function () { throw new RuntimeError('Variable "adminmenu" does not exist.', 113, $this->source); })()), "current", [], "any", false, false, false, 113), "label", [], "any", false, false, false, 113)), "html", null, true);
            echo " ";
            $this->displayBlock('page_header_addition', $context, $blocks);
            // line 114
            echo "                                            </h1>
                                        ";
        }
        // line 116
        echo "                                    </div>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 113
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

    // line 119
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

    // line 126
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 135
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 136
        echo "        <footer role=\"contentinfo\" class=\"app__footer container-fluid\">
            <a target=\"_blank\" rel=\"noopener\" href=\"https://www.kunstmaan.be\" class=\"app__footer__kunstmaan-link pull-right\">
                <img src=\"/bundles/kunstmaanadmin/default-theme/img/kunstmaan/kunstmaan_dark.svg\" alt=\"Kunstmaan\" />
            </a>
        </footer>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 145
    public function block_js_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js_footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js_footer"));

        // line 146
        echo "        <!-- JS -->
        ";
        // line 147
        $this->loadTemplate("@KunstmaanAdmin/Default/_js_footer.html.twig", "@KunstmaanAdmin/Default/layout.html.twig", 147)->display($context);
        // line 148
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 151
    public function block_extrajavascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrajavascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrajavascript"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanAdmin/Default/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  696 => 151,  686 => 148,  684 => 147,  681 => 146,  671 => 145,  656 => 136,  646 => 135,  628 => 126,  610 => 119,  592 => 113,  581 => 116,  577 => 114,  573 => 113,  570 => 112,  568 => 111,  565 => 110,  555 => 109,  543 => 120,  541 => 119,  538 => 118,  536 => 109,  532 => 107,  522 => 106,  504 => 102,  494 => 98,  491 => 97,  481 => 96,  471 => 92,  468 => 91,  458 => 90,  448 => 65,  445 => 64,  435 => 63,  425 => 38,  422 => 37,  412 => 36,  401 => 142,  399 => 135,  389 => 127,  387 => 126,  382 => 123,  380 => 106,  375 => 103,  373 => 102,  368 => 99,  366 => 96,  361 => 93,  359 => 90,  355 => 88,  349 => 84,  329 => 66,  327 => 63,  322 => 60,  320 => 59,  310 => 56,  306 => 54,  303 => 53,  300 => 52,  297 => 51,  294 => 50,  292 => 49,  289 => 48,  286 => 47,  283 => 46,  280 => 45,  277 => 44,  274 => 43,  272 => 42,  267 => 39,  265 => 36,  262 => 35,  252 => 34,  217 => 31,  199 => 21,  180 => 12,  162 => 2,  150 => 152,  148 => 151,  144 => 149,  142 => 145,  139 => 144,  137 => 34,  121 => 31,  117 => 29,  113 => 27,  111 => 26,  108 => 25,  106 => 24,  102 => 22,  100 => 21,  96 => 19,  94 => 18,  90 => 16,  88 => 15,  82 => 12,  72 => 5,  68 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set adminmenu = get_admin_menu() %}
{% set extraclasshtml %}{% block extraclasshtml %}{% endblock %}{% endset %}

<!DOCTYPE html>
<html class=\"{{ extraclasshtml }}\" lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <meta name=\"robots\" content=\"noindex, nofollow\">

    <title>{% block title %}{{ websitetitle | trans }}{% endblock %}</title>

    <!-- Favicons -->
    {% include \"@KunstmaanAdmin/Default/_favicons.html.twig\" %}

    <!-- Styles -->
    {% include \"@KunstmaanAdmin/Default/_css.html.twig\" %}

    <!-- Extra CSS -->
    {% block extracss %}{% endblock %}

    <!-- JS -->
    {% include \"@KunstmaanAdmin/Default/_js_header.html.twig\" %}

    {% if google_signin_enabled() %}
        <script src=\"https://apis.google.com/js/platform.js\" async defer></script>
    {% endif %}
</head>

<body {% block extraparamsinbody %}{% endblock %} class=\"app {% block extrabodyclasses %}{% endblock %}\" data-file-browse-url=\"{% if nodebundleisactive is defined and nodebundleisactive %}{{ path('KunstmaanNodeBundle_ckselecturl') }}{% endif %}\" data-image-browse-url=\"{% if mediabundleisactive is defined %}{{ path('KunstmaanMediaBundle_chooser', {'type': 'image'}) }}{% endif %}\">

<!-- Body block -->
{% block body %}
    <!-- Header -->
    {% block appHeader %}
        {% include \"@KunstmaanAdmin/Default/app_header.html.twig\" %}
    {% endblock %}


    <!-- Nav settings -->
    {% if lowestTopChild is not defined %}
        {% set lowestTopChild = adminmenu.lowestTopChild %}
        {% if lowestTopChild %}
            {% set navigationChildren = lowestTopChild.navigationChildren %}
        {% endif %}
    {% endif %}

    {% if page is defined %}
        {%  set hideSidebar = hideSidebarInNodeEditAdmin(page) %}
    {%  else  %}
        {%  set hideSidebar = false %}
    {%  endif %}

    <!-- Main Content -->
    <main role=\"main\" id=\"app__main\" class=\"container-fluid app__main{% if not hideSidebar and lowestTopChild and navigationChildren | length > 0 %} app__main--has-sidebar{% else %} app__main--no-sidebar{% endif %}\">

        <div class=\"row\">
            {% if not hideSidebar and lowestTopChild and navigationChildren | length > 0 %}

                <!-- App Sidebar -->
                <aside id=\"app__sidebar\" class=\"col-md-3 app__sidebar\">
                    {% block sidebar %}
                    {% include \"@KunstmaanAdmin/Default/sidebar.html.twig\" %}
                    {% endblock %}
                </aside>


                <!-- App Content - with sidebar -->
                <div id=\"app__content\" class=\"col-md-9 col-md-offset-3 col--padded app__content\">

                    <!-- App Sidebar Toggle -->
                    <button type=\"button\" id=\"app__sidebar-toggle\" class=\"btn--reset app__sidebar-toggle\" title=\"toggle sidebar\">
                        <span class=\"app__sidebar-toggle__show-icon\">
                            <i class=\"fa fa-caret-right\"></i>
                            <i class=\"fa fa-list-ul\"></i>
                        </span>
                        <span class=\"app__sidebar-toggle__hide-icon\">
                            <i class=\"fa fa-caret-left\"></i>
                            <i class=\"fa fa-list-ul\"></i>
                        </span>
                    </button>
            {% else %}

                <!-- App Content - full width -->
                <div id=\"app__content\" class=\"col-md-12 col--padded app__content\">
            {% endif %}

                    <!-- App Content - Breadcrumbs -->
                    {% block breadcrumb %}
                        {% include \"@KunstmaanAdmin/Default/breadcrumbs.html.twig\" %}
                    {% endblock %}


                    <!-- App Content - Flash Messages -->
                    {% block flashmessages %}
                        {% include \"@KunstmaanAdmin/Default/flashmessages.html.twig\" %}
                    {% endblock %}


                    <!-- App Content - General Messages -->
                    {% block messages %}{% endblock %}


                    <!-- App Content - Header -->
                    {% block header %}
                        <header class=\"app__content__header\">
                            <div class=\"row\">
                                {% block admin_page_title %}
                                    <div class=\"col-sm-6 col-md-8\">
                                        {% if adminmenu.current %}
                                            <h1 class=\"app__content__header__title\">
                                                {{ adminmenu.current.label | trans }} {% block page_header_addition %}{% endblock %}
                                            </h1>
                                        {% endif %}
                                    </div>
                                {% endblock %}

                                {% block extra_actions_header %}{% endblock %}
                            </div>
                        </header>
                    {% endblock %}


                    <!-- App Content - Content -->
                    {% block content %}{% endblock %}

                </div>
            </div>
        </div>
    </main>


    <!-- Footer -->
    {% block footer %}
        <footer role=\"contentinfo\" class=\"app__footer container-fluid\">
            <a target=\"_blank\" rel=\"noopener\" href=\"https://www.kunstmaan.be\" class=\"app__footer__kunstmaan-link pull-right\">
                <img src=\"/bundles/kunstmaanadmin/default-theme/img/kunstmaan/kunstmaan_dark.svg\" alt=\"Kunstmaan\" />
            </a>
        </footer>
    {% endblock %}

{% endblock %}

    {% block js_footer %}
        <!-- JS -->
        {% include \"@KunstmaanAdmin/Default/_js_footer.html.twig\" %}
    {% endblock %}

    <!-- JS - Extra -->
    {% block extrajavascript %}{% endblock %}
</body>
</html>
", "@KunstmaanAdmin/Default/layout.html.twig", "/Users/macbook/Documents/quoc/admin-blog-api-/vendor/kunstmaan/admin-bundle/Resources/views/Default/layout.html.twig");
    }
}
