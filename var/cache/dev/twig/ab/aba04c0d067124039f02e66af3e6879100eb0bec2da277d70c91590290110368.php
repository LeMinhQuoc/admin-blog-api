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

/* @KunstmaanNode/Admin/online.html.twig */
class __TwigTemplate_20821c4c8a551400519c6b0a2cde5add13887bf468b71864b06ee332815ba91e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanNode/Admin/online.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanNode/Admin/online.html.twig"));

        // line 1
        $context["online"] = twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 1, $this->source); })()), "getValue", [0 => (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 1, $this->source); })()), 1 => (isset($context["columnName"]) || array_key_exists("columnName", $context) ? $context["columnName"] : (function () { throw new RuntimeError('Variable "columnName" does not exist.', 1, $this->source); })())], "method", false, false, false, 1);
        // line 2
        if (((isset($context["online"]) || array_key_exists("online", $context) ? $context["online"] : (function () { throw new RuntimeError('Variable "online" does not exist.', 2, $this->source); })()) == false)) {
            // line 3
            echo "    <i class=\"fa fa-square\"></i>
    <span class=\"text--muted\">
        ";
            // line 5
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_node.admin.list.offline"), "html", null, true);
            echo "
    </span>
";
        } elseif ((        // line 7
(isset($context["online"]) || array_key_exists("online", $context) ? $context["online"] : (function () { throw new RuntimeError('Variable "online" does not exist.', 7, $this->source); })()) == true)) {
            // line 8
            echo "    <i class=\"fa fa-check-square\"></i>
    <span class=\"text--muted\">
        ";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_node.admin.list.online"), "html", null, true);
            echo "
    </span>
";
        } else {
            // line 13
            echo "    ";
            echo twig_escape_filter($this->env, (isset($context["online"]) || array_key_exists("online", $context) ? $context["online"] : (function () { throw new RuntimeError('Variable "online" does not exist.', 13, $this->source); })()), "html", null, true);
            echo "
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanNode/Admin/online.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 13,  62 => 10,  58 => 8,  56 => 7,  51 => 5,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set online = adminlist.getValue(row, columnName) %}
{% if online == false %}
    <i class=\"fa fa-square\"></i>
    <span class=\"text--muted\">
        {{ 'kuma_node.admin.list.offline'|trans }}
    </span>
{% elseif online == true %}
    <i class=\"fa fa-check-square\"></i>
    <span class=\"text--muted\">
        {{ 'kuma_node.admin.list.online'|trans }}
    </span>
{% else %}
    {{ online }}
{% endif %}
", "@KunstmaanNode/Admin/online.html.twig", "/Users/macbook/Documents/quoc/admin-blog-api-/vendor/kunstmaan/node-bundle/Resources/views/Admin/online.html.twig");
    }
}
