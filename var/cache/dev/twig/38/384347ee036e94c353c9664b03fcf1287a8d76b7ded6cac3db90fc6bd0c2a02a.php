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

/* @KunstmaanDashboard/GoogleAnalytics/chart.html.twig */
class __TwigTemplate_6c3059b7445d6525bbfadab1381f837b50c0fe6b3d0e0a3a250ebb399fe13ddc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanDashboard/GoogleAnalytics/chart.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanDashboard/GoogleAnalytics/chart.html.twig"));

        // line 2
        echo "<div class=\"dashboard__content__item\">
    <div id=\"dashboard-chart--audience\" class=\"dashboard-chart dashboard-chart--full-width\"></div>
    <ul class=\"dashboard-chart-list\">
        <li class=\"dashboard-chart-list__item\">
            <i class=\"fa fa-users dash-icon--big dash-icon--circle dash-icon--circle--orange dashboard-chart-list__icon\"></i>
            <p class=\"dashboard-chart-list__data\">
                <span id=\"audience-data_visitors\" class=\"text--big dashboard-chart-list__data__number\">";
        // line 8
        echo "</span>
                ";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.ga.chart.users"), "html", null, true);
        echo "
            </p>
        </li>
        <li class=\"dashboard-chart-list__item\">
            <i class=\"fa fa-server dash-icon--big dash-icon--circle dash-icon--circle--purple dashboard-chart-list__icon\"></i>
            <p class=\"dashboard-chart-list__data\">
                <span id=\"audience-data_visits\" class=\"text--big dashboard-chart-list__data__number\">";
        // line 15
        echo "</span>
                ";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.ga.chart.sessions"), "html", null, true);
        echo "
            </p>
        </li>
        <li class=\"dashboard-chart-list__item\">
            <i class=\"fa fa-eye dash-icon--big dash-icon--circle dash-icon--circle--blue dashboard-chart-list__icon\"></i>
            <p class=\"dashboard-chart-list__data\">
                <span id=\"audience-data_pageviews\" class=\"text--big dashboard-chart-list__data__number\">";
        // line 22
        echo "</span>
                ";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.ga.chart.pageviews"), "html", null, true);
        echo "
            </p>
        </li>
        <li class=\"dashboard-chart-list__item\">
            <i class=\"fa fa-star dash-icon--big dash-icon--circle dash-icon--circle--red dashboard-chart-list__icon\"></i>
            <p class=\"dashboard-chart-list__data\">
                <span id=\"audience-data_new_users\" class=\"text--big dashboard-chart-list__data__number\">";
        // line 29
        echo "</span>
                ";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.ga.chart.pct_new_sessions"), "html", null, true);
        echo "
            </p>
        </li>
        <li class=\"dashboard-chart-list__item\">
            <i class=\"fa fa-files dash-icon--big dash-icon--circle dash-icon--circle--grey dashboard-chart-list__icon\"></i>
            <p class=\"dashboard-chart-list__data\">
                <span id=\"audience-data_pages_per_visit\" class=\"text--big dashboard-chart-list__data__number\">";
        // line 36
        echo "</span>
                ";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.ga.chart.avg_pages_p_session"), "html", null, true);
        echo "
            </p>
        </li>
        <li class=\"dashboard-chart-list__item\">
            <i class=\"fa fa-clock dash-icon--big dash-icon--circle dash-icon--circle--grey dashboard-chart-list__icon\"></i>
            <p class=\"dashboard-chart-list__data\">
                <span id=\"audience-data_avg_visit_duration\" class=\"text--big dashboard-chart-list__data__number\">";
        // line 43
        echo "</span>
                ";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.ga.chart.avg_session_duration"), "html", null, true);
        echo "
            </p>
        </li>
    </ul>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanDashboard/GoogleAnalytics/chart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 44,  111 => 43,  102 => 37,  99 => 36,  90 => 30,  87 => 29,  78 => 23,  75 => 22,  66 => 16,  63 => 15,  54 => 9,  51 => 8,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Twig vars are commented: they are loaded with AJAX, they are still here as a placeholder #}
<div class=\"dashboard__content__item\">
    <div id=\"dashboard-chart--audience\" class=\"dashboard-chart dashboard-chart--full-width\"></div>
    <ul class=\"dashboard-chart-list\">
        <li class=\"dashboard-chart-list__item\">
            <i class=\"fa fa-users dash-icon--big dash-icon--circle dash-icon--circle--orange dashboard-chart-list__icon\"></i>
            <p class=\"dashboard-chart-list__data\">
                <span id=\"audience-data_visitors\" class=\"text--big dashboard-chart-list__data__number\">{# {{ overview.visitors }} #}</span>
                {{ 'dashboard.ga.chart.users' | trans }}
            </p>
        </li>
        <li class=\"dashboard-chart-list__item\">
            <i class=\"fa fa-server dash-icon--big dash-icon--circle dash-icon--circle--purple dashboard-chart-list__icon\"></i>
            <p class=\"dashboard-chart-list__data\">
                <span id=\"audience-data_visits\" class=\"text--big dashboard-chart-list__data__number\">{# {{ overview.visits }} #}</span>
                {{ 'dashboard.ga.chart.sessions' | trans }}
            </p>
        </li>
        <li class=\"dashboard-chart-list__item\">
            <i class=\"fa fa-eye dash-icon--big dash-icon--circle dash-icon--circle--blue dashboard-chart-list__icon\"></i>
            <p class=\"dashboard-chart-list__data\">
                <span id=\"audience-data_pageviews\" class=\"text--big dashboard-chart-list__data__number\">{# {{ overview.pageviews }} #}</span>
                {{ 'dashboard.ga.chart.pageviews' | trans }}
            </p>
        </li>
        <li class=\"dashboard-chart-list__item\">
            <i class=\"fa fa-star dash-icon--big dash-icon--circle dash-icon--circle--red dashboard-chart-list__icon\"></i>
            <p class=\"dashboard-chart-list__data\">
                <span id=\"audience-data_new_users\" class=\"text--big dashboard-chart-list__data__number\">{# {{ overview.newSessions }} #}</span>
                {{ 'dashboard.ga.chart.pct_new_sessions' | trans }}
            </p>
        </li>
        <li class=\"dashboard-chart-list__item\">
            <i class=\"fa fa-files dash-icon--big dash-icon--circle dash-icon--circle--grey dashboard-chart-list__icon\"></i>
            <p class=\"dashboard-chart-list__data\">
                <span id=\"audience-data_pages_per_visit\" class=\"text--big dashboard-chart-list__data__number\">{# {{ overview.pagesPerVisit }} #}</span>
                {{ 'dashboard.ga.chart.avg_pages_p_session' | trans }}
            </p>
        </li>
        <li class=\"dashboard-chart-list__item\">
            <i class=\"fa fa-clock dash-icon--big dash-icon--circle dash-icon--circle--grey dashboard-chart-list__icon\"></i>
            <p class=\"dashboard-chart-list__data\">
                <span id=\"audience-data_avg_visit_duration\" class=\"text--big dashboard-chart-list__data__number\">{# {{ overview.avgVisitDuration }} seconds #}</span>
                {{ 'dashboard.ga.chart.avg_session_duration' | trans }}
            </p>
        </li>
    </ul>
</div>
", "@KunstmaanDashboard/GoogleAnalytics/chart.html.twig", "/Users/macbook/Documents/quoc/admin-blog-api-/vendor/kunstmaan/dashboard-bundle/Resources/views/GoogleAnalytics/chart.html.twig");
    }
}
