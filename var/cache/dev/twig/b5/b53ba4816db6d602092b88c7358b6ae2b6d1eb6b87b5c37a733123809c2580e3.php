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

/* @KunstmaanPagePart/LinkPagePart/view.html.twig */
class __TwigTemplate_78aba77fb50aa07f7f6ce33e8681dae16097cd83c80a93d3cafb2c679778152f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanPagePart/LinkPagePart/view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanPagePart/LinkPagePart/view.html.twig"));

        // line 1
        if (array_key_exists("pagepartref", $context)) {
            // line 2
            echo "    <script>
        \$(document).ready(function () {
            \$('input#form_pagepartadmin_main_";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pagepartref"]) || array_key_exists("pagepartref", $context) ? $context["pagepartref"] : (function () { throw new RuntimeError('Variable "pagepartref" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4), "html", null, true);
            echo "_url').on('click', function (ev) {
                ev.preventDefault();
                window.open(\"";
            // line 6
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanNodeBundle_selecturl");
            echo "\", \"_blank\", \"toolbar=0,width=580,height=500\");
            });
        });

        window.LinkChosenCallback['";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pagepartref"]) || array_key_exists("pagepartref", $context) ? $context["pagepartref"] : (function () { throw new RuntimeError('Variable "pagepartref" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10), "html", null, true);
            echo "'] = function (url) {
            \$('input#form_pagepartadmin_main_";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pagepartref"]) || array_key_exists("pagepartref", $context) ? $context["pagepartref"] : (function () { throw new RuntimeError('Variable "pagepartref" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11), "html", null, true);
            echo "_url').val(url);
        }
    </script>
";
        }
        // line 15
        echo "
<p class=\"link-pp\">
    <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Kunstmaan\NodeBundle\Twig\UrlReplaceTwigExtension']->replaceUrl(twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 17, $this->source); })()), "url", [], "any", false, false, false, 17)), "html", null, true);
        echo "\"";
        if (twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 17, $this->source); })()), "openinnewwindow", [], "any", false, false, false, 17)) {
            echo " target=\"_blank\"";
        }
        echo ">
        ";
        // line 18
        if ((twig_get_attribute($this->env, $this->source, ($context["resource"] ?? null), "text", [], "any", true, true, false, 18) && (twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 18, $this->source); })()), "text", [], "any", false, false, false, 18) != ""))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 18, $this->source); })()), "text", [], "any", false, false, false, 18), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->extensions['Kunstmaan\NodeBundle\Twig\UrlReplaceTwigExtension']->replaceUrl(twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 18, $this->source); })()), "url", [], "any", false, false, false, 18)), "html", null, true);
        }
        // line 19
        echo "    </a>
</p>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanPagePart/LinkPagePart/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 19,  84 => 18,  76 => 17,  72 => 15,  65 => 11,  61 => 10,  54 => 6,  49 => 4,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if pagepartref is defined %}
    <script>
        \$(document).ready(function () {
            \$('input#form_pagepartadmin_main_{{ pagepartref.id }}_url').on('click', function (ev) {
                ev.preventDefault();
                window.open(\"{{ path('KunstmaanNodeBundle_selecturl') }}\", \"_blank\", \"toolbar=0,width=580,height=500\");
            });
        });

        window.LinkChosenCallback['{{ pagepartref.id }}'] = function (url) {
            \$('input#form_pagepartadmin_main_{{ pagepartref.id }}_url').val(url);
        }
    </script>
{% endif %}

<p class=\"link-pp\">
    <a href=\"{{ resource.url | replace_url }}\"{% if resource.openinnewwindow %} target=\"_blank\"{% endif %}>
        {% if resource.text is defined and resource.text != \"\" %}{{ resource.text }}{% else %}{{ resource.url | replace_url }}{% endif %}
    </a>
</p>
", "@KunstmaanPagePart/LinkPagePart/view.html.twig", "/Users/macbook/Documents/quoc/blog-admin/vendor/kunstmaan/pagepart-bundle/Resources/views/LinkPagePart/view.html.twig");
    }
}
