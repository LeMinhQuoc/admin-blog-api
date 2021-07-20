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

/* @KunstmaanPagePart/PagePartAdminTwigExtension/widget.html.twig */
class __TwigTemplate_68dc1a9ce67945c0f2bcc22bbda771e3c39c37a4741e8a7a79c23a9033ab7839 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanPagePart/PagePartAdminTwigExtension/widget.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanPagePart/PagePartAdminTwigExtension/widget.html.twig"));

        // line 1
        echo "<div class=\"js-pp-container pp-container\" data-context=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pagepartadmin"]) || array_key_exists("pagepartadmin", $context) ? $context["pagepartadmin"] : (function () { throw new RuntimeError('Variable "pagepartadmin" does not exist.', 1, $this->source); })()), "context", [], "any", false, false, false, 1), "html", null, true);
        echo "\" data-pageid=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pagepartadmin"]) || array_key_exists("pagepartadmin", $context) ? $context["pagepartadmin"] : (function () { throw new RuntimeError('Variable "pagepartadmin" does not exist.', 1, $this->source); })()), "page", [], "any", false, false, false, 1), "id", [], "any", false, false, false, 1), "html", null, true);
        echo "\" data-pageclassname=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pagepartadmin"]) || array_key_exists("pagepartadmin", $context) ? $context["pagepartadmin"] : (function () { throw new RuntimeError('Variable "pagepartadmin" does not exist.', 1, $this->source); })()), "getClassName", [0 => twig_get_attribute($this->env, $this->source, (isset($context["pagepartadmin"]) || array_key_exists("pagepartadmin", $context) ? $context["pagepartadmin"] : (function () { throw new RuntimeError('Variable "pagepartadmin" does not exist.', 1, $this->source); })()), "page", [], "any", false, false, false, 1)], "method", false, false, false, 1), "html", null, true);
        echo "\">

    ";
        // line 3
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pagepartadmin"]) || array_key_exists("pagepartadmin", $context) ? $context["pagepartadmin"] : (function () { throw new RuntimeError('Variable "pagepartadmin" does not exist.', 3, $this->source); })()), "possiblePagePartTypes", [], "any", false, false, false, 3)) > 0)) {
            // line 4
            echo "        <!-- First New PP select -->
        ";
            // line 5
            $this->loadTemplate("@KunstmaanPagePart/PagePartAdminTwigExtension/add_pagepart.html.twig", "@KunstmaanPagePart/PagePartAdminTwigExtension/widget.html.twig", 5)->display(twig_array_merge($context, ["first" => true]));
            // line 6
            echo "    ";
        }
        // line 7
        echo "
    <!-- Sortable container -->
    <div id=\"parts-";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pagepartadmin"]) || array_key_exists("pagepartadmin", $context) ? $context["pagepartadmin"] : (function () { throw new RuntimeError('Variable "pagepartadmin" does not exist.', 9, $this->source); })()), "context", [], "any", false, false, false, 9), "html", null, true);
        echo "\" class=\"js-sortable-container sortable-container\" data-scope=\"";
        ob_start();
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["pagepartadmin"]) || array_key_exists("pagepartadmin", $context) ? $context["pagepartadmin"] : (function () { throw new RuntimeError('Variable "pagepartadmin" does not exist.', 9, $this->source); })()), "possiblePagePartTypes", [], "any", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            echo twig_escape_filter($this->env, (twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["type"], "class", [], "any", false, false, false, 9), ["\\" => ""]) . " "), "html", null, true);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        $___internal_f22b6189879a74aa89adade8a766f8391f548d7a9c1ba4c24b242a13a3c62e10_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo twig_spaceless($___internal_f22b6189879a74aa89adade8a766f8391f548d7a9c1ba4c24b242a13a3c62e10_);
        echo "\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["pagepartadmin"]) || array_key_exists("pagepartadmin", $context) ? $context["pagepartadmin"] : (function () { throw new RuntimeError('Variable "pagepartadmin" does not exist.', 10, $this->source); })()), "pagepartmap", [], "any", false, false, false, 10));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["id"] => $context["pagepart"]) {
            // line 11
            echo "            ";
            $this->loadTemplate("@KunstmaanPagePart/PagePartAdminTwigExtension/pagepart.html.twig", "@KunstmaanPagePart/PagePartAdminTwigExtension/widget.html.twig", 11)->display(twig_array_merge($context, ["id" => $context["id"], "pagepartadmin" => (isset($context["pagepartadmin"]) || array_key_exists("pagepartadmin", $context) ? $context["pagepartadmin"] : (function () { throw new RuntimeError('Variable "pagepartadmin" does not exist.', 11, $this->source); })()), "editmode" => false]));
            // line 12
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['pagepart'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    </div>
</div>

";
        // line 16
        if ((array_key_exists("extended", $context) && ((isset($context["extended"]) || array_key_exists("extended", $context) ? $context["extended"] : (function () { throw new RuntimeError('Variable "extended" does not exist.', 16, $this->source); })()) == true))) {
            // line 17
            echo "    ";
            $this->loadTemplate("@KunstmaanPagePart/PagePartAdminTwigExtension/modal.html.twig", "@KunstmaanPagePart/PagePartAdminTwigExtension/widget.html.twig", 17)->display(twig_array_merge($context, ["pagepartadmin" => (isset($context["pagepartadmin"]) || array_key_exists("pagepartadmin", $context) ? $context["pagepartadmin"] : (function () { throw new RuntimeError('Variable "pagepartadmin" does not exist.', 17, $this->source); })())]));
        }
        // line 19
        echo "
<div id=\"pageparts-deleted-container\"></div>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanPagePart/PagePartAdminTwigExtension/widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 19,  124 => 17,  122 => 16,  117 => 13,  103 => 12,  100 => 11,  83 => 10,  67 => 9,  63 => 7,  60 => 6,  58 => 5,  55 => 4,  53 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"js-pp-container pp-container\" data-context=\"{{ pagepartadmin.context }}\" data-pageid=\"{{ pagepartadmin.page.id }}\" data-pageclassname=\"{{ pagepartadmin.getClassName(pagepartadmin.page) }}\">

    {% if pagepartadmin.possiblePagePartTypes | length > 0 %}
        <!-- First New PP select -->
        {% include '@KunstmaanPagePart/PagePartAdminTwigExtension/add_pagepart.html.twig' with {first: true} %}
    {% endif %}

    <!-- Sortable container -->
    <div id=\"parts-{{ pagepartadmin.context }}\" class=\"js-sortable-container sortable-container\" data-scope=\"{% apply spaceless %}{% for type in pagepartadmin.possiblePagePartTypes %}{{ type.class|replace({'\\\\':\"\"})~' ' }}{% endfor %}{% endapply %}\">
        {% for id, pagepart in pagepartadmin.pagepartmap %}
            {% include '@KunstmaanPagePart/PagePartAdminTwigExtension/pagepart.html.twig' with { 'id': id, 'pagepartadmin': pagepartadmin, 'editmode': false} %}
        {% endfor %}
    </div>
</div>

{% if extended is defined and extended == true %}
    {% include '@KunstmaanPagePart/PagePartAdminTwigExtension/modal.html.twig' with { 'pagepartadmin': pagepartadmin } %}
{% endif %}

<div id=\"pageparts-deleted-container\"></div>

", "@KunstmaanPagePart/PagePartAdminTwigExtension/widget.html.twig", "/Users/macbook/Documents/quoc/admin-blog-api-/vendor/kunstmaan/pagepart-bundle/Resources/views/PagePartAdminTwigExtension/widget.html.twig");
    }
}
