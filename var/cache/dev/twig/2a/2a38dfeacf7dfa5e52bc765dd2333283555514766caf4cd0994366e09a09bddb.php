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

/* Layout/layout.html.twig */
class __TwigTemplate_58e71cbf5557cb8fa524775eaacd060de1c20d98d129e89969311aad847a5533 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'extra_body_classes' => [$this, 'block_extra_body_classes'],
            'extra_body_attributes' => [$this, 'block_extra_body_attributes'],
            'header' => [$this, 'block_header'],
            'breadcrumbs' => [$this, 'block_breadcrumbs'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'cookieconsent' => [$this, 'block_cookieconsent'],
            'jsBundle' => [$this, 'block_jsBundle'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Layout/layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Layout/layout.html.twig"));

        // line 1
        ob_start();
        echo "<!DOCTYPE html>
";
        // line 2
        $context["htmlLocale"] = twig_slice($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 2), "locale", [], "any", true, true, false, 2)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 2), "locale", [], "any", false, false, false, 2), (isset($context["defaultlocale"]) || array_key_exists("defaultlocale", $context) ? $context["defaultlocale"] : (function () { throw new RuntimeError('Variable "defaultlocale" does not exist.', 2, $this->source); })()))) : ((isset($context["defaultlocale"]) || array_key_exists("defaultlocale", $context) ? $context["defaultlocale"] : (function () { throw new RuntimeError('Variable "defaultlocale" does not exist.', 2, $this->source); })()))), 0, 2);
        // line 3
        echo "<!--[if lte IE 9]> <html class=\"no-js lt-ie9\" lang=\"";
        echo twig_escape_filter($this->env, (isset($context["htmlLocale"]) || array_key_exists("htmlLocale", $context) ? $context["htmlLocale"] : (function () { throw new RuntimeError('Variable "htmlLocale" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "\"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["htmlLocale"]) || array_key_exists("htmlLocale", $context) ? $context["htmlLocale"] : (function () { throw new RuntimeError('Variable "htmlLocale" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>
    ";
        // line 11
        $context["node"] = null;
        // line 12
        echo "    ";
        if (array_key_exists("nodetranslation", $context)) {
            // line 13
            echo "        ";
            $context["node"] = twig_get_attribute($this->env, $this->source, (isset($context["nodetranslation"]) || array_key_exists("nodetranslation", $context) ? $context["nodetranslation"] : (function () { throw new RuntimeError('Variable "nodetranslation" does not exist.', 13, $this->source); })()), "node", [], "any", false, false, false, 13);
            // line 14
            echo "    ";
        }
        // line 15
        echo "    ";
        $context["nodemenu"] = $this->extensions['Kunstmaan\NodeBundle\Twig\NodeTwigExtension']->getNodeMenu(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "request", [], "any", false, false, false, 15), "locale", [], "any", false, false, false, 15), (isset($context["node"]) || array_key_exists("node", $context) ? $context["node"] : (function () { throw new RuntimeError('Variable "node" does not exist.', 15, $this->source); })()));
        // line 16
        echo "    ";
        $this->displayBlock('title', $context, $blocks);
        // line 27
        echo "    </title>

    ";
        // line 29
        if (array_key_exists("page", $context)) {
            // line 30
            echo "        ";
            echo $this->extensions['Kunstmaan\SeoBundle\Twig\SeoTwigExtension']->renderSeoMetadataFor($this->env, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 30, $this->source); })()));
            echo "
    ";
        }
        // line 32
        echo "
    ";
        // line 34
        echo "    ";
        $this->loadTemplate("Layout/_favicons.html.twig", "Layout/layout.html.twig", 34)->display($context);
        // line 35
        echo "
    ";
        // line 37
        echo "    ";
        $this->loadTemplate("Layout/_webfonts.html.twig", "Layout/layout.html.twig", 37)->display($context);
        // line 38
        echo "
    ";
        // line 40
        echo "    ";
        $this->loadTemplate("Layout/_css.html.twig", "Layout/layout.html.twig", 40)->display($context);
        // line 41
        echo "</head>
";
        $___internal_0e2200f26ea5ef5978260a2a069949ff26d74f936fb57121b037c22d9a241e7d_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        echo twig_spaceless($___internal_0e2200f26ea5ef5978260a2a069949ff26d74f936fb57121b037c22d9a241e7d_);
        // line 43
        echo "
