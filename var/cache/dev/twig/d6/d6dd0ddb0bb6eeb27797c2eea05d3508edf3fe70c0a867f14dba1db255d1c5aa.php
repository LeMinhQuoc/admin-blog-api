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

/* @KunstmaanNode/Widgets/selectLink.html.twig */
class __TwigTemplate_87e50150776299771b5c128f346284bb862f3d8e27aeb0b28b4131298e8642e8 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanNode/Widgets/selectLink.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanNode/Widgets/selectLink.html.twig"));

        // line 3
        $context["switchedHost"] = $this->extensions['Kunstmaan\AdminBundle\Twig\MultiDomainAdminTwigExtension']->getSwitchedHost();
        // line 1
        $this->parent = $this->loadTemplate("@KunstmaanAdmin/Default/layout.html.twig", "@KunstmaanNode/Widgets/selectLink.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <header role=\"banner\">
        <!-- App Header -->
        <nav role=\"navigation\" class=\"navbar navbar-inverse navbar-fixed-top\">
            <div class=\"container-fluid\">

                <!-- Header -->
                <div class=\"navbar-header\">

                    <!--Header - Toggle -->
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\"
                            data-target=\"#main-nav-bar\">
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
        // line 29
        if ((array_key_exists("mediaChooserLink", $context) && (isset($context["mediaChooserLink"]) || array_key_exists("mediaChooserLink", $context) ? $context["mediaChooserLink"] : (function () { throw new RuntimeError('Variable "mediaChooserLink" does not exist.', 29, $this->source); })()))) {
            // line 30
            echo "                            <li class=\"active\">
                                <a href=\"javascript:void(0)\">
                                    Pages
                                </a>
                            </li>
                            <li>
                                <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, (isset($context["mediaChooserLink"]) || array_key_exists("mediaChooserLink", $context) ? $context["mediaChooserLink"] : (function () { throw new RuntimeError('Variable "mediaChooserLink" does not exist.', 36, $this->source); })()), "html", null, true);
            echo "\">
                                    Media
                                </a>
                            </li>
                        ";
        }
        // line 41
        echo "                    </ul>

                    <!-- Navigation - Right -->
                    <ul class=\"nav navbar-nav navbar-right\">
                        ";
        // line 45
        $context["route"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "request", [], "any", false, false, false, 45), "attributes", [], "any", false, false, false, 45), "get", [0 => "_route"], "method", false, false, false, 45);
        // line 46
        echo "                        ";
        echo $this->extensions['Kunstmaan\AdminBundle\Twig\LocaleSwitcherTwigExtension']->renderWidget($this->env, $this->extensions['Kunstmaan\AdminBundle\Twig\LocaleSwitcherTwigExtension']->getBackendLocales((($this->extensions['Kunstmaan\AdminBundle\Twig\MultiDomainAdminTwigExtension']->isMultiDomainSite()) ? (twig_get_attribute($this->env, $this->source, (isset($context["switchedHost"]) || array_key_exists("switchedHost", $context) ? $context["switchedHost"] : (function () { throw new RuntimeError('Variable "switchedHost" does not exist.', 46, $this->source); })()), "host", [], "any", false, false, false, 46)) : (""))), (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 46, $this->source); })()));
        echo "

                        ";
        // line 48
        if ($this->extensions['Kunstmaan\AdminBundle\Twig\MultiDomainAdminTwigExtension']->isMultiDomainSite()) {
            // line 49
            echo "                            ";
            echo $this->extensions['Kunstmaan\AdminBundle\Twig\MultiDomainAdminTwigExtension']->renderWidget($this->env, (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 49, $this->source); })()));
            echo "
                        ";
        }
        // line 51
        echo "                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <!-- Main Content -->
    <main role=\"main\" id=\"app__main\" class=\"container-fluid app__main url-chooser\">

        <!-- Modal Sidebar -->
        <aside id=\"app__sidebar\" class=\"url-chooser__tree\">
            <!-- Tree Search -->
            <div class=\"form-group app_urlchooser__search\">
                <div class=\"input-group\">
                    <span class=\"input-group-addon\">
                        <i class=\"fa fa-search\"></i>
                    </span>
                    <input type=\"text\" placeholder=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search"), "html", null, true);
        echo "\" id=\"app__urlchooser__search\"
                           class=\"form-control\">
                </div>
                <hr>
            </div>

            <nav role=\"navigation\" id=\"app__urlchooser__navigation\"
                    class=\"app__urlchooser__module app__urlchooser__navigation\"
                    data-replace-url=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanNodeBundle_urlchooser_replace");
        echo "\"
                    data-reorder-url=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanNodeBundle_nodes_reorder");
        echo "\"
                    data-src=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanNodeBundle_nodes_lazy");
        echo "\">
            </nav>
        </aside>


        <!-- Content -->
        <div class=\"url-chooser__link-select\">
            <p id=\"url-chooser__selection-preview\">
                Selection: empty
            </p>
            <button type=\"button\" id=\"save-url-chooser-modal\" class=\"btn btn-primary btn--raise-on-hover\"
                    data-cke=\"";
        // line 90
        if ((isset($context["cke"]) || array_key_exists("cke", $context) ? $context["cke"] : (function () { throw new RuntimeError('Variable "cke" does not exist.', 90, $this->source); })())) {
            echo "true";
        } else {
            echo "false";
        }
        echo "\">
                Ok
            </button>
            <button type=\"button\" id=\"cancel-url-chooser-modal\" class=\"btn btn-default btn--raise-on-hover\"
                    data-cke=\"";
        // line 94
        if ((isset($context["cke"]) || array_key_exists("cke", $context) ? $context["cke"] : (function () { throw new RuntimeError('Variable "cke" does not exist.', 94, $this->source); })())) {
            echo "true";
        } else {
            echo "false";
        }
        echo "\">
                Cancel
            </button>
        </div>

    </main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanNode/Widgets/selectLink.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 94,  189 => 90,  175 => 79,  171 => 78,  167 => 77,  156 => 69,  136 => 51,  130 => 49,  128 => 48,  122 => 46,  120 => 45,  114 => 41,  106 => 36,  98 => 30,  96 => 29,  71 => 6,  61 => 5,  50 => 1,  48 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@KunstmaanAdmin/Default/layout.html.twig' %}

