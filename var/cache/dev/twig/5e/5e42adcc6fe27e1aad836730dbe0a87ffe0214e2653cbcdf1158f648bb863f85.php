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

/* @KunstmaanNode/NodeAdmin/Modals/_recopy.html.twig */
class __TwigTemplate_f4873d15f550f876518c4f4f1abb3f46484da96b7d01db5b32360717c04f449d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanNode/NodeAdmin/Modals/_recopy.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanNode/NodeAdmin/Modals/_recopy.html.twig"));

        // line 1
        echo "<!-- Check if there are any node translations other then the current language -->
";
        // line 2
        $context["translationOptions"] = [];
        // line 3
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["node"]) || array_key_exists("node", $context) ? $context["node"] : (function () { throw new RuntimeError('Variable "node" does not exist.', 3, $this->source); })()), "nodeTranslations", [0 => true], "method", false, false, false, 3))) {
            // line 4
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["node"]) || array_key_exists("node", $context) ? $context["node"] : (function () { throw new RuntimeError('Variable "node" does not exist.', 4, $this->source); })()), "nodeTranslations", [0 => true], "method", false, false, false, 4));
            foreach ($context['_seq'] as $context["_key"] => $context["translation"]) {
                // line 5
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, $context["translation"], "lang", [], "any", false, false, false, 5) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["nodeVersion"]) || array_key_exists("nodeVersion", $context) ? $context["nodeVersion"] : (function () { throw new RuntimeError('Variable "nodeVersion" does not exist.', 5, $this->source); })()), "nodeTranslation", [], "any", false, false, false, 5), "lang", [], "any", false, false, false, 5))) {
                    // line 6
                    echo "            ";
                    $context["translationOptions"] = twig_array_merge((isset($context["translationOptions"]) || array_key_exists("translationOptions", $context) ? $context["translationOptions"] : (function () { throw new RuntimeError('Variable "translationOptions" does not exist.', 6, $this->source); })()), [twig_get_attribute($this->env, $this->source, $context["translation"], "lang", [], "any", false, false, false, 6) => twig_get_attribute($this->env, $this->source, $context["translation"], "id", [], "any", false, false, false, 6)]);
                    // line 7
                    echo "        ";
                }
                // line 8
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 10
        echo "
";
        // line 11
        if ( !twig_test_empty((isset($context["translationOptions"]) || array_key_exists("translationOptions", $context) ? $context["translationOptions"] : (function () { throw new RuntimeError('Variable "translationOptions" does not exist.', 11, $this->source); })()))) {
            // line 12
            echo "    <div id=\"recopy\" class=\"modal fade\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">

                <!-- Head -->
                <div class=\"modal-header\">
                    <button class=\"close\" data-dismiss=\"modal\">
                        <i class=\"fa fa-times\"></i>
                    </button>
                    <h3>";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.recopyfromlanguage"), "html", null, true);
            echo "</h3>
                </div>

                <form action=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanNodeBundle_nodes_recopyfromotherlanguage", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["node"]) || array_key_exists("node", $context) ? $context["node"] : (function () { throw new RuntimeError('Variable "node" does not exist.', 24, $this->source); })()), "id", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\" method=\"post\" novalidate=\"novalidate\">

                    <!-- Body -->
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <label for=\"recopy_source\">
                                ";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.sourcelanguage"), "html", null, true);
            echo "
                            </label>
                            <select name=\"source\" id=\"recopy_source\" class=\"form-control\">
                                ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["translationOptions"]) || array_key_exists("translationOptions", $context) ? $context["translationOptions"] : (function () { throw new RuntimeError('Variable "translationOptions" does not exist.', 33, $this->source); })()));
            foreach ($context['_seq'] as $context["value"] => $context["option"]) {
                // line 34
                echo "                                    <option value=\"";
                echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "</option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['value'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "                            </select>
                        </div>
                    </div>

                    <!-- Footer -->
                    <div class=\"modal-footer\">
                        <button type=\"submit\" name=\"submit\" class=\"btn btn-danger btn--raise-on-hover\">
                            ";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_node.modal.recopyfromlanguage.button.copy"), "html", null, true);
            echo "
                        </button>
                        <button class=\"btn btn-default btn--raise-on-hover\" data-dismiss=\"modal\">
                            ";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_node.modal.recopyfromlanguage.button.cancel"), "html", null, true);
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
        return "@KunstmaanNode/NodeAdmin/Modals/_recopy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 46,  132 => 43,  123 => 36,  112 => 34,  108 => 33,  102 => 30,  93 => 24,  87 => 21,  76 => 12,  74 => 11,  71 => 10,  64 => 8,  61 => 7,  58 => 6,  55 => 5,  50 => 4,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Check if there are any node translations other then the current language -->
{% set translationOptions = {} %}
{% if node.nodeTranslations(true) is not empty %}
    {% for translation in node.nodeTranslations(true) %}
        {% if translation.lang != nodeVersion.nodeTranslation.lang %}
            {% set translationOptions = translationOptions|merge({(translation.lang): translation.id}) %}
        {% endif %}
    {% endfor %}
{% endif %}

{% if translationOptions is not empty %}
    <div id=\"recopy\" class=\"modal fade\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">

                <!-- Head -->
                <div class=\"modal-header\">
                    <button class=\"close\" data-dismiss=\"modal\">
                        <i class=\"fa fa-times\"></i>
                    </button>
                    <h3>{{ 'action.recopyfromlanguage' | trans }}</h3>
                </div>

                <form action=\"{{ path('KunstmaanNodeBundle_nodes_recopyfromotherlanguage', { 'id': node.id }) }}\" method=\"post\" novalidate=\"novalidate\">

                    <!-- Body -->
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <label for=\"recopy_source\">
                                {{ 'modal.sourcelanguage' | trans }}
                            </label>
                            <select name=\"source\" id=\"recopy_source\" class=\"form-control\">
                                {% for value, option in translationOptions %}
                                    <option value=\"{{ option }}\">{{ value }}</option>
                                {% endfor %}
                            </select>
                        </div>
                    </div>

                    <!-- Footer -->
                    <div class=\"modal-footer\">
                        <button type=\"submit\" name=\"submit\" class=\"btn btn-danger btn--raise-on-hover\">
                            {{ 'kuma_node.modal.recopyfromlanguage.button.copy'|trans() }}
                        </button>
                        <button class=\"btn btn-default btn--raise-on-hover\" data-dismiss=\"modal\">
                            {{ 'kuma_node.modal.recopyfromlanguage.button.cancel'|trans() }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
{% endif %}", "@KunstmaanNode/NodeAdmin/Modals/_recopy.html.twig", "/Users/macbook/Documents/quoc/blog-admin/vendor/kunstmaan/node-bundle/Resources/views/NodeAdmin/Modals/_recopy.html.twig");
    }
}
