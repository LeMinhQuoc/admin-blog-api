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

/* @KunstmaanForm/ChoicePagePart/view.html.twig */
class __TwigTemplate_3bcc1e6fe2b262ca3a3360feb792262fa833e459626d7293a9d4dbc47f22949f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanForm/ChoicePagePart/view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanForm/ChoicePagePart/view.html.twig"));

        // line 1
        if (array_key_exists("frontendform", $context)) {
            // line 2
            echo "    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["frontendform"]) || array_key_exists("frontendform", $context) ? $context["frontendform"] : (function () { throw new RuntimeError('Variable "frontendform" does not exist.', 2, $this->source); })()), ("formwidget_" . twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 2, $this->source); })()), "uniqueId", [], "any", false, false, false, 2)), [], "array", false, false, false, 2), 'widget', ["attr" => ["bound" => twig_get_attribute($this->env, $this->source, (isset($context["frontendformobject"]) || array_key_exists("frontendformobject", $context) ? $context["frontendformobject"] : (function () { throw new RuntimeError('Variable "frontendformobject" does not exist.', 2, $this->source); })()), "submitted", [], "any", false, false, false, 2)]]);
            echo "
    ";
            // line 3
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["frontendform"]) || array_key_exists("frontendform", $context) ? $context["frontendform"] : (function () { throw new RuntimeError('Variable "frontendform" does not exist.', 3, $this->source); })()), ("formwidget_" . twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 3, $this->source); })()), "uniqueId", [], "any", false, false, false, 3)), [], "array", false, false, false, 3), 'errors');
            echo "
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanForm/ChoicePagePart/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if frontendform is defined %}
    {{ form_widget(frontendform['formwidget_'~resource.uniqueId], { 'attr' : {'bound' : frontendformobject.submitted } }) }}
    {{ form_errors(frontendform['formwidget_'~resource.uniqueId]) }}
{% endif %}
", "@KunstmaanForm/ChoicePagePart/view.html.twig", "/Users/macbook/Documents/quoc/admin-blog-api-/vendor/kunstmaan/form-bundle/Resources/views/ChoicePagePart/view.html.twig");
    }
}
