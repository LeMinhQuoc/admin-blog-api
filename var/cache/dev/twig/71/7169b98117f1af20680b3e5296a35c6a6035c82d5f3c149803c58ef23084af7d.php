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

/* @KunstmaanNode/NodeAdmin/Modals/_add_subpage.html.twig */
class __TwigTemplate_3d3ecc5fbe109fb885de7017d4d0b4cf5566949ace9c278ad0aad991c651f8ce extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanNode/NodeAdmin/Modals/_add_subpage.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanNode/NodeAdmin/Modals/_add_subpage.html.twig"));

        // line 1
        $context["pagePossibleChildPages"] = $this->extensions['Kunstmaan\NodeBundle\Twig\PagesConfigurationTwigExtension']->getPossibleChildTypes((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 1, $this->source); })()));
        // line 2
        if ( !twig_test_empty((isset($context["pagePossibleChildPages"]) || array_key_exists("pagePossibleChildPages", $context) ? $context["pagePossibleChildPages"] : (function () { throw new RuntimeError('Variable "pagePossibleChildPages" does not exist.', 2, $this->source); })()))) {
            // line 3
            echo "    <div id=\"add-subpage-modal\" class=\"modal fade\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">

                <!-- Head -->
                <div class=\"modal-header\">
                    <button class=\"close\" data-dismiss=\"modal\">
                        <i class=\"fa fa-times\"></i>
                    </button>
                    <h3>";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_node.modal.add_subpage.title"), "html", null, true);
            echo "</h3>
                </div>

                <form action=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanNodeBundle_nodes_add", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["node"]) || array_key_exists("node", $context) ? $context["node"] : (function () { throw new RuntimeError('Variable "node" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15)]), "html", null, true);
            echo "\" method=\"post\" novalidate=\"novalidate\">

                    <!-- body -->
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <label for=\"addpage_title\">
                                ";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_node.modal.add_subpage.label.title"), "html", null, true);
            echo "
                            </label>
                            <input name=\"title\" type=\"text\" id=\"addpage_title\" class=\"form-control\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"addpage_type\">
                                ";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_node.modal.add_subpage.label.type"), "html", null, true);
            echo "
                            </label>
                            <select name=\"type\" id=\"addpage_type\" class=\"form-control\">
                                ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagePossibleChildPages"]) || array_key_exists("pagePossibleChildPages", $context) ? $context["pagePossibleChildPages"] : (function () { throw new RuntimeError('Variable "pagePossibleChildPages" does not exist.', 30, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["pageType"]) {
                // line 31
                echo "                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pageType"], "class", [], "any", false, false, false, 31), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["pageType"], "name", [], "any", false, false, false, 31)), "html", null, true);
                echo "</option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pageType'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "                            </select>
                        </div>
                    </div>

                    <!-- Footer -->
                    <div class=\"modal-footer\">
                        <button type=\"submit\" name=\"submit\" class=\"btn btn-primary btn--raise-on-hover\">
                            ";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_node.modal.add_subpage.button.add"), "html", null, true);
            echo "
                        </button>
                        <button type=\"button\" class=\"btn btn-default btn--raise-on-hover\" data-dismiss=\"modal\">
                            ";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_node.modal.add_subpage.button.cancel"), "html", null, true);
            echo "
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanNode/NodeAdmin/Modals/_add_subpage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 43,  112 => 40,  103 => 33,  92 => 31,  88 => 30,  82 => 27,  73 => 21,  64 => 15,  58 => 12,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set pagePossibleChildPages = get_possible_child_types(page) %}
{% if pagePossibleChildPages is not empty %}
    <div id=\"add-subpage-modal\" class=\"modal fade\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">

                <!-- Head -->
                <div class=\"modal-header\">
                    <button class=\"close\" data-dismiss=\"modal\">
                        <i class=\"fa fa-times\"></i>
                    </button>
                    <h3>{{ 'kuma_node.modal.add_subpage.title'|trans() }}</h3>
                </div>

                <form action=\"{{ path('KunstmaanNodeBundle_nodes_add', { 'id': node.id }) }}\" method=\"post\" novalidate=\"novalidate\">

                    <!-- body -->
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <label for=\"addpage_title\">
                                {{ 'kuma_node.modal.add_subpage.label.title'|trans() }}
                            </label>
                            <input name=\"title\" type=\"text\" id=\"addpage_title\" class=\"form-control\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"addpage_type\">
                                {{ 'kuma_node.modal.add_subpage.label.type'|trans() }}
                            </label>
                            <select name=\"type\" id=\"addpage_type\" class=\"form-control\">
                                {% for pageType in pagePossibleChildPages %}
                                    <option value=\"{{ pageType.class }}\">{{ pageType.name|trans }}</option>
                                {% endfor %}
                            </select>
                        </div>
                    </div>

                    <!-- Footer -->
                    <div class=\"modal-footer\">
                        <button type=\"submit\" name=\"submit\" class=\"btn btn-primary btn--raise-on-hover\">
                            {{ 'kuma_node.modal.add_subpage.button.add'|trans() }}
                        </button>
                        <button type=\"button\" class=\"btn btn-default btn--raise-on-hover\" data-dismiss=\"modal\">
                            {{ 'kuma_node.modal.add_subpage.button.cancel'|trans() }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
{% endif %}", "@KunstmaanNode/NodeAdmin/Modals/_add_subpage.html.twig", "/Users/macbook/Documents/quoc/blog-admin/vendor/kunstmaan/node-bundle/Resources/views/NodeAdmin/Modals/_add_subpage.html.twig");
    }
}
