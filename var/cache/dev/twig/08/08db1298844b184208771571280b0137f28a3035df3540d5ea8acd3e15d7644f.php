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

/* @KunstmaanAdmin/Default/breadcrumbs.html.twig */
class __TwigTemplate_60e0ea97a19dbdb287ed186be2c8b919b1a997a54e2d88706cf8406ea063602b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdmin/Default/breadcrumbs.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdmin/Default/breadcrumbs.html.twig"));

        // line 1
        $context["breadcrumbitems"] = twig_get_attribute($this->env, $this->source, (isset($context["adminmenu"]) || array_key_exists("adminmenu", $context) ? $context["adminmenu"] : (function () { throw new RuntimeError('Variable "adminmenu" does not exist.', 1, $this->source); })()), "breadcrumb", [], "any", false, false, false, 1);
        // line 2
        if ((twig_length_filter($this->env, (isset($context["breadcrumbitems"]) || array_key_exists("breadcrumbitems", $context) ? $context["breadcrumbitems"] : (function () { throw new RuntimeError('Variable "breadcrumbitems" does not exist.', 2, $this->source); })())) > 0)) {
            // line 3
            echo "    <ul class=\"breadcrumb app__content__breadcrumb\">
    ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbitems"]) || array_key_exists("breadcrumbitems", $context) ? $context["breadcrumbitems"] : (function () { throw new RuntimeError('Variable "breadcrumbitems" does not exist.', 4, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["breadcrumbitem"]) {
                // line 5
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 5)) {
                    // line 6
                    echo "            <li class=\"active\">
                ";
                    // line 7
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["breadcrumbitem"], "label", [], "any", false, false, false, 7)), "html", null, true);
                    echo "
            </li>
        ";
                } else {
                    // line 10
                    echo "            <li>
               ";
                    // line 11
                    if (twig_get_attribute($this->env, $this->source, $context["breadcrumbitem"], "route", [], "any", false, false, false, 11)) {
                        // line 12
                        echo "                    <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, $context["breadcrumbitem"], "route", [], "any", false, false, false, 12), twig_get_attribute($this->env, $this->source, $context["breadcrumbitem"], "routeparams", [], "any", false, false, false, 12)), "html", null, true);
                        echo "\">
                        ";
                        // line 13
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["breadcrumbitem"], "label", [], "any", false, false, false, 13)), "html", null, true);
                        echo "
                    </a>
               ";
                    } else {
                        // line 16
                        echo "                    <span>";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["breadcrumbitem"], "label", [], "any", false, false, false, 16)), "html", null, true);
                        echo "</span>
               ";
                    }
                    // line 18
                    echo "            </li>
        ";
                }
                // line 20
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumbitem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "    </ul>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanAdmin/Default/breadcrumbs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 21,  105 => 20,  101 => 18,  95 => 16,  89 => 13,  84 => 12,  82 => 11,  79 => 10,  73 => 7,  70 => 6,  67 => 5,  50 => 4,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set breadcrumbitems = adminmenu.breadcrumb %}
{% if breadcrumbitems | length > 0 %}
    <ul class=\"breadcrumb app__content__breadcrumb\">
    {% for breadcrumbitem in breadcrumbitems %}
        {% if loop.last %}
            <li class=\"active\">
                {{ breadcrumbitem.label | trans }}
            </li>
        {% else %}
            <li>
               {% if  breadcrumbitem.route %}
                    <a href=\"{{ path(breadcrumbitem.route, breadcrumbitem.routeparams) }}\">
                        {{ breadcrumbitem.label | trans }}
                    </a>
               {% else %}
                    <span>{{ breadcrumbitem.label | trans }}</span>
               {% endif %}
            </li>
        {% endif %}
    {% endfor %}
    </ul>
{% endif %}
", "@KunstmaanAdmin/Default/breadcrumbs.html.twig", "/Users/macbook/Documents/quoc/blog-admin/vendor/kunstmaan/admin-bundle/Resources/views/Default/breadcrumbs.html.twig");
    }
}
