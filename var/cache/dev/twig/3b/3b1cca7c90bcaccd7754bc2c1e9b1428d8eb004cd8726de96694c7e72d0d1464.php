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

/* @KunstmaanNodeSearch/PagePart/view.html.twig */
class __TwigTemplate_02acdd2a25735ff2d492b683b4e22bee215bf8788e195ba48207d3b87a525e92 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanNodeSearch/PagePart/view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanNodeSearch/PagePart/view.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pageparts"]) || array_key_exists("pageparts", $context) ? $context["pageparts"] : (function () { throw new RuntimeError('Variable "pageparts" does not exist.', 1, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["box"]) {
            // line 2
            echo "    ";
            $context["resource"] = $context["box"];
            // line 3
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, $context["box"], "searchView", [], "any", true, true, false, 3)) {
                // line 4
                echo "        ";
                $this->loadTemplate(twig_get_attribute($this->env, $this->source, $context["box"], "getSearchView", [], "method", false, false, false, 4), "@KunstmaanNodeSearch/PagePart/view.html.twig", 4)->display($context);
                // line 5
                echo "    ";
            } else {
                // line 6
                echo "        ";
                $this->loadTemplate(twig_get_attribute($this->env, $this->source, $context["box"], "getView", [0 => (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 6, $this->source); })())], "method", false, false, false, 6), "@KunstmaanNodeSearch/PagePart/view.html.twig", 6)->display($context);
                // line 7
                echo "    ";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['box'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanNodeSearch/PagePart/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 7,  72 => 6,  69 => 5,  66 => 4,  63 => 3,  60 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for box in pageparts %}
    {% set resource = box %}
    {% if box.searchView is defined %}
        {% include box.getSearchView() %}
    {% else %}
        {% include box.getView(page) %}
    {% endif %}
{% endfor %}
", "@KunstmaanNodeSearch/PagePart/view.html.twig", "/Users/macbook/Documents/quoc/blog-admin/vendor/kunstmaan/node-search-bundle/Resources/views/PagePart/view.html.twig");
    }
}
