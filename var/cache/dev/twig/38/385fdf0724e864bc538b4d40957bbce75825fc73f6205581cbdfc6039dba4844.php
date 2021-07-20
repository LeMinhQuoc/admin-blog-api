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

/* @KunstmaanTranslator/Toolbar/translations.html.twig */
class __TwigTemplate_acc70b415b95dbfe00f697b10df566140eb97c6653b8afd21ef7e481cb6973ad extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanTranslator/Toolbar/translations.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanTranslator/Toolbar/translations.html.twig"));

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
            echo twig_include($this->env, $context, "@KunstmaanTranslator/Toolbar/Icon/translation.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 9
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 9, $this->source); })()), "translations", [], "any", false, false, false, 9)), "html", null, true);
            echo "</span>
            <span class=\"sf-toolbar-label\">";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("toolbar.translations.title"), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 12
            echo "
        ";
            // line 13
            ob_start();
            // line 14
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 14, $this->source); })()), "translations", [], "any", false, false, false, 14));
            foreach ($context['_seq'] as $context["_key"] => $context["translation"]) {
                // line 15
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["translation"], "id", [], "any", false, false, false, 16), "html", null, true);
                echo "</b>
                    <span>
                        <a href=\"";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["translation"], "route", [], "any", false, false, false, 18), "html", null, true);
                echo "\" style=\"text-decoration: none !important;\">
                            ";
                // line 19
                echo twig_escape_filter($this->env, (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["translation"], "message", [], "any", false, false, false, 19)) > 40)) ? ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["translation"], "message", [], "any", false, false, false, 19), 0, 40) . "...")) : (twig_get_attribute($this->env, $this->source, $context["translation"], "message", [], "any", false, false, false, 19))), "html", null, true);
                echo "
                        </a>
                    </span>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 25
            echo "
        ";
            // line 26
            $this->loadTemplate("@KunstmaanAdmin/Toolbar/toolbar_item.html.twig", "@KunstmaanTranslator/Toolbar/translations.html.twig", 26)->display(twig_array_merge($context, ["link" => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 26, $this->source); })()), "route", [], "any", false, false, false, 26), "overflow" => true]));
            // line 27
            echo "    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanTranslator/Toolbar/translations.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  135 => 27,  133 => 26,  130 => 25,  127 => 24,  116 => 19,  112 => 18,  107 => 16,  104 => 15,  99 => 14,  97 => 13,  94 => 12,  89 => 10,  85 => 9,  80 => 8,  77 => 7,  75 => 6,  72 => 5,  69 => 4,  66 => 3,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block toolbar %}
    {% if collector is defined and collector.getTemplateData() %}
        {% set data = collector.getTemplateData().data %}
    {% endif %}

    {% if data is defined %}
        {% set icon %}
            {{ include('@KunstmaanTranslator/Toolbar/Icon/translation.svg') }}
            <span class=\"sf-toolbar-value\">{{ data.translations | length }}</span>
            <span class=\"sf-toolbar-label\">{{ 'toolbar.translations.title' | trans }}</span>
        {% endset %}

        {% set text %}
            {% for translation in data.translations %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>{{ translation.id }}</b>
                    <span>
                        <a href=\"{{ translation.route }}\" style=\"text-decoration: none !important;\">
                            {{ translation.message|length > 40 ? translation.message|slice(0, 40) ~ '...' : translation.message  }}
                        </a>
                    </span>
                </div>
            {% endfor %}
        {% endset %}

        {% include '@KunstmaanAdmin/Toolbar/toolbar_item.html.twig' with {'link': data.route, 'overflow': true} %}
    {% endif %}
{% endblock %}
", "@KunstmaanTranslator/Toolbar/translations.html.twig", "/Users/macbook/Documents/quoc/admin-blog-api-/vendor/kunstmaan/translator-bundle/Resources/views/Toolbar/translations.html.twig");
    }
}