<body id=\"sidebar-toggle-container\" class=\"sidebar-toggle-container";
        // line 44
        $this->displayBlock('extra_body_classes', $context, $blocks);
        echo "\" ";
        $this->displayBlock('extra_body_attributes', $context, $blocks);
        echo ">
    ";
        // line 46
        echo "    ";
        $this->loadTemplate("Layout/_googletagmanager.html.twig", "Layout/layout.html.twig", 46)->display($context);
        // line 47
        echo "
    ";
        // line 49
        echo "    ";
        $this->loadTemplate("Layout/_outdatedbrowser.html.twig", "Layout/layout.html.twig", 49)->display($context);
        // line 50
        echo "

    ";
        // line 53
        echo "    ";
        $this->displayBlock('header', $context, $blocks);
        // line 56
        echo "
    ";
        // line 58
        echo "    ";
        $this->displayBlock('breadcrumbs', $context, $blocks);
        // line 61
        echo "
    ";
        // line 63
        echo "    <main>
        ";
        // line 64
        $this->displayBlock('content', $context, $blocks);
        // line 65
        echo "    </main>

    ";
        // line 68
        echo "    ";
        $this->displayBlock('footer', $context, $blocks);
        // line 71
        echo "

    ";
        // line 74
        echo "    ";
        $this->displayBlock('cookieconsent', $context, $blocks);
        // line 77
        echo "
    ";
        // line 79
        echo "    ";
        $this->displayBlock('jsBundle', $context, $blocks);
        // line 82
        echo "</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 16
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 17
        echo "        ";
        if ((array_key_exists("page", $context) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["nodemenu"]) || array_key_exists("nodemenu", $context) ? $context["nodemenu"] : (function () { throw new RuntimeError('Variable "nodemenu" does not exist.', 17, $this->source); })()), "getActiveForDepth", [0 => 2], "method", false, false, false, 17)))) {
            // line 18
            echo "            ";
            echo twig_escape_filter($this->env, (($this->extensions['Kunstmaan\SeoBundle\Twig\SeoTwigExtension']->getTitleFor((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 18, $this->source); })())) . " - ") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["websitetitle"]) || array_key_exists("websitetitle", $context) ? $context["websitetitle"] : (function () { throw new RuntimeError('Variable "websitetitle" does not exist.', 18, $this->source); })()))), "html", null, true);
            echo "
        ";
        } else {
            // line 20
            echo "            ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["websitetitle"]) || array_key_exists("websitetitle", $context) ? $context["websitetitle"] : (function () { throw new RuntimeError('Variable "websitetitle" does not exist.', 20, $this->source); })())), "html", null, true);
            echo "
            ";
            // line 21
            if (array_key_exists("page", $context)) {
                // line 22
                echo "                ";
                $context["seo"] = $this->extensions['Kunstmaan\SeoBundle\Twig\SeoTwigExtension']->getSeoFor((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 22, $this->source); })()));
                // line 23
                echo "                ";
                if ((array_key_exists("seo", $context) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["seo"]) || array_key_exists("seo", $context) ? $context["seo"] : (function () { throw new RuntimeError('Variable "seo" does not exist.', 23, $this->source); })()), "metaTitle", [], "any", false, false, false, 23)))) {
                    echo " - ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["seo"]) || array_key_exists("seo", $context) ? $context["seo"] : (function () { throw new RuntimeError('Variable "seo" does not exist.', 23, $this->source); })()), "metaTitle", [], "any", false, false, false, 23), "html", null, true);
                }
                // line 24
                echo "            ";
            }
            // line 25
            echo "        ";
        }
        // line 26
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 44
    public function block_extra_body_classes($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_body_classes"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_body_classes"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_extra_body_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_body_attributes"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_body_attributes"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 53
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 54
        echo "        ";
        $this->loadTemplate("Layout/_header.html.twig", "Layout/layout.html.twig", 54)->display($context);
        // line 55
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 58
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumbs"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumbs"));

        // line 59
        echo "        ";
        $this->loadTemplate("Layout/_breadcrumbs.html.twig", "Layout/layout.html.twig", 59)->display($context);
        // line 60
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 64
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 68
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 69
        echo "        ";
        $this->loadTemplate("Layout/_footer.html.twig", "Layout/layout.html.twig", 69)->display($context);
        // line 70
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 74
    public function block_cookieconsent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cookieconsent"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cookieconsent"));

        // line 75
        echo "        ";
        $this->loadTemplate("Layout/_cookieconsent.html.twig", "Layout/layout.html.twig", 75)->display($context);
        // line 76
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 79
    public function block_jsBundle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "jsBundle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "jsBundle"));

        // line 80
        echo "        ";
        $this->loadTemplate("Layout/_js_footer.html.twig", "Layout/layout.html.twig", 80)->display($context);
        // line 81
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Layout/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  406 => 81,  403 => 80,  393 => 79,  383 => 76,  380 => 75,  370 => 74,  360 => 70,  357 => 69,  347 => 68,  329 => 64,  319 => 60,  316 => 59,  306 => 58,  296 => 55,  293 => 54,  283 => 53,  248 => 44,  238 => 26,  235 => 25,  232 => 24,  226 => 23,  223 => 22,  221 => 21,  216 => 20,  210 => 18,  207 => 17,  197 => 16,  185 => 82,  182 => 79,  179 => 77,  176 => 74,  172 => 71,  169 => 68,  165 => 65,  163 => 64,  160 => 63,  157 => 61,  154 => 58,  151 => 56,  148 => 53,  144 => 50,  141 => 49,  138 => 47,  135 => 46,  129 => 44,  126 => 43,  124 => 1,  120 => 41,  117 => 40,  114 => 38,  111 => 37,  108 => 35,  105 => 34,  102 => 32,  96 => 30,  94 => 29,  90 => 27,  87 => 16,  84 => 15,  81 => 14,  78 => 13,  75 => 12,  73 => 11,  63 => 4,  58 => 3,  56 => 2,  52 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% apply spaceless %}<!DOCTYPE html>
{% set htmlLocale = app.request.locale|default(defaultlocale)|slice(0,2) %}
<!--[if lte IE 9]> <html class=\"no-js lt-ie9\" lang=\"{{ htmlLocale }}\"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang=\"{{ htmlLocale }}\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>
    {% set node = null %}
    {% if nodetranslation is defined %}
        {% set node = nodetranslation.node %}
    {% endif %}
    {% set nodemenu = get_node_menu(app.request.locale, node) %}
    {% block title %}
        {% if page is defined and nodemenu.getActiveForDepth(2) is not null %}
            {{ get_title_for(page) ~ ' - ' ~ websitetitle|trans }}
        {% else %}
            {{ websitetitle | trans }}
            {% if page is defined %}
                {% set seo = get_seo_for(page) %}
                {% if seo is defined and seo.metaTitle is not empty %} - {{ seo.metaTitle }}{% endif %}
            {% endif %}
        {% endif %}
    {% endblock %}
    </title>

    {% if page is defined %}
        {{ render_seo_metadata_for(page) }}
    {% endif %}

    {# Favicons #}
    {% include 'Layout/_favicons.html.twig' %}

    {# Webfonts #}
    {% include 'Layout/_webfonts.html.twig' %}

    {# CSS #}
    {% include 'Layout/_css.html.twig' %}
</head>
{% endapply %}

<body id=\"sidebar-toggle-container\" class=\"sidebar-toggle-container{% block extra_body_classes %}{% endblock %}\" {% block extra_body_attributes %}{% endblock %}>
    {# Google Tagmanager #}
    {% include 'Layout/_googletagmanager.html.twig' %}

    {# Outdated browser message #}
    {% include 'Layout/_outdatedbrowser.html.twig' %}


    {# Header #}
    {% block header %}
        {% include 'Layout/_header.html.twig' %}
    {% endblock %}

    {# Breadcrumbs #}
    {% block breadcrumbs %}
        {% include 'Layout/_breadcrumbs.html.twig' %}
    {% endblock %}

    {# Content #}
    <main>
        {% block content %}{% endblock %}
    </main>

    {# Footer #}
    {% block footer %}
        {% include 'Layout/_footer.html.twig' %}
    {% endblock %}


    {# Cookieconsent #}
    {% block cookieconsent %}
        {% include 'Layout/_cookieconsent.html.twig' %}
    {% endblock %}

    {# JS Footer #}
    {% block jsBundle %}
        {% include 'Layout/_js_footer.html.twig' %}
    {% endblock %}
</body>
</html>
", "Layout/layout.html.twig", "/Users/macbook/Documents/quoc/blog-admin/templates/Layout/layout.html.twig");
    }
}
