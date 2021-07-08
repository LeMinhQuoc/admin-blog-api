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

/* @KunstmaanTranslator/Modals/_modals.html.twig */
class __TwigTemplate_6b82931d8ef722f204cf9f71144dbd5f4ba80e098514a6566457ea9d048768c3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanTranslator/Modals/_modals.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanTranslator/Modals/_modals.html.twig"));

        // line 1
        echo "<!-- MODALS -->

<!-- Modal - Import forced -->
<div id=\"import-force-modal\" class=\"modal fade\">
    <div class=\"modal-dialog\">
    <div class=\"modal-content\">

        <!-- Head -->
        <div class=\"modal-header\">
        <button class=\"close\" data-dismiss=\"modal\">
            <i class=\"fa fa-times\"></i>
        </button>
        <h3>";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_translator.modal.confirmation.force_import.title"), "html", null, true);
        echo "</h3>
        </div>

        <!-- Body -->
        <div class=\"modal-body\">
            <p>";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_translator.modal.confirmation.force_import.body"), "html", null, true);
        echo "</p>
        </div>
        <!-- Footer -->
        <div class=\"modal-footer\">

        <form action=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanTranslatorBundle_command_import_forced");
        echo "\" method=\"post\" novalidate=\"novalidate\">
            <button type=\"submit\" name=\"submit\" class=\"btn btn-danger btn--raise-on-hover\"
                >";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_translator.modal.confirmation.force_import.confirm_button"), "html", null, true);
        echo "</button>
            <button class=\"btn btn-default btn--raise-on-hover\" data-dismiss=\"modal\"
                >";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_translator.modal.confirmation.force_import.cancel_button"), "html", null, true);
        echo "</button>
        </form>
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
        return "@KunstmaanTranslator/Modals/_modals.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 27,  78 => 25,  73 => 23,  65 => 18,  57 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- MODALS -->

<!-- Modal - Import forced -->
<div id=\"import-force-modal\" class=\"modal fade\">
    <div class=\"modal-dialog\">
    <div class=\"modal-content\">

        <!-- Head -->
        <div class=\"modal-header\">
        <button class=\"close\" data-dismiss=\"modal\">
            <i class=\"fa fa-times\"></i>
        </button>
        <h3>{{ 'kuma_translator.modal.confirmation.force_import.title'|trans() }}</h3>
        </div>

        <!-- Body -->
        <div class=\"modal-body\">
            <p>{{ 'kuma_translator.modal.confirmation.force_import.body'|trans() }}</p>
        </div>
        <!-- Footer -->
        <div class=\"modal-footer\">

        <form action=\"{{ path('KunstmaanTranslatorBundle_command_import_forced') }}\" method=\"post\" novalidate=\"novalidate\">
            <button type=\"submit\" name=\"submit\" class=\"btn btn-danger btn--raise-on-hover\"
                >{{ 'kuma_translator.modal.confirmation.force_import.confirm_button'|trans() }}</button>
            <button class=\"btn btn-default btn--raise-on-hover\" data-dismiss=\"modal\"
                >{{ 'kuma_translator.modal.confirmation.force_import.cancel_button'|trans() }}</button>
        </form>
        </div>
        </div>
    </div>
</div>
", "@KunstmaanTranslator/Modals/_modals.html.twig", "/Users/macbook/Documents/quoc/blog-admin/vendor/kunstmaan/translator-bundle/Resources/views/Modals/_modals.html.twig");
    }
}
