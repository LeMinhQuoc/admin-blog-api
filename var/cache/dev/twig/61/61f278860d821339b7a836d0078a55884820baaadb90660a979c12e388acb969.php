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

/* @KunstmaanPagePart/PagePartAdminTwigExtension/pagepart.html.twig */
class __TwigTemplate_1111a06b4c47c69f328b36ae5ca7ae64e8d530ce33636be8c0126da194cd8acb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanPagePart/PagePartAdminTwigExtension/pagepart.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanPagePart/PagePartAdminTwigExtension/pagepart.html.twig"));

        // line 1
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), [0 => "@KunstmaanAdmin/Form/fields.html.twig"], true);
        // line 2
        $context["context"] = twig_get_attribute($this->env, $this->source, (isset($context["pagepartadmin"]) || array_key_exists("pagepartadmin", $context) ? $context["pagepartadmin"] : (function () { throw new RuntimeError('Variable "pagepartadmin" does not exist.', 2, $this->source); })()), "context", [], "any", false, false, false, 2);
        // line 3
        echo "
<!-- Hidden Field - Deleted -->
<input type=\"checkbox\" class=\"deletefield hidden\" id=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "-is-deleted\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "_deleted\" value=\"true\">


<!-- Draggable Item -->
<div class=\"js-sortable-item sortable-item\" id=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "-pp-container\" data-scope=\"";
        echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, (isset($context["pagepartadmin"]) || array_key_exists("pagepartadmin", $context) ? $context["pagepartadmin"] : (function () { throw new RuntimeError('Variable "pagepartadmin" does not exist.', 9, $this->source); })()), "getClassName", [0 => (isset($context["pagepart"]) || array_key_exists("pagepart", $context) ? $context["pagepart"] : (function () { throw new RuntimeError('Variable "pagepart" does not exist.', 9, $this->source); })())], "method", false, false, false, 9), ["\\" => ""]), "html", null, true);
        echo "\">

    <!-- Hidden fields - New, Type and Context -->
    ";
        // line 12
        if ((twig_get_attribute($this->env, $this->source, (isset($context["pagepart"]) || array_key_exists("pagepart", $context) ? $context["pagepart"] : (function () { throw new RuntimeError('Variable "pagepart" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12) == 0)) {
            // line 13
            echo "        <input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["context"]) || array_key_exists("context", $context) ? $context["context"] : (function () { throw new RuntimeError('Variable "context" does not exist.', 13, $this->source); })()), "html", null, true);
            echo "_new[]\" data-suffix=\"_new[]\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 13, $this->source); })()), "html", null, true);
            echo "\" class=\"pagepartadmin_field_updatecontextname\">
        <input type=\"hidden\" name=\"";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["context"]) || array_key_exists("context", $context) ? $context["context"] : (function () { throw new RuntimeError('Variable "context" does not exist.', 14, $this->source); })()), "html", null, true);
            echo "_type_";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 14, $this->source); })()), "html", null, true);
            echo "\" data-suffix=\"_type_";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 14, $this->source); })()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pagepartadmin"]) || array_key_exists("pagepartadmin", $context) ? $context["pagepartadmin"] : (function () { throw new RuntimeError('Variable "pagepartadmin" does not exist.', 14, $this->source); })()), "getClassName", [0 => (isset($context["pagepart"]) || array_key_exists("pagepart", $context) ? $context["pagepart"] : (function () { throw new RuntimeError('Variable "pagepart" does not exist.', 14, $this->source); })())], "method", false, false, false, 14), "html", null, true);
            echo "\" class=\"pagepartadmin_field_updatecontextname\">
    ";
        }
        // line 16
        echo "    <input type=\"hidden\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["context"]) || array_key_exists("context", $context) ? $context["context"] : (function () { throw new RuntimeError('Variable "context" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "_sequence[]\" data-suffix=\"_sequence[]\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "\" class=\"pagepartadmin_field_updatecontextname\">


    <!-- PP -->
    ";
        // line 20
        if ($this->extensions['Kunstmaan\AdminBundle\Twig\FormToolsExtension']->hasErrorMessages(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), ("pagepartadmin_" . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 20, $this->source); })())), [], "array", false, false, false, 20))) {
            // line 21
            echo "        ";
            $context["editmode"] = true;
            // line 22
            echo "    ";
        }
        // line 23
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), ("pagepartadmin_" . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 23, $this->source); })())), [], "array", false, false, false, 23), "count", [], "any", false, false, false, 23)) {
            // line 24
            echo "        ";
            $context["editable"] = true;
            // line 25
            echo "    ";
        } else {
            // line 26
            echo "        ";
            $context["editable"] = false;
            // line 27
            echo "    ";
        }
        // line 28
        echo "
    <section id=\"pp-";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 29, $this->source); })()), "html", null, true);
        echo "\" class=\"pp\">
        <!-- PP - Header -->
        <header class=\"js-sortable-item__handle pp__header ";
        // line 31
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), ("pagepartadmin_" . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 31, $this->source); })())), [], "array", false, false, false, 31), "count", [], "any", false, false, false, 31)) {
            echo "pp__header--no-edit";
        }
        echo "\">
            <i class=\"fa fa-arrows pp__header__move-icon\"></i>
            <h5 class=\"pp__header__head\">
                ";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["pagepartadmin"]) || array_key_exists("pagepartadmin", $context) ? $context["pagepartadmin"] : (function () { throw new RuntimeError('Variable "pagepartadmin" does not exist.', 34, $this->source); })()), "getType", [0 => (isset($context["pagepart"]) || array_key_exists("pagepart", $context) ? $context["pagepart"] : (function () { throw new RuntimeError('Variable "pagepart" does not exist.', 34, $this->source); })())], "method", false, false, false, 34)), "html", null, true);
        echo "
            </h5>
        </header>

        <!-- PP - actions -->
        <div class=\"pp__actions\">
            <button type=\"button\" class=\"btn--raise-on-hover pp__actions__action pp__actions__action--del\" data-keyboard=\"true\" data-toggle=\"modal\" title=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pagepart.buttons.delete"), "html", null, true);
        echo "\" data-target=\"#delete-pagepart-modal-";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 40, $this->source); })()), "html", null, true);
        echo "\">
                <i class=\"fa fa-trash\"></i>
            </button>
            ";
        // line 43
        if ((isset($context["editable"]) || array_key_exists("editable", $context) ? $context["editable"] : (function () { throw new RuntimeError('Variable "editable" does not exist.', 43, $this->source); })())) {
            // line 44
            echo "                <button type=\"button\" class=\"js-edit-pp-btn btn--raise-on-hover pp__actions__action pp__actions__action--edit\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pagepart.buttons.edit"), "html", null, true);
            echo "\" data-target-id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 44, $this->source); })()), "html", null, true);
            echo "\">
                    <i class=\"fa fa-edit\"></i>
                </button>
            ";
        }
        // line 48
        echo "            <button type=\"button\" class=\"js-move-up-pp-btn btn--raise-on-hover pp__actions__action pp__actions__action--up\" title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pagepart.buttons.move_up"), "html", null, true);
        echo "\" data-target-id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 48, $this->source); })()), "html", null, true);
        echo "\">
                <i class=\"fa fa-chevron-up\"></i>
            </button>
            <button type=\"button\" class=\"js-move-down-pp-btn btn--raise-on-hover pp__actions__action pp__actions__action--down\" title=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pagepart.buttons.move_down"), "html", null, true);
        echo "\" data-target-id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 51, $this->source); })()), "html", null, true);
        echo "\">
                <i class=\"fa fa-chevron-down\"></i>
            </button>
            <button type=\"button\" class=\"js-resize-pp-view-btn btn--raise-on-hover pp__actions__action pp__actions__action--resize\" data-keyboard=\"true\" data-toggle=\"modal\" title=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pagepart.buttons.resize"), "html", null, true);
        echo "\" data-target-id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 54, $this->source); })()), "html", null, true);
        echo "\">
                <i class=\"fa fa-minus\"></i>
            </button>
        </div>

        <div class=\"pp__view clearfix\">
            <!-- PP - View - Preview -->
            <div id=\"";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 61, $this->source); })()), "html", null, true);
        echo "-preview-view\" class=\"pp__view__block";
        if ((isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 61, $this->source); })())) {
            echo " pp__view__block--hidden";
        }
        echo "\">
                ";
        // line 62
        $this->loadTemplate(twig_get_attribute($this->env, $this->source, (isset($context["pagepart"]) || array_key_exists("pagepart", $context) ? $context["pagepart"] : (function () { throw new RuntimeError('Variable "pagepart" does not exist.', 62, $this->source); })()), "adminview", [], "any", false, false, false, 62), "@KunstmaanPagePart/PagePartAdminTwigExtension/pagepart.html.twig", 62)->display(twig_array_merge($context, ["resource" => (isset($context["pagepart"]) || array_key_exists("pagepart", $context) ? $context["pagepart"] : (function () { throw new RuntimeError('Variable "pagepart" does not exist.', 62, $this->source); })()), "pagepartadmin" => (isset($context["pagepartadmin"]) || array_key_exists("pagepartadmin", $context) ? $context["pagepartadmin"] : (function () { throw new RuntimeError('Variable "pagepartadmin" does not exist.', 62, $this->source); })())]));
        // line 63
        echo "            </div>

            <!-- PP - View - Edit -->
            <div id=\"";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 66, $this->source); })()), "html", null, true);
        echo "-edit-view\" class=\"pp__view__block";
        if ( !(isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 66, $this->source); })())) {
            echo " pp__view__block--hidden";
        }
        echo "\">
                ";
        // line 67
        $context["pagepartid"] = ("pagepart" . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 67, $this->source); })()));
        // line 68
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, ($context["pagepart"] ?? null), "editTemplate", [], "any", true, true, false, 68)) {
            // line 69
            echo "                    ";
            $this->loadTemplate(twig_get_attribute($this->env, $this->source, (isset($context["pagepart"]) || array_key_exists("pagepart", $context) ? $context["pagepart"] : (function () { throw new RuntimeError('Variable "pagepart" does not exist.', 69, $this->source); })()), "editTemplate", [], "any", false, false, false, 69), "@KunstmaanPagePart/PagePartAdminTwigExtension/pagepart.html.twig", 69)->display(twig_array_merge($context, ["resource" => (isset($context["pagepart"]) || array_key_exists("pagepart", $context) ? $context["pagepart"] : (function () { throw new RuntimeError('Variable "pagepart" does not exist.', 69, $this->source); })()), "pagepartid" => (isset($context["pagepartid"]) || array_key_exists("pagepartid", $context) ? $context["pagepartid"] : (function () { throw new RuntimeError('Variable "pagepartid" does not exist.', 69, $this->source); })()), "form" => twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), ("pagepartadmin_" . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 69, $this->source); })())), [], "array", false, false, false, 69)]));
            // line 70
            echo "                ";
        } else {
            // line 71
            echo "                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), ("pagepartadmin_" . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 71, $this->source); })())), [], "array", false, false, false, 71), 'widget');
            echo "
                ";
        }
        // line 73
        echo "            </div>
        </div>
    </section>


    ";
        // line 78
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pagepartadmin"]) || array_key_exists("pagepartadmin", $context) ? $context["pagepartadmin"] : (function () { throw new RuntimeError('Variable "pagepartadmin" does not exist.', 78, $this->source); })()), "possiblePagePartTypes", [], "any", false, false, false, 78)) > 0)) {
            // line 79
            echo "        <!-- New PP select -->
        ";
            // line 80
            $this->loadTemplate("@KunstmaanPagePart/PagePartAdminTwigExtension/add_pagepart.html.twig", "@KunstmaanPagePart/PagePartAdminTwigExtension/pagepart.html.twig", 80)->display($context);
            // line 81
            echo "    ";
        }
        // line 82
        echo "

    <!-- PP - Del modal -->
    <div id=\"delete-pagepart-modal-";
        // line 85
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 85, $this->source); })()), "html", null, true);
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
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_pagepart.modal.delete.title.%type%", ["%type%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["pagepartadmin"]) || array_key_exists("pagepartadmin", $context) ? $context["pagepartadmin"] : (function () { throw new RuntimeError('Variable "pagepartadmin" does not exist.', 95, $this->source); })()), "getType", [0 => (isset($context["pagepart"]) || array_key_exists("pagepart", $context) ? $context["pagepart"] : (function () { throw new RuntimeError('Variable "pagepart" does not exist.', 95, $this->source); })())], "method", false, false, false, 95))]), "html", null, true);
        echo "
                    </h3>
                </div>

                <!-- Body -->
                <div class=\"modal-body\">
                    <p>
                        ";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_pagepart.modal.delete.text.%type%", ["%type%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["pagepartadmin"]) || array_key_exists("pagepartadmin", $context) ? $context["pagepartadmin"] : (function () { throw new RuntimeError('Variable "pagepartadmin" does not exist.', 102, $this->source); })()), "getType", [0 => (isset($context["pagepart"]) || array_key_exists("pagepart", $context) ? $context["pagepart"] : (function () { throw new RuntimeError('Variable "pagepart" does not exist.', 102, $this->source); })())], "method", false, false, false, 102))]), "html", null, true);
        echo "
                    </p>
                </div>

                <!-- Footer -->
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"js-delete-pp-btn btn btn-danger btn--raise-on-hover\" data-target-id=\"";
        // line 108
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 108, $this->source); })()), "html", null, true);
        echo "\">
                        ";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_pagepart.modal.delete.button.delete"), "html", null, true);
        echo "
                    </button>
                    <button type=\"button\" class=\"btn btn-default btn--raise-on-hover\" data-dismiss=\"modal\">
                        ";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_pagepart.modal.delete.button.cancel"), "html", null, true);
        echo "
                    </button>
                </div>
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
        return "@KunstmaanPagePart/PagePartAdminTwigExtension/pagepart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 112,  293 => 109,  289 => 108,  280 => 102,  270 => 95,  257 => 85,  252 => 82,  249 => 81,  247 => 80,  244 => 79,  242 => 78,  235 => 73,  229 => 71,  226 => 70,  223 => 69,  220 => 68,  218 => 67,  210 => 66,  205 => 63,  203 => 62,  195 => 61,  183 => 54,  175 => 51,  166 => 48,  156 => 44,  154 => 43,  146 => 40,  137 => 34,  129 => 31,  124 => 29,  121 => 28,  118 => 27,  115 => 26,  112 => 25,  109 => 24,  106 => 23,  103 => 22,  100 => 21,  98 => 20,  88 => 16,  77 => 14,  70 => 13,  68 => 12,  60 => 9,  51 => 5,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% form_theme form '@KunstmaanAdmin/Form/fields.html.twig' %}
{% set context = pagepartadmin.context %}

