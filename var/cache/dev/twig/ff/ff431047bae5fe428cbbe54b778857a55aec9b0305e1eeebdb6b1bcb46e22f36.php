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

/* @KunstmaanNode/NodeAdmin/Modals/_versions.html.twig */
class __TwigTemplate_6446db0ef2e7f8e7243a0a2922e969442272078c7e2dc74a5ebbf7d0cf79a900 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanNode/NodeAdmin/Modals/_versions.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanNode/NodeAdmin/Modals/_versions.html.twig"));

        // line 1
        echo "<div id=\"versions\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">

            <!-- Head -->
            <div class=\"modal-header\">
                <button class=\"close\" data-dismiss=\"modal\">
                    <i class=\"fa fa-times\"></i>
                </button>
                <h3>";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_node.modal.versions.title"), "html", null, true);
        echo "</h3>
            </div>

            <!-- Body -->
            <div class=\"modal-body\">
                <table class=\"table table-bordered table-striped\">
                    <thead>
                    <tr>
                        <th>";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_node.modal.versions.table.type"), "html", null, true);
        echo "</th>
                        <th>";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_node.modal.versions.table.last_modified"), "html", null, true);
        echo "</th>
                        <th>";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_node.modal.versions.table.user"), "html", null, true);
        echo "</th>
                        <th>";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_node.modal.versions.table.actions"), "html", null, true);
        echo "</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 25
        $context["publicVersion"] = twig_get_attribute($this->env, $this->source, (isset($context["nodeTranslation"]) || array_key_exists("nodeTranslation", $context) ? $context["nodeTranslation"] : (function () { throw new RuntimeError('Variable "nodeTranslation" does not exist.', 25, $this->source); })()), "getPublicNodeVersion", [], "method", false, false, false, 25);
        // line 26
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nodeVersions"]) || array_key_exists("nodeVersions", $context) ? $context["nodeVersions"] : (function () { throw new RuntimeError('Variable "nodeVersions" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["nodeVersion"]) {
            // line 27
            echo "                        <tr>
                            <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["nodeVersion"], "type", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                            <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["nodeVersion"], "updated", [], "any", false, false, false, 29), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
                            <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["nodeVersion"], "owner", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                            <td class=\"table__actions\">
                                <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_slug_preview", ["url" => twig_get_attribute($this->env, $this->source, (isset($context["nodeTranslation"]) || array_key_exists("nodeTranslation", $context) ? $context["nodeTranslation"] : (function () { throw new RuntimeError('Variable "nodeTranslation" does not exist.', 32, $this->source); })()), "url", [], "any", false, false, false, 32), "version" => twig_get_attribute($this->env, $this->source, $context["nodeVersion"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\" target=\"_blank\" class=\"link--text table__actions__item table__actions__item--block\">
                                    <i class=\"fa fa-eye\"></i>
                                    ";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_node.modal.versions.actions.preview"), "html", null, true);
            echo "
                                </a>
                                ";
            // line 36
            if ((((null === (isset($context["draftNodeVersion"]) || array_key_exists("draftNodeVersion", $context) ? $context["draftNodeVersion"] : (function () { throw new RuntimeError('Variable "draftNodeVersion" does not exist.', 36, $this->source); })())) || (twig_get_attribute($this->env, $this->source, $context["nodeVersion"], "id", [], "any", false, false, false, 36) != twig_get_attribute($this->env, $this->source, (isset($context["draftNodeVersion"]) || array_key_exists("draftNodeVersion", $context) ? $context["draftNodeVersion"] : (function () { throw new RuntimeError('Variable "draftNodeVersion" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36))) && ((null === (isset($context["publicVersion"]) || array_key_exists("publicVersion", $context) ? $context["publicVersion"] : (function () { throw new RuntimeError('Variable "publicVersion" does not exist.', 36, $this->source); })())) || (twig_get_attribute($this->env, $this->source, $context["nodeVersion"], "id", [], "any", false, false, false, 36) != twig_get_attribute($this->env, $this->source, (isset($context["publicVersion"]) || array_key_exists("publicVersion", $context) ? $context["publicVersion"] : (function () { throw new RuntimeError('Variable "publicVersion" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36))))) {
                // line 37
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanNodeBundle_nodes_revert", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["node"]) || array_key_exists("node", $context) ? $context["node"] : (function () { throw new RuntimeError('Variable "node" does not exist.', 37, $this->source); })()), "id", [], "any", false, false, false, 37), "version" => twig_get_attribute($this->env, $this->source, $context["nodeVersion"], "id", [], "any", false, false, false, 37)]), "html", null, true);
                echo "\" class=\"link--text table__actions__item table__actions__item--block\">
                                        <i class=\"fa fa-refresh\"></i>
                                        ";
                // line 39
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_node.modal.versions.actions.revert"), "html", null, true);
                echo "
                                    </a>
                                ";
            }
            // line 42
            echo "                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nodeVersion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanNode/NodeAdmin/Modals/_versions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 45,  131 => 42,  125 => 39,  119 => 37,  117 => 36,  112 => 34,  107 => 32,  102 => 30,  98 => 29,  94 => 28,  91 => 27,  86 => 26,  84 => 25,  77 => 21,  73 => 20,  69 => 19,  65 => 18,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"versions\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">

            <!-- Head -->
            <div class=\"modal-header\">
                <button class=\"close\" data-dismiss=\"modal\">
                    <i class=\"fa fa-times\"></i>
                </button>
                <h3>{{ 'kuma_node.modal.versions.title'|trans() }}</h3>
            </div>

            <!-- Body -->
            <div class=\"modal-body\">
                <table class=\"table table-bordered table-striped\">
                    <thead>
                    <tr>
                        <th>{{ 'kuma_node.modal.versions.table.type'|trans() }}</th>
                        <th>{{ 'kuma_node.modal.versions.table.last_modified'|trans() }}</th>
                        <th>{{ 'kuma_node.modal.versions.table.user'|trans() }}</th>
                        <th>{{ 'kuma_node.modal.versions.table.actions'|trans() }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% set publicVersion = nodeTranslation.getPublicNodeVersion() %}
                    {% for nodeVersion in nodeVersions %}
                        <tr>
                            <td>{{ nodeVersion.type }}</td>
                            <td>{{ nodeVersion.updated | date('Y-m-d H:i:s') }}</td>
                            <td>{{ nodeVersion.owner }}</td>
                            <td class=\"table__actions\">
                                <a href=\"{{ path('_slug_preview', { 'url': nodeTranslation.url, 'version': nodeVersion.id }) }}\" target=\"_blank\" class=\"link--text table__actions__item table__actions__item--block\">
                                    <i class=\"fa fa-eye\"></i>
                                    {{ 'kuma_node.modal.versions.actions.preview'|trans() }}
                                </a>
                                {% if (draftNodeVersion is null or nodeVersion.id != draftNodeVersion.id) and (publicVersion is null or nodeVersion.id != publicVersion.id) %}
                                    <a href=\"{{ path('KunstmaanNodeBundle_nodes_revert', { 'id': node.id, 'version': nodeVersion.id }) }}\" class=\"link--text table__actions__item table__actions__item--block\">
                                        <i class=\"fa fa-refresh\"></i>
                                        {{ 'kuma_node.modal.versions.actions.revert'|trans() }}
                                    </a>
                                {% endif %}
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>", "@KunstmaanNode/NodeAdmin/Modals/_versions.html.twig", "/Users/macbook/Documents/quoc/admin-blog-api-/vendor/kunstmaan/node-bundle/Resources/views/NodeAdmin/Modals/_versions.html.twig");
    }
}
