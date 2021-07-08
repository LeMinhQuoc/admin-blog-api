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

/* @KunstmaanNode/NodeAdmin/Modals/_duplicate_with_children.html.twig */
class __TwigTemplate_efffb26ca8f74133b2611bac488750112dcf877c16740aa41b1d60c1a238ca6f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanNode/NodeAdmin/Modals/_duplicate_with_children.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanNode/NodeAdmin/Modals/_duplicate_with_children.html.twig"));

        // line 1
        echo "<div id=\"duplicate-with-children-page-modal\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">

            <!-- Head -->
            <div class=\"modal-header\">
                <button class=\"close\" data-dismiss=\"modal\">
                    <i class=\"fa fa-times\"></i>
                </button>
                <h3>";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_node.modal.duplicate_page.title.%page%", ["%page%" => twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 10, $this->source); })()), "title", [], "any", false, false, false, 10)]), "html", null, true);
        echo "</h3>
            </div>

            <form action=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanNodeBundle_nodes_duplicate_with_children", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["node"]) || array_key_exists("node", $context) ? $context["node"] : (function () { throw new RuntimeError('Variable "node" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13)]), "html", null, true);
        echo "\" method=\"post\" novalidate=\"novalidate\">

                <!-- Body -->
                <div class=\"modal-body\">
                    <p>";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_node.modal.duplicate_page.label.childcount_warning", ["%count%" => (("<strong style=\"color:Tomato;\">" . (isset($context["childCount"]) || array_key_exists("childCount", $context) ? $context["childCount"] : (function () { throw new RuntimeError('Variable "childCount" does not exist.', 17, $this->source); })())) . "</strong>")]);
        echo "</p>
                    <div class=\"form-group\">
                        <label for=\"duplicatepage_title\">
                            ";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_node.modal.duplicate_page.label.new_title"), "html", null, true);
        echo "
                        </label>
                        <input name=\"title\" type=\"text\" id=\"title\" class=\"form-control\">
                    </div>
                </div>

                <!-- Footer -->
                <div class=\"modal-footer\">
                    <button type=\"submit\" name=\"submit\" class=\"btn btn-danger btn--raise-on-hover\">
                        ";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_node.modal.duplicate_page.button.duplicate"), "html", null, true);
        echo "
                    </button>
                    <button class=\"btn btn-default btn--raise-on-hover\" data-dismiss=\"modal\">
                        ";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_node.modal.duplicate_page.button.cancel"), "html", null, true);
        echo "
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanNode/NodeAdmin/Modals/_duplicate_with_children.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 32,  85 => 29,  73 => 20,  67 => 17,  60 => 13,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"duplicate-with-children-page-modal\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">

            <!-- Head -->
            <div class=\"modal-header\">
                <button class=\"close\" data-dismiss=\"modal\">
                    <i class=\"fa fa-times\"></i>
                </button>
                <h3>{{ 'kuma_node.modal.duplicate_page.title.%page%'|trans({'%page%': page.title}) }}</h3>
            </div>

            <form action=\"{{ path('KunstmaanNodeBundle_nodes_duplicate_with_children', { 'id': node.id }) }}\" method=\"post\" novalidate=\"novalidate\">

                <!-- Body -->
                <div class=\"modal-body\">
                    <p>{{ 'kuma_node.modal.duplicate_page.label.childcount_warning' | trans({'%count%': '<strong style=\"color:Tomato;\">' ~ childCount ~ '</strong>'}) | raw }}</p>
                    <div class=\"form-group\">
                        <label for=\"duplicatepage_title\">
                            {{ 'kuma_node.modal.duplicate_page.label.new_title'|trans() }}
                        </label>
                        <input name=\"title\" type=\"text\" id=\"title\" class=\"form-control\">
                    </div>
                </div>

                <!-- Footer -->
                <div class=\"modal-footer\">
                    <button type=\"submit\" name=\"submit\" class=\"btn btn-danger btn--raise-on-hover\">
                        {{ 'kuma_node.modal.duplicate_page.button.duplicate'|trans() }}
                    </button>
                    <button class=\"btn btn-default btn--raise-on-hover\" data-dismiss=\"modal\">
                        {{ 'kuma_node.modal.duplicate_page.button.cancel'|trans() }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
", "@KunstmaanNode/NodeAdmin/Modals/_duplicate_with_children.html.twig", "/Users/macbook/Documents/quoc/blog-admin/vendor/kunstmaan/node-bundle/Resources/views/NodeAdmin/Modals/_duplicate_with_children.html.twig");
    }
}