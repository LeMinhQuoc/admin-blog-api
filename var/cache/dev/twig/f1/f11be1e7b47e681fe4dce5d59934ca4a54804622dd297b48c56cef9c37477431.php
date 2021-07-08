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

/* @KunstmaanPagePart/TextPagePart/view.html.twig */
class __TwigTemplate_cd07edcefb71bb98a2c9fd093d0215fba2c1c667293f7b80e7807202c7767e0e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanPagePart/TextPagePart/view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanPagePart/TextPagePart/view.html.twig"));

        // line 1
        if (array_key_exists("pagepartref", $context)) {
            // line 2
            echo "    <script>
        window.FileChosenCallback['";
            // line 3
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pagepartref"]) || array_key_exists("pagepartref", $context) ? $context["pagepartref"] : (function () { throw new RuntimeError('Variable "pagepartref" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3), "html", null, true);
            echo "'] = function(url, id) {
            window.CKEDITOR.tools.callFunction(2, url);
        }
    </script>
";
        }
        // line 8
        echo "<div class=\"text-pp\">
    ";
        // line 9
        echo twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 9, $this->source); })()), "content", [], "any", false, false, false, 9);
        echo "
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanPagePart/TextPagePart/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 9,  56 => 8,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if pagepartref is defined %}
    <script>
        window.FileChosenCallback['{{ pagepartref.id }}'] = function(url, id) {
            window.CKEDITOR.tools.callFunction(2, url);
        }
    </script>
{% endif %}
<div class=\"text-pp\">
    {{resource.content|raw}}
</div>
", "@KunstmaanPagePart/TextPagePart/view.html.twig", "/Users/macbook/Documents/quoc/blog-admin/vendor/kunstmaan/pagepart-bundle/Resources/views/TextPagePart/view.html.twig");
    }
}
