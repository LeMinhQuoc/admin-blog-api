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

/* Error/layout.html.twig */
class __TwigTemplate_f4176c170c58869d64ec46897b8a5801d4b283b421abbca71409d528caa35e62 extends \Twig\Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Error/layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Error/layout.html.twig"));

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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["websitetitle"]) || array_key_exists("websitetitle", $context) ? $context["websitetitle"] : (function () { throw new RuntimeError('Variable "websitetitle" does not exist.', 11, $this->source); })())), "html", null, true);
        $this->displayBlock('title', $context, $blocks);
        // line 12
        echo "    </title>

    ";
        // line 15
        echo "    ";
        $this->loadTemplate("Layout/_favicons.html.twig", "Error/layout.html.twig", 15)->display($context);
        // line 16
        echo "
    ";
        // line 18
        echo "    ";
        $this->loadTemplate("Layout/_webfonts.html.twig", "Error/layout.html.twig", 18)->display($context);
        // line 19
        echo "
    ";
        // line 21
        echo "    ";
        $this->loadTemplate("Layout/_css.html.twig", "Error/layout.html.twig", 21)->display($context);
        // line 22
        echo "</head>

<body class=\"";
        // line 24
        $this->displayBlock('extra_body_classes', $context, $blocks);
        echo "\" ";
        $this->displayBlock('extra_body_attributes', $context, $blocks);
        echo ">

    ";
        // line 27
        echo "    ";
        $this->loadTemplate("Layout/_googletagmanager.html.twig", "Error/layout.html.twig", 27)->display($context);
        // line 28
        echo "
    ";
        // line 30
        echo "    ";
        $this->loadTemplate("Layout/_outdatedbrowser.html.twig", "Error/layout.html.twig", 30)->display($context);
        // line 31
        echo "
    ";
        // line 33
        echo "    <main>
        ";
        // line 34
        $this->displayBlock('content', $context, $blocks);
        // line 35
        echo "    </main>

</body>
</html>
";
        $___internal_4469d7b59091833eaa28631c3cafd0536b484401339b4f50407310043bf86589_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        echo twig_spaceless($___internal_4469d7b59091833eaa28631c3cafd0536b484401339b4f50407310043bf86589_);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 24
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

    // line 34
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

    public function getTemplateName()
    {
        return "Error/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 34,  153 => 24,  135 => 11,  125 => 1,  118 => 35,  116 => 34,  113 => 33,  110 => 31,  107 => 30,  104 => 28,  101 => 27,  94 => 24,  90 => 22,  87 => 21,  84 => 19,  81 => 18,  78 => 16,  75 => 15,  71 => 12,  68 => 11,  58 => 4,  53 => 3,  51 => 2,  47 => 1,);
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
        {{ websitetitle | trans }}{% block title %}{% endblock %}
    </title>

    {# Favicons #}
    {% include 'Layout/_favicons.html.twig' %}

    {# Webfonts #}
    {% include 'Layout/_webfonts.html.twig' %}

    {# CSS #}
    {% include 'Layout/_css.html.twig' %}
</head>

<body class=\"{% block extra_body_classes %}{% endblock %}\" {% block extra_body_attributes %}{% endblock %}>

    {# Google Tagmanager #}
    {% include 'Layout/_googletagmanager.html.twig' %}

    {# Outdated browser message #}
    {% include 'Layout/_outdatedbrowser.html.twig' %}

    {# Content #}
    <main>
        {% block content %}{% endblock %}
    </main>

</body>
</html>
{% endapply %}
", "Error/layout.html.twig", "/Users/macbook/Documents/quoc/admin-blog-api-/templates/Error/layout.html.twig");
    }
}
