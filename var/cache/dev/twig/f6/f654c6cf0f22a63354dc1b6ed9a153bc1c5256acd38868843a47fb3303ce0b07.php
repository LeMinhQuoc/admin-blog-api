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

/* @KunstmaanNode/NodeAdmin/pagenottranslated.html.twig */
class __TwigTemplate_c3dcee8ec060932c1a3cea0e09f74bb950b04701e6d6d4a4a88553821f3f9f27 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanNode/NodeAdmin/pagenottranslated.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanNode/NodeAdmin/pagenottranslated.html.twig"));

        $this->parent = $this->loadTemplate("@KunstmaanAdmin/Default/layout.html.twig", "@KunstmaanNode/NodeAdmin/pagenottranslated.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h1>
        ";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pages.pagenottranslated"), "html", null, true);
        echo "
    </h1>

    ";
        // line 8
        if ((isset($context["copyfromotherlanguages"]) || array_key_exists("copyfromotherlanguages", $context) ? $context["copyfromotherlanguages"] : (function () { throw new RuntimeError('Variable "copyfromotherlanguages" does not exist.', 8, $this->source); })())) {
            // line 9
            echo "        <ul>
            ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["nodeTranslations"]) || array_key_exists("nodeTranslations", $context) ? $context["nodeTranslations"] : (function () { throw new RuntimeError('Variable "nodeTranslations" does not exist.', 10, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["nodeTranslation"]) {
                // line 11
                echo "                <li>
                    ";
                // line 12
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pages.copyfrom"), "html", null, true);
                echo "
                    <a href=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanNodeBundle_nodes_copyfromotherlanguage", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["node"]) || array_key_exists("node", $context) ? $context["node"] : (function () { throw new RuntimeError('Variable "node" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13), "originallanguage" => twig_get_attribute($this->env, $this->source, $context["nodeTranslation"], "lang", [], "any", false, false, false, 13)]), "html", null, true);
                echo "\" class=\"js-prevent-double-click\">
                        ";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["nodeTranslation"], "lang", [], "any", false, false, false, 14), "html", null, true);
                // line 15
                echo "</a>:
                    ";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["nodeTranslation"], "title", [], "any", false, false, false, 16), "html", null, true);
                echo "
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nodeTranslation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "            <li>
                <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanNodeBundle_nodes_createemptypage", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["node"]) || array_key_exists("node", $context) ? $context["node"] : (function () { throw new RuntimeError('Variable "node" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20)]), "html", null, true);
            echo "\" class=\"js-prevent-double-click\">
                    ";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pages.createemptypage"), "html", null, true);
            echo "
                </a>
            </li>
        </ul>
    ";
        } else {
            // line 26
            echo "        ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pages.copynotavailable"), "html", null, true);
            echo "
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanNode/NodeAdmin/pagenottranslated.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 26,  118 => 21,  114 => 20,  111 => 19,  102 => 16,  99 => 15,  97 => 14,  93 => 13,  89 => 12,  86 => 11,  82 => 10,  79 => 9,  77 => 8,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@KunstmaanAdmin/Default/layout.html.twig' %}

{% block content %}
    <h1>
        {{ 'pages.pagenottranslated' | trans }}
    </h1>

    {% if copyfromotherlanguages %}
        <ul>
            {% for nodeTranslation in nodeTranslations %}
                <li>
                    {{ 'pages.copyfrom' | trans }}
                    <a href=\"{{ path('KunstmaanNodeBundle_nodes_copyfromotherlanguage', { 'id': node.id, 'originallanguage': nodeTranslation.lang}) }}\" class=\"js-prevent-double-click\">
                        {{ nodeTranslation.lang -}}
                    </a>:
                    {{ nodeTranslation.title }}
                </li>
            {% endfor %}
            <li>
                <a href=\"{{ path('KunstmaanNodeBundle_nodes_createemptypage', { 'id': node.id}) }}\" class=\"js-prevent-double-click\">
                    {{ 'pages.createemptypage' | trans }}
                </a>
            </li>
        </ul>
    {% else %}
        {{ 'pages.copynotavailable' | trans }}
    {% endif %}
{% endblock %}
", "@KunstmaanNode/NodeAdmin/pagenottranslated.html.twig", "/Users/macbook/Documents/quoc/blog-admin/vendor/kunstmaan/node-bundle/Resources/views/NodeAdmin/pagenottranslated.html.twig");
    }
}
