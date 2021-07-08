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

/* @KunstmaanAdmin/Toolbar/bundles_version.html.twig */
class __TwigTemplate_1d9727cda97b63f27165b2f5b2def7b6def798119c97208fd6ba256656f8e7ff extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdmin/Toolbar/bundles_version.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdmin/Toolbar/bundles_version.html.twig"));

        // line 1
        $this->displayBlock('toolbar', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 2
        echo "    ";
        if ((array_key_exists("collector", $context) && twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 2, $this->source); })()), "getTemplateData", [], "method", false, false, false, 2))) {
            // line 3
            echo "        ";
            $context["data"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 3, $this->source); })()), "getTemplateData", [], "method", false, false, false, 3), "data", [], "any", false, false, false, 3);
            // line 4
            echo "    ";
        }
        // line 5
        echo "
    ";
        // line 6
        if (array_key_exists("data", $context)) {
            // line 7
            echo "        ";
            $context["status_color"] = "yellow";
            // line 8
            echo "        ";
            $context["version"] = "Unknown";
            // line 9
            echo "        ";
            $context["txt"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("toolbar.bundle_version.unknown");
            // line 10
            echo "
        ";
            // line 11
            if (twig_test_iterable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 11, $this->source); })()))) {
                // line 12
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 12, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["bundle"]) {
                    // line 13
                    echo "                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["bundle"], "name", [], "any", false, false, false, 13) == "kunstmaan/bundles-cms")) {
                        // line 14
                        echo "                    ";
                        $context["version"] = twig_get_attribute($this->env, $this->source, $context["bundle"], "version", [], "any", false, false, false, 14);
                        // line 15
                        echo "                    ";
                        if ((twig_get_attribute($this->env, $this->source, $context["bundle"], "status", [], "any", false, false, false, 15) == "UP_TO_DATE")) {
                            // line 16
                            echo "                        ";
                            $context["status_color"] = "";
                            // line 17
                            echo "                        ";
                            $context["label_color"] = "green";
                            // line 18
                            echo "                        ";
                            $context["txt"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("toolbar.bundle_version.uptodate");
                            // line 19
                            echo "                    ";
                        } elseif ((twig_get_attribute($this->env, $this->source, $context["bundle"], "status", [], "any", false, false, false, 19) == "TO_UPDATE")) {
                            // line 20
                            echo "                        ";
                            $context["status_color"] = "red";
                            // line 21
                            echo "                        ";
                            $context["txt"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("toolbar.bundle_version.toupdate");
                            // line 22
                            echo "                    ";
                        }
                        // line 23
                        echo "                ";
                    } elseif ((twig_get_attribute($this->env, $this->source, $context["bundle"], "name", [], "any", false, false, false, 23) == "kunstmaan/admin-bundle")) {
                        // line 24
                        echo "                    ";
                        $context["version"] = twig_get_attribute($this->env, $this->source, $context["bundle"], "version", [], "any", false, false, false, 24);
                        // line 25
                        echo "                    ";
                        if ((twig_get_attribute($this->env, $this->source, $context["bundle"], "status", [], "any", false, false, false, 25) == "UP_TO_DATE")) {
                            // line 26
                            echo "                        ";
                            $context["status_color"] = "";
                            // line 27
                            echo "                        ";
                            $context["label_color"] = "green";
                            // line 28
                            echo "                        ";
                            $context["txt"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("toolbar.bundle_version.uptodate");
                            // line 29
                            echo "                    ";
                        } elseif ((twig_get_attribute($this->env, $this->source, $context["bundle"], "status", [], "any", false, false, false, 29) == "TO_UPDATE")) {
                            // line 30
                            echo "                        ";
                            $context["status_color"] = "red";
                            // line 31
                            echo "                        ";
                            $context["txt"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("toolbar.bundle_version.toupdate");
                            // line 32
                            echo "                    ";
                        }
                        // line 33
                        echo "                ";
                    } elseif ((twig_get_attribute($this->env, $this->source, $context["bundle"], "name", [], "any", false, false, false, 33) == "kunstmaan/admin-bundle")) {
                        // line 34
                        echo "                    ";
                        $context["version"] = twig_get_attribute($this->env, $this->source, $context["bundle"], "version", [], "any", false, false, false, 34);
                        // line 35
                        echo "                    ";
                        if ((twig_get_attribute($this->env, $this->source, $context["bundle"], "status", [], "any", false, false, false, 35) == "UP_TO_DATE")) {
                            // line 36
                            echo "                        ";
                            $context["status_color"] = "#4F8A10";
                            // line 37
                            echo "                        ";
                            $context["txt"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("toolbar.bundle_version.uptodate");
                            // line 38
                            echo "                    ";
                        } elseif ((twig_get_attribute($this->env, $this->source, $context["bundle"], "status", [], "any", false, false, false, 38) == "TO_UPDATE")) {
                            // line 39
                            echo "                        ";
                            $context["status_color"] = "#9F6000";
                            // line 40
                            echo "                        ";
                            $context["txt"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("toolbar.bundle_version.toupdate");
                            // line 41
                            echo "                    ";
                        }
                        // line 42
                        echo "                ";
                    }
                    // line 43
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bundle'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 44
                echo "        ";
            } else {
                // line 45
                echo "            ";
                $context["status_color"] = "red";
                // line 46
                echo "            ";
                $context["version"] = "Unknown";
                // line 47
                echo "            ";
                $context["txt"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("toolbar.bundle_version.error");
                // line 48
                echo "        ";
            }
            // line 49
            echo "
        ";
            // line 50
            ob_start();
            // line 51
            echo "            ";
            echo twig_include($this->env, $context, "@KunstmaanAdmin/Toolbar/Icon/kunstmaan.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 52
            echo twig_escape_filter($this->env, (isset($context["version"]) || array_key_exists("version", $context) ? $context["version"] : (function () { throw new RuntimeError('Variable "version" does not exist.', 52, $this->source); })()), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 54
            echo "
        ";
            // line 55
            ob_start();
            // line 56
            echo "            <div class=\"sf-toolbar-info-group\">
                <div class=\"sf-toolbar-info-piece\">
                    <div class=\"sf-toolbar-info-piece\">
                        <b> ";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("toolbar.bundle_version.version"), "html", null, true);
            echo "</b>
                        <span>";
            // line 60
            echo twig_escape_filter($this->env, (isset($context["version"]) || array_key_exists("version", $context) ? $context["version"] : (function () { throw new RuntimeError('Variable "version" does not exist.', 60, $this->source); })()), "html", null, true);
            echo "</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b> ";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("toolbar.bundle_version.status"), "html", null, true);
            echo "</b>
                        <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 64
            if (array_key_exists("label_color", $context)) {
                echo twig_escape_filter($this->env, (isset($context["label_color"]) || array_key_exists("label_color", $context) ? $context["label_color"] : (function () { throw new RuntimeError('Variable "label_color" does not exist.', 64, $this->source); })()), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, (isset($context["status_color"]) || array_key_exists("status_color", $context) ? $context["status_color"] : (function () { throw new RuntimeError('Variable "status_color" does not exist.', 64, $this->source); })()), "html", null, true);
            }
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["txt"]) || array_key_exists("txt", $context) ? $context["txt"] : (function () { throw new RuntimeError('Variable "txt" does not exist.', 64, $this->source); })()), "html", null, true);
            echo " </span>
                    </div>
                </div>
            </div>

        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 70
            echo "
        ";
            // line 71
            echo twig_include($this->env, $context, "@KunstmaanAdmin/Toolbar/toolbar_item.html.twig", ["status" => (isset($context["status_color"]) || array_key_exists("status_color", $context) ? $context["status_color"] : (function () { throw new RuntimeError('Variable "status_color" does not exist.', 71, $this->source); })())]);
            echo "
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanAdmin/Toolbar/bundles_version.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  264 => 71,  261 => 70,  246 => 64,  242 => 63,  236 => 60,  232 => 59,  227 => 56,  225 => 55,  222 => 54,  217 => 52,  212 => 51,  210 => 50,  207 => 49,  204 => 48,  201 => 47,  198 => 46,  195 => 45,  192 => 44,  186 => 43,  183 => 42,  180 => 41,  177 => 40,  174 => 39,  171 => 38,  168 => 37,  165 => 36,  162 => 35,  159 => 34,  156 => 33,  153 => 32,  150 => 31,  147 => 30,  144 => 29,  141 => 28,  138 => 27,  135 => 26,  132 => 25,  129 => 24,  126 => 23,  123 => 22,  120 => 21,  117 => 20,  114 => 19,  111 => 18,  108 => 17,  105 => 16,  102 => 15,  99 => 14,  96 => 13,  91 => 12,  89 => 11,  86 => 10,  83 => 9,  80 => 8,  77 => 7,  75 => 6,  72 => 5,  69 => 4,  66 => 3,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block toolbar %}
    {% if collector is defined and collector.getTemplateData() %}
        {% set data = collector.getTemplateData().data %}
    {% endif %}

    {% if data is defined %}
        {% set status_color = 'yellow' %}
        {% set version = 'Unknown' %}
        {% set txt = 'toolbar.bundle_version.unknown'|trans %}

        {% if data is iterable %}
            {% for bundle in data %}
                {% if bundle.name == \"kunstmaan/bundles-cms\" %}
                    {% set version = bundle.version %}
                    {% if bundle.status == 'UP_TO_DATE' %}
                        {% set status_color = '' %}
                        {% set label_color = 'green' %}
                        {% set txt = 'toolbar.bundle_version.uptodate'|trans %}
                    {% elseif bundle.status == 'TO_UPDATE' %}
                        {% set status_color = 'red' %}
                        {% set txt = 'toolbar.bundle_version.toupdate'|trans %}
                    {% endif %}
                {% elseif bundle.name == 'kunstmaan/admin-bundle' %}
                    {% set version = bundle.version %}
                    {% if bundle.status == 'UP_TO_DATE' %}
                        {% set status_color = '' %}
                        {% set label_color = 'green' %}
                        {% set txt = 'toolbar.bundle_version.uptodate'|trans %}
                    {% elseif bundle.status == 'TO_UPDATE' %}
                        {% set status_color = 'red' %}
                        {% set txt = 'toolbar.bundle_version.toupdate'|trans %}
                    {% endif %}
                {% elseif bundle.name == 'kunstmaan/admin-bundle' %}
                    {% set version = bundle.version %}
                    {% if bundle.status == 'UP_TO_DATE' %}
                        {% set status_color = '#4F8A10' %}
                        {% set txt = 'toolbar.bundle_version.uptodate'|trans %}
                    {% elseif bundle.status == 'TO_UPDATE' %}
                        {% set status_color = '#9F6000' %}
                        {% set txt = 'toolbar.bundle_version.toupdate'|trans %}
                    {% endif %}
                {% endif %}
            {% endfor %}
        {% else %}
            {% set status_color = 'red' %}
            {% set version = 'Unknown' %}
            {% set txt = 'toolbar.bundle_version.error'|trans %}
        {% endif %}

        {% set icon %}
            {{ include('@KunstmaanAdmin/Toolbar/Icon/kunstmaan.svg') }}
            <span class=\"sf-toolbar-value\">{{ version }}</span>
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-group\">
                <div class=\"sf-toolbar-info-piece\">
                    <div class=\"sf-toolbar-info-piece\">
                        <b> {{ 'toolbar.bundle_version.version'|trans }}</b>
                        <span>{{ version }}</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b> {{ 'toolbar.bundle_version.status'|trans }}</b>
                        <span class=\"sf-toolbar-status sf-toolbar-status-{% if label_color is defined %}{{ label_color }}{% else %}{{ status_color }}{% endif %}\">{{ txt }} </span>
                    </div>
                </div>
            </div>

        {% endset %}

        {{ include('@KunstmaanAdmin/Toolbar/toolbar_item.html.twig', { status: status_color }) }}
    {% endif %}
{% endblock %}
", "@KunstmaanAdmin/Toolbar/bundles_version.html.twig", "/Users/macbook/Documents/quoc/blog-admin/vendor/kunstmaan/admin-bundle/Resources/views/Toolbar/bundles_version.html.twig");
    }
}
