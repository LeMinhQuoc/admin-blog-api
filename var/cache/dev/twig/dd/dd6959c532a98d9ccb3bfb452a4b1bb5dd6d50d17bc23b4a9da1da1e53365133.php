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

/* @KunstmaanMedia/Folder/delete-modal.html.twig */
class __TwigTemplate_7e919a9694f7614df5355f314394b530bd53ecf9652396f331522ca1fdf77566 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanMedia/Folder/delete-modal.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanMedia/Folder/delete-modal.html.twig"));

        // line 1
        echo "<div id=\"delete-modal\" class=\"modal fade\">
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("media.folder.delete.modal.title", ["%folder%" => twig_get_attribute($this->env, $this->source, (isset($context["folder"]) || array_key_exists("folder", $context) ? $context["folder"] : (function () { throw new RuntimeError('Variable "folder" does not exist.', 11, $this->source); })()), "name", [], "any", false, false, false, 11)]), "html", null, true);
        echo "
                </h3>
            </div>

            <!-- Body -->
            <div class=\"modal-body\">
                <p>
                    ";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("media.folder.delete.modal.text", ["%folder%" => twig_get_attribute($this->env, $this->source, (isset($context["folder"]) || array_key_exists("folder", $context) ? $context["folder"] : (function () { throw new RuntimeError('Variable "folder" does not exist.', 18, $this->source); })()), "name", [], "any", false, false, false, 18)]), "html", null, true);
        echo "
                </p>
            </div>

            <!-- Footer -->
            <div class=\"modal-footer\">
                <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanMediaBundle_folder_delete", ["folderId" => twig_get_attribute($this->env, $this->source, (isset($context["folder"]) || array_key_exists("folder", $context) ? $context["folder"] : (function () { throw new RuntimeError('Variable "folder" does not exist.', 24, $this->source); })()), "id", [], "any", false, false, false, 24), "type" => (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 24, $this->source); })())]), "html", null, true);
        echo "\" class=\"js-add-app-loading btn btn-danger btn--raise-on-hover\">
                    ";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.delete"), "html", null, true);
        echo "
                </a>
                <button type=\"button\" class=\"btn btn-default btn--raise-on-hover\" data-dismiss=\"modal\">
                    ";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.cancel"), "html", null, true);
        echo "
                </button>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanMedia/Folder/delete-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 28,  78 => 25,  74 => 24,  65 => 18,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"delete-modal\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">

            <!-- Head -->
            <div class=\"modal-header\">
                <button class=\"close\" data-dismiss=\"modal\">
                    <i class=\"fa fa-times\"></i>
                </button>
                <h3>
                    {{ 'media.folder.delete.modal.title'| trans({'%folder%': folder.name }) }}
                </h3>
            </div>

            <!-- Body -->
            <div class=\"modal-body\">
                <p>
                    {{ 'media.folder.delete.modal.text'| trans({'%folder%': folder.name }) }}
                </p>
            </div>

            <!-- Footer -->
            <div class=\"modal-footer\">
                <a href=\"{{ path('KunstmaanMediaBundle_folder_delete', { 'folderId' : folder.id , 'type' : type }) }}\" class=\"js-add-app-loading btn btn-danger btn--raise-on-hover\">
                    {{ 'form.delete' |trans }}
                </a>
                <button type=\"button\" class=\"btn btn-default btn--raise-on-hover\" data-dismiss=\"modal\">
                    {{ 'form.cancel' |trans }}
                </button>
            </div>
        </div>
    </div>
</div>
", "@KunstmaanMedia/Folder/delete-modal.html.twig", "/Users/macbook/Documents/quoc/blog-admin/vendor/kunstmaan/media-bundle/Resources/views/Folder/delete-modal.html.twig");
    }
}
