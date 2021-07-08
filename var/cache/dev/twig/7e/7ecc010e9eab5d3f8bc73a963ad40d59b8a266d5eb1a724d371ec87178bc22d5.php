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

/* @KunstmaanMedia/Chooser/chooserShowRecTreeView.html.twig */
class __TwigTemplate_744efdd4ac0980e3a5f47a37f48bafb94f247f4fda6778170e4aea396f64130a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanMedia/Chooser/chooserShowRecTreeView.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanMedia/Chooser/chooserShowRecTreeView.html.twig"));

        // line 1
        echo "<li class=\"";
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["mediaFolder"]) || array_key_exists("mediaFolder", $context) ? $context["mediaFolder"] : (function () { throw new RuntimeError('Variable "mediaFolder" does not exist.', 1, $this->source); })()), "id", [], "any", false, false, false, 1), (isset($context["parentIds"]) || array_key_exists("parentIds", $context) ? $context["parentIds"] : (function () { throw new RuntimeError('Variable "parentIds" does not exist.', 1, $this->source); })()))) {
            echo "jstree-open";
        }
        echo "\" data-jstree='{\"type\":\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mediaFolder"]) || array_key_exists("mediaFolder", $context) ? $context["mediaFolder"] : (function () { throw new RuntimeError('Variable "mediaFolder" does not exist.', 1, $this->source); })()), "rel", [], "any", false, false, false, 1), "html", null, true);
        echo "\"}' rel=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mediaFolder"]) || array_key_exists("mediaFolder", $context) ? $context["mediaFolder"] : (function () { throw new RuntimeError('Variable "mediaFolder" does not exist.', 1, $this->source); })()), "rel", [], "any", false, false, false, 1), "html", null, true);
        echo "\">
    <a href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanMediaBundle_chooser_show_folder", twig_array_merge((isset($context["urlParams"]) || array_key_exists("urlParams", $context) ? $context["urlParams"] : (function () { throw new RuntimeError('Variable "urlParams" does not exist.', 2, $this->source); })()), ["folderId" => twig_get_attribute($this->env, $this->source, (isset($context["mediaFolder"]) || array_key_exists("mediaFolder", $context) ? $context["mediaFolder"] : (function () { throw new RuntimeError('Variable "mediaFolder" does not exist.', 2, $this->source); })()), "id", [], "any", false, false, false, 2)])), "html", null, true);
        echo "\" class=\"";
        if (( !(null === (isset($context["folder"]) || array_key_exists("folder", $context) ? $context["folder"] : (function () { throw new RuntimeError('Variable "folder" does not exist.', 2, $this->source); })())) && (twig_get_attribute($this->env, $this->source, (isset($context["folder"]) || array_key_exists("folder", $context) ? $context["folder"] : (function () { throw new RuntimeError('Variable "folder" does not exist.', 2, $this->source); })()), "id", [], "any", false, false, false, 2) == twig_get_attribute($this->env, $this->source, (isset($context["mediaFolder"]) || array_key_exists("mediaFolder", $context) ? $context["mediaFolder"] : (function () { throw new RuntimeError('Variable "mediaFolder" does not exist.', 2, $this->source); })()), "id", [], "any", false, false, false, 2)))) {
            echo "active";
        }
        echo "\">
        ";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mediaFolder"]) || array_key_exists("mediaFolder", $context) ? $context["mediaFolder"] : (function () { throw new RuntimeError('Variable "mediaFolder" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        echo "
    </a>
    ";
        // line 5
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["mediaFolder"]) || array_key_exists("mediaFolder", $context) ? $context["mediaFolder"] : (function () { throw new RuntimeError('Variable "mediaFolder" does not exist.', 5, $this->source); })()), "__children", [], "any", false, false, false, 5))) {
            // line 6
            echo "        <ul>
            ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["mediaFolder"], "__children", [], "any", false, false, false, 7));
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
            foreach ($context['_seq'] as $context["_key"] => $context["mediaFolder"]) {
                // line 8
                echo "                ";
                $this->loadTemplate("@KunstmaanMedia/Chooser/chooserShowRecTreeView.html.twig", "@KunstmaanMedia/Chooser/chooserShowRecTreeView.html.twig", 8)->display($context);
                // line 9
                echo "            ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mediaFolder'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "        </ul>
    ";
        }
        // line 12
        echo "</li>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanMedia/Chooser/chooserShowRecTreeView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 12,  106 => 10,  92 => 9,  89 => 8,  72 => 7,  69 => 6,  67 => 5,  62 => 3,  54 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<li class=\"{% if mediaFolder.id in parentIds %}jstree-open{% endif %}\" data-jstree='{\"type\":\"{{ mediaFolder.rel }}\"}' rel=\"{{ mediaFolder.rel }}\">
    <a href=\"{{ path('KunstmaanMediaBundle_chooser_show_folder', urlParams|merge({ 'folderId': mediaFolder.id })) }}\" class=\"{% if folder is not null and folder.id == mediaFolder.id %}active{% endif %}\">
        {{ mediaFolder.name }}
    </a>
    {% if mediaFolder.__children is not empty %}
        <ul>
            {% for mediaFolder in mediaFolder.__children %}
                {% include '@KunstmaanMedia/Chooser/chooserShowRecTreeView.html.twig' %}
            {% endfor %}
        </ul>
    {% endif %}
</li>
", "@KunstmaanMedia/Chooser/chooserShowRecTreeView.html.twig", "/Users/macbook/Documents/quoc/blog-admin/vendor/kunstmaan/media-bundle/Resources/views/Chooser/chooserShowRecTreeView.html.twig");
    }
}
