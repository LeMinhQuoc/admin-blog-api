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

/* @KunstmaanDashboard/GoogleAnalytics/tabs.html.twig */
class __TwigTemplate_64defa7d0d2c62a0465724f97b296232b2c1897a4880c8c283f73770198929aa extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanDashboard/GoogleAnalytics/tabs.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanDashboard/GoogleAnalytics/tabs.html.twig"));

        // line 1
        echo "<ul class=\"dashboard-tabs nav nav-tabs js-auto-collapse-tabs\">
    ";
        // line 2
        $context["i"] = 1;
        // line 3
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["overviews"]) || array_key_exists("overviews", $context) ? $context["overviews"] : (function () { throw new RuntimeError('Variable "overviews" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["overview"]) {
            // line 4
            echo "        <li class=\"dashboard-tabs__item\" id=\"tab";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["overview"], "id", [], "any", false, false, false, 4), "html", null, true);
            echo "\">
            <a href=\"#\" class=\"dashboard-tabs__controller\" data-id=\"";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["overview"], "id", [], "any", false, false, false, 5), "html", null, true);
            echo "\" data-path=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanDashboardBundle_analytics_overview_ajax", ["id" => twig_get_attribute($this->env, $this->source, $context["overview"], "id", [], "any", false, false, false, 5)]), "html", null, true);
            echo "\" data-toggle=\"tab\">
                ";
            // line 6
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["overview"], "title", [], "any", false, false, false, 6)), "html", null, true);
            echo "
            </a>
        </li>
        ";
            // line 9
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 9, $this->source); })()) + 1);
            // line 10
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['overview'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    <li class=\"tab__more dropdown\">
        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
            ";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.button.dropdown.more"), "html", null, true);
        echo " <span class=\"caret\"></span>
        </a>
        <ul class=\"dropdown-menu dropdown-menu-right\" id=\"collapsed\"></ul>
    </li>
</ul>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanDashboard/GoogleAnalytics/tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 13,  78 => 11,  72 => 10,  70 => 9,  64 => 6,  58 => 5,  53 => 4,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ul class=\"dashboard-tabs nav nav-tabs js-auto-collapse-tabs\">
    {% set i = 1 %}
    {% for overview in overviews %}
        <li class=\"dashboard-tabs__item\" id=\"tab{{ overview.id }}\">
            <a href=\"#\" class=\"dashboard-tabs__controller\" data-id=\"{{ overview.id }}\" data-path=\"{{ path('KunstmaanDashboardBundle_analytics_overview_ajax', {'id':overview.id}) }}\" data-toggle=\"tab\">
                {{ overview.title | trans }}
            </a>
        </li>
        {% set i = i + 1 %}
    {% endfor %}
    <li class=\"tab__more dropdown\">
        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
            {{ 'form.button.dropdown.more' | trans }} <span class=\"caret\"></span>
        </a>
        <ul class=\"dropdown-menu dropdown-menu-right\" id=\"collapsed\"></ul>
    </li>
</ul>
", "@KunstmaanDashboard/GoogleAnalytics/tabs.html.twig", "/Users/macbook/Documents/quoc/admin-blog-api-/vendor/kunstmaan/dashboard-bundle/Resources/views/GoogleAnalytics/tabs.html.twig");
    }
}
