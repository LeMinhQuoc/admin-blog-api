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

/* @KunstmaanAdmin/Toolbar/exception.html.twig */
class __TwigTemplate_eb3ae8b7075d5c86cf35bccaf045722bd7a7ef99fb9015d2b72194ac20d9c1be extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdmin/Toolbar/exception.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdmin/Toolbar/exception.html.twig"));

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
            ob_start();
            // line 8
            echo "            ";
            echo twig_include($this->env, $context, "@KunstmaanAdmin/Toolbar/Icon/exception.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 9, $this->source); })()), "cp_all", [], "array", false, false, false, 9), "html", null, true);
            echo "</span>
            <span class=\"sf-toolbar-info-piece-additional-detail\">
                <span class=\"sf-toolbar-label\">";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("toolbar.exception.title"), "html", null, true);
            echo "</span>
            </span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 14
            echo "
        ";
            // line 15
            ob_start();
            // line 16
            echo "            <div class=\"sf-toolbar-info-group\">
                <div class=\"sf-toolbar-info-piece\">
                    <div class=\"sf-toolbar-info-piece\">
                        <b> ";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("toolbar.exception.info.exceptions"), "html", null, true);
            echo "</b>
                        <span class=\"sf-toolbar-status\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 20, $this->source); })()), "cp_all", [], "array", false, false, false, 20), "html", null, true);
            echo "</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b> ";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("toolbar.exception.info.events"), "html", null, true);
            echo "</b>
                        <span class=\"sf-toolbar-status\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 24, $this->source); })()), "cp_sum", [], "array", false, false, false, 24), "html", null, true);
            echo " </span>
                    </div>
                </div>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 29
            echo "
        ";
            // line 30
            echo twig_include($this->env, $context, "@KunstmaanAdmin/Toolbar/toolbar_item.html.twig", ["status_color" => "#a21919"]);
            echo "
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanAdmin/Toolbar/exception.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  131 => 30,  128 => 29,  120 => 24,  116 => 23,  110 => 20,  106 => 19,  101 => 16,  99 => 15,  96 => 14,  90 => 11,  85 => 9,  80 => 8,  77 => 7,  75 => 6,  72 => 5,  69 => 4,  66 => 3,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block toolbar %}
    {% if collector is defined and collector.getTemplateData() %}
        {% set data = collector.getTemplateData().data %}
    {% endif %}

    {% if data is defined %}
        {% set icon %}
            {{ include('@KunstmaanAdmin/Toolbar/Icon/exception.svg') }}
            <span class=\"sf-toolbar-value\">{{ data['cp_all'] }}</span>
            <span class=\"sf-toolbar-info-piece-additional-detail\">
                <span class=\"sf-toolbar-label\">{{ 'toolbar.exception.title' | trans }}</span>
            </span>
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-group\">
                <div class=\"sf-toolbar-info-piece\">
                    <div class=\"sf-toolbar-info-piece\">
                        <b> {{ 'toolbar.exception.info.exceptions'|trans }}</b>
                        <span class=\"sf-toolbar-status\">{{ data['cp_all'] }}</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b> {{ 'toolbar.exception.info.events'|trans }}</b>
                        <span class=\"sf-toolbar-status\">{{ data['cp_sum'] }} </span>
                    </div>
                </div>
            </div>
        {% endset %}

        {{ include('@KunstmaanAdmin/Toolbar/toolbar_item.html.twig', { status_color: '#a21919' }) }}
    {% endif %}
{% endblock %}
", "@KunstmaanAdmin/Toolbar/exception.html.twig", "/Users/macbook/Documents/quoc/blog-admin/vendor/kunstmaan/admin-bundle/Resources/views/Toolbar/exception.html.twig");
    }
}
