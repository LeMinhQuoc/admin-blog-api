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

/* @KunstmaanMediaPagePart/ImagePagePart/view.html.twig */
class __TwigTemplate_eef0867dcd3627ed0c9a35e0f6fb6238ec163fe11071b79331410812c46e9c1d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanMediaPagePart/ImagePagePart/view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanMediaPagePart/ImagePagePart/view.html.twig"));

        // line 1
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 1, $this->source); })()), "media", [], "any", false, false, false, 1))) {
            // line 2
            echo "    <div class=\"image-pp\">
        ";
            // line 3
            $context["imgUrl"] = "";
            // line 4
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "request", [], "any", false, false, false, 4)) {
                // line 5
                echo "            ";
                $context["imgUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 5, $this->source); })()), "media", [], "any", false, false, false, 5), "url", [], "any", false, false, false, 5)));
                // line 6
                echo "        ";
            }
            // line 7
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, ($context["resource"] ?? null), "link", [], "any", true, true, false, 7) && (twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 7, $this->source); })()), "link", [], "any", false, false, false, 7) != ""))) {
                // line 8
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Kunstmaan\NodeBundle\Twig\UrlReplaceTwigExtension']->replaceUrl(twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 8, $this->source); })()), "link", [], "any", false, false, false, 8)), "html", null, true);
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 8, $this->source); })()), "openinnewwindow", [], "any", false, false, false, 8)) {
                    echo "target=\"_blank\"";
                }
                echo "><img src=\"";
                echo twig_escape_filter($this->env, (isset($context["imgUrl"]) || array_key_exists("imgUrl", $context) ? $context["imgUrl"] : (function () { throw new RuntimeError('Variable "imgUrl" does not exist.', 8, $this->source); })()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 8, $this->source); })()), "alttext", [], "any", false, false, false, 8), "html", null, true);
                echo "\" /></a>
        ";
            } else {
                // line 10
                echo "            <img src=\"";
                echo twig_escape_filter($this->env, (isset($context["imgUrl"]) || array_key_exists("imgUrl", $context) ? $context["imgUrl"] : (function () { throw new RuntimeError('Variable "imgUrl" does not exist.', 10, $this->source); })()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 10, $this->source); })()), "alttext", [], "any", false, false, false, 10), "html", null, true);
                echo "\" />
        ";
            }
            // line 12
            echo "    </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanMediaPagePart/ImagePagePart/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 12,  76 => 10,  62 => 8,  59 => 7,  56 => 6,  53 => 5,  50 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if resource.media is not empty %}
    <div class=\"image-pp\">
        {% set imgUrl = '' %}
        {% if app.request %}
            {% set imgUrl = absolute_url(asset(resource.media.url)) %}
        {% endif %}
        {% if resource.link is defined and resource.link != \"\" %}
            <a href=\"{{ resource.link | replace_url}}\" {% if resource.openinnewwindow %}target=\"_blank\"{% endif %}><img src=\"{{ imgUrl }}\" alt=\"{{ resource.alttext }}\" /></a>
        {% else %}
            <img src=\"{{ imgUrl }}\" alt=\"{{ resource.alttext }}\" />
        {% endif %}
    </div>
{% endif %}
", "@KunstmaanMediaPagePart/ImagePagePart/view.html.twig", "/Users/macbook/Documents/quoc/blog-admin/vendor/kunstmaan/media-pagepart-bundle/Resources/views/ImagePagePart/view.html.twig");
    }
}
