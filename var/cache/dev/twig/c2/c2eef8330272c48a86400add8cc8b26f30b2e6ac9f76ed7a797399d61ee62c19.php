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

/* @KunstmaanUserManagement/Users/edit.html.twig */
class __TwigTemplate_a481e773eabe6a8a926a0d9e11c238b4e821c6a4951690fdf47246b6adcb743f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanUserManagement/Users/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanUserManagement/Users/edit.html.twig"));

        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), [0 => "@KunstmaanAdmin/Form/fields.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("@KunstmaanAdmin/Settings/index.html.twig", "@KunstmaanUserManagement/Users/edit.html.twig", 1);
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
        $context["formParams"] = ["method" => "POST", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanUserManagementBundle_settings_users_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7)]), "attr" => ["novalidate" => "novalidate"]];
        // line 8
        echo "    ";
        if (array_key_exists("tabPane", $context)) {
            // line 9
            echo "        ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context["tabPane"]) || array_key_exists("tabPane", $context) ? $context["tabPane"] : (function () { throw new RuntimeError('Variable "tabPane" does not exist.', 9, $this->source); })()), "formView", [], "any", false, false, false, 9), 'form_start', (isset($context["formParams"]) || array_key_exists("formParams", $context) ? $context["formParams"] : (function () { throw new RuntimeError('Variable "formParams" does not exist.', 9, $this->source); })()));
            echo "
    ";
        } else {
            // line 11
            echo "        ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start', (isset($context["formParams"]) || array_key_exists("formParams", $context) ? $context["formParams"] : (function () { throw new RuntimeError('Variable "formParams" does not exist.', 11, $this->source); })()));
            echo "
    ";
        }
        // line 13
        echo "
        <!-- Header -->
        <header class=\"app__content__header\">
            <div class=\"row\">
                ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, (isset($context["adminmenu"]) || array_key_exists("adminmenu", $context) ? $context["adminmenu"] : (function () { throw new RuntimeError('Variable "adminmenu" does not exist.', 17, $this->source); })()), "current", [], "any", false, false, false, 17)) {
            // line 18
            echo "                    <div class=\"col-sm-6 col-md-8\">
                        <h1 class=\"app__content__header__title\">
                            ";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["adminmenu"]) || array_key_exists("adminmenu", $context) ? $context["adminmenu"] : (function () { throw new RuntimeError('Variable "adminmenu" does not exist.', 20, $this->source); })()), "current", [], "any", false, false, false, 20), "label", [], "any", false, false, false, 20)), "html", null, true);
            echo " ";
            $this->displayBlock('page_header_addition', $context, $blocks);
            // line 21
            echo "                        </h1>
                    </div>
                ";
        }
        // line 24
        echo "                <div class=\"col-sm-6 col-md-4\">
                    <!-- Main-actions -->
                    <div class=\"js-auto-collapse-buttons page-main-actions page-main-actions--no-tabs page-main-actions--inside-extra-actions-header\">
                        <div class=\"btn-group\">
                            ";
        // line 28
        $this->displayBlock('actions', $context, $blocks);
        // line 36
        echo "                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Scroll-actions -->
        <div class=\"page-main-actions page-main-actions--top\" id=\"page-main-actions-top\">
            <div class=\"btn-group\">
                ";
        // line 45
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
        // line 54
        if (array_key_exists("tabPane", $context)) {
            // line 55
            echo "                ";
            echo $this->extensions['Kunstmaan\AdminBundle\Twig\TabsTwigExtension']->renderWidget($this->env, (isset($context["tabPane"]) || array_key_exists("tabPane", $context) ? $context["tabPane"] : (function () { throw new RuntimeError('Variable "tabPane" does not exist.', 55, $this->source); })()));
            echo "
            ";
        } else {
            // line 57
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), 'rest');
            echo "
            ";
        }
        // line 59
        echo "        </fieldset>

    ";
        // line 61
        if (array_key_exists("tabPane", $context)) {
            // line 62
            echo "        ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context["tabPane"]) || array_key_exists("tabPane", $context) ? $context["tabPane"] : (function () { throw new RuntimeError('Variable "tabPane" does not exist.', 62, $this->source); })()), "formView", [], "any", false, false, false, 62), 'form_end');
            echo "
    ";
        } else {
            // line 64
            echo "        ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), 'form_end');
            echo "
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
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

    // line 28
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actions"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actions"));

        // line 29
        echo "                                <button type=\"submit\" class=\"btn btn-primary btn--raise-on-hover\">
                                    ";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.user.edit"), "html", null, true);
        echo "
                                </button>
                                <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanUserManagementBundle_settings_users");
        echo "\" class=\"btn btn-default btn--raise-on-hover\">
                                    ";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.cancel"), "html", null, true);
        echo "
                                </a>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanUserManagement/Users/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 33,  238 => 32,  233 => 30,  230 => 29,  220 => 28,  202 => 20,  188 => 64,  182 => 62,  180 => 61,  176 => 59,  170 => 57,  164 => 55,  162 => 54,  150 => 45,  139 => 36,  137 => 28,  131 => 24,  126 => 21,  122 => 20,  118 => 18,  116 => 17,  110 => 13,  104 => 11,  98 => 9,  95 => 8,  92 => 7,  82 => 6,  64 => 4,  53 => 1,  51 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@KunstmaanAdmin/Settings/index.html.twig' %}
{% form_theme form '@KunstmaanAdmin/Form/fields.html.twig' %}

{% block header %}{% endblock %}

{% block content %}
    {% set formParams = {'method': 'POST', 'action': path('KunstmaanUserManagementBundle_settings_users_edit', { 'id' : user.id }), 'attr': {'novalidate': 'novalidate'}} %}
    {% if tabPane is defined %}
        {{ form_start(tabPane.formView, formParams) }}
    {% else %}
        {{ form_start(form, formParams) }}
    {% endif %}

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
                                    {{ 'settings.user.edit' | trans }}
                                </button>
                                <a href=\"{{ path('KunstmaanUserManagementBundle_settings_users') }}\" class=\"btn btn-default btn--raise-on-hover\">
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
            {% if tabPane is defined %}
                {{ tabs_widget(tabPane) }}
            {% else %}
                {{ form_rest(form) }}
            {% endif %}
        </fieldset>

    {% if tabPane is defined %}
        {{ form_end(tabPane.formView) }}
    {% else %}
        {{ form_end(form) }}
    {% endif %}
{% endblock %}
", "@KunstmaanUserManagement/Users/edit.html.twig", "/Users/macbook/Documents/quoc/blog-admin/vendor/kunstmaan/user-management-bundle/Resources/views/Users/edit.html.twig");
    }
}
