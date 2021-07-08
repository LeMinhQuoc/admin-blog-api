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

/* @KunstmaanUserManagement/AdminList/ItemAction/delete.html.twig */
class __TwigTemplate_32368b06d1a5ff56fbdaf44c6f6de1ca329311d8836ca84c3ea286049755f84e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanUserManagement/AdminList/ItemAction/delete.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanUserManagement/AdminList/ItemAction/delete.html.twig"));

        // line 1
        echo "<a data-toggle=\"modal\" href=\"#\" data-target=\"#delete-user-modal-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 1, $this->source); })()), "id", [], "any", false, false, false, 1), "html", null, true);
        echo "\" class=\"link--text table__actions__item\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 1, $this->source); })()), "getLabelFor", [0 => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 1, $this->source); })())], "method", false, false, false, 1), "html", null, true);
        echo "\">
    ";
        // line 2
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 2, $this->source); })()), "getIconFor", [0 => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 2, $this->source); })())], "method", false, false, false, 2))) {
            // line 3
            echo "        <i class=\"fa fa-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 3, $this->source); })()), "getIconFor", [0 => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 3, $this->source); })())], "method", false, false, false, 3), "html", null, true);
            echo "\"></i>
    ";
        } else {
            // line 5
            echo "        ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 5, $this->source); })()), "getLabelFor", [0 => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 5, $this->source); })())], "method", false, false, false, 5)), "html", null, true);
            echo "
    ";
        }
        // line 7
        echo "</a>

<div id=\"delete-user-modal-";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9), "html", null, true);
        echo "\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">

            <!-- Head -->
            <div class=\"modal-header\">
                <button class=\"close\" data-dismiss=\"modal\">
                    <i class=\"fa fa-times\"></i>
                </button>
                <h3>";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.user.delete"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 18, $this->source); })()), "username", [], "any", false, false, false, 18), "html", null, true);
        echo "</h3>
            </div>

            <!-- Body -->
            <div class=\"modal-body\">
                <p>";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.user.delete_body"), "html", null, true);
        echo "</p>
            </div>

            <!-- Footer -->
            <div class=\"modal-footer\">
                <form action=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("KunstmaanUserManagementBundle_settings_users_form_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 28, $this->source); })()), "id", [], "any", false, false, false, 28)]), "html", null, true);
        echo "\" method=\"post\">
                    <input type=\"hidden\" name=\"token\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete-user"), "html", null, true);
        echo "\"/>
                    <button type=\"submit\" name=\"submit\" class=\"btn btn-danger btn--raise-on-hover\">
                        ";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_node.modal.delete_page.button.delete"), "html", null, true);
        echo "
                    </button>
                    <button class=\"btn btn-default btn--raise-on-hover\" data-dismiss=\"modal\">
                        ";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_node.modal.delete_page.button.cancel"), "html", null, true);
        echo "
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanUserManagement/AdminList/ItemAction/delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 34,  107 => 31,  102 => 29,  98 => 28,  90 => 23,  80 => 18,  68 => 9,  64 => 7,  58 => 5,  52 => 3,  50 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<a data-toggle=\"modal\" href=\"#\" data-target=\"#delete-user-modal-{{ item.id }}\" class=\"link--text table__actions__item\" title=\"{{ action.getLabelFor(item) }}\">
    {% if action.getIconFor(item) is not null %}
        <i class=\"fa fa-{{ action.getIconFor(item) }}\"></i>
    {% else %}
        {{ action.getLabelFor(item)|trans }}
    {% endif %}
</a>

<div id=\"delete-user-modal-{{ item.id }}\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">

            <!-- Head -->
            <div class=\"modal-header\">
                <button class=\"close\" data-dismiss=\"modal\">
                    <i class=\"fa fa-times\"></i>
                </button>
                <h3>{{ 'settings.user.delete' | trans }}: {{ item.username }}</h3>
            </div>

            <!-- Body -->
            <div class=\"modal-body\">
                <p>{{ 'settings.user.delete_body'|trans }}</p>
            </div>

            <!-- Footer -->
            <div class=\"modal-footer\">
                <form action=\"{{ url('KunstmaanUserManagementBundle_settings_users_form_delete', { id: item.id }) }}\" method=\"post\">
                    <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('delete-user') }}\"/>
                    <button type=\"submit\" name=\"submit\" class=\"btn btn-danger btn--raise-on-hover\">
                        {{ 'kuma_node.modal.delete_page.button.delete'|trans() }}
                    </button>
                    <button class=\"btn btn-default btn--raise-on-hover\" data-dismiss=\"modal\">
                        {{ 'kuma_node.modal.delete_page.button.cancel'|trans() }}
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
", "@KunstmaanUserManagement/AdminList/ItemAction/delete.html.twig", "/Users/macbook/Documents/quoc/blog-admin/vendor/kunstmaan/user-management-bundle/Resources/views/AdminList/ItemAction/delete.html.twig");
    }
}
