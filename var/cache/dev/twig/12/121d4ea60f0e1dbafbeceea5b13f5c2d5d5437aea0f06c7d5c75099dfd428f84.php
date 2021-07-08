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

/* @KunstmaanAdmin/Default/index.html.twig */
class __TwigTemplate_d806ae6de2bb831ac1c771254d759495d32f6a6af80d0f4c60192ee36a249950 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'admin_page_title' => [$this, 'block_admin_page_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdmin/Default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdmin/Default/index.html.twig"));

        $this->parent = $this->loadTemplate("@KunstmaanAdmin/Default/layout.html.twig", "@KunstmaanAdmin/Default/index.html.twig", 1);
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
        ";
        // line 5
        if ((isset($context["dashboardConfiguration"]) || array_key_exists("dashboardConfiguration", $context) ? $context["dashboardConfiguration"] : (function () { throw new RuntimeError('Variable "dashboardConfiguration" does not exist.', 5, $this->source); })())) {
            // line 6
            echo "            <h1 class=\"app__content__header__title\">
                ";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dashboardConfiguration"]) || array_key_exists("dashboardConfiguration", $context) ? $context["dashboardConfiguration"] : (function () { throw new RuntimeError('Variable "dashboardConfiguration" does not exist.', 7, $this->source); })()), "title", [], "any", false, false, false, 7), "html", null, true);
            echo "
            </h1>
        ";
        } else {
            // line 10
            echo "            <h1 class=\"app__content__header__title\">
                ";
            // line 11
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("omnext.welcome");
            echo "
            </h1>
        ";
        }
        // line 14
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_extra_actions_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_actions_header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_actions_header"));

        // line 18
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
            // line 19
            echo "        <div class=\"col-sm-6 col-md-4\">
            <div class=\"app__content__header__extra-actions\">
                <div class=\"btn-group\">
                    <a href=\"";
            // line 22
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanAdminBundle_homepage_admin");
            echo "\" class=\"btn btn-default\">
                        ";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit dashboard"), "html", null, true);
            echo "
                    </a>
                </div>
            </div>
        </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 31
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 32
        echo "    ";
        if ((isset($context["dashboardConfiguration"]) || array_key_exists("dashboardConfiguration", $context) ? $context["dashboardConfiguration"] : (function () { throw new RuntimeError('Variable "dashboardConfiguration" does not exist.', 32, $this->source); })())) {
            // line 33
            echo "        <div style=\"margin-top:25px\">
            ";
            // line 34
            echo twig_get_attribute($this->env, $this->source, (isset($context["dashboardConfiguration"]) || array_key_exists("dashboardConfiguration", $context) ? $context["dashboardConfiguration"] : (function () { throw new RuntimeError('Variable "dashboardConfiguration" does not exist.', 34, $this->source); })()), "content", [], "any", false, false, false, 34);
            echo "
        </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanAdmin/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 34,  156 => 33,  153 => 32,  143 => 31,  126 => 23,  122 => 22,  117 => 19,  114 => 18,  104 => 17,  93 => 14,  87 => 11,  84 => 10,  78 => 7,  75 => 6,  73 => 5,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@KunstmaanAdmin/Default/layout.html.twig' %}

{% block admin_page_title %}
    <div class=\"col-sm-6 col-md-8\">
        {% if dashboardConfiguration %}
            <h1 class=\"app__content__header__title\">
                {{ dashboardConfiguration.title }}
            </h1>
        {% else %}
            <h1 class=\"app__content__header__title\">
                {{ 'omnext.welcome' | trans | raw }}
            </h1>
        {% endif %}
    </div>
{% endblock %}

{% block extra_actions_header %}
    {% if is_granted('ROLE_SUPER_ADMIN') %}
        <div class=\"col-sm-6 col-md-4\">
            <div class=\"app__content__header__extra-actions\">
                <div class=\"btn-group\">
                    <a href=\"{{ path('KunstmaanAdminBundle_homepage_admin') }}\" class=\"btn btn-default\">
                        {{ 'Edit dashboard' | trans }}
                    </a>
                </div>
            </div>
        </div>
    {% endif %}
{% endblock %}

{% block content %}
    {% if dashboardConfiguration %}
        <div style=\"margin-top:25px\">
            {{ dashboardConfiguration.content | raw }}
        </div>
    {% endif %}
{% endblock %}
", "@KunstmaanAdmin/Default/index.html.twig", "/Users/macbook/Documents/quoc/blog-admin/vendor/kunstmaan/admin-bundle/Resources/views/Default/index.html.twig");
    }
}
