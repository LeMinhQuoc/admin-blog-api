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

/* @KunstmaanAdmin/PermissionsAdminTwigExtension/widget.html.twig */
class __TwigTemplate_e02a11e5866f45848a124d434f19444c62ba59d26e038923194be87033568883 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdmin/PermissionsAdminTwigExtension/widget.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdmin/PermissionsAdminTwigExtension/widget.html.twig"));

        // line 1
        echo "<div class=\"form-properties\">
    ";
        // line 2
        if ((isset($context["recursiveSupport"]) || array_key_exists("recursiveSupport", $context) ? $context["recursiveSupport"] : (function () { throw new RuntimeError('Variable "recursiveSupport" does not exist.', 2, $this->source); })())) {
            // line 3
            echo "        <!-- Info container -->
        <div id=\"permission-changes-info-container\" class=\"alert alert-info hidden\">
            <h5>
                ";
            // line 6
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("permissions.you_made_changes");
            echo "
            </h5>
            <div class=\"checkbox\">
                <label>
                    <input type=\"checkbox\" id=\"apply-recursive\" name=\"applyRecursive\" value=\"1\">
                    ";
            // line 11
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("permissions.apply_recursively");
            echo "
                    (<a href=\"#permission-changes-modal\" data-toggle=\"modal\">
                        ";
            // line 13
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("permissions.review_changes");
            echo "
                    </a>)
                </label>
            </div>
        </div>

        <!-- Modal -->
        <div id=\"permission-changes-modal\" class=\"modal fade\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button class=\"close\" data-dismiss=\"modal\">
                            <i class=\"fa fa-times\"></i>
                        </button>
                        <h3>
                            ";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("permissions.changes"), "html", null, true);
            echo "
                        </h3>
                    </div>
                    <div class=\"modal-body\" id=\"permission-changes-modal__body\"></div>
                </div>
            </div>
        </div>
    ";
        }
        // line 36
        echo "
    <div id=\"permissions-container\" class=\"permissionscontainer\" data-recursive=\"";
        // line 37
        if ((isset($context["recursiveSupport"]) || array_key_exists("recursiveSupport", $context) ? $context["recursiveSupport"] : (function () { throw new RuntimeError('Variable "recursiveSupport" does not exist.', 37, $this->source); })())) {
            echo "true";
        } else {
            echo "false";
        }
        echo "\" data-trans-perms-added='";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("permissions.permissions_added");
        echo "' data-trans-perms-removed='";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("permissions.permissions_removed");
        echo "'>
        <div id=\"permission-hidden-fields\"></div>

        ";
        // line 40
        ob_start();
        // line 41
        echo "        <table class=\"table table-bordered table-striped\">
            <thead>
               <tr>
                   <th>";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("permissions.role_name"), "html", null, true);
        echo "</th>
                    ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["permissionadmin"]) || array_key_exists("permissionadmin", $context) ? $context["permissionadmin"] : (function () { throw new RuntimeError('Variable "permissionadmin" does not exist.', 45, $this->source); })()), "getPossiblePermissions", [], "method", false, false, false, 45));
        foreach ($context['_seq'] as $context["_key"] => $context["permissionName"]) {
            // line 46
            echo "                        <th>";
            echo twig_escape_filter($this->env, $context["permissionName"], "html", null, true);
            echo "</th>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permissionName'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "               </tr>
            </thead>
            <tbody>
                ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["permissionadmin"]) || array_key_exists("permissionadmin", $context) ? $context["permissionadmin"] : (function () { throw new RuntimeError('Variable "permissionadmin" does not exist.', 51, $this->source); })()), "getManageableRolesForPages", [], "method", false, false, false, 51));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 52
            echo "                    <tr>
                        <td>
                            ";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "getRole", [], "method", false, false, false, 54), "html", null, true);
            echo "
                        </td>
                        ";
            // line 56
            $context["permission"] = twig_get_attribute($this->env, $this->source, (isset($context["permissionadmin"]) || array_key_exists("permissionadmin", $context) ? $context["permissionadmin"] : (function () { throw new RuntimeError('Variable "permissionadmin" does not exist.', 56, $this->source); })()), "getPermission", [0 => $context["role"]], "method", false, false, false, 56);
            // line 57
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["permissionadmin"]) || array_key_exists("permissionadmin", $context) ? $context["permissionadmin"] : (function () { throw new RuntimeError('Variable "permissionadmin" does not exist.', 57, $this->source); })()), "getPossiblePermissions", [], "method", false, false, false, 57));
            foreach ($context['_seq'] as $context["_key"] => $context["permissionName"]) {
                // line 58
                echo "                        <td>
                            <input type=\"checkbox\" name=\"permissions[";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "getRole", [], "method", false, false, false, 59), "html", null, true);
                echo "][";
                echo twig_escape_filter($this->env, $context["permissionName"], "html", null, true);
                echo "]\" ";
                if (( !(null === (isset($context["permission"]) || array_key_exists("permission", $context) ? $context["permission"] : (function () { throw new RuntimeError('Variable "permission" does not exist.', 59, $this->source); })())) && twig_get_attribute($this->env, $this->source, (isset($context["permission"]) || array_key_exists("permission", $context) ? $context["permission"] : (function () { throw new RuntimeError('Variable "permission" does not exist.', 59, $this->source); })()), "has", [0 => $context["permissionName"]], "method", false, false, false, 59))) {
                    echo "checked=\"checked\"";
                }
                echo " class=\"js-permission-checkbox\" data-role=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "getRole", [], "method", false, false, false, 59), "html", null, true);
                echo "\" data-permission=\"";
                echo twig_escape_filter($this->env, $context["permissionName"], "html", null, true);
                echo "\" data-original-value=\"";
                if (( !(null === (isset($context["permission"]) || array_key_exists("permission", $context) ? $context["permission"] : (function () { throw new RuntimeError('Variable "permission" does not exist.', 59, $this->source); })())) && twig_get_attribute($this->env, $this->source, (isset($context["permission"]) || array_key_exists("permission", $context) ? $context["permission"] : (function () { throw new RuntimeError('Variable "permission" does not exist.', 59, $this->source); })()), "has", [0 => $context["permissionName"]], "method", false, false, false, 59))) {
                    echo "true";
                } else {
                    echo "false";
                }
                echo "\">
                        </td>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permissionName'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "            </tbody>
        </table>
        ";
        $___internal_ac498da6ecba86ea26d4e50535f0247fb14e4f8545058c0adb98d425fb2646c6_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 40
        echo twig_spaceless($___internal_ac498da6ecba86ea26d4e50535f0247fb14e4f8545058c0adb98d425fb2646c6_);
        // line 67
        echo "    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanAdmin/PermissionsAdminTwigExtension/widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 67,  201 => 40,  196 => 64,  189 => 62,  164 => 59,  161 => 58,  156 => 57,  154 => 56,  149 => 54,  145 => 52,  141 => 51,  136 => 48,  127 => 46,  123 => 45,  119 => 44,  114 => 41,  112 => 40,  98 => 37,  95 => 36,  84 => 28,  66 => 13,  61 => 11,  53 => 6,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"form-properties\">
    {% if recursiveSupport %}
        <!-- Info container -->
        <div id=\"permission-changes-info-container\" class=\"alert alert-info hidden\">
            <h5>
                {{ \"permissions.you_made_changes\"|trans|raw }}
            </h5>
            <div class=\"checkbox\">
                <label>
                    <input type=\"checkbox\" id=\"apply-recursive\" name=\"applyRecursive\" value=\"1\">
                    {{ \"permissions.apply_recursively\"|trans|raw }}
                    (<a href=\"#permission-changes-modal\" data-toggle=\"modal\">
                        {{ \"permissions.review_changes\"|trans|raw }}
                    </a>)
                </label>
            </div>
        </div>

        <!-- Modal -->
        <div id=\"permission-changes-modal\" class=\"modal fade\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button class=\"close\" data-dismiss=\"modal\">
                            <i class=\"fa fa-times\"></i>
                        </button>
                        <h3>
                            {{ \"permissions.changes\"|trans }}
                        </h3>
                    </div>
                    <div class=\"modal-body\" id=\"permission-changes-modal__body\"></div>
                </div>
            </div>
        </div>
    {% endif %}

    <div id=\"permissions-container\" class=\"permissionscontainer\" data-recursive=\"{% if recursiveSupport %}true{% else %}false{% endif %}\" data-trans-perms-added='{{ \"permissions.permissions_added\"|trans|raw }}' data-trans-perms-removed='{{ \"permissions.permissions_removed\"|trans|raw }}'>
        <div id=\"permission-hidden-fields\"></div>

        {% apply spaceless %}
        <table class=\"table table-bordered table-striped\">
            <thead>
               <tr>
                   <th>{{ \"permissions.role_name\"|trans }}</th>
                    {% for permissionName in permissionadmin.getPossiblePermissions() %}
                        <th>{{ permissionName }}</th>
                    {% endfor %}
               </tr>
            </thead>
            <tbody>
                {% for role in permissionadmin.getManageableRolesForPages() %}
                    <tr>
                        <td>
                            {{ role.getRole() }}
                        </td>
                        {% set permission = permissionadmin.getPermission(role) %}
                        {% for permissionName in permissionadmin.getPossiblePermissions() %}
                        <td>
                            <input type=\"checkbox\" name=\"permissions[{{ role.getRole() }}][{{ permissionName }}]\" {% if permission is not null and permission.has(permissionName) %}checked=\"checked\"{% endif %} class=\"js-permission-checkbox\" data-role=\"{{ role.getRole() }}\" data-permission=\"{{ permissionName }}\" data-original-value=\"{% if permission is not null and permission.has(permissionName) %}true{% else %}false{% endif %}\">
                        </td>
                        {% endfor %}
                    </tr>
                {% endfor %}
            </tbody>
        </table>
        {% endapply %}
    </div>
</div>
", "@KunstmaanAdmin/PermissionsAdminTwigExtension/widget.html.twig", "/Users/macbook/Documents/quoc/blog-admin/vendor/kunstmaan/admin-bundle/Resources/views/PermissionsAdminTwigExtension/widget.html.twig");
    }
}
