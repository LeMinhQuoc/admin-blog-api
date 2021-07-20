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

/* @KunstmaanAdmin/Default/sidebar.html.twig */
class __TwigTemplate_900aa9b1c8f4cc35198c0648aa90c355d4fcb8c41bf79e4579c119467e45d025 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdmin/Default/sidebar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdmin/Default/sidebar.html.twig"));

        // line 1
        echo "<!-- Search -->
<button type=\"button\" class=\"js-toggle-btn toggle-button btn app__sidebar__search-toggle-btn\" data-target=\"#sidebar-search-toggle\">
    <i class=\"fa fa-search\"></i>
</button>
<div id=\"sidebar-search-toggle\" class=\"toggle-item\">
    <div class=\"toggle-item__content\">
        <div class=\"app__sidebar__search-toggle-item\">
            <input type=\"text\" placeholder=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("search.title"), "html", null, true);
        echo "\" id=\"app__sidebar__search\" class=\"form-control\">
            <hr>
        </div>
    </div>
</div>

<!-- Tree -->
";
        // line 15
        $context["currentMenuItem"] = twig_get_attribute($this->env, $this->source, (isset($context["adminmenu"]) || array_key_exists("adminmenu", $context) ? $context["adminmenu"] : (function () { throw new RuntimeError('Variable "adminmenu" does not exist.', 15, $this->source); })()), "current", [], "any", false, false, false, 15);
        // line 16
        echo "<nav role=\"navigation\" id=\"app__sidebar__navigation\" class=\"app__sidebar__module app__sidebar__navigation\"
    data-reorder-url=\"";
        // line 17
        if (array_key_exists("nodebundleisactive", $context)) {
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanNodeBundle_nodes_reorder");
        }
        echo "\"
    data-moving-confirmation=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pages.movingconfirmation"), "html", null, true);
        echo "\">
    <ul>
    ";
        // line 20
        if (twig_get_attribute($this->env, $this->source, (isset($context["lowestTopChild"]) || array_key_exists("lowestTopChild", $context) ? $context["lowestTopChild"] : (function () { throw new RuntimeError('Variable "lowestTopChild" does not exist.', 20, $this->source); })()), "appearInSidebar", [], "any", false, false, false, 20)) {
            // line 21
            echo "        <li class=\"jstree-open ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["lowestTopChild"]) || array_key_exists("lowestTopChild", $context) ? $context["lowestTopChild"] : (function () { throw new RuntimeError('Variable "lowestTopChild" does not exist.', 21, $this->source); })()), "internalname", [], "any", false, false, false, 21) == twig_get_attribute($this->env, $this->source, (isset($context["currentMenuItem"]) || array_key_exists("currentMenuItem", $context) ? $context["currentMenuItem"] : (function () { throw new RuntimeError('Variable "currentMenuItem" does not exist.', 21, $this->source); })()), "internalname", [], "any", false, false, false, 21))) {
                echo "active";
            }
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["lowestTopChild"]) || array_key_exists("lowestTopChild", $context) ? $context["lowestTopChild"] : (function () { throw new RuntimeError('Variable "lowestTopChild" does not exist.', 21, $this->source); })()), "role", [], "any", false, false, false, 21)) {
                echo " rel=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lowestTopChild"]) || array_key_exists("lowestTopChild", $context) ? $context["lowestTopChild"] : (function () { throw new RuntimeError('Variable "lowestTopChild" does not exist.', 21, $this->source); })()), "role", [], "any", false, false, false, 21), "html", null, true);
                echo "\" ";
            }
            echo ">
            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, (isset($context["lowestTopChild"]) || array_key_exists("lowestTopChild", $context) ? $context["lowestTopChild"] : (function () { throw new RuntimeError('Variable "lowestTopChild" does not exist.', 22, $this->source); })()), "route", [], "any", false, false, false, 22), twig_get_attribute($this->env, $this->source, (isset($context["lowestTopChild"]) || array_key_exists("lowestTopChild", $context) ? $context["lowestTopChild"] : (function () { throw new RuntimeError('Variable "lowestTopChild" does not exist.', 22, $this->source); })()), "routeparams", [], "any", false, false, false, 22)), "html", null, true);
            echo "\" class=\"";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["lowestTopChild"]) || array_key_exists("lowestTopChild", $context) ? $context["lowestTopChild"] : (function () { throw new RuntimeError('Variable "lowestTopChild" does not exist.', 22, $this->source); })()), "internalname", [], "any", false, false, false, 22) == twig_get_attribute($this->env, $this->source, (isset($context["currentMenuItem"]) || array_key_exists("currentMenuItem", $context) ? $context["currentMenuItem"] : (function () { throw new RuntimeError('Variable "currentMenuItem" does not exist.', 22, $this->source); })()), "internalname", [], "any", false, false, false, 22))) {
                echo "jstree-anchor--active";
            }
            echo "\">
                ";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["lowestTopChild"]) || array_key_exists("lowestTopChild", $context) ? $context["lowestTopChild"] : (function () { throw new RuntimeError('Variable "lowestTopChild" does not exist.', 23, $this->source); })()), "internalname", [], "any", false, false, false, 23)), "html", null, true);
            echo "
            </a>
            <ul>
    ";
        }
        // line 27
        echo "    ";
        $context["treeLevel"] = 1;
        // line 28
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["navigationChildren"]) || array_key_exists("navigationChildren", $context) ? $context["navigationChildren"] : (function () { throw new RuntimeError('Variable "navigationChildren" does not exist.', 28, $this->source); })()));
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
            $this->loadTemplate("@KunstmaanAdmin/Default/rectreeview.html.twig", "@KunstmaanAdmin/Default/sidebar.html.twig", 29)->display($context);
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
        if (twig_get_attribute($this->env, $this->source, (isset($context["lowestTopChild"]) || array_key_exists("lowestTopChild", $context) ? $context["lowestTopChild"] : (function () { throw new RuntimeError('Variable "lowestTopChild" does not exist.', 31, $this->source); })()), "appearInSidebar", [], "any", false, false, false, 31)) {
            // line 32
            echo "            </ul>
        </li>
    ";
        }
        // line 35
        echo "    </ul>
