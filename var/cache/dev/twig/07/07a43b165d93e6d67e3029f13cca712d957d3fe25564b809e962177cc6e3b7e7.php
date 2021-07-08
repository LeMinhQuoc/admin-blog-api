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

/* @KunstmaanUserManagement/Roles/add.html.twig */
class __TwigTemplate_e90d7cd67e167653611964b3fbfe5cae53762647c52e26e7374bac3a2f1a0e65 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'page_header_addition' => [$this, 'block_page_header_addition'],
            'actions' => [$this, 'block_actions'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@KunstmaanAdmin/Settings/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanUserManagement/Roles/add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanUserManagement/Roles/add.html.twig"));

        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), [0 => "@KunstmaanAdmin/Form/fields.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("@KunstmaanAdmin/Settings/index.html.twig", "@KunstmaanUserManagement/Roles/add.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), 'form_start', ["method" => "POST", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanUserManagementBundle_settings_roles_add"), "attr" => ["novalidate" => "novalidate"]]);
        echo "

        <!-- Header -->
        <header class=\"app__content__header\">
            <div class=\"row\">
                ";
        // line 12
        if (twig_get_attribute($this->env, $this->source, (isset($context["adminmenu"]) || array_key_exists("adminmenu", $context) ? $context["adminmenu"] : (function () { throw new RuntimeError('Variable "adminmenu" does not exist.', 12, $this->source); })()), "current", [], "any", false, false, false, 12)) {
            // line 13
            echo "                    <div class=\"col-sm-6 col-md-8\">
                        <h1 class=\"app__content__header__title\">
                            ";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["adminmenu"]) || array_key_exists("adminmenu", $context) ? $context["adminmenu"] : (function () { throw new RuntimeError('Variable "adminmenu" does not exist.', 15, $this->source); })()), "current", [], "any", false, false, false, 15), "label", [], "any", false, false, false, 15)), "html", null, true);
            echo " ";
            $this->displayBlock('page_header_addition', $context, $blocks);
            // line 16
            echo "                        </h1>
                    </div>
                ";
        }
        // line 19
        echo "
                <div class=\"col-sm-6 col-md-4\">
                    <!-- Main-actions -->
                    <div class=\"js-auto-collapse-buttons page-main-actions page-main-actions--no-tabs page-main-actions--inside-extra-actions-header\">
                        <div class=\"btn-group\">
                            ";
        // line 24
        $this->displayBlock('actions', $context, $blocks);
        // line 32
        echo "                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Scroll-actions -->
        <div class=\"page-main-actions page-main-actions--top\" id=\"page-main-actions-top\">
            <div class=\"btn-group\">
                ";
        // line 41
        $this->displayBlock("actions", $context, $blocks);
        echo "
                <button type=\"button\" class=\"js-scroll-to-top btn btn-default btn--raise-on-hover\">
                    <i class=\"fa fa-caret-up\"></i>
                </button>
            </div>
        </div>

        <!-- Fields -->
        <fieldset class=\"form__fieldset--padded\">
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), 'rest');
        echo "
        </fieldset>
    ";
        // line 52
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
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

    // line 24
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actions"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actions"));

        // line 25
        echo "                                <button type=\"submit\" class=\"btn btn-primary btn--raise-on-hover\">
                                    ";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.role.add"), "html", null, true);
        echo "
                                </button>
                                <a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanUserManagementBundle_settings_roles");
        echo "\" class=\"btn btn-default btn--raise-on-hover\">
                                    ";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.cancel"), "html", null, true);
        echo "
                                </a>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanUserManagement/Roles/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 29,  201 => 28,  196 => 26,  193 => 25,  183 => 24,  165 => 15,  153 => 52,  148 => 50,  136 => 41,  125 => 32,  123 => 24,  116 => 19,  111 => 16,  107 => 15,  103 => 13,  101 => 12,  92 => 7,  82 => 6,  64 => 4,  53 => 1,  51 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@KunstmaanAdmin/Settings/index.html.twig' %}
{% form_theme form '@KunstmaanAdmin/Form/fields.html.twig' %}

{% block header %}{% endblock %}

{% block content %}
    {{ form_start(form, {'method': 'POST', 'action': path('KunstmaanUserManagementBundle_settings_roles_add'), 'attr': {'novalidate': 'novalidate'}}) }}

        <!-- Header -->
        <header class=\"app__content__header\">
            <div class=\"row\">
                {% if adminmenu.current %}
                    <div class=\"col-sm-6 col-md-8\">
                        <h1 class=\"app__content__header__title\">
                            {{ adminmenu.current.label | trans }} {% block page_header_addition %}{% endblock %}
                        </h1>
                    </div>
                {% endif %}

                <div class=\"col-sm-6 col-md-4\">
                    <!-- Main-actions -->
                    <div class=\"js-auto-collapse-buttons page-main-actions page-main-actions--no-tabs page-main-actions--inside-extra-actions-header\">
                        <div class=\"btn-group\">
                            {% block actions %}
                                <button type=\"submit\" class=\"btn btn-primary btn--raise-on-hover\">
                                    {{ 'settings.role.add' | trans }}
                                </button>
                                <a href=\"{{ path('KunstmaanUserManagementBundle_settings_roles') }}\" class=\"btn btn-default btn--raise-on-hover\">
                                    {{ 'form.cancel' | trans }}
                                </a>
                            {% endblock %}
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Scroll-actions -->
        <div class=\"page-main-actions page-main-actions--top\" id=\"page-main-actions-top\">
            <div class=\"btn-group\">
                {{ block('actions') }}
                <button type=\"button\" class=\"js-scroll-to-top btn btn-default btn--raise-on-hover\">
                    <i class=\"fa fa-caret-up\"></i>
                </button>
            </div>
        </div>

        <!-- Fields -->
        <fieldset class=\"form__fieldset--padded\">
            {{ form_rest(form) }}
        </fieldset>
    {{ form_end(form) }}
{% endblock %}
", "@KunstmaanUserManagement/Roles/add.html.twig", "/Users/macbook/Documents/quoc/blog-admin/vendor/kunstmaan/user-management-bundle/Resources/views/Roles/add.html.twig");
    }
}
