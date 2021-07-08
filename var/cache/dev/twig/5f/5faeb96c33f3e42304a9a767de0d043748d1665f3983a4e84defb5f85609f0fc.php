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

/* @KunstmaanAdmin/Settings/bundleVersion.html.twig */
class __TwigTemplate_d1aaf8341919cc45a3de76c0e428d01803228eab2cca289f1bea89d6931148a6 extends \Twig\Template
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
        return "@KunstmaanAdmin/Settings/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdmin/Settings/bundleVersion.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdmin/Settings/bundleVersion.html.twig"));

        $this->parent = $this->loadTemplate("@KunstmaanAdmin/Settings/index.html.twig", "@KunstmaanAdmin/Settings/bundleVersion.html.twig", 1);
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
        echo "    ";
        if (twig_test_iterable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 4, $this->source); })()))) {
            // line 5
            echo "        <ul class=\"list-group margin-top\">
        ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 6, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["bundle"]) {
                // line 7
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["bundle"], "status", [], "any", false, false, false, 7) == "UP_TO_DATE")) {
                    // line 8
                    echo "                ";
                    $context["color"] = "#4F8A10";
                    // line 9
                    echo "                ";
                    $context["txt"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.version.uptodate");
                    // line 10
                    echo "            ";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["bundle"], "status", [], "any", false, false, false, 10) == "TO_UPDATE")) {
                    // line 11
                    echo "                ";
                    $context["color"] = "#9F6000";
                    // line 12
                    echo "                ";
                    $context["txt"] = (((((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.version.toupdate") . " (") . twig_get_attribute($this->env, $this->source, $context["bundle"], "new_version", [], "any", false, false, false, 12)) . (((twig_get_attribute($this->env, $this->source, $context["bundle"], "version", [], "any", false, false, false, 12) != twig_get_attribute($this->env, $this->source, $context["bundle"], "reference", [], "any", false, false, false, 12))) ? ((" " . twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["bundle"], "new_reference", [], "any", false, false, false, 12), 0, 7))) : (""))) . ", updated on ") . twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bundle"], "new_date", [], "any", false, false, false, 12), "Y-m-d H:i")) . ")");
                    // line 13
                    echo "            ";
                } else {
                    // line 14
                    echo "                ";
                    $context["color"] = "#00529B";
                    // line 15
                    echo "                ";
                    $context["txt"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.version.unknown");
                    // line 16
                    echo "            ";
                }
                // line 17
                echo "
            <li class=\"list-group-item\" style=\"color: ";
                // line 18
                echo twig_escape_filter($this->env, (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 18, $this->source); })()), "html", null, true);
                echo "\">
                ";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bundle"], "name", [], "any", false, false, false, 19), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bundle"], "version", [], "any", false, false, false, 19), "html", null, true);
                if ((twig_get_attribute($this->env, $this->source, $context["bundle"], "version", [], "any", false, false, false, 19) != twig_get_attribute($this->env, $this->source, $context["bundle"], "reference", [], "any", false, false, false, 19))) {
                    echo " ";
                    echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["bundle"], "reference", [], "any", false, false, false, 19), 0, 7), "html", null, true);
                }
                echo ") ";
                echo twig_escape_filter($this->env, (isset($context["txt"]) || array_key_exists("txt", $context) ? $context["txt"] : (function () { throw new RuntimeError('Variable "txt" does not exist.', 19, $this->source); })()), "html", null, true);
                echo "
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bundle'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "        </ul>
        <p>";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.version.moreinfo"), "html", null, true);
            echo "</p>
    ";
        } else {
            // line 25
            echo "        <div class=\"alert-error\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.version.error"), "html", null, true);
            echo "</div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanAdmin/Settings/bundleVersion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 25,  135 => 23,  132 => 22,  115 => 19,  111 => 18,  108 => 17,  105 => 16,  102 => 15,  99 => 14,  96 => 13,  93 => 12,  90 => 11,  87 => 10,  84 => 9,  81 => 8,  78 => 7,  74 => 6,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@KunstmaanAdmin/Settings/index.html.twig' %}

{% block content %}
    {% if data is iterable %}
        <ul class=\"list-group margin-top\">
        {% for bundle in data %}
            {% if bundle.status == 'UP_TO_DATE' %}
                {% set color = '#4F8A10' %}
                {% set txt = 'settings.version.uptodate'|trans %}
            {% elseif bundle.status == 'TO_UPDATE' %}
                {% set color = '#9F6000' %}
                {% set txt = 'settings.version.toupdate'|trans ~ ' (' ~ bundle.new_version ~ (bundle.version != bundle.reference ? ' ' ~  bundle.new_reference|slice(0, 7) : '') ~ ', updated on ' ~ bundle.new_date|date('Y-m-d H:i') ~ ')' %}
            {% else %}
                {% set color = '#00529B' %}
                {% set txt = 'settings.version.unknown'|trans %}
            {% endif %}

            <li class=\"list-group-item\" style=\"color: {{ color }}\">
                {{ bundle.name }} ({{ bundle.version }}{% if bundle.version != bundle.reference %} {{ bundle.reference|slice(0, 7) }}{% endif %}) {{ txt }}
            </li>
        {% endfor %}
        </ul>
        <p>{{ 'settings.version.moreinfo'|trans }}</p>
    {% else %}
        <div class=\"alert-error\">{{ 'settings.version.error'|trans }}</div>
    {% endif %}
{% endblock %}
", "@KunstmaanAdmin/Settings/bundleVersion.html.twig", "/Users/macbook/Documents/quoc/blog-admin/vendor/kunstmaan/admin-bundle/Resources/views/Settings/bundleVersion.html.twig");
    }
}
