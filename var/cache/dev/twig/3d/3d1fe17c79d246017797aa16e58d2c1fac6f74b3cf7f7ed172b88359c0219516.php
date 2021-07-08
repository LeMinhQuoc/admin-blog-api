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

/* Layout/_favicons.html.twig */
class __TwigTemplate_a665faf7bce399f658c769a49651000dae096fab5996af616631059492d4b0f0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Layout/_favicons.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Layout/_favicons.html.twig"));

        // line 1
        echo "<link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\">
<link rel=\"apple-touch-icon-precomposed\" sizes=\"152x152\" href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("apple-touch-icon-152x152-precomposed.png"), "html", null, true);
        echo "\">
<link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("apple-touch-icon-144x144-precomposed.png"), "html", null, true);
        echo "\">
<link rel=\"apple-touch-icon-precomposed\" sizes=\"120x120\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("apple-touch-icon-120x120-precomposed.png"), "html", null, true);
        echo "\">
<link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("apple-touch-icon-114x114-precomposed.png"), "html", null, true);
        echo "\">
<link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("apple-touch-icon-72x72-precomposed.png"), "html", null, true);
        echo "\">
<link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("apple-touch-icon-precomposed.png"), "html", null, true);
        echo "\">

<link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("apple-touch-icon-57x57.png"), "html", null, true);
        echo "\">
<link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("apple-touch-icon-60x60.png"), "html", null, true);
        echo "\">
<link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("apple-touch-icon-72x72.png"), "html", null, true);
        echo "\">
<link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("apple-touch-icon-76x76.png"), "html", null, true);
        echo "\">
<link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("apple-touch-icon-114x114.png"), "html", null, true);
        echo "\">
<link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("apple-touch-icon-120x120.png"), "html", null, true);
        echo "\">
<link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("apple-touch-icon-144x144.png"), "html", null, true);
        echo "\">
<link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("apple-touch-icon-152x152.png"), "html", null, true);
        echo "\">
<link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("apple-touch-icon-180x180.png"), "html", null, true);
        echo "\">
<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon-32x32.png"), "html", null, true);
        echo "\" sizes=\"32x32\">
<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("android-chrome-192x192.png"), "html", null, true);
        echo "\" sizes=\"192x192\">
<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon-96x96.png"), "html", null, true);
        echo "\" sizes=\"96x96\">
<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon-16x16.png"), "html", null, true);
        echo "\" sizes=\"16x16\">
<link rel=\"manifest\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("manifest.json"), "html", null, true);
        echo "\">
<link rel=\"mask-icon\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("safari-pinned-tab.svg"), "html", null, true);
        echo "\" color=\"#5bbad5\">
<meta name=\"msapplication-TileColor\" content=\"#da532c\">
<meta name=\"msapplication-TileImage\" content=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("mstile-144x144.png"), "html", null, true);
        echo "\">
<meta name=\"theme-color\" content=\"#ffffff\">
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Layout/_favicons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 25,  129 => 23,  125 => 22,  121 => 21,  117 => 20,  113 => 19,  109 => 18,  105 => 17,  101 => 16,  97 => 15,  93 => 14,  89 => 13,  85 => 12,  81 => 11,  77 => 10,  73 => 9,  68 => 7,  64 => 6,  60 => 5,  56 => 4,  52 => 3,  48 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<link rel=\"shortcut icon\" href=\"{{ asset('favicon.ico') }}\" type=\"image/x-icon\">
<link rel=\"apple-touch-icon-precomposed\" sizes=\"152x152\" href=\"{{ asset('apple-touch-icon-152x152-precomposed.png') }}\">
<link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"{{ asset('apple-touch-icon-144x144-precomposed.png') }}\">
<link rel=\"apple-touch-icon-precomposed\" sizes=\"120x120\" href=\"{{ asset('apple-touch-icon-120x120-precomposed.png') }}\">
<link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"{{ asset('apple-touch-icon-114x114-precomposed.png') }}\">
<link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"{{ asset('apple-touch-icon-72x72-precomposed.png') }}\">
<link rel=\"apple-touch-icon-precomposed\" href=\"{{ asset('apple-touch-icon-precomposed.png') }}\">

<link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"{{ asset('apple-touch-icon-57x57.png') }}\">
<link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"{{ asset('apple-touch-icon-60x60.png') }}\">
<link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"{{ asset('apple-touch-icon-72x72.png') }}\">
<link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"{{ asset('apple-touch-icon-76x76.png') }}\">
<link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"{{ asset('apple-touch-icon-114x114.png') }}\">
<link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"{{ asset('apple-touch-icon-120x120.png') }}\">
<link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"{{ asset('apple-touch-icon-144x144.png') }}\">
<link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"{{ asset('apple-touch-icon-152x152.png') }}\">
<link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"{{ asset('apple-touch-icon-180x180.png') }}\">
<link rel=\"icon\" type=\"image/png\" href=\"{{ asset('favicon-32x32.png') }}\" sizes=\"32x32\">
<link rel=\"icon\" type=\"image/png\" href=\"{{ asset('android-chrome-192x192.png') }}\" sizes=\"192x192\">
<link rel=\"icon\" type=\"image/png\" href=\"{{ asset('favicon-96x96.png') }}\" sizes=\"96x96\">
<link rel=\"icon\" type=\"image/png\" href=\"{{ asset('favicon-16x16.png') }}\" sizes=\"16x16\">
<link rel=\"manifest\" href=\"{{ asset('manifest.json') }}\">
<link rel=\"mask-icon\" href=\"{{ asset('safari-pinned-tab.svg') }}\" color=\"#5bbad5\">
<meta name=\"msapplication-TileColor\" content=\"#da532c\">
<meta name=\"msapplication-TileImage\" content=\"{{ asset('mstile-144x144.png') }}\">
<meta name=\"theme-color\" content=\"#ffffff\">
", "Layout/_favicons.html.twig", "/Users/macbook/Documents/quoc/blog-admin/templates/Layout/_favicons.html.twig");
    }
}
