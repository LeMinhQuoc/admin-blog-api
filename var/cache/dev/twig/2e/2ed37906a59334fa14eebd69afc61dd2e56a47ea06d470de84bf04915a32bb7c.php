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

/* PageParts/TocPagePart/view.html.twig */
class __TwigTemplate_ed8b8945e3e3753e727113626d163a776325a259a994b938658088e1152ada5a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PageParts/TocPagePart/view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PageParts/TocPagePart/view.html.twig"));

        // line 1
        $context["tocContent"] = "";
        // line 2
        echo "
";
        // line 3
        if (array_key_exists("page", $context)) {
            // line 4
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->extensions['Kunstmaan\PagePartBundle\Twig\Extension\PagePartTwigExtension']->getPageParts((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 4, $this->source); })()), "main"));
            foreach ($context['_seq'] as $context["_key"] => $context["pagepart"]) {
                // line 5
                echo "        ";
                if (twig_in_filter("HeaderPagePart", twig_get_attribute($this->env, $this->source, $context["pagepart"], "getDefaultView", [], "any", false, false, false, 5))) {
                    // line 6
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["pagepart"], "niv", [], "any", true, true, false, 6) && (twig_get_attribute($this->env, $this->source, $context["pagepart"], "niv", [], "any", false, false, false, 6) == 2))) {
                        // line 7
                        echo "                ";
                        $context["tocContent"] = ((((((isset($context["tocContent"]) || array_key_exists("tocContent", $context) ? $context["tocContent"] : (function () { throw new RuntimeError('Variable "tocContent" does not exist.', 7, $this->source); })()) . "<li><a href=\"#") . $this->extensions['Kunstmaan\UtilitiesBundle\Twig\UtilitiesTwigExtension']->slugify(twig_get_attribute($this->env, $this->source, $context["pagepart"], "getTitle", [], "any", false, false, false, 7))) . "\">") . twig_get_attribute($this->env, $this->source, $context["pagepart"], "getTitle", [], "any", false, false, false, 7)) . "</a></li>");
                        // line 8
                        echo "            ";
                    }
                    // line 9
                    echo "        ";
                }
                // line 10
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagepart'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "
    ";
            // line 12
            if ((isset($context["tocContent"]) || array_key_exists("tocContent", $context) ? $context["tocContent"] : (function () { throw new RuntimeError('Variable "tocContent" does not exist.', 12, $this->source); })())) {
                // line 13
                echo "        <div class=\"toc-pp\">
            <ul>
                ";
                // line 15
                echo (isset($context["tocContent"]) || array_key_exists("tocContent", $context) ? $context["tocContent"] : (function () { throw new RuntimeError('Variable "tocContent" does not exist.', 15, $this->source); })());
                echo "
            </ul>
        </div>
    ";
            }
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "PageParts/TocPagePart/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 15,  81 => 13,  79 => 12,  76 => 11,  70 => 10,  67 => 9,  64 => 8,  61 => 7,  58 => 6,  55 => 5,  50 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set tocContent = \"\" %}

{% if page is defined %}
    {% for pagepart in getpageparts(page, 'main') %}
        {% if 'HeaderPagePart' in pagepart.getDefaultView %}
            {% if pagepart.niv is defined and pagepart.niv == 2 %}
                {% set tocContent = tocContent ~ '<li><a href=\\\"#' ~ pagepart.getTitle|slugify ~ '\\\">' ~ pagepart.getTitle ~ '</a></li>' %}
            {% endif %}
        {% endif %}
    {% endfor %}

    {% if tocContent %}
        <div class=\"toc-pp\">
            <ul>
                {{ tocContent|raw }}
            </ul>
        </div>
    {% endif %}
{% endif %}
", "PageParts/TocPagePart/view.html.twig", "/Users/macbook/Documents/quoc/admin-blog-api-/templates/PageParts/TocPagePart/view.html.twig");
    }
}
