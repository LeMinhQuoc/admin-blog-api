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

/* @KunstmaanNodeSearch/AbstractSearchPage/view.html.twig */
class __TwigTemplate_f92dd192aee3c9c5ef51aa77658c8b32625e5500c0f9d33609cf07becc1b45d2 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanNodeSearch/AbstractSearchPage/view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanNodeSearch/AbstractSearchPage/view.html.twig"));

        // line 1
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 2
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 2, $this->source); })()), "title", [], "any", false, false, false, 2), "html", null, true);
        echo "</h2>
    <form method=\"get\" action=\"\" class=\"well form-search\">
        <input type=\"text\" name=\"query\" id=\"query\" class=\"input-medium search-query\" value=\"";
        // line 4
        if ((array_key_exists("q_query", $context) && ((isset($context["q_query"]) || array_key_exists("q_query", $context) ? $context["q_query"] : (function () { throw new RuntimeError('Variable "q_query" does not exist.', 4, $this->source); })()) != ""))) {
            echo twig_escape_filter($this->env, (isset($context["q_query"]) || array_key_exists("q_query", $context) ? $context["q_query"] : (function () { throw new RuntimeError('Variable "q_query" does not exist.', 4, $this->source); })()), "html", null, true);
        }
        echo "\" />
    <input type=\"submit\" name=\"search\" id=\"search\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("search.search"), "html", null, true);
        echo "\" class=\"btn\" />
    &nbsp;&nbsp;";
        // line 6
        if ((array_key_exists("q_query", $context) && ((isset($context["q_query"]) || array_key_exists("q_query", $context) ? $context["q_query"] : (function () { throw new RuntimeError('Variable "q_query" does not exist.', 6, $this->source); })()) != ""))) {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("search.looking_for", ["%query%" => (isset($context["q_query"]) || array_key_exists("q_query", $context) ? $context["q_query"] : (function () { throw new RuntimeError('Variable "q_query" does not exist.', 6, $this->source); })())]), "html", null, true);
        }
        // line 7
        echo "    </form>
    ";
        // line 8
        if ((array_key_exists("q_query", $context) && ((isset($context["q_query"]) || array_key_exists("q_query", $context) ? $context["q_query"] : (function () { throw new RuntimeError('Variable "q_query" does not exist.', 8, $this->source); })()) != ""))) {
            // line 9
            echo "        <h3>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("search.results"), "html", null, true);
            echo "</h3>
        <div class=\"span12\" style=\"margin-left: 0\">
            <div class=\"span9\" style=\"margin-left: 0\">
                <div class=\"span9\" style=\"margin-left: 0\">
                    ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["pagerfanta"]) || array_key_exists("pagerfanta", $context) ? $context["pagerfanta"] : (function () { throw new RuntimeError('Variable "pagerfanta" does not exist.', 13, $this->source); })()), "currentPageResults", [], "any", false, false, false, 13));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["searchresult"]) {
                // line 14
                echo "                        ";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 14)) {
                    echo "<hr />";
                }
                // line 15
                echo "                        <div style=\" margin-right: 20px;\">
                            <h4><a href=\"";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["searchresult"], "_source", [], "array", false, false, false, 16), "slug", [], "array", false, false, false, 16), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["searchresult"], "_source", [], "array", false, false, false, 16), "title", [], "array", false, false, false, 16), "html", null, true);
                echo "</a></h4>
                            ";
                // line 17
                if (twig_get_attribute($this->env, $this->source, $context["searchresult"], "highlight", [], "array", true, true, false, 17)) {
                    // line 18
                    echo "                                <p>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["searchresult"], "highlight", [], "array", false, false, false, 18), "content", [], "array", false, false, false, 18), 0, [], "array", false, false, false, 18);
                    echo "</p>
                            ";
                } else {
                    // line 20
                    echo "                                <p>";
                    echo twig_escape_filter($this->env, twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["searchresult"], "_source", [], "array", false, false, false, 20), "content", [], "array", false, false, false, 20), 300), "html");
                    echo "</p>
                            ";
                }
                // line 22
                echo "                        </div>
                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['searchresult'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "                </div>
                ";
            // line 26
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["pagerfanta"]) || array_key_exists("pagerfanta", $context) ? $context["pagerfanta"] : (function () { throw new RuntimeError('Variable "pagerfanta" does not exist.', 26, $this->source); })()), "haveToPaginate", [], "method", false, false, false, 26)) {
                // line 27
                echo "                    ";
                echo $this->extensions['WhiteOctober\PagerfantaBundle\Twig\PagerfantaExtension']->renderPagerfanta((isset($context["pagerfanta"]) || array_key_exists("pagerfanta", $context) ? $context["pagerfanta"] : (function () { throw new RuntimeError('Variable "pagerfanta" does not exist.', 27, $this->source); })()), "twitter_bootstrap3_translated", ["prev_message" => "<i class=\"icon icon--caret--left\"></i>", "next_message" => "<i class=\"icon icon--caret--right\"></i>", "active_suffix" => ""]);
                echo "
                ";
            }
            // line 29
            echo "            </div>

            ";
            // line 31
            $context["aggregations"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pagerfanta"]) || array_key_exists("pagerfanta", $context) ? $context["pagerfanta"] : (function () { throw new RuntimeError('Variable "pagerfanta" does not exist.', 31, $this->source); })()), "getAdapter", [], "method", false, false, false, 31), "getAggregations", [], "method", false, false, false, 31);
            // line 32
            echo "            ";
            if ( !twig_test_empty((isset($context["aggregations"]) || array_key_exists("aggregations", $context) ? $context["aggregations"] : (function () { throw new RuntimeError('Variable "aggregations" does not exist.', 32, $this->source); })()))) {
                // line 33
                echo "                <div class=\"span3 well-small\" style=\"margin: 0; border-left:1px solid #E3E3E3;\">
                    ";
                // line 34
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["aggregations"]) || array_key_exists("aggregations", $context) ? $context["aggregations"] : (function () { throw new RuntimeError('Variable "aggregations" does not exist.', 34, $this->source); })()), "tag", [], "array", false, false, false, 34), "buckets", [], "array", false, false, false, 34)) > 0)) {
                    // line 35
                    echo "                        <p><strong>Tags</strong></p>
                        <ul>
                            ";
                    // line 37
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["aggregations"]) || array_key_exists("aggregations", $context) ? $context["aggregations"] : (function () { throw new RuntimeError('Variable "aggregations" does not exist.', 37, $this->source); })()), "tag", [], "array", false, false, false, 37), "buckets", [], "array", false, false, false, 37));
                    foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                        // line 38
                        echo "                                <li>
                                    ";
                        // line 39
                        if (!twig_in_filter(twig_get_attribute($this->env, $this->source, $context["tag"], "key", [], "array", false, false, false, 39), (isset($context["s_tags"]) || array_key_exists("s_tags", $context) ? $context["s_tags"] : (function () { throw new RuntimeError('Variable "s_tags" does not exist.', 39, $this->source); })()))) {
                            // line 40
                            echo "                                    ";
                            $context["tags"] = twig_get_attribute($this->env, $this->source, $context["tag"], "key", [], "array", false, false, false, 40);
                            // line 41
                            echo "                                    ";
                            if ((isset($context["q_tags"]) || array_key_exists("q_tags", $context) ? $context["q_tags"] : (function () { throw new RuntimeError('Variable "q_tags" does not exist.', 41, $this->source); })())) {
                                // line 42
                                echo "                                        ";
                                $context["tags"] = (((isset($context["tags"]) || array_key_exists("tags", $context) ? $context["tags"] : (function () { throw new RuntimeError('Variable "tags" does not exist.', 42, $this->source); })()) . ",") . (isset($context["q_tags"]) || array_key_exists("q_tags", $context) ? $context["q_tags"] : (function () { throw new RuntimeError('Variable "q_tags" does not exist.', 42, $this->source); })()));
                                // line 43
                                echo "                                    ";
                            }
                            // line 44
                            echo "                                    <a href=\"?query=";
                            echo twig_escape_filter($this->env, (isset($context["q_query"]) || array_key_exists("q_query", $context) ? $context["q_query"] : (function () { throw new RuntimeError('Variable "q_query" does not exist.', 44, $this->source); })()), "html", null, true);
                            echo "&tag=";
                            echo twig_escape_filter($this->env, (isset($context["tags"]) || array_key_exists("tags", $context) ? $context["tags"] : (function () { throw new RuntimeError('Variable "tags" does not exist.', 44, $this->source); })()), "html", null, true);
                            echo "\">
                                        ";
                        }
                        // line 46
                        echo "                                        ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "key", [], "array", false, false, false, 46), "html", null, true);
                        echo "
                                        ";
                        // line 47
                        if (!twig_in_filter(twig_get_attribute($this->env, $this->source, $context["tag"], "key", [], "array", false, false, false, 47), (isset($context["s_tags"]) || array_key_exists("s_tags", $context) ? $context["s_tags"] : (function () { throw new RuntimeError('Variable "s_tags" does not exist.', 47, $this->source); })()))) {
                            // line 48
                            echo "                                        (";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "doc_count", [], "array", false, false, false, 48), "html", null, true);
                            echo ")</a>
                                ";
                        } else {
                            // line 50
                            echo "                                    <a href=\"?query=";
                            echo twig_escape_filter($this->env, (isset($context["q_query"]) || array_key_exists("q_query", $context) ? $context["q_query"] : (function () { throw new RuntimeError('Variable "q_query" does not exist.', 50, $this->source); })()), "html", null, true);
                            echo "&tag=";
                            echo twig_escape_filter($this->env, (isset($context["q_tags"]) || array_key_exists("q_tags", $context) ? $context["q_tags"] : (function () { throw new RuntimeError('Variable "q_tags" does not exist.', 50, $this->source); })()), "html", null, true);
                            echo "&rtag=";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "key", [], "array", false, false, false, 50), "html", null, true);
                            echo "\">(-)</a>
                                    ";
                        }
                        // line 52
                        echo "                                </li>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 54
                    echo "                        </ul>
                    ";
                }
                // line 56
                echo "                    ";
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["facets"]) || array_key_exists("facets", $context) ? $context["facets"] : (function () { throw new RuntimeError('Variable "facets" does not exist.', 56, $this->source); })()), "type", [], "array", false, false, false, 56), "buckets", [], "array", false, false, false, 56)) > 0)) {
                    // line 57
                    echo "                        <p><strong>Types</strong></p>
                        <ul>
                            ";
                    // line 59
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["facets"]) || array_key_exists("facets", $context) ? $context["facets"] : (function () { throw new RuntimeError('Variable "facets" does not exist.', 59, $this->source); })()), "type", [], "array", false, false, false, 59), "buckets", [], "array", false, false, false, 59));
                    foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                        // line 60
                        echo "                                <li>
                                    ";
                        // line 61
                        if ((twig_get_attribute($this->env, $this->source, $context["type"], "key", [], "array", false, false, false, 61) != (isset($context["q_type"]) || array_key_exists("q_type", $context) ? $context["q_type"] : (function () { throw new RuntimeError('Variable "q_type" does not exist.', 61, $this->source); })()))) {
                            // line 62
                            echo "                                    <a href=\"?query=";
                            echo twig_escape_filter($this->env, (isset($context["q_query"]) || array_key_exists("q_query", $context) ? $context["q_query"] : (function () { throw new RuntimeError('Variable "q_query" does not exist.', 62, $this->source); })()), "html", null, true);
                            echo "&tag=";
                            echo twig_escape_filter($this->env, (isset($context["q_tags"]) || array_key_exists("q_tags", $context) ? $context["q_tags"] : (function () { throw new RuntimeError('Variable "q_tags" does not exist.', 62, $this->source); })()), "html", null, true);
                            echo "&type=";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "key", [], "array", false, false, false, 62), "html", null, true);
                            echo "\">
                                        ";
                        }
                        // line 64
                        echo "                                        ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "key", [], "array", false, false, false, 64), "html", null, true);
                        echo "
                                        ";
                        // line 65
                        if ((twig_get_attribute($this->env, $this->source, $context["type"], "key", [], "array", false, false, false, 65) != (isset($context["q_type"]) || array_key_exists("q_type", $context) ? $context["q_type"] : (function () { throw new RuntimeError('Variable "q_type" does not exist.', 65, $this->source); })()))) {
                            // line 66
                            echo "                                        (";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "doc_count", [], "array", false, false, false, 66), "html", null, true);
                            echo ")</a>
                                ";
                        } else {
                            // line 68
                            echo "                                    <a href=\"?query=";
                            echo twig_escape_filter($this->env, (isset($context["q_query"]) || array_key_exists("q_query", $context) ? $context["q_query"] : (function () { throw new RuntimeError('Variable "q_query" does not exist.', 68, $this->source); })()), "html", null, true);
                            echo "&tag=";
                            echo twig_escape_filter($this->env, (isset($context["q_tags"]) || array_key_exists("q_tags", $context) ? $context["q_tags"] : (function () { throw new RuntimeError('Variable "q_tags" does not exist.', 68, $this->source); })()), "html", null, true);
                            echo "\">(-)</a>
                                    ";
                        }
                        // line 70
                        echo "                                </li>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 72
                    echo "                        </ul>
                    ";
                }
                // line 74
                echo "                </div>
            ";
            }
            // line 76
            echo "        </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanNodeSearch/AbstractSearchPage/view.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  311 => 76,  307 => 74,  303 => 72,  296 => 70,  288 => 68,  282 => 66,  280 => 65,  275 => 64,  265 => 62,  263 => 61,  260 => 60,  256 => 59,  252 => 57,  249 => 56,  245 => 54,  238 => 52,  228 => 50,  222 => 48,  220 => 47,  215 => 46,  207 => 44,  204 => 43,  201 => 42,  198 => 41,  195 => 40,  193 => 39,  190 => 38,  186 => 37,  182 => 35,  180 => 34,  177 => 33,  174 => 32,  172 => 31,  168 => 29,  162 => 27,  159 => 26,  156 => 24,  141 => 22,  135 => 20,  129 => 18,  127 => 17,  121 => 16,  118 => 15,  113 => 14,  96 => 13,  88 => 9,  86 => 8,  83 => 7,  79 => 6,  75 => 5,  69 => 4,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block content %}
    <h2>{{ page.title }}</h2>
    <form method=\"get\" action=\"\" class=\"well form-search\">
        <input type=\"text\" name=\"query\" id=\"query\" class=\"input-medium search-query\" value=\"{% if q_query is defined and q_query != '' %}{{ q_query }}{% endif %}\" />
    <input type=\"submit\" name=\"search\" id=\"search\" value=\"{{ 'search.search'|trans }}\" class=\"btn\" />
    &nbsp;&nbsp;{% if q_query is defined and q_query != '' %}{{ 'search.looking_for'|trans({'%query%': q_query}) }}{% endif %}
    </form>
    {% if q_query is defined and q_query != '' %}
        <h3>{{ 'search.results'|trans }}</h3>
        <div class=\"span12\" style=\"margin-left: 0\">
            <div class=\"span9\" style=\"margin-left: 0\">
                <div class=\"span9\" style=\"margin-left: 0\">
                    {% for searchresult in pagerfanta.currentPageResults %}
                        {% if not loop.first %}<hr />{% endif %}
                        <div style=\" margin-right: 20px;\">
                            <h4><a href=\"{{ searchresult['_source']['slug'] }}\">{{ searchresult['_source']['title'] }}</a></h4>
                            {% if searchresult['highlight'] is defined %}
                                <p>{{ searchresult['highlight']['content'][0] | raw }}</p>
                            {% else %}
                                <p>{{ searchresult['_source']['content'] | truncate(300) | escape('html') }}</p>
                            {% endif %}
                        </div>
                    {% endfor %}
                </div>
                {# Pagination #}
                {% if pagerfanta.haveToPaginate() %}
                    {{ pagerfanta(pagerfanta, 'twitter_bootstrap3_translated', { 'prev_message': '<i class=\"icon icon--caret--left\"></i>', 'next_message': '<i class=\"icon icon--caret--right\"></i>', 'active_suffix': '' }) }}
                {% endif %}
            </div>

            {% set aggregations = pagerfanta.getAdapter().getAggregations() %}
            {% if aggregations is not empty %}
                <div class=\"span3 well-small\" style=\"margin: 0; border-left:1px solid #E3E3E3;\">
                    {% if aggregations['tag']['buckets']|length > 0 %}
                        <p><strong>Tags</strong></p>
                        <ul>
                            {% for tag in aggregations['tag']['buckets'] %}
                                <li>
                                    {% if tag['key'] not in s_tags %}
                                    {% set tags = tag['key'] %}
                                    {% if q_tags %}
                                        {% set tags = tags ~ ',' ~ q_tags %}
                                    {% endif %}
                                    <a href=\"?query={{ q_query }}&tag={{ tags }}\">
                                        {% endif %}
                                        {{ tag['key'] }}
                                        {% if tag['key'] not in s_tags %}
                                        ({{ tag['doc_count'] }})</a>
                                {% else %}
                                    <a href=\"?query={{ q_query }}&tag={{ q_tags }}&rtag={{ tag['key'] }}\">(-)</a>
                                    {% endif %}
                                </li>
                            {% endfor %}
                        </ul>
                    {% endif %}
                    {% if facets['type']['buckets']|length > 0 %}
                        <p><strong>Types</strong></p>
                        <ul>
                            {% for type in facets['type']['buckets'] %}
                                <li>
                                    {% if type['key'] != q_type %}
                                    <a href=\"?query={{ q_query }}&tag={{ q_tags }}&type={{ type['key'] }}\">
                                        {% endif %}
                                        {{ type['key'] }}
                                        {% if type['key'] != q_type %}
                                        ({{ type['doc_count'] }})</a>
                                {% else %}
                                    <a href=\"?query={{ q_query }}&tag={{ q_tags }}\">(-)</a>
                                    {% endif %}
                                </li>
                            {% endfor %}
                        </ul>
                    {% endif %}
                </div>
            {% endif %}
        </div>
    {% endif %}
{% endblock %}
", "@KunstmaanNodeSearch/AbstractSearchPage/view.html.twig", "/Users/macbook/Documents/quoc/admin-blog-api-/vendor/kunstmaan/node-search-bundle/Resources/views/AbstractSearchPage/view.html.twig");
    }
}
