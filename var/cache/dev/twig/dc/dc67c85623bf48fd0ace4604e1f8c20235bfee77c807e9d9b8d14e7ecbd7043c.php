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

/* @KunstmaanSeo/Admin/Social/social.html.twig */
class __TwigTemplate_e00d7645c858cdd2ffa9fb5edfabd57fa9af604200ff69fdd747d5d0950872d0 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanSeo/Admin/Social/social.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanSeo/Admin/Social/social.html.twig"));

        // line 1
        echo "<script>
    window.onload = function() {
        var object = document.getElementById('form_social_ogType');
        object.addEventListener('change', doCheckboxToggle);
        doCheckboxToggle();
    };

    function doCheckboxToggle() {
        var object = document.getElementById('form_social_ogType');
        var value = object.options[object.selectedIndex].value;


        var author = document.getElementById('form_social_ogArticleAuthor');
        var publisher = document.getElementById('form_social_ogArticlePublisher');
        var section = document.getElementById('form_social_ogArticleSection');
        if (value == 'article') {
            author.parentElement.style.display = 'block';
            publisher.parentElement.style.display = 'block';
            section.parentElement.style.display = 'block';
        } else {
            author.parentElement.style.display = 'none';
            publisher.parentElement.style.display = 'none';
            section.parentElement.style.display = 'none';
        }
    }
</script>

