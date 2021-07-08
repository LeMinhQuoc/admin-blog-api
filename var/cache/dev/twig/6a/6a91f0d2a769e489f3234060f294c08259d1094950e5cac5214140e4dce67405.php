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

/* @KunstmaanMedia/Folder/breadcrumbs.html.twig */
class __TwigTemplate_7f43f04302f69063c46579f7caee23cee7050e5f869281fefe15220ebf3b2adf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanMedia/Folder/breadcrumbs.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanMedia/Folder/breadcrumbs.html.twig"));

        // line 1
        $context["breadcrumbitems"] = twig_get_attribute($this->env, $this->source, (isset($context["foldermanager"]) || array_key_exists("foldermanager", $context) ? $context["foldermanager"] : (function () { throw new RuntimeError('Variable "foldermanager" does not exist.', 1, $this->source); })()), "getParents", [0 => (isset($context["folder"]) || array_key_exists("folder", $context) ? $context["folder"] : (function () { throw new RuntimeError('Variable "folder" does not exist.', 1, $this->source); })())], "method", false, false, false, 1);
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
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 5)) {
                    // line 6
                    echo "                <li class=\"active\">
                    ";
                    // line 7
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["breadcrumbitem"], "name", [], "any", false, false, false, 7), "html", null, true);
                    echo "
                </li>
            ";
                } else {
                    // line 10
                    echo "                <li>
                    ";
                    // line 11
                    $context["params"] = ["folderId" => twig_get_attribute($this->env, $this->source, $context["breadcrumbitem"], "id", [], "any", false, false, false, 11)];
                    // line 12
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanMediaBundle_folder_show", ((array_key_exists("urlParams", $context)) ? (twig_array_merge((isset($context["urlParams"]) || array_key_exists("urlParams", $context) ? $context["urlParams"] : (function () { throw new RuntimeError('Variable "urlParams" does not exist.', 12, $this->source); })()), (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 12, $this->source); })()))) : ((isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 12, $this->source); })())))), "html", null, true);
                    echo "\">
                        ";
                    // line 13
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["breadcrumbitem"], "name", [], "any", false, false, false, 13), "html", null, true);
                    echo "
                    </a>
                </li>
            ";
                }
                // line 17
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumbitem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "    </ul>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanMedia/Folder/breadcrumbs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 18,  96 => 17,  89 => 13,  84 => 12,  82 => 11,  79 => 10,  73 => 7,  70 => 6,  67 => 5,  50 => 4,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set breadcrumbitems = foldermanager.getParents(folder) %}
{% if breadcrumbitems | length > 0 %}
    <ul class=\"breadcrumb app__content__breadcrumb\">
        {% for breadcrumbitem in breadcrumbitems %}
            {% if loop.last %}
                <li class=\"active\">
                    {{ breadcrumbitem.name }}
                </li>
            {% else %}
                <li>
                    {% set params = { 'folderId': breadcrumbitem.id } %}
                    <a href=\"{{ path('KunstmaanMediaBundle_folder_show', urlParams is defined ? urlParams|merge(params) : params ) }}\">
                        {{ breadcrumbitem.name }}
                    </a>
                </li>
            {% endif %}
        {% endfor %}
    </ul>
{% endif %}
", "@KunstmaanMedia/Folder/breadcrumbs.html.twig", "/Users/macbook/Documents/quoc/blog-admin/vendor/kunstmaan/media-bundle/Resources/views/Folder/breadcrumbs.html.twig");
    }
}
