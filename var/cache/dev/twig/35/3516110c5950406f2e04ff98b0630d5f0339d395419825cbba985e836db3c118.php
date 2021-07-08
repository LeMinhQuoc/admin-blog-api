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

/* @KunstmaanAdminList/AdminListTwigExtension/limit.html.twig */
class __TwigTemplate_bc269bfd72d2d01eea877cafd023f54a52b20097cfc5c8d43c588fdb8c7b6cc0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdminList/AdminListTwigExtension/limit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdminList/AdminListTwigExtension/limit.html.twig"));

        // line 1
        if ($this->extensions['Kunstmaan\AdminListBundle\Twig\AdminListTwigExtension']->isInstanceOf(twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 1, $this->source); })()), "configurator", [], "any", false, false, false, 1), "Kunstmaan\\AdminListBundle\\AdminList\\Configurator\\ChangeableLimitInterface")) {
            // line 2
            echo "    <div class=\"container-fluid\">
        <div class=\"dropdown pull-right\">
            <button class=\"btn btn-primary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">
                ";
            // line 5
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_admin_list.limit", ["%limit%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 5, $this->source); })()), "configurator", [], "any", false, false, false, 5), "limit", [], "any", false, false, false, 5)]), "html", null, true);
            echo "
                <i class=\"fa fa-caret-down\"></i>
            </button>
            <ul class=\"dropdown-menu\">
                ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 9, $this->source); })()), "configurator", [], "any", false, false, false, 9), "getLimitOptions", [], "method", false, false, false, 9));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 10
                echo "                    <li><a href=\"?limit=";
                echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                echo "</a></li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "            </ul>
        </div>
    </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanAdminList/AdminListTwigExtension/limit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 12,  61 => 10,  57 => 9,  50 => 5,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if adminlist.configurator is instanceof('Kunstmaan\\\\AdminListBundle\\\\AdminList\\\\Configurator\\\\ChangeableLimitInterface') %}
    <div class=\"container-fluid\">
        <div class=\"dropdown pull-right\">
            <button class=\"btn btn-primary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">
                {{ 'kuma_admin_list.limit'|trans({'%limit%': adminlist.configurator.limit}) }}
                <i class=\"fa fa-caret-down\"></i>
            </button>
            <ul class=\"dropdown-menu\">
                {% for option in adminlist.configurator.getLimitOptions() %}
                    <li><a href=\"?limit={{ option }}\">{{ option }}</a></li>
                {% endfor %}
            </ul>
        </div>
    </div>
{% endif %}
", "@KunstmaanAdminList/AdminListTwigExtension/limit.html.twig", "/Users/macbook/Documents/quoc/blog-admin/vendor/kunstmaan/adminlist-bundle/Resources/views/AdminListTwigExtension/limit.html.twig");
    }
}