";
        // line 28
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 28, $this->source); })()), "types", [], "any", false, false, false, 28))) {
            // line 29
            echo "    <fieldset class=\"panel panel-default form-properties\">
        <div class=\"panel-body\">
            ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 31, $this->source); })()), "types", [], "any", false, false, false, 31)));
            foreach ($context['_seq'] as $context["_key"] => $context["typeName"]) {
                // line 32
                echo "                <ul class=\"nav nav-tabs\" data-tabs=\"tabs\">
                    <li class=\"active\"><a href=\"#og\" data-toggle=\"tab\">";
                // line 33
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("seo.pagetabs.opengraph"), "html", null, true);
                echo "</a></li>
                    <li><a href=\"#twitter\" data-toggle=\"tab\">";
                // line 34
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("seo.pagetabs.twittercards"), "html", null, true);
                echo "</a></li>
                </ul>
                <div class=\"tab-content social-elements\">
                    <div class=\"tab-pane active\" id=\"og\">
                        ";
                // line 38
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 38, $this->source); })()), $context["typeName"], [], "array", false, false, false, 38), "id", [], "any", false, false, false, 38), 'row');
                echo "
                        ";
                // line 39
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 39, $this->source); })()), $context["typeName"], [], "array", false, false, false, 39), "ogTitle", [], "any", false, false, false, 39), 'row');
                echo "
                        ";
                // line 40
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 40, $this->source); })()), $context["typeName"], [], "array", false, false, false, 40), "ogDescription", [], "any", false, false, false, 40), 'row');
                echo "
                        ";
                // line 41
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 41, $this->source); })()), $context["typeName"], [], "array", false, false, false, 41), "ogUrl", [], "any", false, false, false, 41), 'row');
                echo "
                        ";
                // line 42
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 42, $this->source); })()), $context["typeName"], [], "array", false, false, false, 42), "ogType", [], "any", false, false, false, 42), 'row');
                echo "
                        ";
                // line 44
                echo "                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 44, $this->source); })()), $context["typeName"], [], "array", false, false, false, 44), "ogArticleAuthor", [], "any", false, false, false, 44), 'row');
                echo "
                        ";
                // line 45
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 45, $this->source); })()), $context["typeName"], [], "array", false, false, false, 45), "ogArticlePublisher", [], "any", false, false, false, 45), 'row');
                echo "
                        ";
                // line 46
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 46, $this->source); })()), $context["typeName"], [], "array", false, false, false, 46), "ogArticleSection", [], "any", false, false, false, 46), 'row');
                echo "
                        ";
                // line 48
                echo "                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 48, $this->source); })()), $context["typeName"], [], "array", false, false, false, 48), "ogImage", [], "any", false, false, false, 48), 'row');
                echo "
                    </div>
                    <div class=\"tab-pane\" id=\"twitter\">
                        ";
                // line 51
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 51, $this->source); })()), $context["typeName"], [], "array", false, false, false, 51), "twitterTitle", [], "any", false, false, false, 51), 'row');
                echo "
                        ";
                // line 52
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 52, $this->source); })()), $context["typeName"], [], "array", false, false, false, 52), "twitterDescription", [], "any", false, false, false, 52), 'row');
                echo "
                        ";
                // line 53
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 53, $this->source); })()), $context["typeName"], [], "array", false, false, false, 53), "twitterSite", [], "any", false, false, false, 53), 'row');
                echo "
                        ";
                // line 54
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 54, $this->source); })()), $context["typeName"], [], "array", false, false, false, 54), "twitterCreator", [], "any", false, false, false, 54), 'row');
                echo "
                        ";
                // line 55
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 55, $this->source); })()), $context["typeName"], [], "array", false, false, false, 55), "twitterImage", [], "any", false, false, false, 55), 'row');
                echo "
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['typeName'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "        </div>
    </fieldset>
    <style>
        .social-elements .tab-pane {
            border-left: 1px solid #ddd;
            border-right: 1px solid #ddd;
            border-bottom: 1px solid #ddd;
            padding: 10px 15px;
        }
    </style>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanSeo/Admin/Social/social.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 59,  152 => 55,  148 => 54,  144 => 53,  140 => 52,  136 => 51,  129 => 48,  125 => 46,  121 => 45,  116 => 44,  112 => 42,  108 => 41,  104 => 40,  100 => 39,  96 => 38,  89 => 34,  85 => 33,  82 => 32,  78 => 31,  74 => 29,  72 => 28,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script>
    window.onload = function() {
        var object = document.getElementById('form_social_ogType');
        object.addEventListener('change', doCheckboxToggle);
        doCheckboxToggle();
    };

    function doCheckboxToggle() {
        var object = document.getElementById('form_social_ogType');
        var value = object.options[object.selectedIndex].value;


        var author = document.getElementById('form_social_ogArticleAuthor');
        var publisher = document.getElementById('form_social_ogArticlePublisher');
        var section = document.getElementById('form_social_ogArticleSection');
        if (value == 'article') {
            author.parentElement.style.display = 'block';
            publisher.parentElement.style.display = 'block';
            section.parentElement.style.display = 'block';
        } else {
            author.parentElement.style.display = 'none';
            publisher.parentElement.style.display = 'none';
            section.parentElement.style.display = 'none';
        }
    }
</script>

{% if resource.types is not empty %}
    <fieldset class=\"panel panel-default form-properties\">
        <div class=\"panel-body\">
            {% for typeName in resource.types|keys %}
                <ul class=\"nav nav-tabs\" data-tabs=\"tabs\">
                    <li class=\"active\"><a href=\"#og\" data-toggle=\"tab\">{{ 'seo.pagetabs.opengraph'|trans }}</a></li>
                    <li><a href=\"#twitter\" data-toggle=\"tab\">{{ 'seo.pagetabs.twittercards'|trans }}</a></li>
                </ul>
                <div class=\"tab-content social-elements\">
                    <div class=\"tab-pane active\" id=\"og\">
                        {{ form_row(formView[typeName].id) }}
                        {{ form_row(formView[typeName].ogTitle) }}
                        {{ form_row(formView[typeName].ogDescription) }}
                        {{ form_row(formView[typeName].ogUrl) }}
                        {{ form_row(formView[typeName].ogType) }}
                        {# These fields are contitional by ogType == article #}
                        {{ form_row(formView[typeName].ogArticleAuthor) }}
                        {{ form_row(formView[typeName].ogArticlePublisher) }}
                        {{ form_row(formView[typeName].ogArticleSection) }}
                        {# End conditional #}
                        {{ form_row(formView[typeName].ogImage) }}
                    </div>
                    <div class=\"tab-pane\" id=\"twitter\">
                        {{ form_row(formView[typeName].twitterTitle) }}
                        {{ form_row(formView[typeName].twitterDescription) }}
                        {{ form_row(formView[typeName].twitterSite) }}
                        {{ form_row(formView[typeName].twitterCreator) }}
                        {{ form_row(formView[typeName].twitterImage) }}
                    </div>
                </div>
            {% endfor %}
        </div>
    </fieldset>
    <style>
        .social-elements .tab-pane {
            border-left: 1px solid #ddd;
            border-right: 1px solid #ddd;
            border-bottom: 1px solid #ddd;
            padding: 10px 15px;
        }
    </style>
{% endif %}
", "@KunstmaanSeo/Admin/Social/social.html.twig", "/Users/macbook/Documents/quoc/admin-blog-api-/vendor/kunstmaan/seo-bundle/Resources/views/Admin/Social/social.html.twig");
    }
}
