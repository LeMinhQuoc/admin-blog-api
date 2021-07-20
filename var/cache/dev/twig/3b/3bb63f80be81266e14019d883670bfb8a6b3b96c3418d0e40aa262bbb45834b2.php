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

/* @KunstmaanMedia/Media/bulkUpload.html.twig */
class __TwigTemplate_816eb5944e34b70f966ec88821d11d6162468cd401d1623898cebd4eaf58ae3c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanMedia/Media/bulkUpload.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanMedia/Media/bulkUpload.html.twig"));

        $this->parent = $this->loadTemplate("@KunstmaanMedia/Default/layout.html.twig", "@KunstmaanMedia/Media/bulkUpload.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $context["title"] = "media.media.bulkupload.addto";
        // line 5
        echo "    ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 5, $this->source); })()), ["%folder%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["folder"]) || array_key_exists("folder", $context) ? $context["folder"] : (function () { throw new RuntimeError('Variable "folder" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5))]), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 9
        echo "    <header class=\"app__content__header\">
        ";
        // line 10
        $context["title"] = "media.media.bulkupload.addto";
        // line 11
        echo "        <h1 class=\"app__content__header__title\">
            ";
        // line 12
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 12, $this->source); })()), ["%folder%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["folder"]) || array_key_exists("folder", $context) ? $context["folder"] : (function () { throw new RuntimeError('Variable "folder" does not exist.', 12, $this->source); })()), "name", [], "any", false, false, false, 12))])), "html", null, true);
        echo "
        </h1>
    </header>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 18
        echo "    <div class=\"row row--padded\">
        <div class=\"col-md-12\">
            <div id=\"bulk-upload\" data-token=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("bulk-upload-media"), "html", null, true);
        echo "\" data-url=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanMediaBundle_media_bulk_upload_submit", ["folderId" => twig_get_attribute($this->env, $this->source, (isset($context["folder"]) || array_key_exists("folder", $context) ? $context["folder"] : (function () { throw new RuntimeError('Variable "folder" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20)]), "html", null, true);
        echo "\">
                <ul class=\"list-group\" id=\"bulk-upload__file-list\">
                    <li class=\"list-group-item\">
                        ";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("media.bulkupload.not_available"), "html", null, true);
        echo "
                    </li>
                </ul>

                <div id=\"bulk-upload__container\">

                    <!-- Actions - Upload -->
                    <div id=\"bulk-button-wrapper--upload\" class=\"form-actions form-actions--padded\">
                        <button type=\"button\" id=\"bulk-button--pick-files\" class=\"btn btn-primary btn--raise-on-hover\">
                            ";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("media.bulkupload.select_files"), "html", null, true);
        echo "
                        </button>
                        <button type=\"button\" id=\"bulk-button--upload-files\" class=\"btn btn-default btn--raise-on-hover btn-disabled\" disabled>
                            ";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("media.bulkupload.upload"), "html", null, true);
        echo "
                        </button>
                        <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanMediaBundle_folder_show", ["folderId" => twig_get_attribute($this->env, $this->source, (isset($context["folder"]) || array_key_exists("folder", $context) ? $context["folder"] : (function () { throw new RuntimeError('Variable "folder" does not exist.', 37, $this->source); })()), "id", [], "any", false, false, false, 37)]), "html", null, true);
        echo "\" class=\"btn btn-default btn--raise-on-hover\">
                            ";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.cancel"), "html", null, true);
        echo "
                        </a>
                    </div>

                    <!-- Actions - Completed -->
                    <div id=\"bulk-button-wrapper--completed\" class=\"form-actions form-actions--padded hidden\">
                        <p>
                            <strong>";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("media.bulkupload.upload_finished"), "html", null, true);
        echo "</strong>
                        </p>
                        <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanMediaBundle_media_bulk_upload", ["folderId" => twig_get_attribute($this->env, $this->source, (isset($context["folder"]) || array_key_exists("folder", $context) ? $context["folder"] : (function () { throw new RuntimeError('Variable "folder" does not exist.', 47, $this->source); })()), "id", [], "any", false, false, false, 47)]), "html", null, true);
        echo "\" class=\"btn btn-default btn--raise-on-hover\">
                            ";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("media.bulkupload.upload_more"), "html", null, true);
        echo "
                        </a>
                        <a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanMediaBundle_folder_show", ["folderId" => twig_get_attribute($this->env, $this->source, (isset($context["folder"]) || array_key_exists("folder", $context) ? $context["folder"] : (function () { throw new RuntimeError('Variable "folder" does not exist.', 50, $this->source); })()), "id", [], "any", false, false, false, 50)]), "html", null, true);
        echo "\" class=\"btn btn-primary btn--raise-on-hover\">
                            ";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("media.bulkupload.back_to_folder"), "html", null, true);
        echo "
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanMedia/Media/bulkUpload.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 51,  191 => 50,  186 => 48,  182 => 47,  177 => 45,  167 => 38,  163 => 37,  158 => 35,  152 => 32,  140 => 23,  132 => 20,  128 => 18,  118 => 17,  104 => 12,  101 => 11,  99 => 10,  96 => 9,  86 => 8,  73 => 5,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@KunstmaanMedia/Default/layout.html.twig' %}

{% block title %}
    {% set title = 'media.media.bulkupload.addto' %}
    {{ title | trans({'%folder%': folder.name|trans }) }}
{% endblock%}

{% block header %}
    <header class=\"app__content__header\">
        {% set title = 'media.media.bulkupload.addto' %}
        <h1 class=\"app__content__header__title\">
            {{ title | trans({'%folder%': folder.name|trans }) | capitalize }}
        </h1>
    </header>
{% endblock %}

{% block content %}
    <div class=\"row row--padded\">
        <div class=\"col-md-12\">
            <div id=\"bulk-upload\" data-token=\"{{ csrf_token('bulk-upload-media') }}\" data-url=\"{{ path('KunstmaanMediaBundle_media_bulk_upload_submit', { 'folderId' : folder.id }) }}\">
                <ul class=\"list-group\" id=\"bulk-upload__file-list\">
                    <li class=\"list-group-item\">
                        {{ 'media.bulkupload.not_available' | trans }}
                    </li>
                </ul>

                <div id=\"bulk-upload__container\">

                    <!-- Actions - Upload -->
                    <div id=\"bulk-button-wrapper--upload\" class=\"form-actions form-actions--padded\">
                        <button type=\"button\" id=\"bulk-button--pick-files\" class=\"btn btn-primary btn--raise-on-hover\">
                            {{ 'media.bulkupload.select_files' | trans }}
                        </button>
                        <button type=\"button\" id=\"bulk-button--upload-files\" class=\"btn btn-default btn--raise-on-hover btn-disabled\" disabled>
                            {{ 'media.bulkupload.upload' | trans }}
                        </button>
                        <a href=\"{{ path('KunstmaanMediaBundle_folder_show', { 'folderId' : folder.id }) }}\" class=\"btn btn-default btn--raise-on-hover\">
                            {{ 'form.cancel' | trans }}
                        </a>
                    </div>

                    <!-- Actions - Completed -->
                    <div id=\"bulk-button-wrapper--completed\" class=\"form-actions form-actions--padded hidden\">
                        <p>
                            <strong>{{ 'media.bulkupload.upload_finished' | trans }}</strong>
                        </p>
                        <a href=\"{{ path('KunstmaanMediaBundle_media_bulk_upload', { 'folderId' : folder.id }) }}\" class=\"btn btn-default btn--raise-on-hover\">
                            {{ 'media.bulkupload.upload_more' | trans }}
                        </a>
                        <a href=\"{{ path('KunstmaanMediaBundle_folder_show', { 'folderId' : folder.id }) }}\" class=\"btn btn-primary btn--raise-on-hover\">
                            {{ 'media.bulkupload.back_to_folder' | trans }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "@KunstmaanMedia/Media/bulkUpload.html.twig", "/Users/macbook/Documents/quoc/admin-blog-api-/vendor/kunstmaan/media-bundle/Resources/views/Media/bulkUpload.html.twig");
    }
}
