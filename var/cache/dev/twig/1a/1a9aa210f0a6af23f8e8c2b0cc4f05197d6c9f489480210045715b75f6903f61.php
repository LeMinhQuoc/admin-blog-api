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

/* @KunstmaanSitemap/Sitemap/view.xml.twig */
class __TwigTemplate_7d0d979ae7c7d08092602d99d4dfa4658733d66e5a554ae52125d6a7e85952d5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanSitemap/Sitemap/view.xml.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanSitemap/Sitemap/view.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">
    ";
        // line 3
        if (array_key_exists("nodemenu", $context)) {
            // line 4
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["nodemenu"]) || array_key_exists("nodemenu", $context) ? $context["nodemenu"] : (function () { throw new RuntimeError('Variable "nodemenu" does not exist.', 4, $this->source); })()), "getTopNodes", [], "method", false, false, false, 4));
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
            foreach ($context['_seq'] as $context["_key"] => $context["topNode"]) {
                // line 5
                echo "            ";
                if ( !$this->extensions['Kunstmaan\SitemapBundle\Twig\SitemapTwigExtension']->isHiddenFromSitemap($context["topNode"])) {
                    // line 6
                    echo "                <url>
                    <loc>";
                    // line 7
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("_slug", ["_locale" => (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 7, $this->source); })()), "url" => twig_get_attribute($this->env, $this->source, $context["topNode"], "slug", [], "any", false, false, false, 7)]), "html", null, true);
                    echo "</loc>
                    <lastmod>";
                    // line 8
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["topNode"], "nodeTranslation", [], "any", false, false, false, 8), "getPublicNodeVersion", [], "method", false, false, false, 8), "getUpdated", [], "method", false, false, false, 8), "Y-m-d"), "html", null, true);
                    echo "</lastmod>
                    <priority>";
                    // line 9
                    echo "0.9";
                    echo "</priority>
                </url>
            ";
                }
                // line 12
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["topNode"], "getChildren", [], "method", false, false, false, 12));
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
                foreach ($context['_seq'] as $context["_key"] => $context["node"]) {
                    // line 13
                    echo "                ";
                    $this->loadTemplate("@KunstmaanSitemap/Sitemap/entry.xml.twig", "@KunstmaanSitemap/Sitemap/view.xml.twig", 13)->display(twig_array_merge($context, ["entry" => $context["node"], "priority" => 9]));
                    // line 14
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['node'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 15
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topNode'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "    ";
        }
        // line 17
        echo "    ";
        if ((array_key_exists("extraItems", $context) &&  !twig_test_empty((isset($context["extraItems"]) || array_key_exists("extraItems", $context) ? $context["extraItems"] : (function () { throw new RuntimeError('Variable "extraItems" does not exist.', 17, $this->source); })())))) {
            // line 18
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["extraItems"]) || array_key_exists("extraItems", $context) ? $context["extraItems"] : (function () { throw new RuntimeError('Variable "extraItems" does not exist.', 18, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 19
                echo "            <url>
                <loc>";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 20), "html", null, true);
                echo "</loc>
                <lastmod>";
                // line 21
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "lastModified", [], "any", false, false, false, 21), "Y-m-d"), "html", null, true);
                echo "</lastmod>
                <priority>";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "priority", [], "any", false, false, false, 22), "html", null, true);
                echo "</priority>
            </url>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "    ";
        }
        // line 26
        echo "</urlset>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanSitemap/Sitemap/view.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 26,  167 => 25,  158 => 22,  154 => 21,  150 => 20,  147 => 19,  142 => 18,  139 => 17,  136 => 16,  122 => 15,  108 => 14,  105 => 13,  87 => 12,  81 => 9,  77 => 8,  73 => 7,  70 => 6,  67 => 5,  49 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">
    {% if nodemenu is defined %}
        {% for topNode in nodemenu.getTopNodes() %}
            {% if not hide_from_sitemap(topNode) %}
                <url>
                    <loc>{{ url('_slug', { '_locale': locale, 'url': topNode.slug }) }}</loc>
                    <lastmod>{{ topNode.nodeTranslation.getPublicNodeVersion().getUpdated()|date('Y-m-d') }}</lastmod>
                    <priority>{{ \"0.9\" }}</priority>
                </url>
            {% endif %}
            {% for node in topNode.getChildren() %}
                {% include '@KunstmaanSitemap/Sitemap/entry.xml.twig' with {'entry' : node, 'priority' : 9 } %}
            {% endfor %}
        {% endfor %}
    {% endif %}
    {% if extraItems is defined and extraItems is not empty %}
        {% for item in extraItems %}
            <url>
                <loc>{{ item.url }}</loc>
                <lastmod>{{ item.lastModified|date('Y-m-d') }}</lastmod>
                <priority>{{ item.priority }}</priority>
            </url>
        {% endfor %}
    {% endif %}
</urlset>
", "@KunstmaanSitemap/Sitemap/view.xml.twig", "/Users/macbook/Documents/quoc/admin-blog-api-/vendor/kunstmaan/sitemap-bundle/Resources/views/Sitemap/view.xml.twig");
    }
}
