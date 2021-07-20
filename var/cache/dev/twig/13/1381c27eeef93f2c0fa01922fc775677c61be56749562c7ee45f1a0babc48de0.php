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

/* @KunstmaanNode/NodeAdmin/Modals/_pagetemplate.html.twig */
class __TwigTemplate_d090abd718746ea111dbb96d0d667c7bfc05b0c870feb27aa62116a40b2fbdad extends \Twig\Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanNode/NodeAdmin/Modals/_pagetemplate.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanNode/NodeAdmin/Modals/_pagetemplate.html.twig"));

        // line 1
        $macros["macros"] = $this->macros["macros"] = $this;
        // line 2
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["pageTemplate"]) || array_key_exists("pageTemplate", $context) ? $context["pageTemplate"] : (function () { throw new RuntimeError('Variable "pageTemplate" does not exist.', 3, $this->source); })()), "rows", [], "any", false, false, false, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 4
            echo "<div class=\"row\">
";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["row"], "regions", [], "any", false, false, false, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["region"]) {
                // line 6
                echo "    ";
                echo twig_call_macro($macros["macros"], "macro_render_region", [$context["region"]], 6, $context, $this->getSourceContext());
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['region'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function macro_render_region($__region__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "region" => $__region__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_region"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_region"));

            // line 12
            if (twig_get_attribute($this->env, $this->source, (isset($context["region"]) || array_key_exists("region", $context) ? $context["region"] : (function () { throw new RuntimeError('Variable "region" does not exist.', 12, $this->source); })()), "children", [], "any", false, false, false, 12)) {
                // line 13
                echo "<div class=\"col-md-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["region"]) || array_key_exists("region", $context) ? $context["region"] : (function () { throw new RuntimeError('Variable "region" does not exist.', 13, $this->source); })()), "span", [], "any", false, false, false, 13), "html", null, true);
                echo "\">
    <div class=\"row\">
";
                // line 15
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["region"]) || array_key_exists("region", $context) ? $context["region"] : (function () { throw new RuntimeError('Variable "region" does not exist.', 15, $this->source); })()), "children", [], "any", false, false, false, 15));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 16
                    echo "        ";
                    echo twig_call_macro($macros["_self"], "macro_render_region", [$context["child"]], 16, $context, $this->getSourceContext());
                    echo "
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 18
                echo "    </div>
</div>
";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 20
(isset($context["region"]) || array_key_exists("region", $context) ? $context["region"] : (function () { throw new RuntimeError('Variable "region" does not exist.', 20, $this->source); })()), "rows", [], "any", false, false, false, 20)) {
                // line 21
                echo "<div class=\"col-md-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["region"]) || array_key_exists("region", $context) ? $context["region"] : (function () { throw new RuntimeError('Variable "region" does not exist.', 21, $this->source); })()), "span", [], "any", false, false, false, 21), "html", null, true);
                echo "\">
    ";
                // line 22
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["region"]) || array_key_exists("region", $context) ? $context["region"] : (function () { throw new RuntimeError('Variable "region" does not exist.', 22, $this->source); })()), "rows", [], "any", false, false, false, 22));
                foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                    // line 23
                    echo "    <div class=\"row\">
    ";
                    // line 24
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["row"], "regions", [], "any", false, false, false, 24));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 25
                        echo "        ";
                        echo twig_call_macro($macros["_self"], "macro_render_region", [$context["child"]], 25, $context, $this->getSourceContext());
                        echo "
    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 27
                    echo "    </div>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                echo "</div>
";
            } else {
                // line 31
                echo "<div class=\"col-md-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["region"]) || array_key_exists("region", $context) ? $context["region"] : (function () { throw new RuntimeError('Variable "region" does not exist.', 31, $this->source); })()), "span", [], "any", false, false, false, 31), "html", null, true);
                echo "\"></div>
";
            }
            // line 33
            echo "
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@KunstmaanNode/NodeAdmin/Modals/_pagetemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 33,  169 => 31,  165 => 29,  158 => 27,  149 => 25,  145 => 24,  142 => 23,  138 => 22,  133 => 21,  131 => 20,  127 => 18,  118 => 16,  114 => 15,  108 => 13,  106 => 12,  87 => 11,  76 => 10,  69 => 8,  60 => 6,  56 => 5,  53 => 4,  49 => 3,  46 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import _self as macros %}

{% for row in pageTemplate.rows %}
<div class=\"row\">
{% for region in row.regions %}
    {{ macros.render_region(region) }}
{% endfor %}
</div>
{% endfor %}

{% macro render_region(region) %}
{% if region.children %}
<div class=\"col-md-{{ region.span }}\">
    <div class=\"row\">
{% for child in region.children %}
        {{ _self.render_region(child) }}
{% endfor %}
    </div>
</div>
{% elseif region.rows %}
<div class=\"col-md-{{ region.span }}\">
    {% for row in region.rows %}
    <div class=\"row\">
    {% for child in row.regions %}
        {{ _self.render_region(child) }}
    {% endfor %}
    </div>
    {% endfor %}
</div>
{% else %}
<div class=\"col-md-{{ region.span }}\"></div>
{% endif %}

{% endmacro %}
", "@KunstmaanNode/NodeAdmin/Modals/_pagetemplate.html.twig", "/Users/macbook/Documents/quoc/admin-blog-api-/vendor/kunstmaan/node-bundle/Resources/views/NodeAdmin/Modals/_pagetemplate.html.twig");
    }
}