{% set switchedHost = get_switched_host() %}

{% block body %}
    <header role=\"banner\">
        <!-- App Header -->
        <nav role=\"navigation\" class=\"navbar navbar-inverse navbar-fixed-top\">
            <div class=\"container-fluid\">

                <!-- Header -->
                <div class=\"navbar-header\">

                    <!--Header - Toggle -->
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\"
                            data-target=\"#main-nav-bar\">
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
                        {% if mediaChooserLink is defined and mediaChooserLink %}
                            <li class=\"active\">
                                <a href=\"javascript:void(0)\">
                                    Pages
                                </a>
                            </li>
                            <li>
                                <a href=\"{{ mediaChooserLink }}\">
                                    Media
                                </a>
                            </li>
                        {% endif %}
                    </ul>

                    <!-- Navigation - Right -->
                    <ul class=\"nav navbar-nav navbar-right\">
                        {% set route = app.request.attributes.get('_route') %}
                        {{ localeswitcher_widget(get_backend_locales(is_multidomain_site() ? switchedHost.host), route) }}

                        {% if is_multidomain_site() %}
                            {{ multidomain_widget(route) }}
                        {% endif %}
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <!-- Main Content -->
    <main role=\"main\" id=\"app__main\" class=\"container-fluid app__main url-chooser\">

        <!-- Modal Sidebar -->
        <aside id=\"app__sidebar\" class=\"url-chooser__tree\">
            <!-- Tree Search -->
            <div class=\"form-group app_urlchooser__search\">
                <div class=\"input-group\">
                    <span class=\"input-group-addon\">
                        <i class=\"fa fa-search\"></i>
                    </span>
                    <input type=\"text\" placeholder=\"{{ 'Search' | trans }}\" id=\"app__urlchooser__search\"
                           class=\"form-control\">
                </div>
                <hr>
            </div>

            <nav role=\"navigation\" id=\"app__urlchooser__navigation\"
                    class=\"app__urlchooser__module app__urlchooser__navigation\"
                    data-replace-url=\"{{ path(\"KunstmaanNodeBundle_urlchooser_replace\") }}\"
                    data-reorder-url=\"{{ path('KunstmaanNodeBundle_nodes_reorder') }}\"
                    data-src=\"{{  path('KunstmaanNodeBundle_nodes_lazy') }}\">
            </nav>
        </aside>


        <!-- Content -->
        <div class=\"url-chooser__link-select\">
            <p id=\"url-chooser__selection-preview\">
                Selection: empty
            </p>
            <button type=\"button\" id=\"save-url-chooser-modal\" class=\"btn btn-primary btn--raise-on-hover\"
                    data-cke=\"{% if cke %}true{% else %}false{% endif %}\">
                Ok
            </button>
            <button type=\"button\" id=\"cancel-url-chooser-modal\" class=\"btn btn-default btn--raise-on-hover\"
                    data-cke=\"{% if cke %}true{% else %}false{% endif %}\">
                Cancel
            </button>
        </div>

    </main>
{% endblock %}
", "@KunstmaanNode/Widgets/selectLink.html.twig", "/Users/macbook/Documents/quoc/admin-blog-api-/vendor/kunstmaan/node-bundle/Resources/views/Widgets/selectLink.html.twig");
    }
}
