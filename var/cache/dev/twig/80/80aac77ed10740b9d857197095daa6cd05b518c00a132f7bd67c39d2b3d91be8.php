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

/* @KunstmaanAdmin/Default/_css.html.twig */
class __TwigTemplate_a7d9a1c69323f3ee82fc3fe39a7aa5fa9670d6a8399cc4b911d1ab20f393e196 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdmin/Default/_css.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdmin/Default/_css.html.twig"));

        // line 1
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/kunstmaanadmin/default-theme/ckeditor/plugins/notification/css/notification.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/kunstmaanadmin/default-theme/ckeditor/plugins/wordcount/css/wordcount.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/kunstmaanadmin/css/style.css"), "html", null, true);
        echo "\">

<!-- Customizable Brand Color -->
";
        // line 6
        if (( !array_key_exists("titlecolor", $context) || twig_test_empty((isset($context["titlecolor"]) || array_key_exists("titlecolor", $context) ? $context["titlecolor"] : (function () { throw new RuntimeError('Variable "titlecolor" does not exist.', 6, $this->source); })())))) {
            // line 7
            echo "    ";
            $context["titlecolor"] = "#fff";
        }
        // line 9
        if (( !array_key_exists("titlebgcolor", $context) || twig_test_empty((isset($context["titlebgcolor"]) || array_key_exists("titlebgcolor", $context) ? $context["titlebgcolor"] : (function () { throw new RuntimeError('Variable "titlebgcolor" does not exist.', 9, $this->source); })())))) {
            // line 10
            echo "    ";
            $context["titlebgcolor"] = "#2997ce";
        }
        // line 12
        echo "
<style type=\"text/css\">
    .app__header__brand, .app__header__brand:hover, .app__header__brand:focus, .navbar-inverse .app__header__brand, .navbar-inverse .app__header__brand:hover, .navbar-inverse .app__header__brand:focus, .btn-brand, .btn-brand:hover, .btn-brand:focus {
        color: ";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["titlecolor"]) || array_key_exists("titlecolor", $context) ? $context["titlecolor"] : (function () { throw new RuntimeError('Variable "titlecolor" does not exist.', 15, $this->source); })()), "html", null, true);
        echo ";
        background: ";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["titlebgcolor"]) || array_key_exists("titlebgcolor", $context) ? $context["titlebgcolor"] : (function () { throw new RuntimeError('Variable "titlebgcolor" does not exist.', 16, $this->source); })()), "html", null, true);
        echo ";
    }
    header .navbar .app__header__brand:after {
        border-left-color: ";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["titlebgcolor"]) || array_key_exists("titlebgcolor", $context) ? $context["titlebgcolor"] : (function () { throw new RuntimeError('Variable "titlebgcolor" does not exist.', 19, $this->source); })()), "html", null, true);
        echo ";
    }
    .login {
        background: ";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["titlebgcolor"]) || array_key_exists("titlebgcolor", $context) ? $context["titlebgcolor"] : (function () { throw new RuntimeError('Variable "titlebgcolor" does not exist.', 22, $this->source); })()), "html", null, true);
        echo ";
    }
    .login__title, .login__form__forgot-pw, .login__form__forgot-pw:hover {
        color: ";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["titlecolor"]) || array_key_exists("titlecolor", $context) ? $context["titlecolor"] : (function () { throw new RuntimeError('Variable "titlecolor" does not exist.', 25, $this->source); })()), "html", null, true);
        echo ";
    }
</style>

";
        // line 29
        $this->loadTemplate("@KunstmaanAdmin/Default/_css_extra.html.twig", "@KunstmaanAdmin/Default/_css.html.twig", 29)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanAdmin/Default/_css.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 29,  97 => 25,  91 => 22,  85 => 19,  79 => 16,  75 => 15,  70 => 12,  66 => 10,  64 => 9,  60 => 7,  58 => 6,  52 => 3,  48 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<link rel=\"stylesheet\" href=\"{{ asset('bundles/kunstmaanadmin/default-theme/ckeditor/plugins/notification/css/notification.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('bundles/kunstmaanadmin/default-theme/ckeditor/plugins/wordcount/css/wordcount.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('bundles/kunstmaanadmin/css/style.css') }}\">

<!-- Customizable Brand Color -->
{% if titlecolor is not defined or titlecolor is empty %}
    {% set titlecolor = \"#fff\" %}
{% endif %}
{% if titlebgcolor is not defined or titlebgcolor is empty %}
    {% set titlebgcolor = \"#2997ce\" %}
{% endif %}

<style type=\"text/css\">
    .app__header__brand, .app__header__brand:hover, .app__header__brand:focus, .navbar-inverse .app__header__brand, .navbar-inverse .app__header__brand:hover, .navbar-inverse .app__header__brand:focus, .btn-brand, .btn-brand:hover, .btn-brand:focus {
        color: {{ titlecolor }};
        background: {{ titlebgcolor }};
    }
    header .navbar .app__header__brand:after {
        border-left-color: {{ titlebgcolor }};
    }
    .login {
        background: {{ titlebgcolor }};
    }
    .login__title, .login__form__forgot-pw, .login__form__forgot-pw:hover {
        color: {{ titlecolor }};
    }
</style>

{% include \"@KunstmaanAdmin/Default/_css_extra.html.twig\" %}
", "@KunstmaanAdmin/Default/_css.html.twig", "/Users/macbook/Documents/quoc/admin-blog-api-/vendor/kunstmaan/admin-bundle/Resources/views/Default/_css.html.twig");
    }
}
