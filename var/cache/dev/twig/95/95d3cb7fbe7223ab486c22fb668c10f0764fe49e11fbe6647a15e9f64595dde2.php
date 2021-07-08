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

/* Layout/_googletagmanager.html.twig */
class __TwigTemplate_f40738acb2d8d2e7f78d43697fcceed2ddc7ec3daaa85faaf732cbd3279b5b63 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Layout/_googletagmanager.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Layout/_googletagmanager.html.twig"));

        // line 1
        if (array_key_exists("gtm_code", $context)) {
            // line 2
            echo "    <!-- Google Tag Manager -->
    <noscript>
        <iframe src=\"//www.googletagmanager.com/ns.html?id=";
            // line 4
            echo twig_escape_filter($this->env, (isset($context["gtm_code"]) || array_key_exists("gtm_code", $context) ? $context["gtm_code"] : (function () { throw new RuntimeError('Variable "gtm_code" does not exist.', 4, $this->source); })()), "html", null, true);
            echo "\" height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe>
    </noscript>
    <script>
    (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["gtm_code"]) || array_key_exists("gtm_code", $context) ? $context["gtm_code"] : (function () { throw new RuntimeError('Variable "gtm_code" does not exist.', 7, $this->source); })()), "html", null, true);
            echo "');
    </script>
    <!-- End Google Tag Manager -->
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Layout/_googletagmanager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 7,  49 => 4,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if gtm_code is defined %}
    <!-- Google Tag Manager -->
    <noscript>
        <iframe src=\"//www.googletagmanager.com/ns.html?id={{ gtm_code }}\" height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe>
    </noscript>
    <script>
    (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','{{ gtm_code }}');
    </script>
    <!-- End Google Tag Manager -->
{% endif %}
", "Layout/_googletagmanager.html.twig", "/Users/macbook/Documents/quoc/blog-admin/templates/Layout/_googletagmanager.html.twig");
    }
}
