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

/* @KunstmaanSitemap/SitemapPage/entry.html.twig */
class __TwigTemplate_2079c6703b48ff00db4ad93a96ee44341b02f6d855ce73ef6a7c3a5de5878140 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanSitemap/SitemapPage/entry.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanSitemap/SitemapPage/entry.html.twig"));

        // line 1
        $context["hidden"] = $this->extensions['Kunstmaan\SitemapBundle\Twig\SitemapTwigExtension']->isHiddenFromSitemap((isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 1, $this->source); })()));
        // line 2
        if ( !(isset($context["hidden"]) || array_key_exists("hidden", $context) ? $context["hidden"] : (function () { throw new RuntimeError('Variable "hidden" does not exist.', 2, $this->source); })())) {
            // line 3
            echo "    <li>
        <a href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("_slug", ["url" => twig_get_attribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 4, $this->source); })()), "slug", [], "any", false, false, false, 4)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 4, $this->source); })()), "title", [], "any", false, false, false, 4), "html", null, true);
            echo "</a>
";
        }
        // line 6
        if ( !$this->extensions['Kunstmaan\SitemapBundle\Twig\SitemapTwigExtension']->isHiddenChildrenFromSitemap((isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 6, $this->source); })()))) {
            // line 7
            echo "    ";
            $context["children"] = twig_get_attribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 7, $this->source); })()), "getChildren", [], "method", false, false, false, 7);
            // line 8
            echo "    ";
            if ((twig_length_filter($this->env, (isset($context["children"]) || array_key_exists("children", $context) ? $context["children"] : (function () { throw new RuntimeError('Variable "children" does not exist.', 8, $this->source); })())) > 0)) {
                // line 9
                echo "        ";
                if ( !(isset($context["hidden"]) || array_key_exists("hidden", $context) ? $context["hidden"] : (function () { throw new RuntimeError('Variable "hidden" does not exist.', 9, $this->source); })())) {
                    echo "<ul>";
                }
                // line 10
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 10, $this->source); })()), "getChildren", [], "method", false, false, false, 10));
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
                foreach ($context['_seq'] as $context["_key"] => $context["subNode"]) {
                    // line 11
                    echo "                ";
                    $this->loadTemplate("@KunstmaanSitemap/SitemapPage/entry.html.twig", "@KunstmaanSitemap/SitemapPage/entry.html.twig", 11)->display(twig_array_merge($context, ["entry" => $context["subNode"]]));
                    // line 12
                    echo "            ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subNode'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 13
                echo "            ";
                if ( !(isset($context["hidden"]) || array_key_exists("hidden", $context) ? $context["hidden"] : (function () { throw new RuntimeError('Variable "hidden" does not exist.', 13, $this->source); })())) {
                    echo "</ul>";
                }
                // line 14
                echo "    ";
            }
        }
        // line 16
        if ( !(isset($context["hidden"]) || array_key_exists("hidden", $context) ? $context["hidden"] : (function () { throw new RuntimeError('Variable "hidden" does not exist.', 16, $this->source); })())) {
            // line 17
            echo "</li>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanSitemap/SitemapPage/entry.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 17,  114 => 16,  110 => 14,  105 => 13,  91 => 12,  88 => 11,  70 => 10,  65 => 9,  62 => 8,  59 => 7,  57 => 6,  50 => 4,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set hidden = hide_from_sitemap(entry) %}
{% if not hidden %}
    <li>
        <a href=\"{{ url('_slug', { 'url': entry.slug }) }}\">{{ entry.title }}</a>
{% endif %}
{% if not hide_children_from_sitemap(entry) %}
    {% set children = entry.getChildren() %}
    {% if children|length > 0 %}
        {% if not hidden %}<ul>{% endif %}
            {% for subNode in entry.getChildren() %}
                {% include '@KunstmaanSitemap/SitemapPage/entry.html.twig' with {'entry' : subNode} %}
            {% endfor %}
            {% if not hidden %}</ul>{% endif %}
    {% endif %}
{% endif %}
{% if not hidden %}
</li>
{% endif %}
", "@KunstmaanSitemap/SitemapPage/entry.html.twig", "/Users/macbook/Documents/quoc/admin-blog-api-/vendor/kunstmaan/sitemap-bundle/Resources/views/SitemapPage/entry.html.twig");
    }
}
