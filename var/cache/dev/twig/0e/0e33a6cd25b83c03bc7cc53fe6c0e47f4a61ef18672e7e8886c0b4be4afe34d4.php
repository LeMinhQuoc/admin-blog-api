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

/* @KunstmaanNode/NodeAdmin/Modals/_delete.html.twig */
class __TwigTemplate_807e5f011c8dda3708970d96cc4ffe1a78c0baf5043a2ed77eb18d97adcdc8c5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanNode/NodeAdmin/Modals/_delete.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanNode/NodeAdmin/Modals/_delete.html.twig"));

        // line 1
        echo "<div id=\"delete-page-modal\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">

            <!-- Head -->
            <div class=\"modal-header\">
                <button class=\"close\" data-dismiss=\"modal\">
                    <i class=\"fa fa-times\"></i>
                </button>
                <h3>";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_node.modal.delete_page.title.%page%", ["%page%" => twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 10, $this->source); })()), "title", [], "any", false, false, false, 10)]), "html", null, true);
        echo "</h3>
            </div>

            <!-- Body -->
            <div class=\"modal-body\">
                <p>";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_node.modal.delete_page.body.%page%", ["%page%" => twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 15, $this->source); })()), "title", [], "any", false, false, false, 15)]), "html", null, true);
        echo "</p>
            </div>

            <!-- Footer -->
            <div class=\"modal-footer\">
                <form action=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanNodeBundle_nodes_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["node"]) || array_key_exists("node", $context) ? $context["node"] : (function () { throw new RuntimeError('Variable "node" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20)]), "html", null, true);
        echo "\" method=\"post\" novalidate=\"novalidate\">
                    <button type=\"submit\" name=\"submit\" class=\"btn btn-danger btn--raise-on-hover\">
                        ";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_node.modal.delete_page.button.delete"), "html", null, true);
        echo "
                    </button>
                    <button class=\"btn btn-default btn--raise-on-hover\" data-dismiss=\"modal\">
                        ";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_node.modal.delete_page.button.cancel"), "html", null, true);
        echo "
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanNode/NodeAdmin/Modals/_delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 25,  75 => 22,  70 => 20,  62 => 15,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"delete-page-modal\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">

            <!-- Head -->
            <div class=\"modal-header\">
                <button class=\"close\" data-dismiss=\"modal\">
                    <i class=\"fa fa-times\"></i>
                </button>
                <h3>{{ 'kuma_node.modal.delete_page.title.%page%'|trans({'%page%': page.title}) }}</h3>
            </div>

            <!-- Body -->
            <div class=\"modal-body\">
                <p>{{ 'kuma_node.modal.delete_page.body.%page%'|trans({'%page%': page.title}) }}</p>
            </div>

            <!-- Footer -->
            <div class=\"modal-footer\">
                <form action=\"{{ path('KunstmaanNodeBundle_nodes_delete', { 'id': node.id }) }}\" method=\"post\" novalidate=\"novalidate\">
                    <button type=\"submit\" name=\"submit\" class=\"btn btn-danger btn--raise-on-hover\">
                        {{ 'kuma_node.modal.delete_page.button.delete'|trans() }}
                    </button>
                    <button class=\"btn btn-default btn--raise-on-hover\" data-dismiss=\"modal\">
                        {{ 'kuma_node.modal.delete_page.button.cancel'|trans() }}
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>", "@KunstmaanNode/NodeAdmin/Modals/_delete.html.twig", "/Users/macbook/Documents/quoc/blog-admin/vendor/kunstmaan/node-bundle/Resources/views/NodeAdmin/Modals/_delete.html.twig");
    }
}
