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

/* @KunstmaanMedia/Folder/addsub-modal.html.twig */
class __TwigTemplate_cff0c931e555105b736a320ae8618167d8d83cc36a07ff4eb0ead9651c28ead3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanMedia/Folder/addsub-modal.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanMedia/Folder/addsub-modal.html.twig"));

        // line 1
        echo "<div id=\"addsub-modal\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">

            <!-- Head -->
            <div class=\"modal-header\">
                <button class=\"close\" data-dismiss=\"modal\">
                    <i class=\"fa fa-times\"></i>
                </button>
                <h3>
                    ";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("media.folder.addsub.modal.title"), "html", null, true);
        echo "
                </h3>
            </div>

            ";
        // line 15
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["subform"]) || array_key_exists("subform", $context) ? $context["subform"] : (function () { throw new RuntimeError('Variable "subform" does not exist.', 15, $this->source); })()), [0 => "@KunstmaanAdmin/Form/fields.html.twig"], true);
        // line 16
        echo "            ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["subform"]) || array_key_exists("subform", $context) ? $context["subform"] : (function () { throw new RuntimeError('Variable "subform" does not exist.', 16, $this->source); })()), 'form_start', ["method" => "POST", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanMediaBundle_folder_sub_create", ["folderId" => twig_get_attribute($this->env, $this->source, (isset($context["folder"]) || array_key_exists("folder", $context) ? $context["folder"] : (function () { throw new RuntimeError('Variable "folder" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16), "type" => (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 16, $this->source); })())]), "attr" => ["id" => "addsub-modal-form"]]);
        echo "

                <!-- Body -->
                <div class=\"modal-body\">
                    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["subform"]) || array_key_exists("subform", $context) ? $context["subform"] : (function () { throw new RuntimeError('Variable "subform" does not exist.', 20, $this->source); })()), 'widget');
        echo "
                </div>

                <!-- Footer -->
                <div class=\"modal-footer\">
                    <button type=\"submit\" class=\"js-add-app-loading--forms btn btn-primary btn--raise-on-hover\">
                        ";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("media.folder.addsub.modal.save"), "html", null, true);
        echo "
                    </button>
                    <button type=\"button\" class=\"btn btn-default btn--raise-on-hover\" data-dismiss=\"modal\">
                        ";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.cancel"), "html", null, true);
        echo "
                    </button>
                </div>
            ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["subform"]) || array_key_exists("subform", $context) ? $context["subform"] : (function () { throw new RuntimeError('Variable "subform" does not exist.', 32, $this->source); })()), 'form_end');
        echo "
        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanMedia/Folder/addsub-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 32,  87 => 29,  81 => 26,  72 => 20,  64 => 16,  62 => 15,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"addsub-modal\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">

            <!-- Head -->
            <div class=\"modal-header\">
                <button class=\"close\" data-dismiss=\"modal\">
                    <i class=\"fa fa-times\"></i>
                </button>
                <h3>
                    {{ 'media.folder.addsub.modal.title' | trans }}
                </h3>
            </div>

            {% form_theme subform '@KunstmaanAdmin/Form/fields.html.twig' %}
            {{ form_start(subform, {'method': 'POST', 'action': path('KunstmaanMediaBundle_folder_sub_create', { 'folderId' : folder.id , 'type' : type }), 'attr': {'id': 'addsub-modal-form'}}) }}

                <!-- Body -->
                <div class=\"modal-body\">
                    {{ form_widget(subform) }}
                </div>

                <!-- Footer -->
                <div class=\"modal-footer\">
                    <button type=\"submit\" class=\"js-add-app-loading--forms btn btn-primary btn--raise-on-hover\">
                        {{ 'media.folder.addsub.modal.save' | trans }}
                    </button>
                    <button type=\"button\" class=\"btn btn-default btn--raise-on-hover\" data-dismiss=\"modal\">
                        {{ 'form.cancel' | trans }}
                    </button>
                </div>
            {{ form_end(subform) }}
        </div>
    </div>
</div>
", "@KunstmaanMedia/Folder/addsub-modal.html.twig", "/Users/macbook/Documents/quoc/blog-admin/vendor/kunstmaan/media-bundle/Resources/views/Folder/addsub-modal.html.twig");
    }
}
