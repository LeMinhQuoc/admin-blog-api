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

/* Layout/_header.html.twig */
class __TwigTemplate_54e3bb84ca6efa2f7b5e125340d30682ac4d6dc27fbe1039ded64dcd8c4a4d72 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Layout/_header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Layout/_header.html.twig"));

        // line 1
        echo "
";
        // line 3
        if (array_key_exists("nodemenu", $context)) {
            // line 4
            echo "    <header class=\"main-header\">
        <div class=\"container-fluid\">

            ";
            // line 8
            echo "            ";
            $context["homepagePageNode"] = twig_get_attribute($this->env, $this->source, (isset($context["nodemenu"]) || array_key_exists("nodemenu", $context) ? $context["nodemenu"] : (function () { throw new RuntimeError('Variable "nodemenu" does not exist.', 8, $this->source); })()), "getNodeByInternalName", [0 => "homepage"], "method", false, false, false, 8);
            // line 9
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_slug", ["url" => twig_get_attribute($this->env, $this->source, (isset($context["homepagePageNode"]) || array_key_exists("homepagePageNode", $context) ? $context["homepagePageNode"] : (function () { throw new RuntimeError('Variable "homepagePageNode" does not exist.', 9, $this->source); })()), "slug", [], "any", false, false, false, 9)]), "html", null, true);
            echo "\" class=\"main-header__logo\">
                <img src=\"/frontend/img/general/logo-kunstmaan.svg\" alt=\"Kunstmaan\" class=\"main-header__logo__img\">
            </a>


            ";
            // line 15
            echo "            <nav class=\"main-header__nav main-nav\">
            ";
            // line 16
            $context["activeSubnode"] = twig_get_attribute($this->env, $this->source, (isset($context["nodemenu"]) || array_key_exists("nodemenu", $context) ? $context["nodemenu"] : (function () { throw new RuntimeError('Variable "nodemenu" does not exist.', 16, $this->source); })()), "getActiveForDepth", [0 => 1], "method", false, false, false, 16);
            // line 17
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["activeSubnode"]) || array_key_exists("activeSubnode", $context) ? $context["activeSubnode"] : (function () { throw new RuntimeError('Variable "activeSubnode" does not exist.', 17, $this->source); })()), "children", [], "any", false, false, false, 17));
            foreach ($context['_seq'] as $context["_key"] => $context["node"]) {
                // line 18
                echo "                ";
                if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["node"], "node", [], "any", false, false, false, 18), "isHiddenFromNav", [], "method", false, false, false, 18)) {
                    // line 19
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_slug", ["url" => twig_get_attribute($this->env, $this->source, $context["node"], "slug", [], "any", false, false, false, 19)]), "html", null, true);
                    echo "\" class=\"main-nav__link ";
                    if (twig_get_attribute($this->env, $this->source, $context["node"], "active", [], "any", false, false, false, 19)) {
                        echo "main-nav__link--active";
                    }
                    echo "\">
                        ";
                    // line 20
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["node"], "title", [], "any", false, false, false, 20), "html", null, true);
                    echo "
                    </a>
                ";
                }
                // line 23
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['node'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "            </nav>


            ";
            // line 28
            echo "            ";
            $context["searchPageNode"] = twig_get_attribute($this->env, $this->source, (isset($context["nodemenu"]) || array_key_exists("nodemenu", $context) ? $context["nodemenu"] : (function () { throw new RuntimeError('Variable "nodemenu" does not exist.', 28, $this->source); })()), "getNodeByInternalName", [0 => "search"], "method", false, false, false, 28);
            // line 29
            echo "            ";
            if ((isset($context["searchPageNode"]) || array_key_exists("searchPageNode", $context) ? $context["searchPageNode"] : (function () { throw new RuntimeError('Variable "searchPageNode" does not exist.', 29, $this->source); })())) {
                // line 30
                echo "                <form method=\"get\" action=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_slug", ["url" => twig_get_attribute($this->env, $this->source, (isset($context["searchPageNode"]) || array_key_exists("searchPageNode", $context) ? $context["searchPageNode"] : (function () { throw new RuntimeError('Variable "searchPageNode" does not exist.', 30, $this->source); })()), "slug", [], "any", false, false, false, 30)]), "html", null, true);
                echo "\" class=\"searchbox-form js-searchbox-form pull-left\">
                    <div class=\"searchbox\">
                        <div class=\"searchbox__content js-searchbox-content\">
                            <input type=\"text\" name=\"query\" id=\"query\" value=\"";
                // line 33
                if ((array_key_exists("q_query", $context) && ((isset($context["q_query"]) || array_key_exists("q_query", $context) ? $context["q_query"] : (function () { throw new RuntimeError('Variable "q_query" does not exist.', 33, $this->source); })()) != ""))) {
                    echo twig_escape_filter($this->env, (isset($context["q_query"]) || array_key_exists("q_query", $context) ? $context["q_query"] : (function () { throw new RuntimeError('Variable "q_query" does not exist.', 33, $this->source); })()), "html", null, true);
                }
                echo "\" placeholder=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("search"), "html", null, true);
                echo "\" class=\"searchbox__input\">
                            <button type=\"submit\" id=\"search\" class=\"searchbox__submit\">
                                <i class=\"icon icon--search searchbox__submit__icon\"></i>
                            </button>
                        </div>
                    </div>
                </form>
            ";
            }
            // line 41
            echo "

            ";
            // line 44
            echo "            ";
            $context["langs"] = $this->extensions['Kunstmaan\AdminBundle\Twig\LocaleSwitcherTwigExtension']->getLocales();
            // line 45
            echo "            ";
            if ((twig_length_filter($this->env, (isset($context["langs"]) || array_key_exists("langs", $context) ? $context["langs"] : (function () { throw new RuntimeError('Variable "langs" does not exist.', 45, $this->source); })())) > 1)) {
                // line 46
                echo "                <div class=\"language-nav\">
                    <span class=\"language-nav__active-lang\">
                        ";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "request", [], "any", false, false, false, 48), "locale", [], "any", false, false, false, 48), "html", null, true);
                echo "
                    </span>
                    <nav>
                        ";
                // line 51
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["langs"]) || array_key_exists("langs", $context) ? $context["langs"] : (function () { throw new RuntimeError('Variable "langs" does not exist.', 51, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                    // line 52
                    echo "                        ";
                    if (($context["lang"] != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "request", [], "any", false, false, false, 52), "locale", [], "any", false, false, false, 52))) {
                        // line 53
                        echo "                            <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_slug", ["_locale" => $context["lang"]]), "html", null, true);
                        echo "\" class=\"language-nav__link\">
                                ";
                        // line 54
                        echo twig_escape_filter($this->env, $context["lang"], "html", null, true);
                        echo "
                            </a>
                        ";
                    }
                    // line 57
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 58
                echo "                    </nav>
                </div>
            ";
            }
            // line 61
            echo "        </div>
    </header>
