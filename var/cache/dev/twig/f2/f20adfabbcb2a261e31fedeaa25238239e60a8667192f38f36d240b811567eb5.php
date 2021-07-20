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

/* @KunstmaanForm/FormSubmissions/list.html.twig */
class __TwigTemplate_43a492298c8a1edf363bacfcab5594d5eecae8ecdf92fd24ab33662ab6ed72b0 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'extra_actions_header' => [$this, 'block_extra_actions_header'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@KunstmaanAdmin/Default/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanForm/FormSubmissions/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanForm/FormSubmissions/list.html.twig"));

        $this->parent = $this->loadTemplate("@KunstmaanAdmin/Default/layout.html.twig", "@KunstmaanForm/FormSubmissions/list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_extra_actions_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_actions_header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_actions_header"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 4, $this->source); })()), "canExport", [], "method", false, false, false, 4)) {
            // line 5
            echo "        <div class=\"col-sm-6 col-md-4\">
            <div class=\"app__content__header__extra-actions\">
                <div class=\"btn-group\">
                    <button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\">
                        ";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_form.button.export_to"), "html", null, true);
            echo "
                        <i class=\"fa fa-caret-down\"></i>
                    </button>
                    <ul class=\"dropdown-menu dropdown-menu-right\">
                        ";
            // line 13
            $context["exportparams"] = twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 13, $this->source); })()), "filterbuilder", [], "any", false, false, false, 13), "currentparameters", [], "any", false, false, false, 13), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 13, $this->source); })()), "getExportUrl", [], "method", false, false, false, 13), "params", [], "array", false, false, false, 13));
            // line 14
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->extensions['Kunstmaan\AdminListBundle\Twig\AdminListTwigExtension']->getSupportedExtensions());
            foreach ($context['_seq'] as $context["name"] => $context["ext"]) {
                // line 15
                echo "                            ";
                $context["exportparams"] = twig_array_merge((isset($context["exportparams"]) || array_key_exists("exportparams", $context) ? $context["exportparams"] : (function () { throw new RuntimeError('Variable "exportparams" does not exist.', 15, $this->source); })()), ["_format" => $context["ext"]]);
                // line 16
                echo "                            <li>
                                <a href=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 17, $this->source); })()), "getExportUrl", [], "method", false, false, false, 17), "path", [], "array", false, false, false, 17), (isset($context["exportparams"]) || array_key_exists("exportparams", $context) ? $context["exportparams"] : (function () { throw new RuntimeError('Variable "exportparams" does not exist.', 17, $this->source); })())), "html", null, true);
                echo "\">
                                    <i class=\"fa fa-file-";
                // line 18
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, $context["name"]), "html", null, true);
                echo "\"></i>
                                    ";
                // line 19
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "
                                </a>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['ext'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "                    </ul>
                </div>
            </div>
        </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 30
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 31
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["nodetranslation"]) || array_key_exists("nodetranslation", $context) ? $context["nodetranslation"] : (function () { throw new RuntimeError('Variable "nodetranslation" does not exist.', 31, $this->source); })()), "title", [], "any", false, false, false, 31), "html", null, true);
        echo "</h2>

    ";
        // line 33
        echo $this->extensions['Kunstmaan\AdminListBundle\Twig\AdminListTwigExtension']->renderWidget($this->env, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 33, $this->source); })()), "KunstmaanFormBundle_formsubmissions_list", ["nodeTranslationId" => twig_get_attribute($this->env, $this->source, (isset($context["nodetranslation"]) || array_key_exists("nodetranslation", $context) ? $context["nodetranslation"] : (function () { throw new RuntimeError('Variable "nodetranslation" does not exist.', 33, $this->source); })()), "id", [], "any", false, false, false, 33)]);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanForm/FormSubmissions/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 33,  141 => 31,  131 => 30,  116 => 23,  106 => 19,  102 => 18,  98 => 17,  95 => 16,  92 => 15,  87 => 14,  85 => 13,  78 => 9,  72 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@KunstmaanAdmin/Default/layout.html.twig' %}

{% block extra_actions_header %}
    {% if adminlist.canExport() %}
        <div class=\"col-sm-6 col-md-4\">
            <div class=\"app__content__header__extra-actions\">
                <div class=\"btn-group\">
                    <button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\">
                        {{ 'kuma_form.button.export_to' | trans }}
                        <i class=\"fa fa-caret-down\"></i>
                    </button>
                    <ul class=\"dropdown-menu dropdown-menu-right\">
                        {% set exportparams = adminlist.filterbuilder.currentparameters|merge(adminlist.getExportUrl()[(\"params\")]) %}
                        {% for name, ext in supported_export_extensions() %}
                            {% set exportparams = exportparams|merge({\"_format\": ext}) %}
                            <li>
                                <a href=\"{{ path(adminlist.getExportUrl()[\"path\"], exportparams) }}\">
                                    <i class=\"fa fa-file-{{ name|lower }}\"></i>
                                    {{ name }}
                                </a>
                            </li>
                        {% endfor %}
                    </ul>
                </div>
            </div>
        </div>
    {% endif %}
{% endblock %}

{% block content %}
    <h2>{{ nodetranslation.title }}</h2>

    {{ adminlist_widget(adminlist, 'KunstmaanFormBundle_formsubmissions_list', {\"nodeTranslationId\" : nodetranslation.id}) }}
{% endblock %}
", "@KunstmaanForm/FormSubmissions/list.html.twig", "/Users/macbook/Documents/quoc/admin-blog-api-/vendor/kunstmaan/form-bundle/Resources/views/FormSubmissions/list.html.twig");
    }
}
