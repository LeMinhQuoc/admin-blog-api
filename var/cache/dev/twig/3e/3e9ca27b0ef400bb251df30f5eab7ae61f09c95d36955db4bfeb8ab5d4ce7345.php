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

/* @KunstmaanAdmin/MultiDomainAdminTwigExtension/widget.html.twig */
class __TwigTemplate_1a1190c3d2f78fae05e7ae60969f1d69752f8ab243d0e82bdc6a70f4db58dd81 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdmin/MultiDomainAdminTwigExtension/widget.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdmin/MultiDomainAdminTwigExtension/widget.html.twig"));

        // line 1
        $context["switchedHost"] = $this->extensions['Kunstmaan\AdminBundle\Twig\MultiDomainAdminTwigExtension']->getSwitchedHost();
        // line 2
        $context["route_params"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "request", [], "any", false, false, false, 2), "attributes", [], "any", false, false, false, 2), "get", [0 => "_route_params"], "method", false, false, false, 2);
        // line 3
        $context["route_params"] = twig_array_merge((isset($context["route_params"]) || array_key_exists("route_params", $context) ? $context["route_params"] : (function () { throw new RuntimeError('Variable "route_params" does not exist.', 3, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "request", [], "any", false, false, false, 3), "query", [], "any", false, false, false, 3), "all", [], "any", false, false, false, 3));
        // line 4
        echo "
<li class=\"dropdown\">
    <a href=\"#site\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">
        ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["switchedHost"]) || array_key_exists("switchedHost", $context) ? $context["switchedHost"] : (function () { throw new RuntimeError('Variable "switchedHost" does not exist.', 7, $this->source); })()), "host", [], "any", false, false, false, 7), "html", null, true);
        echo "
        <span class=\"caret\"></span>
    </a>
    <ul class=\"dropdown-menu\" role=\"menu\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hosts"]) || array_key_exists("hosts", $context) ? $context["hosts"] : (function () { throw new RuntimeError('Variable "hosts" does not exist.', 11, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["host"]) {
            // line 12
            echo "            <li class=\"";
            if (((isset($context["switchedHost"]) || array_key_exists("switchedHost", $context) ? $context["switchedHost"] : (function () { throw new RuntimeError('Variable "switchedHost" does not exist.', 12, $this->source); })()) == $context["host"])) {
                echo " active";
            }
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 12)) {
                echo " first";
            }
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 12)) {
                echo " last";
            }
            echo "\">
                <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanMultiDomainBundle_switch_site", ["host" => $context["host"], "route" => (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 13, $this->source); })()), "route_params" => (isset($context["route_params"]) || array_key_exists("route_params", $context) ? $context["route_params"] : (function () { throw new RuntimeError('Variable "route_params" does not exist.', 13, $this->source); })()), "from_url_chooser" => true]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["host"], "html", null, true);
            echo "</a>
            </li>
        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['host'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    </ul>
</li>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanAdmin/MultiDomainAdminTwigExtension/widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 16,  91 => 13,  78 => 12,  61 => 11,  54 => 7,  49 => 4,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set switchedHost = get_switched_host() %}
{% set route_params = app.request.attributes.get('_route_params') %}
{% set route_params = route_params|merge(app.request.query.all) %}

<li class=\"dropdown\">
    <a href=\"#site\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">
        {{ switchedHost.host }}
        <span class=\"caret\"></span>
    </a>
    <ul class=\"dropdown-menu\" role=\"menu\">
        {% for host in hosts %}
            <li class=\"{% if switchedHost == host %} active{% endif %}{% if loop.first %} first{% endif %}{% if loop.last %} last{% endif %}\">
                <a href=\"{{ path('KunstmaanMultiDomainBundle_switch_site', { 'host': host, 'route': route, 'route_params': route_params, 'from_url_chooser': true }) }}\">{{ host }}</a>
            </li>
        {% endfor %}
    </ul>
</li>
", "@KunstmaanAdmin/MultiDomainAdminTwigExtension/widget.html.twig", "/Users/macbook/Documents/quoc/blog-admin/vendor/kunstmaan/admin-bundle/Resources/views/MultiDomainAdminTwigExtension/widget.html.twig");
    }
}
