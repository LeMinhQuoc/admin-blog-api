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

/* Layout/_breadcrumbs.html.twig */
class __TwigTemplate_899a62d9f7f707985f55489697f7afc405ce3d38470d7b2f7d0e9a9b8772ada5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Layout/_breadcrumbs.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Layout/_breadcrumbs.html.twig"));

        // line 1
        if ((array_key_exists("nodemenu", $context) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["nodemenu"]) || array_key_exists("nodemenu", $context) ? $context["nodemenu"] : (function () { throw new RuntimeError('Variable "nodemenu" does not exist.', 1, $this->source); })()), "breadCrumb", [], "any", false, false, false, 1)) > 1))) {
            // line 2
            echo "    <section class=\"container\">
        <nav class=\"breadcrumb\">
            ";
            // line 4
            $context["homepagePageNode"] = twig_get_attribute($this->env, $this->source, (isset($context["nodemenu"]) || array_key_exists("nodemenu", $context) ? $context["nodemenu"] : (function () { throw new RuntimeError('Variable "nodemenu" does not exist.', 4, $this->source); })()), "getNodeByInternalName", [0 => "homepage"], "method", false, false, false, 4);
            // line 5
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_slug", ["url" => twig_get_attribute($this->env, $this->source, (isset($context["homepagePageNode"]) || array_key_exists("homepagePageNode", $context) ? $context["homepagePageNode"] : (function () { throw new RuntimeError('Variable "homepagePageNode" does not exist.', 5, $this->source); })()), "slug", [], "any", false, false, false, 5)]), "html", null, true);
            echo "\" class=\"breadcrumb__item breadcrumb__item--home\">
                Home
            </a>
            <i class=\"icon icon--arrow-right breadcrumb__icon\"></i>

            ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["nodemenu"]) || array_key_exists("nodemenu", $context) ? $context["nodemenu"] : (function () { throw new RuntimeError('Variable "nodemenu" does not exist.', 10, $this->source); })()), "breadCrumb", [], "any", false, false, false, 10));
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
                // line 11
                echo "                ";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 11)) {
                    // line 12
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 12)) {
                        // line 13
                        echo "                        <span class=\"breadcrumb__item breadcrumb__item--current\">
                            ";
                        // line 14
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["node"], "title", [], "any", false, false, false, 14), "html", null, true);
                        echo "
                        </span>
                    ";
                    } else {
                        // line 17
                        echo "                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_slug", ["url" => twig_get_attribute($this->env, $this->source, $context["node"], "slug", [], "any", false, false, false, 17)]), "html", null, true);
                        echo "\" class=\"breadcrumb__item\">
                            ";
                        // line 18
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["node"], "title", [], "any", false, false, false, 18), "html", null, true);
                        echo "
                        </a>
                        <i class=\"icon icon--arrow-right breadcrumb__icon\"></i>
                    ";
                    }
                    // line 22
                    echo "                ";
                }
                // line 23
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
            // line 24
            echo "        </nav>
    </section>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Layout/_breadcrumbs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 24,  107 => 23,  104 => 22,  97 => 18,  92 => 17,  86 => 14,  83 => 13,  80 => 12,  77 => 11,  60 => 10,  51 => 5,  49 => 4,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if nodemenu is defined and nodemenu.breadCrumb|length > 1 %}
    <section class=\"container\">
        <nav class=\"breadcrumb\">
            {% set homepagePageNode = nodemenu.getNodeByInternalName('homepage') %}
            <a href=\"{{ path('_slug', { 'url': homepagePageNode.slug }) }}\" class=\"breadcrumb__item breadcrumb__item--home\">
                Home
            </a>
            <i class=\"icon icon--arrow-right breadcrumb__icon\"></i>

            {% for node in nodemenu.breadCrumb %}
                {% if not loop.first %}
                    {% if loop.last %}
                        <span class=\"breadcrumb__item breadcrumb__item--current\">
                            {{ node.title }}
                        </span>
                    {% else %}
                        <a href=\"{{ path('_slug', { 'url': node.slug }) }}\" class=\"breadcrumb__item\">
                            {{ node.title }}
                        </a>
                        <i class=\"icon icon--arrow-right breadcrumb__icon\"></i>
                    {% endif %}
                {% endif %}
            {% endfor %}
        </nav>
    </section>
{% endif %}
", "Layout/_breadcrumbs.html.twig", "/Users/macbook/Documents/quoc/admin-blog-api-/templates/Layout/_breadcrumbs.html.twig");
    }
}
