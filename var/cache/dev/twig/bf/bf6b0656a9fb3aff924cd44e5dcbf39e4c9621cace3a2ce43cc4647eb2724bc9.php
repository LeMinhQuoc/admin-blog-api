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

/* @KunstmaanMenu/AdminList/list-menu-item.html.twig */
class __TwigTemplate_21d6ac57bda1fd97d72dc2f72b9ea1ad7845d44d290eecbae3a313b19fcf7351 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'admin_page_title' => [$this, 'block_admin_page_title'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanMenu/AdminList/list-menu-item.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanMenu/AdminList/list-menu-item.html.twig"));

        $this->parent = $this->loadTemplate("@KunstmaanAdminList/Default/list.html.twig", "@KunstmaanMenu/AdminList/list-menu-item.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_menu.menu_item.adminlist.title", ["%name%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 7
(isset($context["adminlistconfigurator"]) || array_key_exists("adminlistconfigurator", $context) ? $context["adminlistconfigurator"] : (function () { throw new RuntimeError('Variable "adminlistconfigurator" does not exist.', 7, $this->source); })()), "menu", [], "any", false, false, false, 7), "name", [], "any", false, false, false, 7), "%locale%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 8
(isset($context["adminlistconfigurator"]) || array_key_exists("adminlistconfigurator", $context) ? $context["adminlistconfigurator"] : (function () { throw new RuntimeError('Variable "adminlistconfigurator" does not exist.', 8, $this->source); })()), "menu", [], "any", false, false, false, 8), "locale", [], "any", false, false, false, 8)]), "html", null, true);
        // line 9
        echo "
        </h1>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 15
        echo "    <ul class=\"breadcrumb app__content__breadcrumb\">
        <li>
            <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanAdminBundle_modules");
        echo "\">
                ";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_menu.menu_item.adminlist.breadcrumb.modules"), "html", null, true);
        echo "
            </a>
        </li>
        <li>
            <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("kunstmaanmenubundle_admin_menu");
        echo "\">
                ";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_menu.menu_item.adminlist.breadcrumb.menu"), "html", null, true);
        echo "
            </a>
        </li>
        <li class=\"active\">
            ";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_menu.menu_item.adminlist.breadcrumb.menu_items"), "html", null, true);
        echo "
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanMenu/AdminList/list-menu-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 27,  119 => 23,  115 => 22,  108 => 18,  104 => 17,  100 => 15,  90 => 14,  77 => 9,  75 => 8,  74 => 7,  73 => 6,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@KunstmaanAdminList/Default/list.html.twig' %}

{% block admin_page_title %}
    <div class=\"col-sm-6 col-md-8\">
        <h1 class=\"app__content__header__title\">
            {{ 'kuma_menu.menu_item.adminlist.title'|trans({
                '%name%': adminlistconfigurator.menu.name,
                '%locale%': adminlistconfigurator.menu.locale
            }) }}
        </h1>
    </div>
{% endblock %}

{% block breadcrumb %}
    <ul class=\"breadcrumb app__content__breadcrumb\">
        <li>
            <a href=\"{{ path('KunstmaanAdminBundle_modules') }}\">
                {{ 'kuma_menu.menu_item.adminlist.breadcrumb.modules'|trans }}
            </a>
        </li>
        <li>
            <a href=\"{{ path('kunstmaanmenubundle_admin_menu') }}\">
                {{ 'kuma_menu.menu_item.adminlist.breadcrumb.menu'|trans }}
            </a>
        </li>
        <li class=\"active\">
            {{ 'kuma_menu.menu_item.adminlist.breadcrumb.menu_items'|trans }}
        </li>
    </ul>
{% endblock %}
", "@KunstmaanMenu/AdminList/list-menu-item.html.twig", "/Users/macbook/Documents/quoc/admin-blog-api-/vendor/kunstmaan/menu-bundle/Resources/views/AdminList/list-menu-item.html.twig");
    }
}
