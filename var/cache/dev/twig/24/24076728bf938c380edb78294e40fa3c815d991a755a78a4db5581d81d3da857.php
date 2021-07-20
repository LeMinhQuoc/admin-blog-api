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

/* @KunstmaanMenu/AdminList/edit-menu-item.html.twig */
class __TwigTemplate_251b787cfeb6eb182b4e815150a8f0ac35c10cfd01c73e92a68181993fe29289 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'admin_page_title' => [$this, 'block_admin_page_title'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@KunstmaanAdminList/Default/add_or_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanMenu/AdminList/edit-menu-item.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanMenu/AdminList/edit-menu-item.html.twig"));

        $this->parent = $this->loadTemplate("@KunstmaanAdminList/Default/add_or_edit.html.twig", "@KunstmaanMenu/AdminList/edit-menu-item.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "

    <script>
        window.onload = function() {
            var object = document.getElementById('menuitem_form_type');
            object.addEventListener('change', doCheckboxToggle);
            doCheckboxToggle();
        };

        function doCheckboxToggle() {
            var object = document.getElementById('menuitem_form_type');
            var value = object.options[object.selectedIndex].value;

            var nt = document.getElementById('menuitem_form_nodeTranslation');
            var url = document.getElementById('menuitem_form_url');
            var title = document.getElementById('menuitem_form_title');
            if (value == 'page_link') {
                nt.parentElement.style.display = 'block';
                url.parentElement.style.display = 'none';
                title.parentElement.firstChild.innerHTML = 'Override menu title';
            } else {
                nt.parentElement.style.display = 'none';
                url.parentElement.style.display = 'block';
                nt.selectedIndex = 0;
                title.parentElement.firstChild.innerHTML = 'Title *';
            }
        }
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 34
    public function block_admin_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "admin_page_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "admin_page_title"));

        // line 35
        echo "    <div class=\"col-sm-6 col-md-8\">
        <h1 class=\"app__content__header__title\">
            ";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_menu.menu_item.adminlist.breadcrumb.menu_items"), "html", null, true);
        echo "
        </h1>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 42
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 43
        echo "    <ul class=\"breadcrumb app__content__breadcrumb\">
        <li>
            <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanAdminBundle_modules");
        echo "\">
                ";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_menu.menu_item.adminlist.breadcrumb.modules"), "html", null, true);
        echo "
            </a>
        </li>
        <li>
            <a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("kunstmaanmenubundle_admin_menu");
        echo "\">
                ";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_menu.menu_item.adminlist.breadcrumb.menu"), "html", null, true);
        echo "
            </a>
        </li>
        <li class=\"active\">
            ";
        // line 55
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
        return "@KunstmaanMenu/AdminList/edit-menu-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 55,  167 => 51,  163 => 50,  156 => 46,  152 => 45,  148 => 43,  138 => 42,  124 => 37,  120 => 35,  110 => 34,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@KunstmaanAdminList/Default/add_or_edit.html.twig' %}

{% block content %}
    {{ parent() }}

    <script>
        window.onload = function() {
            var object = document.getElementById('menuitem_form_type');
            object.addEventListener('change', doCheckboxToggle);
            doCheckboxToggle();
        };

        function doCheckboxToggle() {
            var object = document.getElementById('menuitem_form_type');
            var value = object.options[object.selectedIndex].value;

            var nt = document.getElementById('menuitem_form_nodeTranslation');
            var url = document.getElementById('menuitem_form_url');
            var title = document.getElementById('menuitem_form_title');
            if (value == 'page_link') {
                nt.parentElement.style.display = 'block';
                url.parentElement.style.display = 'none';
                title.parentElement.firstChild.innerHTML = 'Override menu title';
            } else {
                nt.parentElement.style.display = 'none';
                url.parentElement.style.display = 'block';
                nt.selectedIndex = 0;
                title.parentElement.firstChild.innerHTML = 'Title *';
            }
        }
    </script>
{% endblock %}

{% block admin_page_title %}
    <div class=\"col-sm-6 col-md-8\">
        <h1 class=\"app__content__header__title\">
            {{ 'kuma_menu.menu_item.adminlist.breadcrumb.menu_items'|trans }}
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
", "@KunstmaanMenu/AdminList/edit-menu-item.html.twig", "/Users/macbook/Documents/quoc/admin-blog-api-/vendor/kunstmaan/menu-bundle/Resources/views/AdminList/edit-menu-item.html.twig");
    }
}
