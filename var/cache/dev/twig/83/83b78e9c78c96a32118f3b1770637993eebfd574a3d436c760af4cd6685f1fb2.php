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

/* @KunstmaanSeo/GoogleAnalyticsTwigExtension/init.html.twig */
class __TwigTemplate_0a1c58c6ef7bf42e128caa9d72d789c922334639e81a1ea7226e7904172f8835 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanSeo/GoogleAnalyticsTwigExtension/init.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanSeo/GoogleAnalyticsTwigExtension/init.html.twig"));

        // line 1
        echo "<script>

    jQuery(function() {
        ";
        // line 4
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "debug", [], "any", false, false, false, 4)) {
            // line 5
            echo "        googleAnalyticsApi.init(false);
        ";
        } else {
            // line 7
            echo "        if (typeof googleAnalyticsApi === 'undefined') {
            console.warn('Make sure the analytics.js file from the @KunstmaanSeoBundle is included.');
        } else {
            <!-- DEBUG MODE: not initializing Google Analytics. -->
            googleAnalyticsApi.init(true);
        }
        ";
        }
        // line 14
        echo "    });

    _gaq.push(['_setAccount', '";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["account_id"]) || array_key_exists("account_id", $context) ? $context["account_id"] : (function () { throw new RuntimeError('Variable "account_id" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "']);
    _gaq.push(['_trackPageview']);
    ";
        // line 18
        if (array_key_exists("domain", $context)) {
            echo "_gaq.push(['_setDomainName', '";
            echo twig_escape_filter($this->env, (isset($context["domain"]) || array_key_exists("domain", $context) ? $context["domain"] : (function () { throw new RuntimeError('Variable "domain" does not exist.', 18, $this->source); })()), "html", null, true);
            echo "']);";
        }
        // line 19
        echo "
</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanSeo/GoogleAnalyticsTwigExtension/init.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 19,  72 => 18,  67 => 16,  63 => 14,  54 => 7,  50 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script>

    jQuery(function() {
        {% if not app.debug %}
        googleAnalyticsApi.init(false);
        {% else %}
        if (typeof googleAnalyticsApi === 'undefined') {
            console.warn('Make sure the analytics.js file from the @KunstmaanSeoBundle is included.');
        } else {
            <!-- DEBUG MODE: not initializing Google Analytics. -->
            googleAnalyticsApi.init(true);
        }
        {% endif %}
    });

    _gaq.push(['_setAccount', '{{ account_id }}']);
    _gaq.push(['_trackPageview']);
    {% if domain is defined %}_gaq.push(['_setDomainName', '{{ domain }}']);{% endif %}

</script>
", "@KunstmaanSeo/GoogleAnalyticsTwigExtension/init.html.twig", "/Users/macbook/Documents/quoc/admin-blog-api-/vendor/kunstmaan/seo-bundle/Resources/views/GoogleAnalyticsTwigExtension/init.html.twig");
    }
}