";
        }
        // line 64
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Layout/_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 64,  181 => 61,  176 => 58,  170 => 57,  164 => 54,  159 => 53,  156 => 52,  152 => 51,  146 => 48,  142 => 46,  139 => 45,  136 => 44,  132 => 41,  117 => 33,  110 => 30,  107 => 29,  104 => 28,  99 => 24,  93 => 23,  87 => 20,  78 => 19,  75 => 18,  70 => 17,  68 => 16,  65 => 15,  56 => 9,  53 => 8,  48 => 4,  46 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{# Default header #}
{% if nodemenu is defined %}
    <header class=\"main-header\">
        <div class=\"container-fluid\">

            {# Logo #}
            {% set homepagePageNode = nodemenu.getNodeByInternalName('homepage') %}
            <a href=\"{{ path('_slug', { 'url': homepagePageNode.slug }) }}\" class=\"main-header__logo\">
                <img src=\"/frontend/img/general/logo-kunstmaan.svg\" alt=\"Kunstmaan\" class=\"main-header__logo__img\">
            </a>


            {# Main navigation #}
            <nav class=\"main-header__nav main-nav\">
            {% set activeSubnode = nodemenu.getActiveForDepth(1) %}
            {% for node in activeSubnode.children %}
                {% if not node.node.isHiddenFromNav() %}
                    <a href=\"{{ path('_slug', { 'url': node.slug }) }}\" class=\"main-nav__link {% if(node.active) %}main-nav__link--active{% endif %}\">
                        {{ node.title }}
                    </a>
                {% endif %}
            {% endfor %}
            </nav>


            {# Search #}
            {% set searchPageNode = nodemenu.getNodeByInternalName('search') %}
            {% if searchPageNode %}
                <form method=\"get\" action=\"{{ path('_slug', { 'url': searchPageNode.slug }) }}\" class=\"searchbox-form js-searchbox-form pull-left\">
                    <div class=\"searchbox\">
                        <div class=\"searchbox__content js-searchbox-content\">
                            <input type=\"text\" name=\"query\" id=\"query\" value=\"{% if q_query is defined and q_query != '' %}{{ q_query }}{% endif %}\" placeholder=\"{{ 'search'|trans }}\" class=\"searchbox__input\">
                            <button type=\"submit\" id=\"search\" class=\"searchbox__submit\">
                                <i class=\"icon icon--search searchbox__submit__icon\"></i>
                            </button>
                        </div>
                    </div>
                </form>
            {% endif %}


            {# Language nav #}
            {% set langs = get_locales() %}
            {% if langs|length > 1 %}
                <div class=\"language-nav\">
                    <span class=\"language-nav__active-lang\">
                        {{ app.request.locale }}
                    </span>
                    <nav>
                        {% for lang in langs %}
                        {% if lang != app.request.locale %}
                            <a href=\"{{ path('_slug', { '_locale': lang }) }}\" class=\"language-nav__link\">
                                {{ lang }}
                            </a>
                        {% endif %}
                        {% endfor %}
                    </nav>
                </div>
            {% endif %}
        </div>
    </header>
{% endif %}

", "Layout/_header.html.twig", "/Users/macbook/Documents/quoc/admin-blog-api-/templates/Layout/_header.html.twig");
    }
}
