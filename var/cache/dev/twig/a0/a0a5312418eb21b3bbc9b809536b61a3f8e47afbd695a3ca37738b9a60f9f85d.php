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

/* Layout/_outdatedbrowser.html.twig */
class __TwigTemplate_502caded9f39da17a7fe5411e73e905df4652b386b1c899d1b622f463e4e2b83 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Layout/_outdatedbrowser.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Layout/_outdatedbrowser.html.twig"));

        // line 1
        echo "<!--[if lte IE 9]>
    <div class=\"outdated\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h1>
                        ";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("warning.outdated.title"), "html", null, true);
        echo "
                    </h1>
                    <h3>
                        ";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("warning.outdated.subtitle"), "html", null, true);
        echo "
                    </h3>
                    <p>
                        ";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("warning.outdated.description"), "html", null, true);
        echo "
                    </p>
                    <a href=\"https://browsehappy.com/?locale=";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["htmlLocale"]) || array_key_exists("htmlLocale", $context) ? $context["htmlLocale"] : (function () { throw new RuntimeError('Variable "htmlLocale" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "\" target=\"_blank\" rel=\"noopener\" class=\"btn btn--primary\">
                        ";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("warning.outdated.upgrade_browser"), "html", null, true);
        echo "
                    </a>
                </div>
            </div>
        </div>
    </div>
<![endif]-->
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Layout/_outdatedbrowser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 16,  68 => 15,  63 => 13,  57 => 10,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--[if lte IE 9]>
    <div class=\"outdated\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h1>
                        {{ 'warning.outdated.title'|trans }}
                    </h1>
                    <h3>
                        {{ 'warning.outdated.subtitle'|trans }}
                    </h3>
                    <p>
                        {{ 'warning.outdated.description'|trans }}
                    </p>
                    <a href=\"https://browsehappy.com/?locale={{ htmlLocale }}\" target=\"_blank\" rel=\"noopener\" class=\"btn btn--primary\">
                        {{ 'warning.outdated.upgrade_browser'|trans }}
                    </a>
                </div>
            </div>
        </div>
    </div>
<![endif]-->
", "Layout/_outdatedbrowser.html.twig", "/Users/macbook/Documents/quoc/blog-admin/templates/Layout/_outdatedbrowser.html.twig");
    }
}
