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

/* @KunstmaanDashboard/GoogleAnalytics/goals.html.twig */
class __TwigTemplate_506949946af6fa2e8094e758d5fa455db3ce3876426eb0c0e28dac72ce7ebc73 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanDashboard/GoogleAnalytics/goals.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanDashboard/GoogleAnalytics/goals.html.twig"));

        // line 2
        echo "
<ul id=\"goalOverview";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["overview"]) || array_key_exists("overview", $context) ? $context["overview"] : (function () { throw new RuntimeError('Variable "overview" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3), "html", null, true);
        echo "\" class=\"dashboard__content__item dashboard-goals-list\" style=\"display:none;\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["overview"]) || array_key_exists("overview", $context) ? $context["overview"] : (function () { throw new RuntimeError('Variable "overview" does not exist.', 4, $this->source); })()), "goals", [], "any", false, false, false, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["goal"]) {
            // line 5
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["goal"], "visits", [], "any", false, false, false, 5) > 0)) {
                // line 6
                echo "            <li class=\"dashboard-goals-list__item\" id=\"goal";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["goal"], "id", [], "any", false, false, false, 6), "html", null, true);
                echo "\">
                <span class=\"dashboard-goals-list__item__title\"></span>
                <span class=\"dashboard-goals-list__item__number\"></span>
                <div class=\"dashboard-goals-list__chart\" ></div>
            </li>
        ";
            }
            // line 12
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['goal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</ul>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanDashboard/GoogleAnalytics/goals.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  57 => 6,  54 => 5,  50 => 4,  46 => 3,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Twig vars are commented: they are loaded with AJAX, they are still here as a placeholder #}

<ul id=\"goalOverview{{overview.id}}\" class=\"dashboard__content__item dashboard-goals-list\" style=\"display:none;\">
    {% for goal in overview.goals %}
        {% if goal.visits > 0 %}
            <li class=\"dashboard-goals-list__item\" id=\"goal{{goal.id}}\">
                <span class=\"dashboard-goals-list__item__title\"></span>
                <span class=\"dashboard-goals-list__item__number\"></span>
                <div class=\"dashboard-goals-list__chart\" ></div>
            </li>
        {% endif %}
    {% endfor %}
</ul>
", "@KunstmaanDashboard/GoogleAnalytics/goals.html.twig", "/Users/macbook/Documents/quoc/blog-admin/vendor/kunstmaan/dashboard-bundle/Resources/views/GoogleAnalytics/goals.html.twig");
    }
}
