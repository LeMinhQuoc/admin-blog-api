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

/* @KunstmaanMedia/Folder/empty-modal.html.twig */
class __TwigTemplate_9edad7cf38ddd93a9d732b6d8583fcabf0a60f3485bdb4eb93621e97b5901c3b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanMedia/Folder/empty-modal.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanMedia/Folder/empty-modal.html.twig"));

        // line 1
        echo "<div id=\"empty-modal\" class=\"modal fade\">
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("media.folder.empty.modal.title"), "html", null, true);
        echo "
                </h3>
            </div>

            ";
        // line 15
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["emptyform"]) || array_key_exists("emptyform", $context) ? $context["emptyform"] : (function () { throw new RuntimeError('Variable "emptyform" does not exist.', 15, $this->source); })()), [0 => "@KunstmaanAdmin/Form/fields.html.twig"], true);
        // line 16
        echo "            ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["emptyform"]) || array_key_exists("emptyform", $context) ? $context["emptyform"] : (function () { throw new RuntimeError('Variable "emptyform" does not exist.', 16, $this->source); })()), 'form_start', ["method" => "POST", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanMediaBundle_folder_empty", ["folderId" => twig_get_attribute($this->env, $this->source, (isset($context["folder"]) || array_key_exists("folder", $context) ? $context["folder"] : (function () { throw new RuntimeError('Variable "folder" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16)]), "attr" => ["id" => "empty-modal-form"]]);
        echo "

                <!-- Body -->
                <div class=\"modal-body\">
                    ";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("media.folder.empty.modal.text", ["%folder%" => twig_get_attribute($this->env, $this->source, (isset($context["folder"]) || array_key_exists("folder", $context) ? $context["folder"] : (function () { throw new RuntimeError('Variable "folder" does not exist.', 20, $this->source); })()), "name", [], "any", false, false, false, 20)]), "html", null, true);
        echo "

                    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["emptyform"]) || array_key_exists("emptyform", $context) ? $context["emptyform"] : (function () { throw new RuntimeError('Variable "emptyform" does not exist.', 22, $this->source); })()), 'widget');
        echo "
                </div>

                <!-- Footer -->
                <div class=\"modal-footer\">
                    <button type=\"submit\" class=\"js-add-app-loading--forms btn btn-danger btn--raise-on-hover\">
                        ";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("media.folder.empty.modal.save"), "html", null, true);
        echo "
                    </button>
                    <button type=\"button\" class=\"btn btn-default btn--raise-on-hover\" data-dismiss=\"modal\">
                        ";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.cancel"), "html", null, true);
        echo "
                    </button>
                </div>
            ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["emptyform"]) || array_key_exists("emptyform", $context) ? $context["emptyform"] : (function () { throw new RuntimeError('Variable "emptyform" does not exist.', 34, $this->source); })()), 'form_end');
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
        return "@KunstmaanMedia/Folder/empty-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 34,  92 => 31,  86 => 28,  77 => 22,  72 => 20,  64 => 16,  62 => 15,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"empty-modal\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">

            <!-- Head -->
            <div class=\"modal-header\">
                <button class=\"close\" data-dismiss=\"modal\">
                    <i class=\"fa fa-times\"></i>
                </button>
                <h3>
                    {{ 'media.folder.empty.modal.title' | trans }}
                </h3>
            </div>

            {% form_theme emptyform '@KunstmaanAdmin/Form/fields.html.twig' %}
            {{ form_start(emptyform, {'method': 'POST', 'action': path('KunstmaanMediaBundle_folder_empty', { 'folderId' : folder.id  }), 'attr': {'id': 'empty-modal-form'}}) }}

                <!-- Body -->
                <div class=\"modal-body\">
                    {{ 'media.folder.empty.modal.text'| trans({'%folder%': folder.name }) }}

                    {{ form_widget(emptyform) }}
                </div>

                <!-- Footer -->
                <div class=\"modal-footer\">
                    <button type=\"submit\" class=\"js-add-app-loading--forms btn btn-danger btn--raise-on-hover\">
                        {{ 'media.folder.empty.modal.save' | trans }}
                    </button>
                    <button type=\"button\" class=\"btn btn-default btn--raise-on-hover\" data-dismiss=\"modal\">
                        {{ 'form.cancel' | trans }}
                    </button>
                </div>
            {{ form_end(emptyform) }}
        </div>
    </div>
</div>
", "@KunstmaanMedia/Folder/empty-modal.html.twig", "/Users/macbook/Documents/quoc/admin-blog-api-/vendor/kunstmaan/media-bundle/Resources/views/Folder/empty-modal.html.twig");
    }
}
