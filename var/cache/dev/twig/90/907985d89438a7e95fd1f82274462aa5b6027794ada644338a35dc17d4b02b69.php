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

/* @KunstmaanSeo/Admin/Settings/robotsSettings.html.twig */
class __TwigTemplate_43c712f470be93560c034df918f9c6137f005d9f92f7a1519a0cb580c70aa195 extends \Twig\Template
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
            'cookbook_information' => [$this, 'block_cookbook_information'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanSeo/Admin/Settings/robotsSettings.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanSeo/Admin/Settings/robotsSettings.html.twig"));

        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), [0 => "@KunstmaanAdmin/Form/fields.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("@KunstmaanAdmin/Settings/index.html.twig", "@KunstmaanSeo/Admin/Settings/robotsSettings.html.twig", 1);
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
        <!-- Header -->
        <header class=\"app__content__header\">
            <div class=\"row\">
                ";
        // line 11
        if (twig_get_attribute($this->env, $this->source, (isset($context["adminmenu"]) || array_key_exists("adminmenu", $context) ? $context["adminmenu"] : (function () { throw new RuntimeError('Variable "adminmenu" does not exist.', 11, $this->source); })()), "current", [], "any", false, false, false, 11)) {
            // line 12
            echo "                    <div class=\"col-sm-6 col-md-8\">
                        <h1 class=\"app__content__header__title\">
                            ";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["adminmenu"]) || array_key_exists("adminmenu", $context) ? $context["adminmenu"] : (function () { throw new RuntimeError('Variable "adminmenu" does not exist.', 14, $this->source); })()), "current", [], "any", false, false, false, 14), "label", [], "any", false, false, false, 14)), "html", null, true);
            echo " ";
            $this->displayBlock('page_header_addition', $context, $blocks);
            // line 15
            echo "                        </h1>
                    </div>
                ";
        }
        // line 18
        echo "                <div class=\"col-sm-6 col-md-4\">
                    <!-- Main-actions -->
                    <div class=\"js-auto-collapse-buttons page-main-actions page-main-actions--no-tabs page-main-actions--inside-extra-actions-header\">
                        <div class=\"btn-group\">
                            ";
        // line 22
        $this->displayBlock('actions', $context, $blocks);
        // line 33
        echo "                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Scroll-actions -->
        <div class=\"page-main-actions page-main-actions--top\" id=\"page-main-actions-top\">
            <div class=\"btn-group\">
                ";
        // line 42
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
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), 'rest');
        echo "
        </fieldset>

    </form>

    ";
        // line 56
        $this->displayBlock('cookbook_information', $context, $blocks);
        // line 59
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
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
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actions"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actions"));

        // line 23
        echo "                                <button type=\"submit\" class=\"btn btn-primary btn--raise-on-hover\">
                                    ";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("seo.action.save"), "html", null, true);
        echo "
                                </button>
                                <a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanSeoBundle_settings_robots");
        echo "\" class=\"btn btn-default btn--raise-on-hover\">
                                    ";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("seo.action.cancel"), "html", null, true);
        echo "
                                </a>
                                <a class=\"btn btn-default btn--raise-on-hover\" href=\"/robots.txt\">
                                    ";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("seo.action.preview"), "html", null, true);
        echo "
                                </a>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 56
    public function block_cookbook_information($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cookbook_information"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cookbook_information"));

        // line 57
        echo "    <strong>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("seo.robots.tip"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("seo.robots.moreinfo"), "html", null, true);
        echo " <a href=\"https://kunstmaanbundlescms.readthedocs.io/en/stable/cookbook/\" target=\"_blank\">cookbook</a>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanSeo/Admin/Settings/robotsSettings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 57,  227 => 56,  214 => 30,  208 => 27,  204 => 26,  199 => 24,  196 => 23,  186 => 22,  168 => 14,  157 => 59,  155 => 56,  147 => 51,  135 => 42,  124 => 33,  122 => 22,  116 => 18,  111 => 15,  107 => 14,  103 => 12,  101 => 11,  93 => 7,  83 => 6,  65 => 4,  54 => 1,  52 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@KunstmaanAdmin/Settings/index.html.twig' %}
{% form_theme form '@KunstmaanAdmin/Form/fields.html.twig' %}

{% block header %}{% endblock %}

{% block content %}
    {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
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
                                    {{ 'seo.action.save' | trans }}
                                </button>
                                <a href=\"{{ path('KunstmaanSeoBundle_settings_robots') }}\" class=\"btn btn-default btn--raise-on-hover\">
                                    {{ 'seo.action.cancel' | trans }}
                                </a>
                                <a class=\"btn btn-default btn--raise-on-hover\" href=\"/robots.txt\">
                                    {{ 'seo.action.preview' | trans }}
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

    </form>

    {% block cookbook_information %}
    <strong>{{ 'seo.robots.tip' |trans }}</strong> {{ 'seo.robots.moreinfo' |trans }} <a href=\"https://kunstmaanbundlescms.readthedocs.io/en/stable/cookbook/\" target=\"_blank\">cookbook</a>
    {% endblock %}

{% endblock %}
", "@KunstmaanSeo/Admin/Settings/robotsSettings.html.twig", "/Users/macbook/Documents/quoc/admin-blog-api-/vendor/kunstmaan/seo-bundle/Resources/views/Admin/Settings/robotsSettings.html.twig");
    }
}