</nav>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanAdmin/Default/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 35,  149 => 32,  146 => 31,  132 => 30,  129 => 29,  111 => 28,  108 => 27,  101 => 23,  93 => 22,  80 => 21,  78 => 20,  73 => 18,  67 => 17,  64 => 16,  62 => 15,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Search -->
<button type=\"button\" class=\"js-toggle-btn toggle-button btn app__sidebar__search-toggle-btn\" data-target=\"#sidebar-search-toggle\">
    <i class=\"fa fa-search\"></i>
</button>
<div id=\"sidebar-search-toggle\" class=\"toggle-item\">
    <div class=\"toggle-item__content\">
        <div class=\"app__sidebar__search-toggle-item\">
            <input type=\"text\" placeholder=\"{{ 'search.title'|trans }}\" id=\"app__sidebar__search\" class=\"form-control\">
            <hr>
        </div>
    </div>
</div>

<!-- Tree -->
{% set currentMenuItem = adminmenu.current %}
<nav role=\"navigation\" id=\"app__sidebar__navigation\" class=\"app__sidebar__module app__sidebar__navigation\"
    data-reorder-url=\"{% if nodebundleisactive is defined %}{{ path('KunstmaanNodeBundle_nodes_reorder') }}{% endif %}\"
    data-moving-confirmation=\"{{ \"pages.movingconfirmation\"|trans }}\">
    <ul>
    {% if lowestTopChild.appearInSidebar %}
        <li class=\"jstree-open {% if lowestTopChild.internalname == currentMenuItem.internalname %}active{% endif %}\" {% if lowestTopChild.role %} rel=\"{{lowestTopChild.role}}\" {% endif %}>
            <a href=\"{{ path(lowestTopChild.route, lowestTopChild.routeparams) }}\" class=\"{% if lowestTopChild.internalname == currentMenuItem.internalname %}jstree-anchor--active{% endif %}\">
                {{ lowestTopChild.internalname | trans }}
            </a>
            <ul>
    {% endif %}
    {% set treeLevel = 1 %}
    {% for menuitem in navigationChildren %}
        {% include '@KunstmaanAdmin/Default/rectreeview.html.twig' %}
    {% endfor %}
    {% if lowestTopChild.appearInSidebar %}
            </ul>
        </li>
    {% endif %}
    </ul>
</nav>
", "@KunstmaanAdmin/Default/sidebar.html.twig", "/Users/macbook/Documents/quoc/admin-blog-api-/vendor/kunstmaan/admin-bundle/Resources/views/Default/sidebar.html.twig");
    }
}
