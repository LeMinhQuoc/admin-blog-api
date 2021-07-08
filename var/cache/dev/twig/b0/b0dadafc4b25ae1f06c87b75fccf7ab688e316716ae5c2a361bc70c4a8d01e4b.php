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

/* @KunstmaanMenu/AdminList/menu-item-online.html.twig */
class __TwigTemplate_a834b697e970adba3a0cd8313971b97e0a644b1372878d6187793e4d4636f3e0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanMenu/AdminList/menu-item-online.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanMenu/AdminList/menu-item-online.html.twig"));

        // line 1
        if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 1, $this->source); })()), "online", [], "any", false, false, false, 1)) {
            // line 2
            echo "    <i class=\"fa fa-check-square\"></i>
    <span class=\"text--muted\">
        ";
            // line 4
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_menu.menu_item.adminlist.online"), "html", null, true);
            echo "
    </span>
";
        } else {
            // line 7
            echo "    <i class=\"fa fa-square\"></i>
    <span class=\"text--muted\">
        ";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_menu.menu_item.adminlist.offline"), "html", null, true);
            echo "
    </span>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanMenu/AdminList/menu-item-online.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 9,  55 => 7,  49 => 4,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if item.online %}
    <i class=\"fa fa-check-square\"></i>
    <span class=\"text--muted\">
        {{ 'kuma_menu.menu_item.adminlist.online'|trans }}
    </span>
{% else %}
    <i class=\"fa fa-square\"></i>
    <span class=\"text--muted\">
        {{ 'kuma_menu.menu_item.adminlist.offline'|trans }}
    </span>
{% endif %}
", "@KunstmaanMenu/AdminList/menu-item-online.html.twig", "/Users/macbook/Documents/quoc/blog-admin/vendor/kunstmaan/menu-bundle/Resources/views/AdminList/menu-item-online.html.twig");
    }
}
