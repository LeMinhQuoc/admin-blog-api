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

/* @KunstmaanAdmin/Toolbar/toolbar.html.twig */
class __TwigTemplate_408cab779d8f5b85cbe9628d1521cb384f853df444c427bce57f079e44d7139b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdmin/Toolbar/toolbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdmin/Toolbar/toolbar.html.twig"));

        // line 1
        echo "<!-- START of Kunstmaan admin toolbar -->
<div id=\"kunstmaan-toolbar\" class=\"clear-fix\" data-no-turbolink>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["collectors"]) || array_key_exists("collectors", $context) ? $context["collectors"] : (function () { throw new RuntimeError('Variable "collectors" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["collector"]) {
            // line 4
            echo "        ";
            echo $this->extensions['Kunstmaan\AdminBundle\Twig\ToolbarTwigExtension']->renderBlock($this->env, twig_get_attribute($this->env, $this->source, $context["collector"], "template", [], "any", false, false, false, 4), "toolbar", twig_get_attribute($this->env, $this->source, $context["collector"], "collectData", [], "method", false, false, false, 4));
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['collector'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    <a class=\"hide-button\" title=\"Close Toolbar\" tabindex=\"-1\" accesskey=\"D\" onclick=\"
            var p = this.parentNode;
            p.style.display = 'none';
            \">
        ";
        // line 10
        echo twig_include($this->env, $context, "@KunstmaanAdmin/Toolbar/Icon/close.svg");
        echo "
    </a>
</div>

<style>
    ";
        // line 15
        echo twig_include($this->env, $context, "@KunstmaanAdmin/Toolbar/toolbar.css.twig", ["position" => "bottom", "floatable" => true]);
        echo "
</style>
<!-- END of Kunstmaan admin toolbar -->
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanAdmin/Toolbar/toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 15,  66 => 10,  60 => 6,  51 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- START of Kunstmaan admin toolbar -->
<div id=\"kunstmaan-toolbar\" class=\"clear-fix\" data-no-turbolink>
    {% for collector in collectors %}
        {{ block_render(collector.template, 'toolbar', collector.collectData()) }}
    {% endfor %}
    <a class=\"hide-button\" title=\"Close Toolbar\" tabindex=\"-1\" accesskey=\"D\" onclick=\"
            var p = this.parentNode;
            p.style.display = 'none';
            \">
        {{ include('@KunstmaanAdmin/Toolbar/Icon/close.svg') }}
    </a>
</div>

<style>
    {{ include('@KunstmaanAdmin/Toolbar/toolbar.css.twig', { 'position': 'bottom', 'floatable': true }) }}
</style>
<!-- END of Kunstmaan admin toolbar -->
", "@KunstmaanAdmin/Toolbar/toolbar.html.twig", "/Users/macbook/Documents/quoc/blog-admin/vendor/kunstmaan/admin-bundle/Resources/views/Toolbar/toolbar.html.twig");
    }
}
