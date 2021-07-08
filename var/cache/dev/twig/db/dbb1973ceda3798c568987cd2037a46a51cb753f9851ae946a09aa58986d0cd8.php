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

/* @KunstmaanNode/NodeAdmin/Modals/_export_pagetemplate.html.twig */
class __TwigTemplate_edf103e96c9188b9a94a00336680da3809200553c29d32c23079b6dbd37018f8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanNode/NodeAdmin/Modals/_export_pagetemplate.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanNode/NodeAdmin/Modals/_export_pagetemplate.html.twig"));

        // line 1
        $macros["macros"] = $this->macros["macros"] = $this;
        // line 2
        echo "
<div id=\"exportPagetemplate\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">

            <!-- Head -->
            <div class=\"modal-header\">
                <button class=\"close\" data-dismiss=\"modal\">
                    <i class=\"fa fa-times\"></i>
                </button>
                <h3>";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_node.modal.export_pagetemplate.button.title"), "html", null, true);
        echo "</h3>
            </div>

            <!-- Body -->
            <div class=\"modal-body\">
                ";
        // line 17
        $context["pagetemplate"] = $this->extensions['Kunstmaan\PagePartBundle\Twig\Extension\PageTemplateTwigExtension']->renderPageTemplateConfiguration($this->env, $context, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 17, $this->source); })()), ["template" => "@KunstmaanNode/NodeAdmin/Modals/_pagetemplate.html.twig"]);
        // line 18
        echo "                <pre>
                    ";
        // line 19
        echo twig_escape_filter($this->env, twig_replace_filter((isset($context["pagetemplate"]) || array_key_exists("pagetemplate", $context) ? $context["pagetemplate"] : (function () { throw new RuntimeError('Variable "pagetemplate" does not exist.', 19, $this->source); })()), ["

" => ""]), "html", null, true);
        echo "
                </pre>
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
        return "@KunstmaanNode/NodeAdmin/Modals/_export_pagetemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 19,  67 => 18,  65 => 17,  57 => 12,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import _self as macros %}

<div id=\"exportPagetemplate\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">

            <!-- Head -->
            <div class=\"modal-header\">
                <button class=\"close\" data-dismiss=\"modal\">
                    <i class=\"fa fa-times\"></i>
                </button>
                <h3>{{ 'kuma_node.modal.export_pagetemplate.button.title'|trans() }}</h3>
            </div>

            <!-- Body -->
            <div class=\"modal-body\">
                {% set pagetemplate = render_pagetemplate_configuration(page, {'template': '@KunstmaanNode/NodeAdmin/Modals/_pagetemplate.html.twig' }) %}
                <pre>
                    {{ pagetemplate | replace({\"\\n\\n\": \"\"}) }}
                </pre>
            </div>
        </div>
    </div>
</div>
", "@KunstmaanNode/NodeAdmin/Modals/_export_pagetemplate.html.twig", "/Users/macbook/Documents/quoc/blog-admin/vendor/kunstmaan/node-bundle/Resources/views/NodeAdmin/Modals/_export_pagetemplate.html.twig");
    }
}
