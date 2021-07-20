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

/* @KunstmaanAdmin/Default/rectreeview.html.twig */
class __TwigTemplate_f30008a47e9aab33460664c0524ba06eec0f0fb423d52bb0d1562939b7c0070d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdmin/Default/rectreeview.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdmin/Default/rectreeview.html.twig"));

        // line 1
        $context["nodeId"] = twig_get_attribute($this->env, $this->source, (isset($context["menuitem"]) || array_key_exists("menuitem", $context) ? $context["menuitem"] : (function () { throw new RuntimeError('Variable "menuitem" does not exist.', 1, $this->source); })()), "uniqueId", [], "any", false, false, false, 1);
        // line 2
        echo "
<li id=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["nodeId"]) || array_key_exists("nodeId", $context) ? $context["nodeId"] : (function () { throw new RuntimeError('Variable "nodeId" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "\"
    ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, (isset($context["menuitem"]) || array_key_exists("menuitem", $context) ? $context["menuitem"] : (function () { throw new RuntimeError('Variable "menuitem" does not exist.', 4, $this->source); })()), "folder", [], "any", false, false, false, 4)) {
            // line 5
            echo "        data-jstree='{\"type\":\"folder\"}'
    ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 6
(isset($context["menuitem"]) || array_key_exists("menuitem", $context) ? $context["menuitem"] : (function () { throw new RuntimeError('Variable "menuitem" does not exist.', 6, $this->source); })()), "offline", [], "any", false, false, false, 6)) {
            // line 7
            echo "        data-jstree='{\"type\":\"offline\"}'
    ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 8
(isset($context["menuitem"]) || array_key_exists("menuitem", $context) ? $context["menuitem"] : (function () { throw new RuntimeError('Variable "menuitem" does not exist.', 8, $this->source); })()), "hiddenFromNav", [], "any", false, false, false, 8)) {
            // line 9
            echo "        data-jstree='{\"type\":\"hidden-from-nav\"}'
    ";
        }
        // line 11
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["menuitem"] ?? null), "attributes", [], "any", false, true, false, 11), "page", [], "any", true, true, false, 11)) {
            // line 12
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["menuitem"] ?? null), "attributes", [], "any", false, true, false, 12), "page", [], "any", false, true, false, 12), "icon", [], "any", true, true, false, 12)) {
                // line 13
                echo "            data-jstree='";
                echo twig_escape_filter($this->env, json_encode(["icon" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["menuitem"]) || array_key_exists("menuitem", $context) ? $context["menuitem"] : (function () { throw new RuntimeError('Variable "menuitem" does not exist.', 13, $this->source); })()), "attributes", [], "any", false, false, false, 13), "page", [], "any", false, false, false, 13), "icon", [], "any", false, false, false, 13)]), "html", null, true);
                echo "'
        ";
            }
            // line 15
            echo "        data-page=\"";
            echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["menuitem"]) || array_key_exists("menuitem", $context) ? $context["menuitem"] : (function () { throw new RuntimeError('Variable "menuitem" does not exist.', 15, $this->source); })()), "attributes", [], "any", false, false, false, 15), "page", [], "any", false, false, false, 15)), "html", null, true);
            echo "\"
    ";
        }
        // line 17
        echo "    class=\"";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["menuitem"]) || array_key_exists("menuitem", $context) ? $context["menuitem"] : (function () { throw new RuntimeError('Variable "menuitem" does not exist.', 17, $this->source); })()), "active", [], "any", false, false, false, 17) || ((isset($context["treeLevel"]) || array_key_exists("treeLevel", $context) ? $context["treeLevel"] : (function () { throw new RuntimeError('Variable "treeLevel" does not exist.', 17, $this->source); })()) == 1))) {
            echo "jstree-open";
        }
        if (twig_get_attribute($this->env, $this->source, (isset($context["menuitem"]) || array_key_exists("menuitem", $context) ? $context["menuitem"] : (function () { throw new RuntimeError('Variable "menuitem" does not exist.', 17, $this->source); })()), "offline", [], "any", false, false, false, 17)) {
            echo " jstree-node--offline";
        }
        echo "\"";
        if (twig_get_attribute($this->env, $this->source, (isset($context["menuitem"]) || array_key_exists("menuitem", $context) ? $context["menuitem"] : (function () { throw new RuntimeError('Variable "menuitem" does not exist.', 17, $this->source); })()), "role", [], "any", false, false, false, 17)) {
            echo " rel=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["menuitem"]) || array_key_exists("menuitem", $context) ? $context["menuitem"] : (function () { throw new RuntimeError('Variable "menuitem" does not exist.', 17, $this->source); })()), "role", [], "any", false, false, false, 17), "html", null, true);
            echo "\"";
        }
        echo ">
    ";
        // line 18
        if (twig_get_attribute($this->env, $this->source, (isset($context["menuitem"]) || array_key_exists("menuitem", $context) ? $context["menuitem"] : (function () { throw new RuntimeError('Variable "menuitem" does not exist.', 18, $this->source); })()), "route", [], "any", false, false, false, 18)) {
            // line 19
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, (isset($context["menuitem"]) || array_key_exists("menuitem", $context) ? $context["menuitem"] : (function () { throw new RuntimeError('Variable "menuitem" does not exist.', 19, $this->source); })()), "route", [], "any", false, false, false, 19), twig_get_attribute($this->env, $this->source, (isset($context["menuitem"]) || array_key_exists("menuitem", $context) ? $context["menuitem"] : (function () { throw new RuntimeError('Variable "menuitem" does not exist.', 19, $this->source); })()), "routeparams", [], "any", false, false, false, 19)), "html", null, true);
            echo "\" class=\"";
            if (( !(null === (isset($context["currentMenuItem"]) || array_key_exists("currentMenuItem", $context) ? $context["currentMenuItem"] : (function () { throw new RuntimeError('Variable "currentMenuItem" does not exist.', 19, $this->source); })())) && (twig_get_attribute($this->env, $this->source, (isset($context["currentMenuItem"]) || array_key_exists("currentMenuItem", $context) ? $context["currentMenuItem"] : (function () { throw new RuntimeError('Variable "currentMenuItem" does not exist.', 19, $this->source); })()), "uniqueId", [], "any", false, false, false, 19) == twig_get_attribute($this->env, $this->source, (isset($context["menuitem"]) || array_key_exists("menuitem", $context) ? $context["menuitem"] : (function () { throw new RuntimeError('Variable "menuitem" does not exist.', 19, $this->source); })()), "uniqueId", [], "any", false, false, false, 19)))) {
                echo "active";
            }
            echo "\">
            ";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["menuitem"]) || array_key_exists("menuitem", $context) ? $context["menuitem"] : (function () { throw new RuntimeError('Variable "menuitem" does not exist.', 20, $this->source); })()), "label", [], "any", false, false, false, 20)), "html", null, true);
            echo "
        </a>
    ";
        } else {
            // line 23
            echo "        ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["menuitem"]) || array_key_exists("menuitem", $context) ? $context["menuitem"] : (function () { throw new RuntimeError('Variable "menuitem" does not exist.', 23, $this->source); })()), "label", [], "any", false, false, false, 23)), "html", null, true);
            echo "
    ";
        }
        // line 25
        echo "
    <ul>
    ";
        // line 27
        $context["treeLevel"] = ((isset($context["treeLevel"]) || array_key_exists("treeLevel", $context) ? $context["treeLevel"] : (function () { throw new RuntimeError('Variable "treeLevel" does not exist.', 27, $this->source); })()) + 1);
        // line 28
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["menuitem"], "navigationChildren", [], "any", false, false, false, 28));
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
        foreach ($context['_seq'] as $context["_key"] => $context["menuitem"]) {
            // line 29
            echo "        ";
            $this->loadTemplate("@KunstmaanAdmin/Default/rectreeview.html.twig", "@KunstmaanAdmin/Default/rectreeview.html.twig", 29)->display($context);
            // line 30
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "    ";
        $context["treeLevel"] = ((isset($context["treeLevel"]) || array_key_exists("treeLevel", $context) ? $context["treeLevel"] : (function () { throw new RuntimeError('Variable "treeLevel" does not exist.', 31, $this->source); })()) - 1);
        // line 32
        echo "    </ul>
</li>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanAdmin/Default/rectreeview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 32,  166 => 31,  152 => 30,  149 => 29,  131 => 28,  129 => 27,  125 => 25,  119 => 23,  113 => 20,  104 => 19,  102 => 18,  86 => 17,  80 => 15,  74 => 13,  71 => 12,  68 => 11,  64 => 9,  62 => 8,  59 => 7,  57 => 6,  54 => 5,  52 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set nodeId = menuitem.uniqueId %}

