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

/* @KunstmaanMedia/Folder/foldertreeview.html.twig */
class __TwigTemplate_4b00728aced0ab7d1df1d2e6ad40c9a1ad3391dac3c1b01102bae4429178006b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanMedia/Folder/foldertreeview.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanMedia/Folder/foldertreeview.html.twig"));

        // line 1
        echo "<li id=\"node-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mediaFolder"]) || array_key_exists("mediaFolder", $context) ? $context["mediaFolder"] : (function () { throw new RuntimeError('Variable "mediaFolder" does not exist.', 1, $this->source); })()), "id", [], "any", false, false, false, 1), "html", null, true);
        echo "\" class=\"";
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanMediaBundle_folder_show", ["folderId" => twig_get_attribute($this->env, $this->source, (isset($context["mediaFolder"]) || array_key_exists("mediaFolder", $context) ? $context["mediaFolder"] : (function () { throw new RuntimeError('Variable "mediaFolder" does not exist.', 2, $this->source); })()), "id", [], "any", false, false, false, 2)]), "html", null, true);
        echo "\" data-folder-id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mediaFolder"]) || array_key_exists("mediaFolder", $context) ? $context["mediaFolder"] : (function () { throw new RuntimeError('Variable "mediaFolder" does not exist.', 2, $this->source); })()), "id", [], "any", false, false, false, 2), "html", null, true);
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
        // line 6
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["mediaFolder"]) || array_key_exists("mediaFolder", $context) ? $context["mediaFolder"] : (function () { throw new RuntimeError('Variable "mediaFolder" does not exist.', 6, $this->source); })()), "__children", [], "any", false, false, false, 6))) {
            // line 7
            echo "        <ul>
            ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["mediaFolder"], "__children", [], "any", false, false, false, 8));
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
                // line 9
                echo "                ";
                $this->loadTemplate("@KunstmaanMedia/Folder/foldertreeview.html.twig", "@KunstmaanMedia/Folder/foldertreeview.html.twig", 9)->display($context);
                // line 10
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
            // line 11
            echo "        </ul>
    ";
        }
        // line 13
        echo "</li>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanMedia/Folder/foldertreeview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 13,  111 => 11,  97 => 10,  94 => 9,  77 => 8,  74 => 7,  72 => 6,  66 => 3,  56 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<li id=\"node-{{ mediaFolder.id }}\" class=\"{% if mediaFolder.id in parentIds %}jstree-open{% endif %}\" data-jstree='{\"type\":\"{{ mediaFolder.rel }}\"}' rel=\"{{ mediaFolder.rel }}\">
    <a href=\"{{ path('KunstmaanMediaBundle_folder_show', { 'folderId': mediaFolder.id }) }}\" data-folder-id=\"{{ mediaFolder.id }}\" class=\"{% if folder is not null and folder.id == mediaFolder.id %}active{% endif %}\">
        {{ mediaFolder.name }}
    </a>

    {% if mediaFolder.__children is not empty %}
        <ul>
            {% for mediaFolder in mediaFolder.__children %}
                {% include '@KunstmaanMedia/Folder/foldertreeview.html.twig' %}
            {% endfor %}
        </ul>
    {% endif %}
</li>
", "@KunstmaanMedia/Folder/foldertreeview.html.twig", "/Users/macbook/Documents/quoc/admin-blog-api-/vendor/kunstmaan/media-bundle/Resources/views/Folder/foldertreeview.html.twig");
    }
}
