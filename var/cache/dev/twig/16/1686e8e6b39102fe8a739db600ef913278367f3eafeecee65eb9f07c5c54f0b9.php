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

/* @KunstmaanDashboard/GoogleAnalytics/connect.html.twig */
class __TwigTemplate_9deb5626bcb50dd533e04684f54b643744140be15b471e01fb81fbf940c0fcf3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanDashboard/GoogleAnalytics/connect.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanDashboard/GoogleAnalytics/connect.html.twig"));

        // line 1
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
            // line 2
            echo "<h2>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.ga.setup.title"), "html", null, true);
            echo "</h2>
<p>
    ";
            // line 4
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.ga.setup.content"), "html", null, true);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.ga.setup.docs_url"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.ga.setup.docs"), "html", null, true);
            echo "</a>.
</p>
<p>
    ";
            // line 7
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.ga.setup.redirect"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["redirect_uri"]) || array_key_exists("redirect_uri", $context) ? $context["redirect_uri"] : (function () { throw new RuntimeError('Variable "redirect_uri" does not exist.', 7, $this->source); })()), "html", null, true);
            echo "
</p>
";
            // line 9
            if (array_key_exists("authUrl", $context)) {
                // line 10
                echo "    <h3>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.ga.setup.connect"), "html", null, true);
                echo "</h3>
    <a class='btn btn-primary' href='";
                // line 11
                echo twig_escape_filter($this->env, (isset($context["authUrl"]) || array_key_exists("authUrl", $context) ? $context["authUrl"] : (function () { throw new RuntimeError('Variable "authUrl" does not exist.', 11, $this->source); })()), "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.ga.setup.confirm"), "html", null, true);
                echo "</a>
";
            } else {
                // line 13
                echo "    <p>
        ";
                // line 14
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.ga.setup.refresh"), "html", null, true);
                echo "
    </p>
";
            }
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanDashboard/GoogleAnalytics/connect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 14,  82 => 13,  75 => 11,  70 => 10,  68 => 9,  61 => 7,  51 => 4,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if is_granted('ROLE_SUPER_ADMIN') %}
<h2>{{ 'dashboard.ga.setup.title' | trans }}</h2>
<p>
    {{ 'dashboard.ga.setup.content' | trans }} <a href=\"{{ 'dashboard.ga.setup.docs_url' | trans }}\">{{ 'dashboard.ga.setup.docs' | trans }}</a>.
</p>
<p>
    {{ 'dashboard.ga.setup.redirect' | trans }} {{ redirect_uri }}
</p>
{% if authUrl is defined %}
    <h3>{{ 'dashboard.ga.setup.connect' | trans }}</h3>
    <a class='btn btn-primary' href='{{ authUrl }}'>{{ 'dashboard.ga.setup.confirm' | trans }}</a>
{% else %}
    <p>
        {{ 'dashboard.ga.setup.refresh' | trans }}
    </p>
{% endif %}
{% endif %}
", "@KunstmaanDashboard/GoogleAnalytics/connect.html.twig", "/Users/macbook/Documents/quoc/admin-blog-api-/vendor/kunstmaan/dashboard-bundle/Resources/views/GoogleAnalytics/connect.html.twig");
    }
}
