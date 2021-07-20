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

/* @KunstmaanPagePart/PagePartAdminTwigExtension/add_pagepart.html.twig */
class __TwigTemplate_7a26f1ec3633c95a781ea7010d9b902d1ef1d6004435da324b5c439cfb094988 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanPagePart/PagePartAdminTwigExtension/add_pagepart.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanPagePart/PagePartAdminTwigExtension/add_pagepart.html.twig"));

        // line 1
        echo "<div class=\"pp-container__add\">
    ";
        // line 2
        if ((array_key_exists("extended", $context) && ((isset($context["extended"]) || array_key_exists("extended", $context) ? $context["extended"] : (function () { throw new RuntimeError('Variable "extended" does not exist.', 2, $this->source); })()) == true))) {
            // line 3
            echo "        <a href=\"#\" class=\"btn btn-default js-add-pp-select";
            if ((array_key_exists("first", $context) && (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 3, $this->source); })()))) {
                echo " js-add-pp-select--first";
            }
            echo " js-pp-modal-button\"
           data-toggle=\"modal\" data-target=\"#pagePartModal";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pagepartadmin"]) || array_key_exists("pagepartadmin", $context) ? $context["pagepartadmin"] : (function () { throw new RuntimeError('Variable "pagepartadmin" does not exist.', 4, $this->source); })()), "context", [], "any", false, false, false, 4), "html", null, true);
            echo "\"
           data-url=\"";
            // line 5
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanPagePartBundle_admin_newpagepart");
            echo "\">
            ";
            // line 6
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_pagepart.select.add"), "html", null, true);
            echo "
        </a>
    ";
        } else {
            // line 9
            echo "        <select class=\"js-add-pp-select ";
            if ((array_key_exists("first", $context) && (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 9, $this->source); })()))) {
                echo "js-add-pp-select--first";
            }
            echo " form-control input-sm pp-container__add__select\" data-url=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanPagePartBundle_admin_newpagepart");
            echo "\">
            <option value=\"\">";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add a pagepart"), "html", null, true);
            echo "</option>
            ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["pagepartadmin"]) || array_key_exists("pagepartadmin", $context) ? $context["pagepartadmin"] : (function () { throw new RuntimeError('Variable "pagepartadmin" does not exist.', 11, $this->source); })()), "possiblePagePartTypes", [], "any", false, false, false, 11));
            foreach ($context['_seq'] as $context["_key"] => $context["pagePartType"]) {
                // line 12
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pagePartType"], "class", [], "any", false, false, false, 12), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["pagePartType"], "name", [], "any", false, false, false, 12)), "html", null, true);
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagePartType'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        </select>
    ";
        }
        // line 16
        echo "</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanPagePart/PagePartAdminTwigExtension/add_pagepart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 16,  97 => 14,  86 => 12,  82 => 11,  78 => 10,  69 => 9,  63 => 6,  59 => 5,  55 => 4,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"pp-container__add\">
    {% if extended is defined and extended == true %}
        <a href=\"#\" class=\"btn btn-default js-add-pp-select{% if first is defined and first %} js-add-pp-select--first{% endif %} js-pp-modal-button\"
           data-toggle=\"modal\" data-target=\"#pagePartModal{{ pagepartadmin.context }}\"
           data-url=\"{{ path('KunstmaanPagePartBundle_admin_newpagepart') }}\">
            {{ 'kuma_pagepart.select.add' | trans }}
        </a>
    {% else %}
        <select class=\"js-add-pp-select {% if first is defined and first %}js-add-pp-select--first{% endif %} form-control input-sm pp-container__add__select\" data-url=\"{{ path('KunstmaanPagePartBundle_admin_newpagepart') }}\">
            <option value=\"\">{{ 'Add a pagepart' | trans }}</option>
            {% for pagePartType in pagepartadmin.possiblePagePartTypes %}
                <option value=\"{{ pagePartType.class }}\">{{ pagePartType.name|trans }}</option>
            {% endfor %}
        </select>
    {% endif %}
</div>", "@KunstmaanPagePart/PagePartAdminTwigExtension/add_pagepart.html.twig", "/Users/macbook/Documents/quoc/admin-blog-api-/vendor/kunstmaan/pagepart-bundle/Resources/views/PagePartAdminTwigExtension/add_pagepart.html.twig");
    }
}
