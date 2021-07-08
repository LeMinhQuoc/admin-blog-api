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

/* @KunstmaanSitemap/Sitemap/entry.xml.twig */
class __TwigTemplate_8d8a5764811d392ff4803f1f4eeaa068acda4ad3fcf7f9083a3fdb919a64ca8e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanSitemap/Sitemap/entry.xml.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanSitemap/Sitemap/entry.xml.twig"));

        // line 1
        if ( !$this->extensions['Kunstmaan\SitemapBundle\Twig\SitemapTwigExtension']->isHiddenFromSitemap((isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 1, $this->source); })()))) {
            // line 2
            echo "    <url>
        <loc>";
            // line 3
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("_slug", ["_locale" => (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 3, $this->source); })()), "url" => twig_get_attribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 3, $this->source); })()), "slug", [], "any", false, false, false, 3)]), "html", null, true);
            echo "</loc>
        <lastmod>";
            // line 4
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 4, $this->source); })()), "nodeTranslation", [], "any", false, false, false, 4), "getPublicNodeVersion", [], "method", false, false, false, 4), "getUpdated", [], "method", false, false, false, 4), "Y-m-d"), "html", null, true);
            echo "</lastmod>
        <priority>";
            // line 5
            echo twig_escape_filter($this->env, ("0." . (isset($context["priority"]) || array_key_exists("priority", $context) ? $context["priority"] : (function () { throw new RuntimeError('Variable "priority" does not exist.', 5, $this->source); })())), "html", null, true);
            echo "</priority>
    </url>
";
        }
        // line 8
        if ( !$this->extensions['Kunstmaan\SitemapBundle\Twig\SitemapTwigExtension']->isHiddenChildrenFromSitemap((isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 8, $this->source); })()))) {
            // line 9
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 9, $this->source); })()), "getChildren", [], "method", false, false, false, 9));
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
                // line 10
                echo "        ";
                $this->loadTemplate("@KunstmaanSitemap/Sitemap/entry.xml.twig", "@KunstmaanSitemap/Sitemap/entry.xml.twig", 10)->display(twig_array_merge($context, ["entry" => $context["subNode"], "priority" => ((isset($context["priority"]) || array_key_exists("priority", $context) ? $context["priority"] : (function () { throw new RuntimeError('Variable "priority" does not exist.', 10, $this->source); })()) - 1)]));
                // line 11
                echo "    ";
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
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanSitemap/Sitemap/entry.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 11,  82 => 10,  64 => 9,  62 => 8,  56 => 5,  52 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if not hide_from_sitemap(entry) %}
    <url>
        <loc>{{ url('_slug', { '_locale': locale, 'url': entry.slug }) }}</loc>
        <lastmod>{{ entry.nodeTranslation.getPublicNodeVersion().getUpdated()|date('Y-m-d') }}</lastmod>
        <priority>{{ \"0.\" ~ priority }}</priority>
    </url>
{% endif %}
{% if not hide_children_from_sitemap(entry) %}
    {% for subNode in entry.getChildren() %}
        {% include '@KunstmaanSitemap/Sitemap/entry.xml.twig' with {'entry' : subNode, 'priority' : (priority - 1) } %}
    {% endfor %}
{% endif %}
", "@KunstmaanSitemap/Sitemap/entry.xml.twig", "/Users/macbook/Documents/quoc/blog-admin/vendor/kunstmaan/sitemap-bundle/Resources/views/Sitemap/entry.xml.twig");
    }
}