<!-- Hidden Field - Deleted -->
<input type=\"checkbox\" class=\"deletefield hidden\" id=\"{{ id }}-is-deleted\" name=\"{{ id }}_deleted\" value=\"true\">


<!-- Draggable Item -->
<div class=\"js-sortable-item sortable-item\" id=\"{{ id }}-pp-container\" data-scope=\"{{ pagepartadmin.getClassName(pagepart)|replace({'\\\\':\"\"}) }}\">

    <!-- Hidden fields - New, Type and Context -->
    {% if pagepart.id == 0 %}
        <input type=\"hidden\" name=\"{{ context }}_new[]\" data-suffix=\"_new[]\" value=\"{{ id }}\" class=\"pagepartadmin_field_updatecontextname\">
        <input type=\"hidden\" name=\"{{ context }}_type_{{ id }}\" data-suffix=\"_type_{{ id }}\" value=\"{{ pagepartadmin.getClassName(pagepart) }}\" class=\"pagepartadmin_field_updatecontextname\">
    {% endif %}
    <input type=\"hidden\" name=\"{{ context }}_sequence[]\" data-suffix=\"_sequence[]\" value=\"{{ id }}\" class=\"pagepartadmin_field_updatecontextname\">


    <!-- PP -->
    {% if form_has_errors_recursive(form['pagepartadmin_'~id]) %}
        {% set editmode = true %}
    {% endif %}
    {% if form['pagepartadmin_'~id].count %}
        {% set editable = true %}
    {% else %}
        {% set editable = false %}
    {% endif %}

    <section id=\"pp-{{ id }}\" class=\"pp\">
        <!-- PP - Header -->
        <header class=\"js-sortable-item__handle pp__header {% if not form['pagepartadmin_'~id].count %}pp__header--no-edit{% endif %}\">
            <i class=\"fa fa-arrows pp__header__move-icon\"></i>
            <h5 class=\"pp__header__head\">
                {{ pagepartadmin.getType(pagepart)|trans }}
            </h5>
        </header>

        <!-- PP - actions -->
        <div class=\"pp__actions\">
            <button type=\"button\" class=\"btn--raise-on-hover pp__actions__action pp__actions__action--del\" data-keyboard=\"true\" data-toggle=\"modal\" title=\"{{ 'pagepart.buttons.delete'|trans }}\" data-target=\"#delete-pagepart-modal-{{ id }}\">
                <i class=\"fa fa-trash\"></i>
            </button>
            {% if editable %}
                <button type=\"button\" class=\"js-edit-pp-btn btn--raise-on-hover pp__actions__action pp__actions__action--edit\" title=\"{{ 'pagepart.buttons.edit'|trans }}\" data-target-id=\"{{ id }}\">
                    <i class=\"fa fa-edit\"></i>
                </button>
            {% endif %}
            <button type=\"button\" class=\"js-move-up-pp-btn btn--raise-on-hover pp__actions__action pp__actions__action--up\" title=\"{{ 'pagepart.buttons.move_up'|trans }}\" data-target-id=\"{{ id }}\">
                <i class=\"fa fa-chevron-up\"></i>
            </button>
            <button type=\"button\" class=\"js-move-down-pp-btn btn--raise-on-hover pp__actions__action pp__actions__action--down\" title=\"{{ 'pagepart.buttons.move_down'|trans }}\" data-target-id=\"{{ id }}\">
                <i class=\"fa fa-chevron-down\"></i>
            </button>
            <button type=\"button\" class=\"js-resize-pp-view-btn btn--raise-on-hover pp__actions__action pp__actions__action--resize\" data-keyboard=\"true\" data-toggle=\"modal\" title=\"{{ 'pagepart.buttons.resize'|trans }}\" data-target-id=\"{{ id }}\">
                <i class=\"fa fa-minus\"></i>
            </button>
        </div>

        <div class=\"pp__view clearfix\">
            <!-- PP - View - Preview -->
            <div id=\"{{ id }}-preview-view\" class=\"pp__view__block{% if editmode %} pp__view__block--hidden{% endif %}\">
                {% include pagepart.adminview with {'resource': pagepart, 'pagepartadmin': pagepartadmin} %}
            </div>

            <!-- PP - View - Edit -->
            <div id=\"{{ id }}-edit-view\" class=\"pp__view__block{% if not editmode %} pp__view__block--hidden{% endif %}\">
                {% set pagepartid = 'pagepart'~id %}
                {% if pagepart.editTemplate is defined %}
                    {% include pagepart.editTemplate with {'resource': pagepart, 'pagepartid': pagepartid, 'form': form['pagepartadmin_'~id]} %}
                {% else %}
                    {{ form_widget(form['pagepartadmin_'~id]) }}
                {% endif %}
            </div>
        </div>
    </section>


    {% if pagepartadmin.possiblePagePartTypes | length > 0 %}
        <!-- New PP select -->
        {% include '@KunstmaanPagePart/PagePartAdminTwigExtension/add_pagepart.html.twig' %}
    {% endif %}


    <!-- PP - Del modal -->
    <div id=\"delete-pagepart-modal-{{ id }}\" class=\"modal fade\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">

                <!-- Head -->
                <div class=\"modal-header\">
                    <button class=\"close\" data-dismiss=\"modal\">
                        <i class=\"fa fa-times\"></i>
                    </button>
                    <h3>
                        {{ 'kuma_pagepart.modal.delete.title.%type%'|trans({'%type%': (pagepartadmin.getType(pagepart)) | trans }) }}
                    </h3>
                </div>

                <!-- Body -->
                <div class=\"modal-body\">
                    <p>
                        {{ 'kuma_pagepart.modal.delete.text.%type%'|trans({'%type%': (pagepartadmin.getType(pagepart)) | trans }) }}
                    </p>
                </div>

                <!-- Footer -->
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"js-delete-pp-btn btn btn-danger btn--raise-on-hover\" data-target-id=\"{{ id }}\">
                        {{ 'kuma_pagepart.modal.delete.button.delete'|trans }}
                    </button>
                    <button type=\"button\" class=\"btn btn-default btn--raise-on-hover\" data-dismiss=\"modal\">
                        {{ 'kuma_pagepart.modal.delete.button.cancel'|trans }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
", "@KunstmaanPagePart/PagePartAdminTwigExtension/pagepart.html.twig", "/Users/macbook/Documents/quoc/blog-admin/vendor/kunstmaan/pagepart-bundle/Resources/views/PagePartAdminTwigExtension/pagepart.html.twig");
    }
}
