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

/* @KunstmaanMedia/Media/delete-modal.html.twig */
class __TwigTemplate_6cf71356d5ad69d01d9b9c30fd46dbec985e39fb2ee42d8cfa95b18308441e19 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanMedia/Media/delete-modal.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanMedia/Media/delete-modal.html.twig"));

        // line 1
        echo "<div id=\"sure-modal-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 1, $this->source); })()), "id", [], "any", false, false, false, 1), "html", null, true);
        echo "\" class=\"modal fade\">
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.delete"), "html", null, true);
        echo "
                </h3>
            </div>

            <!-- Body -->
            <div class=\"modal-body\">
                ";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("media.media.deletesure"), "html", null, true);
        echo "
            </div>

            <!-- Footer -->
            <div class=\"modal-footer\">
                <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanMediaBundle_media_delete", ["mediaId" => twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22)]), "html", null, true);
        echo "\" class=\"btn btn-danger btn--raise-on-hover\">
                    ";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.delete"), "html", null, true);
        echo "
                </a>
                <button class=\"btn btn-default btn--raise-on-hover\" data-dismiss=\"modal\">
                    ";
        // line 26
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
        return "@KunstmaanMedia/Media/delete-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 26,  78 => 23,  74 => 22,  66 => 17,  57 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"sure-modal-{{ media.id }}\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">

            <!-- Head -->
            <div class=\"modal-header\">
                <button class=\"close\" data-dismiss=\"modal\">
                    <i class=\"fa fa-times\"></i>
                </button>
                <h3>
                    {{ 'form.delete' | trans }}
                </h3>
            </div>

            <!-- Body -->
            <div class=\"modal-body\">
                {{ 'media.media.deletesure' | trans }}
            </div>

            <!-- Footer -->
            <div class=\"modal-footer\">
                <a href=\"{{ path('KunstmaanMediaBundle_media_delete', { 'mediaId': media.id }) }}\" class=\"btn btn-danger btn--raise-on-hover\">
                    {{ 'form.delete' | trans }}
                </a>
                <button class=\"btn btn-default btn--raise-on-hover\" data-dismiss=\"modal\">
                    {{ 'form.cancel' | trans }}
                </button>
            </div>
        </div>
    </div>
</div>
", "@KunstmaanMedia/Media/delete-modal.html.twig", "/Users/macbook/Documents/quoc/blog-admin/vendor/kunstmaan/media-bundle/Resources/views/Media/delete-modal.html.twig");
    }
}
