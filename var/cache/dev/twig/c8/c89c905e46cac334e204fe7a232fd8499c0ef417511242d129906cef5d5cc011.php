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

/* @KunstmaanAdminList/AdminListTwigExtension/sure-modal.html.twig */
class __TwigTemplate_1b00f907ebc13b7a86a6e6fd68a7c4b3906e8e2625aa7c4022ab628d7869f1ef extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdminList/AdminListTwigExtension/sure-modal.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdminList/AdminListTwigExtension/sure-modal.html.twig"));

        // line 1
        if (twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 1, $this->source); })()), "getDeleteUrlFor", [0 => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 1, $this->source); })())], "method", false, false, false, 1)) {
            // line 2
            echo "<div id=\"sure-modal-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 2, $this->source); })()), "id", [], "any", false, false, false, 2), "html", null, true);
            echo "\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <!-- Head -->
            <div class=\"modal-header\">
                <button class=\"close\" data-dismiss=\"modal\">
                    <i class=\"fa fa-times\"></i>
                </button>
                <h3>
                    ";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.delete"), "html", null, true);
            echo "
                </h3>
            </div>
            <form action=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 14, $this->source); })()), "getDeleteUrlFor", [0 => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 14, $this->source); })())], "method", false, false, false, 14), "path", [], "array", false, false, false, 14), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 14, $this->source); })()), "getDeleteUrlFor", [0 => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 14, $this->source); })())], "method", false, false, false, 14), "params", [], "array", false, false, false, 14)), "html", null, true);
            echo "\" method=\"POST\">
                <!-- Body -->
                <div class=\"modal-body\">
                    ";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.deletesure"), "html", null, true);
            echo "
                </div>

                <!-- Footer -->
                <div class=\"modal-footer\">
                    <button type=\"submit\" name=\"delete\" class=\"btn btn-danger btn--raise-on-hover\">
                        ";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.delete"), "html", null, true);
            echo "
                    </button>
                    <button class=\"btn btn-default btn--raise-on-hover\" data-dismiss=\"modal\">
                        ";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.cancel"), "html", null, true);
            echo "
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanAdminList/AdminListTwigExtension/sure-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 26,  79 => 23,  70 => 17,  64 => 14,  58 => 11,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if adminlist.getDeleteUrlFor(item) %}
<div id=\"sure-modal-{{ item.id }}\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <!-- Head -->
            <div class=\"modal-header\">
                <button class=\"close\" data-dismiss=\"modal\">
                    <i class=\"fa fa-times\"></i>
                </button>
                <h3>
                    {{ 'form.delete' | trans }}
                </h3>
            </div>
            <form action=\"{{ path(adminlist.getDeleteUrlFor(item)[\"path\"], adminlist.getDeleteUrlFor(item)[(\"params\")] ) }}\" method=\"POST\">
                <!-- Body -->
                <div class=\"modal-body\">
                    {{ 'form.deletesure' | trans }}
                </div>

                <!-- Footer -->
                <div class=\"modal-footer\">
                    <button type=\"submit\" name=\"delete\" class=\"btn btn-danger btn--raise-on-hover\">
                        {{ 'form.delete' | trans }}
                    </button>
                    <button class=\"btn btn-default btn--raise-on-hover\" data-dismiss=\"modal\">
                        {{ 'form.cancel' | trans }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
{% endif %}
", "@KunstmaanAdminList/AdminListTwigExtension/sure-modal.html.twig", "/Users/macbook/Documents/quoc/admin-blog-api-/vendor/kunstmaan/adminlist-bundle/Resources/views/AdminListTwigExtension/sure-modal.html.twig");
    }
}