<li id=\"{{ nodeId }}\"
    {% if menuitem.folder %}
        data-jstree='{\"type\":\"folder\"}'
    {% elseif menuitem.offline %}
        data-jstree='{\"type\":\"offline\"}'
    {% elseif menuitem.hiddenFromNav %}
        data-jstree='{\"type\":\"hidden-from-nav\"}'
    {% endif %}
    {% if menuitem.attributes.page is defined %}
        {% if menuitem.attributes.page.icon is defined %}
            data-jstree='{{ {\"icon\": menuitem.attributes.page.icon}|json_encode }}'
        {% endif %}
        data-page=\"{{ menuitem.attributes.page|json_encode }}\"
    {% endif %}
    class=\"{% if menuitem.active or treeLevel == 1 %}jstree-open{% endif %}{% if menuitem.offline %} jstree-node--offline{% endif %}\"{% if menuitem.role %} rel=\"{{menuitem.role}}\"{% endif %}>
    {% if menuitem.route %}
        <a href=\"{{ path(menuitem.route, menuitem.routeparams) }}\" class=\"{% if currentMenuItem is not null and currentMenuItem.uniqueId == menuitem.uniqueId %}active{% endif %}\">
            {{ menuitem.label | trans }}
        </a>
    {% else %}
        {{ menuitem.label | trans }}
    {% endif %}

    <ul>
    {% set treeLevel = treeLevel + 1 %}
    {% for menuitem in menuitem.navigationChildren %}
        {% include '@KunstmaanAdmin/Default/rectreeview.html.twig' %}
    {% endfor %}
    {% set treeLevel = treeLevel - 1 %}
    </ul>
</li>
", "@KunstmaanAdmin/Default/rectreeview.html.twig", "/Users/macbook/Documents/quoc/admin-blog-api-/vendor/kunstmaan/admin-bundle/Resources/views/Default/rectreeview.html.twig");
    }
}
