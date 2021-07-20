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

/* @KunstmaanArticle/AbstractArticleOverviewPage/view.html.twig */
class __TwigTemplate_54e7fc155eeec4aa3989034cc9881404b97c91aa9e2af125d1d3adeea82a2f54 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanArticle/AbstractArticleOverviewPage/view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanArticle/AbstractArticleOverviewPage/view.html.twig"));

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

    ";
        // line 4
        echo $this->extensions['Kunstmaan\PagePartBundle\Twig\Extension\PagePartTwigExtension']->renderPageParts($this->env, $context, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 4, $this->source); })()), "main");
        echo "

    ";
        // line 6
        $context["count"] = 0;
        // line 7
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["pagerfanta"]) || array_key_exists("pagerfanta", $context) ? $context["pagerfanta"] : (function () { throw new RuntimeError('Variable "pagerfanta" does not exist.', 7, $this->source); })()), "nbResults", [], "any", false, false, false, 7) > 0)) {
            // line 8
            echo "        <ul class=\"article__overview--list\">
        ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["pagerfanta"]) || array_key_exists("pagerfanta", $context) ? $context["pagerfanta"] : (function () { throw new RuntimeError('Variable "pagerfanta" does not exist.', 9, $this->source); })()), "currentPageResults", [], "any", false, false, false, 9));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 10
                echo "            <li class=\"article__overview--list-item\">
                ";
                // line 11
                $context["articlenode"] = $this->extensions['Kunstmaan\NodeBundle\Twig\NodeTwigExtension']->getNodeTranslationFor($context["article"]);
                // line 12
                echo "                <h4><a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["articlenode"]) || array_key_exists("articlenode", $context) ? $context["articlenode"] : (function () { throw new RuntimeError('Variable "articlenode" does not exist.', 12, $this->source); })()), "url", [], "any", false, false, false, 12), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 12), "html", null, true);
                echo "</a></h4>
                ";
                // line 13
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "summary", [], "any", false, false, false, 13), "html", null, true);
                echo "
                <time>";
                // line 14
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "date", [], "any", false, false, false, 14), "d/m/Y"), "html", null, true);
                echo "</time>
            </li>
            ";
                // line 16
                $context["count"] = ((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 16, $this->source); })()) + 1);
                // line 17
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "        </ul>
        ";
            // line 19
            if (twig_get_attribute($this->env, $this->source, (isset($context["pagerfanta"]) || array_key_exists("pagerfanta", $context) ? $context["pagerfanta"] : (function () { throw new RuntimeError('Variable "pagerfanta" does not exist.', 19, $this->source); })()), "haveToPaginate", [], "method", false, false, false, 19)) {
                // line 20
                echo "            ";
                echo $this->extensions['WhiteOctober\PagerfantaBundle\Twig\PagerfantaExtension']->renderPagerfanta((isset($context["pagerfanta"]) || array_key_exists("pagerfanta", $context) ? $context["pagerfanta"] : (function () { throw new RuntimeError('Variable "pagerfanta" does not exist.', 20, $this->source); })()));
                echo "
        ";
            }
            // line 22
            echo "    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanArticle/AbstractArticleOverviewPage/view.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  126 => 22,  120 => 20,  118 => 19,  115 => 18,  109 => 17,  107 => 16,  102 => 14,  98 => 13,  91 => 12,  89 => 11,  86 => 10,  82 => 9,  79 => 8,  76 => 7,  74 => 6,  69 => 4,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block content %}
    <h2>{{ page.title }}</h2>

    {{ render_pageparts(page, 'main') }}

    {% set count = 0 %}
    {% if pagerfanta.nbResults > 0 %}
        <ul class=\"article__overview--list\">
        {% for article in pagerfanta.currentPageResults %}
            <li class=\"article__overview--list-item\">
                {% set articlenode = get_node_translation_for(article) %}
                <h4><a href=\"{{ articlenode.url }}\">{{ article.title }}</a></h4>
                {{ article.summary }}
                <time>{{ article.date | date(\"d/m/Y\")}}</time>
            </li>
            {% set count = count + 1 %}
        {% endfor %}
        </ul>
        {% if pagerfanta.haveToPaginate() %}
            {{ pagerfanta(pagerfanta) }}
        {% endif %}
    {% endif %}
{% endblock %}
", "@KunstmaanArticle/AbstractArticleOverviewPage/view.html.twig", "/Users/macbook/Documents/quoc/admin-blog-api-/vendor/kunstmaan/article-bundle/Resources/views/AbstractArticleOverviewPage/view.html.twig");
    }
}
