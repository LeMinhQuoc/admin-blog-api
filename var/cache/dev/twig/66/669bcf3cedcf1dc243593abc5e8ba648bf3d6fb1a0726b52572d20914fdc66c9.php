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

/* @KunstmaanMedia/Folder/bulk-move-modal_form.html.twig */
class __TwigTemplate_b97eff8b871b81ad0d211029dc7b830a125f68c8fcb06b721b4188c05ee9c9dc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanMedia/Folder/bulk-move-modal_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanMedia/Folder/bulk-move-modal_form.html.twig"));

        // line 1
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), [0 => "@KunstmaanAdmin/Form/fields.html.twig"], true);
        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), 'form_start', ["method" => "POST", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanMediaBundle_media_bulk_move"), "attr" => ["id" => "bulk-move-modal-form"]]);
        echo "

<!-- Body -->
<div class=\"modal-body\">
    ";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("media.folder.bulk_move.modal.text"), "html", null, true);
        echo "
    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), 'widget');
        echo "
</div>

<!-- Footer -->
<div class=\"modal-footer\">
    <button type=\"submit\" class=\"js-add-app-loading--forms btn btn-danger btn--raise-on-hover\">
        ";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("media.folder.bulk_move.modal.save"), "html", null, true);
        echo "
    </button>
    <button type=\"button\" class=\"btn btn-default btn--raise-on-hover\" data-dismiss=\"modal\">
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.cancel"), "html", null, true);
        echo "
    </button>
</div>
";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanMedia/Folder/bulk-move-modal_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 20,  74 => 17,  68 => 14,  59 => 8,  55 => 7,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% form_theme form '@KunstmaanAdmin/Form/fields.html.twig' %}

{{ form_start(form, {'method': 'POST', 'action': path('KunstmaanMediaBundle_media_bulk_move'), 'attr': {'id': 'bulk-move-modal-form'}}) }}

<!-- Body -->
<div class=\"modal-body\">
    {{ 'media.folder.bulk_move.modal.text' | trans }}
    {{ form_widget(form) }}
</div>

<!-- Footer -->
<div class=\"modal-footer\">
    <button type=\"submit\" class=\"js-add-app-loading--forms btn btn-danger btn--raise-on-hover\">
        {{ 'media.folder.bulk_move.modal.save' | trans }}
    </button>
    <button type=\"button\" class=\"btn btn-default btn--raise-on-hover\" data-dismiss=\"modal\">
        {{ 'form.cancel' | trans }}
    </button>
</div>
{{ form_end(form) }}
", "@KunstmaanMedia/Folder/bulk-move-modal_form.html.twig", "/Users/macbook/Documents/quoc/blog-admin/vendor/kunstmaan/media-bundle/Resources/views/Folder/bulk-move-modal_form.html.twig");
    }
}
