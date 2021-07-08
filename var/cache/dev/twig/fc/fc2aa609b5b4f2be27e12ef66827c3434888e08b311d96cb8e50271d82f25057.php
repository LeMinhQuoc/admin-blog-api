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

/* @KunstmaanNode/NodeAdmin/_modals.html.twig */
class __TwigTemplate_e9f4c824031d9e3a07302d8515c7b6dd197ce7eead1384ac27232fd69edf3557 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanNode/NodeAdmin/_modals.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanNode/NodeAdmin/_modals.html.twig"));

        // line 1
        echo "<!-- MODALS -->

<!-- Modal - Versions -->
";
        // line 4
        $this->loadTemplate("@KunstmaanNode/NodeAdmin/Modals/_versions.html.twig", "@KunstmaanNode/NodeAdmin/_modals.html.twig", 4)->display($context);
        // line 5
        echo "<!-- Modal - Add subpage -->
";
        // line 6
        $this->loadTemplate("@KunstmaanNode/NodeAdmin/Modals/_add_subpage.html.twig", "@KunstmaanNode/NodeAdmin/_modals.html.twig", 6)->display($context);
        // line 7
        echo "<!-- Modal - Delete page -->
";
        // line 8
        $this->loadTemplate("@KunstmaanNode/NodeAdmin/Modals/_delete.html.twig", "@KunstmaanNode/NodeAdmin/_modals.html.twig", 8)->display($context);
        // line 9
        echo "<!-- Modal - Duplicate page -->
";
        // line 10
        $this->loadTemplate("@KunstmaanNode/NodeAdmin/Modals/_duplicate.html.twig", "@KunstmaanNode/NodeAdmin/_modals.html.twig", 10)->display($context);
        // line 11
        if ((isset($context["showDuplicateWithChildren"]) || array_key_exists("showDuplicateWithChildren", $context) ? $context["showDuplicateWithChildren"] : (function () { throw new RuntimeError('Variable "showDuplicateWithChildren" does not exist.', 11, $this->source); })())) {
            // line 12
            echo "    <!-- Modal - Duplicate with children page -->
    ";
            // line 13
            $this->loadTemplate("@KunstmaanNode/NodeAdmin/Modals/_duplicate_with_children.html.twig", "@KunstmaanNode/NodeAdmin/_modals.html.twig", 13)->display($context);
        }
        // line 15
        echo "<!-- Modal - ReCopy content from other language -->
";
        // line 16
        $this->loadTemplate("@KunstmaanNode/NodeAdmin/Modals/_recopy.html.twig", "@KunstmaanNode/NodeAdmin/_modals.html.twig", 16)->display($context);
        // line 17
        echo "
";
        // line 19
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pageTemplates", [], "any", true, true, false, 19)) {
            // line 20
            echo "<!-- Modal - Export page template -->
";
            // line 21
            $this->loadTemplate("@KunstmaanNode/NodeAdmin/Modals/_export_pagetemplate.html.twig", "@KunstmaanNode/NodeAdmin/_modals.html.twig", 21)->display($context);
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanNode/NodeAdmin/_modals.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 21,  83 => 20,  81 => 19,  78 => 17,  76 => 16,  73 => 15,  70 => 13,  67 => 12,  65 => 11,  63 => 10,  60 => 9,  58 => 8,  55 => 7,  53 => 6,  50 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- MODALS -->

<!-- Modal - Versions -->
{% include '@KunstmaanNode/NodeAdmin/Modals/_versions.html.twig' %}
<!-- Modal - Add subpage -->
{% include '@KunstmaanNode/NodeAdmin/Modals/_add_subpage.html.twig' %}
<!-- Modal - Delete page -->
{% include '@KunstmaanNode/NodeAdmin/Modals/_delete.html.twig' %}
<!-- Modal - Duplicate page -->
{% include '@KunstmaanNode/NodeAdmin/Modals/_duplicate.html.twig' %}
{% if showDuplicateWithChildren %}
    <!-- Modal - Duplicate with children page -->
    {% include '@KunstmaanNode/NodeAdmin/Modals/_duplicate_with_children.html.twig' %}
{% endif %}
<!-- Modal - ReCopy content from other language -->
{% include '@KunstmaanNode/NodeAdmin/Modals/_recopy.html.twig' %}

{# Check if Page HasPageTemplateInterface method #}
{% if page.pageTemplates is defined %}
<!-- Modal - Export page template -->
{% include '@KunstmaanNode/NodeAdmin/Modals/_export_pagetemplate.html.twig' %}
{% endif %}
", "@KunstmaanNode/NodeAdmin/_modals.html.twig", "/Users/macbook/Documents/quoc/blog-admin/vendor/kunstmaan/node-bundle/Resources/views/NodeAdmin/_modals.html.twig");
    }
}
