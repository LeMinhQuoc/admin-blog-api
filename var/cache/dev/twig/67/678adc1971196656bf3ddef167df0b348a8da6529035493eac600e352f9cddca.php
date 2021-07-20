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

/* @KunstmaanNode/Admin/_add_homepage_modal.html.twig */
class __TwigTemplate_656aeefa7f0d9b9848860ea5f05019c0f4b14bd9228d3df15092fb38465da4d9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanNode/Admin/_add_homepage_modal.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanNode/Admin/_add_homepage_modal.html.twig"));

        // line 1
        echo "<!-- Modal - Add homepage -->
";
        // line 2
        $context["homePageTypes"] = $this->extensions['Kunstmaan\NodeBundle\Twig\PagesConfigurationTwigExtension']->getHomepageTypes();
        // line 3
        if ( !twig_test_empty((isset($context["homePageTypes"]) || array_key_exists("homePageTypes", $context) ? $context["homePageTypes"] : (function () { throw new RuntimeError('Variable "homePageTypes" does not exist.', 3, $this->source); })()))) {
            // line 4
            echo "    <div id=\"add-homepage-modal\" class=\"modal fade\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">

                <!-- Head -->
                <div class=\"modal-header\">
                    <button class=\"close\" data-dismiss=\"modal\">
                        <i class=\"fa fa-times\"></i>
                    </button>
                    <h3>";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_node.modal.add_homepage.h"), "html", null, true);
            echo "</h3>
                </div>

                <form action=\"";
            // line 16
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanNodeBundle_nodes_add_homepage");
            echo "\" method=\"post\" novalidate=\"novalidate\">

                    <!-- body -->
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <label for=\"addpage_title\">
                                ";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_node.modal.add_homepage.form.title.label"), "html", null, true);
            echo "
                            </label>
                            <input name=\"title\" type=\"text\" id=\"addpage_title\" class=\"form-control\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"addpage_type\">
                                ";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_node.modal.add_homepage.form.type.label"), "html", null, true);
            echo "
                            </label>
                            <select name=\"type\" id=\"addpage_type\" class=\"form-control\">
                                ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["homePageTypes"]) || array_key_exists("homePageTypes", $context) ? $context["homePageTypes"] : (function () { throw new RuntimeError('Variable "homePageTypes" does not exist.', 31, $this->source); })()));
            foreach ($context['_seq'] as $context["pageTypeClass"] => $context["pageTypeName"]) {
                // line 32
                echo "                                    <option value=\"";
                echo twig_escape_filter($this->env, $context["pageTypeClass"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["pageTypeName"]), "html", null, true);
                echo "</option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['pageTypeClass'], $context['pageTypeName'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                            </select>
                        </div>
                    </div>

                    <!-- Footer -->
                    <div class=\"modal-footer\">
                        <button type=\"submit\" name=\"submit\" class=\"btn btn-primary btn--raise-on-hover\">
                            ";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_node.modal.add_homepage.form.add.label"), "html", null, true);
            echo "
                        </button>
                        <button type=\"button\" class=\"btn btn-default btn--raise-on-hover\" data-dismiss=\"modal\">
                            ";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_node.modal.add_homepage.form.cancel.label"), "html", null, true);
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
        return "@KunstmaanNode/Admin/_add_homepage_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 44,  115 => 41,  106 => 34,  95 => 32,  91 => 31,  85 => 28,  76 => 22,  67 => 16,  61 => 13,  50 => 4,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Modal - Add homepage -->
{% set homePageTypes = get_homepage_types() %}
{% if homePageTypes is not empty %}
    <div id=\"add-homepage-modal\" class=\"modal fade\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">

                <!-- Head -->
                <div class=\"modal-header\">
                    <button class=\"close\" data-dismiss=\"modal\">
                        <i class=\"fa fa-times\"></i>
                    </button>
                    <h3>{{ 'kuma_node.modal.add_homepage.h'|trans() }}</h3>
                </div>

                <form action=\"{{ path('KunstmaanNodeBundle_nodes_add_homepage') }}\" method=\"post\" novalidate=\"novalidate\">

                    <!-- body -->
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <label for=\"addpage_title\">
                                {{ 'kuma_node.modal.add_homepage.form.title.label'|trans() }}
                            </label>
                            <input name=\"title\" type=\"text\" id=\"addpage_title\" class=\"form-control\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"addpage_type\">
                                {{ 'kuma_node.modal.add_homepage.form.type.label'|trans() }}
                            </label>
                            <select name=\"type\" id=\"addpage_type\" class=\"form-control\">
                                {% for pageTypeClass,pageTypeName in homePageTypes %}
                                    <option value=\"{{ pageTypeClass }}\">{{ pageTypeName|trans }}</option>
                                {% endfor %}
                            </select>
                        </div>
                    </div>

                    <!-- Footer -->
                    <div class=\"modal-footer\">
                        <button type=\"submit\" name=\"submit\" class=\"btn btn-primary btn--raise-on-hover\">
                            {{ 'kuma_node.modal.add_homepage.form.add.label'|trans() }}
                        </button>
                        <button type=\"button\" class=\"btn btn-default btn--raise-on-hover\" data-dismiss=\"modal\">
                            {{ 'kuma_node.modal.add_homepage.form.cancel.label'|trans() }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
{% endif %}
", "@KunstmaanNode/Admin/_add_homepage_modal.html.twig", "/Users/macbook/Documents/quoc/admin-blog-api-/vendor/kunstmaan/node-bundle/Resources/views/Admin/_add_homepage_modal.html.twig");
    }
}
