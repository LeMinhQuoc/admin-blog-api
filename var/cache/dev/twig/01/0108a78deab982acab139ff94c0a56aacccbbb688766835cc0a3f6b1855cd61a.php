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

/* @KunstmaanAdmin/Resetting/reset_content.html.twig */
class __TwigTemplate_9c96ca1dbbab2b80a5b1cecc0a056388b6250067856abdbcd44717aa514ca2d1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdmin/Resetting/reset_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdmin/Resetting/reset_content.html.twig"));

        // line 1
        echo "<p>
    ";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Choose a new password"), "html", null, true);
        echo "
</p>

";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), 'form_start', ["method" => "POST", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_resetting_reset", ["token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 5, $this->source); })())])]);
        echo "
    <div class=\"form-group form-group--icon-in-control\">
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "plainPassword", [], "any", false, false, false, 7), "first", [], "any", false, false, false, 7), 'label', ["label_attr" => ["class" => "label--lighter"]]);
        echo "
        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "plainPassword", [], "any", false, false, false, 8), "first", [], "any", false, false, false, 8), 'widget', ["attr" => ["class" => "form-control form-group--icon-in-control__form-control"]]);
        echo "
        <i class=\"fa fa-key form-group--icon-in-control__icon\"></i>
    </div>

    <div class=\"form-group form-group--icon-in-control\">
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "plainPassword", [], "any", false, false, false, 13), "second", [], "any", false, false, false, 13), 'label', ["label_attr" => ["class" => "label--lighter"]]);
        echo "
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "plainPassword", [], "any", false, false, false, 14), "second", [], "any", false, false, false, 14), 'widget', ["attr" => ["class" => "form-control form-group--icon-in-control__form-control"]]);
        echo "
        <i class=\"fa fa-key form-group--icon-in-control__icon\"></i>
    </div>

    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'widget');
        echo "

    <button type=\"submit\" class=\"btn btn-primary btn--raise-on-hover\">
        ";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reset password"), "html", null, true);
        echo "
    </button>
    <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
        echo "\" class=\"btn btn-default btn--raise-on-hover\">
        ";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.cancel"), "html", null, true);
        echo "
    </a>
";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanAdmin/Resetting/reset_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 26,  95 => 24,  91 => 23,  86 => 21,  80 => 18,  73 => 14,  69 => 13,  61 => 8,  57 => 7,  52 => 5,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p>
    {{ 'Choose a new password' |trans }}
</p>

{{ form_start(form, {'method': 'POST', 'action': path('fos_user_resetting_reset', { 'token' : token })}) }}
    <div class=\"form-group form-group--icon-in-control\">
        {{ form_label(form.plainPassword.first, null, {'label_attr': {'class': 'label--lighter'} }) }}
        {{ form_widget(form.plainPassword.first, {'attr': {'class': 'form-control form-group--icon-in-control__form-control'} }) }}
        <i class=\"fa fa-key form-group--icon-in-control__icon\"></i>
    </div>

    <div class=\"form-group form-group--icon-in-control\">
        {{ form_label(form.plainPassword.second, null, {'label_attr': {'class': 'label--lighter'} }) }}
        {{ form_widget(form.plainPassword.second, {'attr': {'class': 'form-control form-group--icon-in-control__form-control'} }) }}
        <i class=\"fa fa-key form-group--icon-in-control__icon\"></i>
    </div>

    {{ form_widget(form) }}

    <button type=\"submit\" class=\"btn btn-primary btn--raise-on-hover\">
        {{ 'Reset password' | trans }}
    </button>
    <a href=\"{{ path('fos_user_security_login' ) }}\" class=\"btn btn-default btn--raise-on-hover\">
        {{ 'form.cancel' | trans }}
    </a>
{{ form_end(form) }}
", "@KunstmaanAdmin/Resetting/reset_content.html.twig", "/Users/macbook/Documents/quoc/blog-admin/vendor/kunstmaan/admin-bundle/Resources/views/Resetting/reset_content.html.twig");
    }
}
