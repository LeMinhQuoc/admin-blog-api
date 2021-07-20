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

/* @KunstmaanAdmin/ChangePassword/change_password_content.html.twig */
class __TwigTemplate_7a571f5b32880bc8b20576e92a085c37c0552cf7b98412116b2a06a80e676f5d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdmin/ChangePassword/change_password_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdmin/ChangePassword/change_password_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), 'form_start', ["method" => "POST", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_change_password"), "attr" => ["novalidate" => "novalidate", "class" => "fos_user_change_password"]]);
        echo "
<div class=\"form-group form-group--icon-in-control ";
        // line 4
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "current_password", [], "any", false, false, false, 4), "vars", [], "any", false, false, false, 4), "errors", [], "any", false, false, false, 4)) > 0)) {
            echo "has-error";
        }
        echo "\">
    ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "current_password", [], "any", false, false, false, 5), 'label');
        echo "
    ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "current_password", [], "any", false, false, false, 6), 'widget');
        echo "
    <i class=\"fa fa-key form-group--icon-in-control__icon\"></i>
    ";
        // line 8
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "current_password", [], "any", false, false, false, 8), "vars", [], "any", false, false, false, 8), "errors", [], "any", false, false, false, 8)) > 0)) {
            // line 9
            echo "        <div class=\"form__errors text-danger\">
            ";
            // line 10
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "current_password", [], "any", false, false, false, 10), 'errors');
            echo "
        </div>
    ";
        }
        // line 13
        echo "</div>

<div class=\"form-group form-group--icon-in-control ";
        // line 15
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "plainPassword", [], "any", false, false, false, 15), "first", [], "any", false, false, false, 15), "vars", [], "any", false, false, false, 15), "errors", [], "any", false, false, false, 15)) > 0)) {
            echo "has-error";
        }
        echo "\">
    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "plainPassword", [], "any", false, false, false, 16), "first", [], "any", false, false, false, 16), 'label');
        echo "
    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "plainPassword", [], "any", false, false, false, 17), "first", [], "any", false, false, false, 17), 'widget');
        echo "
    <i class=\"fa fa-key form-group--icon-in-control__icon\"></i>
    ";
        // line 19
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "plainPassword", [], "any", false, false, false, 19), "first", [], "any", false, false, false, 19), "vars", [], "any", false, false, false, 19), "errors", [], "any", false, false, false, 19)) > 0)) {
            // line 20
            echo "        <div class=\"form__errors text-danger\">
            ";
            // line 21
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "plainPassword", [], "any", false, false, false, 21), "first", [], "any", false, false, false, 21), 'errors');
            echo "
        </div>
    ";
        }
        // line 24
        echo "</div>

<div class=\"form-group form-group--icon-in-control ";
        // line 26
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "plainPassword", [], "any", false, false, false, 26), "second", [], "any", false, false, false, 26), "vars", [], "any", false, false, false, 26), "errors", [], "any", false, false, false, 26)) > 0)) {
            echo "has-error";
        }
        echo "\">
    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "plainPassword", [], "any", false, false, false, 27), "second", [], "any", false, false, false, 27), 'label');
        echo "
    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "plainPassword", [], "any", false, false, false, 28), "second", [], "any", false, false, false, 28), 'widget');
        echo "
    <i class=\"fa fa-key form-group--icon-in-control__icon\"></i>
    ";
        // line 30
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "plainPassword", [], "any", false, false, false, 30), "second", [], "any", false, false, false, 30), "vars", [], "any", false, false, false, 30), "errors", [], "any", false, false, false, 30)) > 0)) {
            // line 31
            echo "        <div class=\"form__errors text-danger\">
            ";
            // line 32
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "plainPassword", [], "any", false, false, false, 32), "second", [], "any", false, false, false, 32), 'errors');
            echo "
        </div>
    ";
        }
        // line 35
        echo "</div>

";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), 'rest');
        echo "
<button type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-brand btn-block btn--raise-on-hover\">
    ";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("change_password.submit", [], "FOSUserBundle"), "html", null, true);
        echo "
</button>
";
        // line 41
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanAdmin/ChangePassword/change_password_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 41,  145 => 39,  140 => 37,  136 => 35,  130 => 32,  127 => 31,  125 => 30,  120 => 28,  116 => 27,  110 => 26,  106 => 24,  100 => 21,  97 => 20,  95 => 19,  90 => 17,  86 => 16,  80 => 15,  76 => 13,  70 => 10,  67 => 9,  65 => 8,  60 => 6,  56 => 5,  50 => 4,  46 => 3,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, {'method': 'POST', 'action': path('fos_user_change_password'), 'attr': {'novalidate': 'novalidate', 'class': 'fos_user_change_password'}}) }}
<div class=\"form-group form-group--icon-in-control {% if form.current_password.vars.errors|length > 0 %}has-error{% endif %}\">
    {{ form_label(form.current_password) }}
    {{ form_widget(form.current_password) }}
    <i class=\"fa fa-key form-group--icon-in-control__icon\"></i>
    {% if form.current_password.vars.errors|length > 0 %}
        <div class=\"form__errors text-danger\">
            {{ form_errors(form.current_password) }}
        </div>
    {% endif %}
</div>

<div class=\"form-group form-group--icon-in-control {% if form.plainPassword.first.vars.errors|length > 0 %}has-error{% endif %}\">
    {{ form_label(form.plainPassword.first) }}
    {{ form_widget(form.plainPassword.first) }}
    <i class=\"fa fa-key form-group--icon-in-control__icon\"></i>
    {% if form.plainPassword.first.vars.errors|length > 0 %}
        <div class=\"form__errors text-danger\">
            {{ form_errors(form.plainPassword.first) }}
        </div>
    {% endif %}
</div>

<div class=\"form-group form-group--icon-in-control {% if form.plainPassword.second.vars.errors|length > 0 %}has-error{% endif %}\">
    {{ form_label(form.plainPassword.second) }}
    {{ form_widget(form.plainPassword.second) }}
    <i class=\"fa fa-key form-group--icon-in-control__icon\"></i>
    {% if form.plainPassword.second.vars.errors|length > 0 %}
        <div class=\"form__errors text-danger\">
            {{ form_errors(form.plainPassword.second) }}
        </div>
    {% endif %}
</div>

{{ form_rest(form) }}
<button type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-brand btn-block btn--raise-on-hover\">
    {{ 'change_password.submit'|trans }}
</button>
{{ form_end(form) }}
", "@KunstmaanAdmin/ChangePassword/change_password_content.html.twig", "/Users/macbook/Documents/quoc/admin-blog-api-/vendor/kunstmaan/admin-bundle/Resources/views/ChangePassword/change_password_content.html.twig");
    }
}
